<?php

define('BOT_TOKEN', '1169634866:AAFHKMpj6DxbMytc3hVLKnxJyOwNXc6J6oM');
define('API_URL', 'https://api.telegram.org/bot'.BOT_TOKEN.'/');

function apiRequestWebhook($method, $parameters) {
  if (!is_string($method)) {
    error_log("Method name must be a string\n");
    return false;
  }

  if (!$parameters) {
    $parameters = array();
  } else if (!is_array($parameters)) {
    error_log("Parameters must be an array\n");
    return false;
  }

  $parameters["method"] = $method;

  header("Content-Type: application/json");
  echo json_encode($parameters);
  return true;
}

function exec_curl_request($handle) {
  $response = curl_exec($handle);

  if ($response === false) {
    $errno = curl_errno($handle);
    $error = curl_error($handle);
    error_log("Curl returned error $errno: $error\n");
    curl_close($handle);
    return false;
  }

  $http_code = intval(curl_getinfo($handle, CURLINFO_HTTP_CODE));
  curl_close($handle);

  if ($http_code >= 500) {
    // do not wat to DDOS server if something goes wrong
    sleep(10);
    return false;
  } else if ($http_code != 200) {
    $response = json_decode($response, true);
    error_log("Request has failed with error {$response['error_code']}: {$response['description']}\n");
    if ($http_code == 401) {
      throw new Exception('Invalid access token provided');
    }
    return false;
  } else {
    $response = json_decode($response, true);
    if (isset($response['description'])) {
      error_log("Request was successful: {$response['description']}\n");
    }
    $response = $response['result'];
  }

  return $response;
}

function apiRequest($method, $parameters) {
  if (!is_string($method)) {
    error_log("Method name must be a string\n");
    return false;
  }

  if (!$parameters) {
    $parameters = array();
  } else if (!is_array($parameters)) {
    error_log("Parameters must be an array\n");
    return false;
  }

  foreach ($parameters as $key => &$val) {
    // encoding to JSON array parameters, for example reply_markup
    if (!is_numeric($val) && !is_string($val)) {
      $val = json_encode($val);
    }
  }
  $url = API_URL.$method.'?'.http_build_query($parameters);

  $handle = curl_init($url);
  curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
  curl_setopt($handle, CURLOPT_TIMEOUT, 60);

  return exec_curl_request($handle);
}

function apiRequestJson($method, $parameters) {
  if (!is_string($method)) {
    error_log("Method name must be a string\n");
    return false;
  }

  if (!$parameters) {
    $parameters = array();
  } else if (!is_array($parameters)) {
    error_log("Parameters must be an array\n");
    return false;
  }

  $parameters["method"] = $method;

  $handle = curl_init(API_URL);
  curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
  curl_setopt($handle, CURLOPT_TIMEOUT, 60);
  curl_setopt($handle, CURLOPT_POST, true);
  curl_setopt($handle, CURLOPT_POSTFIELDS, json_encode($parameters));
  curl_setopt($handle, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));

  return exec_curl_request($handle);
}

function to_text($data) {
  $text = '';
  if(is_array($data)) {    
    foreach ($data as $key => $value) {
      if(is_array($value)) {
        foreach ($value as $key2 => $value2) {
          if(is_array($value2)) {
              
          } else {
            $text .= "`".str_replace("_", " ", $key).">".str_replace("_", " ", $key2)."`: ".$value2."\n";    
          }
        }
      } else {
        $text .= "`".str_replace("_", " ", $key)."`: ".$value."\n";  
      }
    }
    return $text;
  }
  return $data;
}

function search_lahan($chat_id, $field, $value) {
  $msg = [
    'chat_id' => $chat_id,
    'parse_mode' => 'Markdown',
    'text' => "`Command invalid!`"
  ];
  $menu = [
    '/kota' => '?kota_nama=',
    '/kec'  => '?kecamatan_nama=',
    '/prov' => '?provinsi_nama=',
    '/nama' => '?nama_lahan=',
    '/alamat' => '?alamat=',
    '/areal' => '?id_areal_fix_old='
  ];
  
  if(array_key_exists($field, $menu)) {
    $resp = file_get_contents('https://myassistrepo.com/api/lahan'.$menu[$field].$value);
    if($resp !== FALSE) {
      $data = json_decode($resp, true);
      if(empty($data)) {
        $msg['text'] = "Data not found.";
      } else {
        $fill_msg = [];
        $i=0;
        foreach ($data as $d) {
          $i++;
          if($i<5) {
            $tmp = [
              'callback_data' => 'lahan='.$d['lahan_id'],
              'text' => $d['nama_lahan']
            ];
            array_push($fill_msg, $tmp); 
          } else {
            break;
          }
        }
        $msg['text'] = "Result:\n";
        $msg['reply_markup'] = ['inline_keyboard' => [$fill_msg]];
      }
    } 
  } 
  return apiRequest("sendMessage", $msg);   
}

function search_sertifikat($chat_id, $field, $value) {
  $msg = [
    'chat_id' => $chat_id,
    'parse_mode' => 'Markdown',
    'text' => "`Command invalid!`"
  ];
  $menu = [
    '/no' => '?no_sertifikat=',
    '/lokasi' => '?lokasi_aset=',
    '/prov' => '?provinsi=',
    '/nama' => '?nama_lahan=',
    '/alamat' => '?alamat=',
    '/kota' => '?kodya=',
    '/kec' => '?kecamatan=',
    '/kel' => '?kelurahan=',
    '/areal' => '?id_areal='
  ];
  
  if(array_key_exists($field, $menu)) {
    $resp = file_get_contents('https://myassistrepo.com/api/sertifikat'.$menu[$field].$value);
    if($resp !== FALSE) {
      $data = json_decode($resp, true);
      if(empty($data)) {
        $msg['text'] = "Data not found.";
      } else {
        $fill_msg = [];
        $i=0;
        foreach ($data as $d) {
          $i++;
          if($i<5) {
            $tmp = [
              'callback_data' => 'sertifikat='.$d['sertifikat_id'],
              'text' => $d['no_sertifikat']
            ];
            array_push($fill_msg, $tmp); 
          } else {
            break;
          }
        }
        $msg['text'] = "Result:\n";
        $msg['reply_markup'] = ['inline_keyboard' => [$fill_msg]];
      }
    } 
  } 
  return apiRequest("sendMessage", $msg);   
}

function command_text($chat_id,$c_text) {
  $msg = [
    'chat_id' => $chat_id,
    'parse_mode' => 'Markdown',
    'text' => "`Command invalid!`"
  ];
  
  $perintah = explode(' ', $c_text);
  if(count($perintah) > 1) {
    $c_text = implode('/', $perintah);
    $resp = file_get_contents('https://myassistrepo.com/api'.$c_text);
    if($resp !== FALSE) {
      $data = json_decode($resp, true);
      if($perintah[0]=='/lahan' || $perintah[0]=='/sertifikat' || $perintah[0]=='/bangunan') {
        // $text = "lahan id: ".$data["lahan_id"]."\n";
        // $text .= "id_areal_fix_old: ".$data["id_areal_fix_old"]."\n";
        // $text .= "nama_lahan: ".$data["nama_lahan"]."\n";
        // $text .= "alamat: ".$data["alamat"]."\n";
        // $text .= "provinsi: ".$data["provinsi_nama"]."\n";
        // $text .= "kota: ".$data["kota_nama"]."\n";
        // $text .= "kecamatan: ".$data["kecamatan_nama"];
        $msg['text'] = to_text($data);
      }
    } 
  } 
  apiRequest("sendMessage", $msg);
}

function cari($chat_id, $keyword) {
  $msg = [
    'chat_id' => $chat_id, 
    'text' => '`pilih perintahnya`:',
    'reply_markup' => [
      'keyboard' => [
        ['/search_lahan /nama '.$keyword],
        ['/search_lahan /alamat '.$keyword],
        ['/search_lahan /kec '.$keyword],
        ['/search_lahan /areal '.$keyword],
        ['/search_sertifikat /no '.$keyword],
        ['/search_sertifikat /nama '.$keyword],
        ['/search_sertifikat /alamat '.$keyword],
        ['/search_sertifikat /kel '.$keyword],
        ['/search_sertifikat /kec '.$keyword]
      ],
      'one_time_keyboard' => true,
      'resize_keyboard' => true
    ]
  ];
  return apiRequestJson("sendMessage", $msg);
}

function processMessage($message) {
  // process incoming message
  $message_id = $message['message_id'];
  $chat_id = $message['chat']['id'];
  if (isset($message['text'])) {
    // incoming text message
    $text = $message['text'];
    $pecah = explode(' ', $text);
    if (strpos($text, "/start") === 0) {
      return apiRequestJson("sendMessage", array('chat_id' => $chat_id, "text" => 'Selamat Datang di MyAssist Bot.'));
    } else if ($pecah[0] == '/search_lahan') {
      if(isset($pecah[1]) && isset($pecah[2])) {
        return search_lahan($chat_id, $pecah[1], $pecah[2]);
      } else {
        $text = "Format: /search_lahan (option) (value)\nGunakan salah satu option:\n";
        $text .= "/kota\n/kec\n/prov\n/nama\n/alamat\n/areal\n";
        return apiRequest("sendMessage", array('chat_id' => $chat_id, 'text' => $text));
      }
    } else if ($pecah[0] == '/search_sertifikat') {
      if(isset($pecah[1]) && isset($pecah[2])) {
        return search_sertifikat($chat_id, $pecah[1], $pecah[2]);
      } else {
        $text = "Format: /search_sertifikat (option) (value)\nGunakan salah satu option:\n";
        $text .= "/no\n/lokasi\n/nama\n/alamat\n/kel\n/kec\n/kota\n/prov\n/areal\n";
        return apiRequest("sendMessage", array('chat_id' => $chat_id, 'text' => $text));
      }
    } else if ($pecah[0]==='/cari') {
        if(isset($pecah[1])) {
          return cari($chat_id, $pecah[1]);
        } else {
          return apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => "*keyword kosong.*"));          
        }
    } else {
      return command_text($chat_id, $text);
    }
    apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => "`Command invalid!`"));
  } else {
    apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => 'I understand only text messages'));
  }
}

function processCallback($message) {  
  $chat_id = $message['from']['id'];
  $msg = [
    'chat_id' => $chat_id,
    'parse_mode' => 'Markdown'
  ];

  if(isset($message['data'])) {
    $pecah = explode("=", $message['data']);
    $resp = file_get_contents('https://myassistrepo.com/api/'.$pecah[0].'?'.$pecah[0].'_id='.$pecah[1]);
    if( $resp !== FALSE ) {
      $data = json_decode($resp, true);
      $msg['text'] = to_text($data[0]);
    }
    apiRequest("sendMessage", $msg);  
  } 
}

// define('WEBHOOK_URL', 'https://my-site.example.com/secret-path-for-webhooks/');

// if (php_sapi_name() == 'cli') {
//   // if run from console, set or delete webhook
//   apiRequest('setWebhook', array('url' => isset($argv[1]) && $argv[1] == 'delete' ? '' : WEBHOOK_URL));
//   exit;
// }


$content = file_get_contents("php://input");
$update = json_decode($content, true);

if (!$update) {
  // receive wrong update, must not happen
  exit;
}

if (isset($update["message"])) {
  processMessage($update["message"]);
}

if (isset($update['callback_query'])) {
  processCallback($update['callback_query']);
}


