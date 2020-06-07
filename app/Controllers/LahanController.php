<?php 
namespace App\Controllers;

use App\Models\Lahan_model;
use App\Models\Sertifikat_model;
use App\Models\Gedung_model;

class LahanController extends BaseController
{	
	public function __construct() 
	{
		$this->lahan = new Lahan_model();	
	}

	public function create()
	{
		$data=[
			'title' => 'Aset Lahan',
			'isi' => 'pages/asetLahanCreate',
      'subheader' => 'Data Asset Lahan'
		];
		echo view('index', $data);
	}

	//edit data lahan
	public function edit($id=NULL)
	{
		$record = $this->lahan->find($id);
		if(empty($record)) {
		  throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}

		$data=[
		  'title' => 'Edit Aset Lahan',
		  'isi' => 'pages/asetLahanEdit',
		  'subheader' => 'Edit Data Aset Lahan',
		  'lahan' => $record
		];
		echo view('index', $data);
	}

	//simpan data lahan ke db
	public function store()
	{			
		$data = $this->request->getPost();
		
		if(!empty($data)) {
			if($this->lahan->insert($data) === FALSE) {	
				echo '<pre>';
				var_dump($this->lahan->errors());
				echo '</pre>';
				return;
				return redirect()->to('/aset-lahan-create')->with('msg','Fail insert new data, please fill all field');
			} else {							
				return redirect()->to('/aset-lahan')->with('msg','Success insert new data');
			}
		}
	}

	//update data lahan ke db
	public function update($id)
	{
		$data = $this->request->getPost();
		if(!empty($data)) {
			if($this->lahan->update($id, $data) === FALSE) {
				return redirect()->to('/aset-lahan-edit-'.$id)->with('msg','Fail update data, please fill all field');
			} else {
				return redirect()->to('/aset-lahan')->with('msg','Success update data');
			}
		}
	}

	//delete data lahan di db
	public function delete($id)
	{				
		$this->lahan->where('lahan_id', $id)->delete();

	    if ($this->lahan->db->affectedRows()) {
	      return redirect()->to('/lahan-lahan')->with('msg','Data is not exist');
	    } else {
	      return redirect()->to('/lahan-lahan')->with('msg','Success delete data');
	    }
	}

	//--------------------------------------------------------------------

}
