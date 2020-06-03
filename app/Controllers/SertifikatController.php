<?php
namespace App\Controllers;

use App\Models\Sertifikat_model;

class SertifikatController extends BaseController
{
  public function __construct() 
	{
		$this->sertifikat = new Sertifikat_model();
	}

  // display form insert
  public function create()
	{
		$data=[
      'title' => 'Buat Sertifikat Lahan',
      'isi' => 'pages/sertifikatLahanCreate',
      'subheader' => 'Buat Sertifikat Lahan'
		];
		echo view('index', $data);
	}

  // simpan new data ke db
  public function store()
  {
    $data = $this->request->getPost();
    
    if (!empty($data)) {
      if ($this->sertifikat->insert($data) === FALSE) {
        return redirect()->to('/sertifikat-lahan/create')->with('msg', 'Fail to insert new data');
      } else {
        return redirect()->to('/sertifikat-lahan')->with('msg', 'Success to insert new data');
      }
    } else {
      return redirect()->to('/sertifikat-lahan')->with('msg', 'No data submitted');
    }
  }

  // display edit form
  public function edit($id)
  {
    $sertifikat = $this->sertifikat->where('id', $id)->get()->getRowArray();
    var_dump($sertifikat); exit;
    if (isset($sertifikat)) {
      $data = [
        'title' => 'Buat Sertifikat Lahan',
        'isi' => 'pages/sertifikatLahanEdit',
        'subheader' => 'Buat Sertifikat Lahan',
        'sertifikat'  => $sertifikat
      ];
      echo view('index', $data);
    } else {
      return redirect()->to('/sertifikat-lahan');
    }
  }

  // // update sertifikat ke db
  public function update($id)
  {
    $data = $this->request->getRawInput();

    if (!empty($data)) {
      if ($this->sertifikat->update($data) === FALSE) {
        return redirect()->to('/sertifikat-lahan/edit')->with('msg', 'Fail to insert new data');
      } else {
        return redirect()->to('/sertifikat-lahan')->with('msg', 'Success to insert new data');
      }
    }
  }

  // //delete data sertifikat di db
  public function delete($id)
  {
    $sql = $this->sertifikat->where('id', $id)->delete();

    if ($this->sertifikat->db->affectedRows()) {
      return redirect()->to('/sertifikat-lahan')->with('msg','Data is not exist');
    } else {
      return redirect()->to('/sertifikat-lahan')->with('msg','Success delete data');
    }
  }
}