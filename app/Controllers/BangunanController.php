<?php
namespace App\Controllers;

use App\Models\Gedung_model;

class BangunanController extends BaseController
{
  public function __construct() 
	{
		$this->bangunan = new Gedung_model();
	}

  //api /sertifikat
  public function index($bangunan_id='')
  {
    $bangunan = [];        
    if($bangunan_id!='') {      
      $bangunan = $this->bangunan->where('gedung_id', $bangunan_id)->get()->getRowArray();      
    } else {
      $bangunan = $this->bangunan->get()->getResultArray();
    }
    return $this->response->setJSON($bangunan);  
  }

  public function api_create()
  {
    $req = $this->request->getJSON();
    if(!empty($req)) {
      if($this->bangunan->insert($req) === FALSE) {  
        $res = [
          'status'  => 'ERROR',
          'message'   => 'Fail insert data',
          'data'    => $this->bangunan->errors()
        ];
        return $this->response->setJSON($res);
      } else {    
        $req->gedung_id = $this->bangunan->getInsertID();                  
        $res = [
          'status'  => 'OK',
          'message'   => 'Success insert data',
          'data'    => $req
        ];
        return $this->response->setJSON($res);
      }
    }
  }

  public function api_update($id)
  {
    $req = $this->request->getJSON();
    if(!empty($req)) {
      if($this->bangunan->update($id, $req) === FALSE) { 
        $res = [
          'status'  => 'ERROR',
          'message'   => 'Fail update data',
          'data'    => $this->bangunan->errors()
        ];
        return $this->response->setJSON($res);
      } else {
        $req->gedung_id = $id;                      
        $res = [
          'status'  => 'OK',
          'message'   => 'Success update data',
          'data'    => $req
        ];
        return $this->response->setJSON($res);
      }
    }
  }

  public function api_delete($id)
  {       
    if(!empty($id)) {
      $this->bangunan->where('gedung_id', $id)->delete();

      if ($this->bangunan->db->affectedRows()) {
        $res = [
        'status'  => 'OK',
        'message'   => 'Success delete data',
        'data'    => null
      ];
      return $this->response->setJSON($res);
      } else {
        $res = [
          'status'  => 'ERROR',
          'message'   => 'Fail delete data',
          'data'    => $this->bangunan->errors()
        ];
        return $this->response->setJSON($res);
      }
    }
  }

  //end section api

  // display form insert
  public function create()
	{
		$data=[
      'title' => 'Buat Bangunan Lahan',
      'isi' => 'pages/bangunanLahanCreate',
      'subheader' => 'Buat Bangunan Lahan'
		];
		echo view('index', $data);
	}

  // simpan new data ke db
  public function store()
  {
    $data = $this->request->getPost();
    
    if (!empty($data)) {
      if ($this->bangunan->insert($data) === FALSE) {
        return redirect()->to('/aset-bangunan/create')->with('msg', 'Fail to insert new data');
      } else {
        return redirect()->to('/aset-bangunan')->with('msg', 'Success to insert new data');
      }
    } else {
      return redirect()->to('/aset-bangunan')->with('msg', 'No data submitted');
    }
  }

  // display edit form
  public function edit($id)
  {
    $bangunan = $this->bangunan->where('gedung_id', $id)->get()->getRowArray();    
    if (isset($bangunan)) {
      $data = [
        'title' => 'Buat Bangunan Lahan',
        'isi' => 'pages/bangunanLahanEdit',
        'subheader' => 'Buat Bangunan Lahan',
        'bangunan'  => $bangunan
      ];
      echo view('index', $data);
    } else {
      return redirect()->to('/aset-bangunan');
    }
  }

  // // update bangunan ke db
  public function update($id)
  {
    $data = $this->request->getPost();

    if (!empty($data)) {
      if ($this->bangunan->update($data) === FALSE) {
        return redirect()->to('/aset-bangunan/edit')->with('msg', 'Fail to insert new data');
      } else {
        return redirect()->to('/aset-bangunan')->with('msg', 'Success to insert new data');
      }
    }
  }

  // //delete data bangunan di db
  public function delete($id)
  {
    $sql = $this->bangunan->where('gedung_id', $id)->delete();

    if ($this->bangunan->db->affectedRows()) {
      return redirect()->to('/aset-bangunan')->with('msg','Data is not exist');
    } else {
      return redirect()->to('/aset-bangunan')->with('msg','Success delete data');
    }
  }
}