<?php
namespace App\Controllers;

use App\Models\Gedung_model;

class BangunanController extends BaseController
{
  public function __construct() 
	{
		$this->bangunan = new Gedung_model();
	}

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
        return redirect()->to('/bangunan-lahan/create')->with('msg', 'Fail to insert new data');
      } else {
        return redirect()->to('/bangunan-lahan')->with('msg', 'Success to insert new data');
      }
    } else {
      return redirect()->to('/bangunan-lahan')->with('msg', 'No data submitted');
    }
  }

  // display edit form
  public function edit($id)
  {
    $bangunan = $this->bangunan->where('id', $id)->get()->getRowArray();    
    if (isset($bangunan)) {
      $data = [
        'title' => 'Buat Bangunan Lahan',
        'isi' => 'pages/bangunanLahanEdit',
        'subheader' => 'Buat Bangunan Lahan',
        'bangunan'  => $bangunan
      ];
      echo view('index', $data);
    } else {
      return redirect()->to('/bangunan-lahan');
    }
  }

  // // update bangunan ke db
  public function update($id)
  {
    $data = $this->request->getPost();

    if (!empty($data)) {
      if ($this->bangunan->update($data) === FALSE) {
        return redirect()->to('/bangunan-lahan/edit')->with('msg', 'Fail to insert new data');
      } else {
        return redirect()->to('/bangunan-lahan')->with('msg', 'Success to insert new data');
      }
    }
  }

  // //delete data bangunan di db
  public function delete($id)
  {
    $sql = $this->bangunan->where('gedung_id', $id)->delete();

    if ($this->bangunan->db->affectedRows()) {
      return redirect()->to('/bangunan-lahan')->with('msg','Data is not exist');
    } else {
      return redirect()->to('/bangunan-lahan')->with('msg','Success delete data');
    }
  }
}