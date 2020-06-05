<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Bangunan extends ResourceController
{
  protected $modelName    = 'App\Models\Gedung_model';
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

    return $this->respondDeleted(['gedung_id' => $id]);
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