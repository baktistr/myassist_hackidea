<?php
namespace App\Controllers;

use App\Models\Provinsi_model;
use App\Models\Kabupaten_model;
use App\Models\Witel_model;
use App\Models\Kecamatan_model;
use App\Models\Desa_model;

class WilayahController extends BaseController
{
  public function __construct() 
	{
    $this->provinsi = new Provinsi_model();
		$this->kabupaten = new Kabupaten_model();
		$this->kecamatan = new Kecamatan_model();
		$this->witel = new Witel_model();
		$this->desa = new Desa_model();
  }

  public function getKota($id)
	{
		$kabupaten = model('Kabupaten_model')->where('province_id', $id)->findAll();
		echo json_encode($kabupaten);
	}

	public function getKecamatan($id)
	{
		$kecamatan = model('Kecamatan_model')->where('regency_id', $id)->findAll();
		echo json_encode($kecamatan);
	}

	public function getDesa($id)
	{
		$desa = model('Desa_model')->where('district_id', $id)->findAll();
		echo json_encode($desa);
	}

	public function getIdWitel($witel)
	{
		$witel = $this->witel->where('witel', $witel)->findAll();
		echo json_encode($witel);
	}
}
