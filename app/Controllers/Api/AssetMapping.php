<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");

class AssetMapping extends ResourceController
{
  protected $modelName    = 'App\Models\Asset_mapping_model';
  protected $format       = 'json';

  public function index()
  {
    return $this->respond($this->model->findAll());
  }

  public function create()
  {
    $data = $this->request->getJSON();
    if (! $this->model->save($data))
    {
        return $this->fail($this->model->errors());
    }
    $data->id = $this->model->getInsertID();
    return $this->respondCreated($data);
  }

  public function show($id = NULL)
  {
    $record = $this->model->find($id);
    if (!$record)
    {
      return $this->failNotFound(sprintf(
        'Bangunan dengan id %d tidak ditemukan',
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
        'Bangunan dengan id %d tidak ditemukan',
        $id
      ));
    }

    return $this->respondDeleted(['asset_mapping_id' => $id]);
  }

  public function update($id = null)
  {
    $data    = $this->request->getJSON();      
    $record  = $this->model->find($id);
    if(empty($record)) {
      return $this->failNotFound(sprintf(
        'Bangunan dengan id %d tidak ditemukan',
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