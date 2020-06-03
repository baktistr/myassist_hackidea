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

	//api /lahan
	public function index($id_areal='', $property='')
	{
		$lahan = [];
		$this->sertifikat = new Sertifikat_model();
		$this->gedung     = new Gedung_model();
		if($id_areal!='') {
			if($property!='') {
				switch ($property) {
					case 'bangunan':
						$lahan = $this->gedung->where('id_areal_fix_old', $id_areal)->get()->getResultArray();
						break;
					case 'sertifikat':
						$lahan = $this->sertifikat->where('id_areal', $id_areal)->get()->getResultArray();
						break;
					default:	
						return $this->response->setStatusCode(404)->setJSON(['message' => 'Not Found!']);
						break;
				}
				return $this->response->setJSON($lahan);		
			}
			$lahan = $this->lahan->where('id_areal_fix_old', $id_areal)->get()->getRowArray();
			if(!empty($lahan)) {				
				$lahan['sertifikat'] = $this->sertifikat->where('id_areal', $id_areal)->get()->getResultArray();
				$lahan['bangunan']	 = $this->gedung->where('id_areal_fix_old', $id_areal)->get()->getResultArray();
			}
		} else {
			$lahan = $this->lahan->get()->getResultArray();
		}
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
				return redirect()->to('/aset-lahan/create')->with('msg','Fail insert new data, please fill all field');
			} else {							
				return redirect()->to('/aset-lahan')->with('msg','Success insert new data');
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
			return redirect()->to('/aset-lahan');	
		}
	}

	//update data lahan ke db
	public function update($id)
	{
		$data = $this->request->getPost();
		if(!empty($data)) {
			if($this->lahan->update($data) === FALSE) {
				return redirect()->to('/aset-lahan')->with('msg','Success update data');
			} else {
				return redirect()->to('/aset-lahan/edit')->with('msg','Fail update data, please fill all field');
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
