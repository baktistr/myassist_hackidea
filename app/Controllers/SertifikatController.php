<?php
namespace App\Controllers;

use App\Models\Sertifikat_model;
use App\Models\Provinsi_model;
use App\Models\Kabupaten_model;
use App\Models\Kecamatan_model;
use App\Models\Desa_model;
use App\Models\Witel_model;

class SertifikatController extends BaseController
{
  public function __construct() 
	{
    $this->sertifikat = new Sertifikat_model();
    $this->provinsi = new Provinsi_model();
    $this->kota = new Kabupaten_model();
		$this->kecamatan = new Kecamatan_model();
		$this->desa = new Desa_model();
		$this->witel = new Witel_model();
	}

  public function create()
  {
    $data=[
      'title' => 'Create Sertifikat Lahan',
      'isi' => 'pages/sertifikatLahanCreate',
      'subheader' => 'Data Asset Sertifikat',
      'provinsi' => $this->provinsi->findAll(),
			'witel' => $this->witel->findAll(),
    ];
    echo view('index', $data);
  }

  // display edit form
  public function edit($id=NULL)
  {
    $record = $this->sertifikat->find($id);
    if(empty($record)) {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    $data=[
      'title' => 'Edit Sertifikat Lahan',
      'isi' => 'pages/sertifikatLahanEdit',
      'subheader' => 'Edit Data Sertifikat Lahan',
      'sertifikat' => $record
    ];
    echo view('index', $data);
  }

  public function show($id=NULL)
  {
    $record = $this->sertifikat->find($id);
    if(empty($record)) {
      throw new \CodeIgniter\Database\Exceptions\DatabaseException();
    }
    $lahan = model('App\Models\Lahan_model')->where('id_areal_fix_old', $record['id_areal'])->first();

    $data=[
      'title' => 'Edit Aset Bangunan',
      'isi' => 'pages/sertifikatLahanView',
		  'subheader' => 'Asset Detail',
      'sertifikat' => $record,
      'lahan' => $lahan
    ];
    echo view('index', $data);
  }

  // simpan new data ke db
  public function store()
  {
    $data = $this->request->getPost();
    $file = $this->request->getFile('scan_sertifikat');

    $provinsi = $this->provinsi->select('name')->where('id', $this->request->getVar('provinsi'))->first();
		$kota = $this->kota->select('name')->where('id', $this->request->getVar('kodya'))->first();
		$kecamatan = $this->kecamatan->select('name')->where('id', $this->request->getVar('kecamatan'))->first();
    $desa = $this->desa->select('name')->where('id', $this->request->getVar('kelurahan'))->first();
    
    $data['provinsi'] = $provinsi['name'];
		$data['kodya']	= $kota['name'];
		$data['kecamatan']	= $kecamatan['name'];
    $data['kelurahan']	= $desa['name'];

    if($file && $file->getExtension()=='pdf') {      
      if($this->sertifikat->insert($data)) {
        $data['id'] = $this->sertifikat->getInsertID();
        $file_name = $data['no_sertifikat'].'_'.$data['kelurahan'].'_'.$data['id'].'.pdf';
        $data['scan_sertifikat'] = $file_name;
        $this->sertifikat->update($data['id'], $data);
        $file->move('./sertifikat_file', $file_name);
        return redirect()->to('/sertifikat-lahan')->with('msg', 'Success to insert new data', 'success');
      } else {
        $err = implode('<br>', $this->sertifikat->errors());        
        return redirect()->to('/sertifikat-lahan-create')->with('msg', 'Fail to insert new data. <br>'.$err, 'warning');
      }
    } 
    return redirect()->to('/sertifikat-lahan-create')->with('msg', 'Fail to insert new data. Please provide pdf file', 'warning');
  }

  // // update sertifikat ke db
  public function update($id)
  {
    $data = $this->request->getPost();
    $file = $this->request->getFile('scan_sertifikat');

    if (!empty($data)) {
      if ($this->sertifikat->update($id, $data) === FALSE) {
        $err = implode('<br>', $this->sertifikat->errors());        
        return redirect()->to('/sertifikat-lahan-edit-'.$id)->with('msg', 'Fail to update data. <br>'.$err, 'warning'); 
      } else {
        if($file && $file->getExtension()=='pdf') {                    
          $file_name = $data['no_sertifikat'].'_'.$data['kelurahan'].'_'.$id.'.pdf';          
          $file->move('./sertifikat_file', $file_name);          
          $this->sertifikat->update($id, ['scan_sertifikat' => $file_name]);
        }
        return redirect()->to('/sertifikat-lahan')->with('msg', 'Success to insert new data', 'danger');
      }
    }
  }

  // //delete data sertifikat di db
  public function delete($id)
  {
    $this->sertifikat->where('sertifikat_id', $id)->delete();

    if ($this->sertifikat->db->affectedRows()) {
      return redirect()->to('/sertifikat-lahan')->with('msg','Success delete data', 'success');
    } else {
      return redirect()->to('/sertifikat-lahan')->with('msg','Data is not exist', 'warning');
    }
  }
}
