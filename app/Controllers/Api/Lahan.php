<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Sertifikat_model;
use App\Models\Gedung_model;

class Lahan extends ResourceController
{
  protected $modelName    = 'App\Models\Lahan_model';
  protected $format       = 'json';

  public function index()
  {        
    $lahan = $this->model->get()->getResultArray();
    
    return $this->respond($lahan);  
  }

  public function show($id_areal=NULL)
  {    
    $this->sertifikat = new Sertifikat_model();
    $this->bangunan = new Gedung_model();
    $lahan = $this->model->where('id_areal_fix_old', $id_areal)->get()->getRowArray();
    if(empty($lahan)) {        
      return $this->failNotFound('Lahan dengan id areal tidak ditemukan');      
    }
    $lahan['sertifikat'] = $this->sertifikat->where('id_areal', $id_areal)->get()->getResultArray();
    $lahan['bangunan']   = $this->bangunan->where('id_areal_fix_old', $id_areal)->get()->getResultArray();
    return $this->respond($lahan);
  }

  public function show_sertifikat($id_areal='')
  {    
    $this->sertifikat = new Sertifikat_model();
    $lahan = $this->sertifikat->where('id_areal', $id_areal)->get()->getResultArray();
    if(empty($lahan)) {
      return $this->failNotFound('Sertifikat dengan id areal tidak ditemukan');
    }
    return $this->respond($lahan);
  }

  public function show_bangunan($id_areal='')
  {
    $this->bangunan = new Gedung_model();
    $lahan = $this->bangunan->where('id_areal_fix_old', $id_areal)->get()->getResultArray();
    if(empty($lahan)) {
      return $this->failNotFound('Bangunan dengan id areal tidak ditemukan');
    }
    return $this->respond($lahan);
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

  public function delete($id = null)
  {
    $this->model->delete($id);
    if ($this->model->db->affectedRows() === 0)
    {
      return $this->failNotFound(sprintf(
        'Lahan dengan id %d tidak ditemukan',
        $id
      ));
    }

    return $this->respondDeleted(['lahan_id' => $id]);
  }

  public function update($id = null)
  {
    $data    = $this->request->getJSON();      
    $record  = $this->model->find($id);
    if(empty($record)) {
      return $this->failNotFound(sprintf(
        'Lahan dengan id %d tidak ditemukan',
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