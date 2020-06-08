<?php
namespace App\Controllers;

use App\Models\Gedung_model;

class BangunanController extends BaseController
{
  public function __construct() 
	{
		$this->bangunan = new Gedung_model();
	}

  public function create()
  {
    $data=[
      'title' => 'Data Bangunan',
      'isi' => 'pages/asetBangunanCreate',
      'subheader' => 'Data Asset Bangunan'
    ];
    echo view('index', $data);
  }

  public function edit($id=NULL)
  {
    $record = $this->bangunan->find($id);
    if(empty($record)) {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    $data=[
      'title' => 'Edit Aset Bangunan',
      'isi' => 'pages/asetBangunanEdit',
      'subheader' => 'Edit Data Aset Bangunan',
      'bangunan' => $record
    ];
    echo view('index', $data);
  }

  // simpan new data ke db
  public function store()
  {
    $data = $this->request->getPost();
    // return var_dump($data); 
    if (!empty($data)) {
      if ($this->bangunan->insert($data) === FALSE) {
        echo '<pre>';
        var_dump($this->lahan->errors());
        echo '</pre>';
        return;
        return redirect()->to('/aset-bangunan-create')->with('msg', 'Fail to insert new data', 'warning');
      } else {
        return redirect()->to('/aset-bangunan')->with('msg', 'Success to insert new data', 'success');
      }
    } else {
      return redirect()->to('/aset-bangunan')->with('msg', 'No data submitted');
    }
  }

  // // update bangunan ke db
  public function update($id)
  {
    $data = $this->request->getPost();

    if (!empty($data)) {
      if ($this->bangunan->update($id, $data) === FALSE) {
        return redirect()->to('/aset-bangunan-edit-'.$id)->with('msg', 'Fail to insert new data', 'warning');
      } else {
        return redirect()->to('/aset-bangunan')->with('msg', 'Success to insert new data', 'success');
      }
    }
  }

  // //delete data bangunan di db
  public function delete($id)
  {
    $sql = $this->bangunan->where('gedung_id', $id)->delete();

    if ($this->bangunan->db->affectedRows()) {
      return redirect()->to('/aset-bangunan')->with('msg','Data is not exist', 'dark');
    } else {
      return redirect()->to('/aset-bangunan')->with('msg','Success delete data', 'success');
    }
  }
}