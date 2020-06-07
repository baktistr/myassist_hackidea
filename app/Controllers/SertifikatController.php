<?php
namespace App\Controllers;

use App\Models\Sertifikat_model;

class SertifikatController extends BaseController
{
  public function __construct() 
	{
		$this->sertifikat = new Sertifikat_model();
	}

  public function create()
  {
    $data=[
      'title' => 'Create Sertifikat Lahan',
      'isi' => 'pages/sertifikatLahanCreate',
      'subheader' => 'Create Data Sertifikat'
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

  // simpan new data ke db
  public function store()
  {
    $data = $this->request->getPost();
    $file = $this->request->getFile('scan_sertifikat');
    if($file && $file->getExtension()=='pdf') {
      if($this->sertifikat->insert($data) {
        $data['id'] = $this->sertifikat->getInsertID();
        $file_name = $data['no_sertifikat'].'_'.$data['kelurahan'].'_'.$data['id'].'.pdf';
        $file->move('/sertifikat_file', $file_name);
        return redirect()->to('/sertifikat-lahan')->with('msg', 'Success to insert new data');
    } 
    return redirect()->to('/sertifikat-lahan-create')->with('msg', 'Fail to insert new data');
  }

  // // update sertifikat ke db
  public function update($id)
  {
    $data = $this->request->getPost();

    if (!empty($data)) {
      if ($this->sertifikat->update($id, $data) === FALSE) {
        return redirect()->to('/sertifikat-lahan-edit/'.$id)->with('msg', 'Fail to insert new data');
      } else {
        return redirect()->to('/sertifikat-lahan')->with('msg', 'Success to insert new data');
      }
    }
  }

  // //delete data sertifikat di db
  public function delete($id)
  {
    $this->sertifikat->where('sertifikat_id', $id)->delete();

    if ($this->sertifikat->db->affectedRows()) {
      return redirect()->to('/sertifikat-lahan')->with('msg','Data is not exist');
    } else {
      return redirect()->to('/sertifikat-lahan')->with('msg','Success delete data');
    }
  }
}