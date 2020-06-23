<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");

class Sertifikat extends ResourceController
{
  protected $modelName    = 'App\Models\Sertifikat_model';
  protected $format       = 'json';

  public function index()
  {
    $params_query = $this->request->getGet();      
    $sertifikat = $this->model->join('lahan', 'lahan.id_areal_fix_old=id_areal')->like($params_query)->get()->getResultArray();
    return $this->respond($sertifikat);
  }

  public function create()
  {
    $data = $this->request->getJSON(TRUE);    
    if(isset($data['scan_sertifikat'])) {
      $tmp = $data['scan_sertifikat'];
      $data['scan_sertifikat'] = '';
      if (! $this->model->save($data))
      {
        return $this->fail($this->model->errors());
      }
      $data['scan_sertifikat'] = $tmp;
      $data['id'] = $this->model->getInsertID();
    } else {
      return $this->fail('Please provide a file scan sertifikat');
    }

    $bin = base64_decode($data['scan_sertifikat'], true);

    // // sanitize the PDF contents
    if (strpos($bin, '%PDF') !== 0) {
      throw new Exception('Missing the PDF file signature');
    }


    $data['kelurahan'] = preg_replace('/\s+/', '_', $data['kelurahan']);      
    $data['scan_sertifikat'] = $data['no_sertifikat'].'_'.$data['kelurahan'].'_'.$data['id'].'.pdf';
        
    // Write the PDF contents to a local file
    file_put_contents('./sertifikat_file/'.$data['scan_sertifikat'], $bin);
    
    //store name file
    $this->model->update($data['id'], ['scan_sertifikat' => $data['scan_sertifikat']]);
    
    return $this->respondCreated($data);
  }

  public function show($id = NULL)
  {
    $record = $this->model->find($id);
    if (!$record)
    {
      return $this->failNotFound(sprintf(
        'Sertifikat dengan id %d tidak ditemukan',
        $id
      ));
    }

    return $this->respond($record);
  }

  public function delete($id = null)
  {
    $this->model->delete($id);
    if ($this->model->db->affectedRows() === 0)
    {
      return $this->failNotFound(sprintf(
        'Sertifikat dengan id %d tidak ditemukan',
        $id
      ));
    }

    return $this->respondDeleted(['sertifikat_id' => $id]);
  }

  public function update($id = null)
  {
    $data    = $this->request->getJSON();      
    $record  = $this->model->find($id);
    if(empty($record)) {
      return $this->failNotFound(sprintf(
        'Sertifikat dengan id %d tidak ditemukan',
        $id
      ));
    } 
    if($this->model->update($id, $data) === FALSE)
    {
      return $this->fail($this->model->errors());
    }
    $data->id = $id;
    return $this->respond($data);
  }
}