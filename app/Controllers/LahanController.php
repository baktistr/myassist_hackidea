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

	public function show($id_areal)
	{
		$record = $this->lahan->where('id_areal_fix_old', $id_areal)->get()->getRowArray();
	    if(empty($record)) {
	      throw new \CodeIgniter\Database\Exceptions\DatabaseException();
	    }
	    $sertifikat = model('Sertifikat_model')->where('id_areal', $id_areal)->get()->getResultArray();
	    $bangunan = model('Gedung_model')->where('id_areal_fix_old', $id_areal)->get()->getResultArray();
		$data=[
		  'title' => 'Edit Aset Lahan',
		  'isi' => 'pages/asetLahanView',
		  'subheader' => 'Asset Detail',
		  'lahan' => $record,
		  'sertifikat' => $sertifikat,
		  'bangunan' => $bangunan
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
				$err = implode('<br>', $this->lahan->errors());        
	    		return redirect()->to('/aset-lahan-create')->with('msg', 'Fail to insert new data. <br>'.$err, 'warning');				
			} else {							
				return redirect()->to('/aset-lahan')->with('msg','Success insert new data', 'success');
			}
		}
	}

	//update data lahan ke db
	public function update($id)
	{
		$data = $this->request->getPost();
		if(!empty($data)) {
			if($this->lahan->update($id, $data) === FALSE) {
				$err = implode('<br>', $this->lahan->errors());        
        		return redirect()->to('/aset-lahan-edit-'.$id)->with('msg', 'Fail to update data. <br>'.$err, 'warning'); 
			} else {
				return redirect()->to('/aset-lahan')->with('msg','Success update data', 'success');
			}
		}
	}

	//delete data lahan di db
	public function delete($id)
	{				
		$this->lahan->where('lahan_id', $id)->delete();

	    if ($this->lahan->db->affectedRows()) {	      
	      return redirect()->to('/aset-lahan')->with('msg','Success delete data', 'success');	    
	    } else {
	      return redirect()->to('/aset-lahan')->with('msg','Data is not exist', 'dark');
	    }
	}
	//--------------------------------------------------------------------
}
