<?php 
namespace App\Controllers;

use App\Models\Lahan_model;

class LahanController extends BaseController
{	
	public function __construct() 
	{
		$this->lahan = new Lahan_model();
	}

	//api /lahan
	public function index()
	{
		$lahan = $this->lahan->get()->getResultArray();
		
		return $this->response->setJSON($lahan);
	}

	//crud lahan
	//create new lahan
	public function create()
	{		
		$data=[
			'title' => 'Create Aset Lahan',
			'isi' => 'pages/asetLahanCreate',
			'subheader' => 'Create Data Asset Lahan'
		];
		echo view('index', $data);
	}

	//simpan data lahan ke db
	public function store()
	{			
		$data = $this->request->getPost();
		
		if(!empty($data)) {
			if($this->lahan->insert($data) === FALSE) {	
				return redirect()->to('/asetLahan/create')->with('msg','Fail insert new data, please fill all field');
			} else {							
				return redirect()->to('/asetLahan')->with('msg','Success insert new data');
			}
		}
	}

	//edit data lahan
	public function edit($id)
	{		
		$lahan = $this->lahan->where('lahan_id', $id)->get()->getRowArray();
		if(isset($lahan)) {			
			$data=[
				'title' => 'Create Aset Lahan',
				'isi' => 'pages/asetLahanEdit',
				'subheader' => 'Create Data Asset Lahan',
				'lahan'	=> $lahan
			];
			echo view('index', $data);
		} else {
			return redirect()->to('/asetLahan');	
		}
	}

	//update data lahan ke db
	public function update($id)
	{
		$data = $this->request->getPost();
		if(!empty($data)) {
			if($this->lahan->update($data) === FALSE) {
				return redirect()->to('/asetLahan')->with('msg','Success update data');
			} else {
				return redirect()->to('/asetLahan/edit')->with('msg','Fail update data, please fill all field');
			}
		}
	}

	//delete data lahan di db
	public function delete($id)
	{		
		$this->lahan->where('lahan_id', $id)->delete();		
		return redirect()->to('/asetLahan')->with('msg','Success delete data');
	}

	//--------------------------------------------------------------------

}
