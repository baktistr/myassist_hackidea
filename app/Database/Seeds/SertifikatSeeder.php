<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SertifikatSeeder extends Seeder
{
  public function run()
  {
    $data = [
      'sertifikat_id' => '1',
      'id_areal'  => 2144,
      'no_sertifikat' => '09.02.03.01.3.00355',
      'lokasi_aset' => 'JL. JEND GATOT SUBROTO KAV.52',
      'provinsi'  => 'DKI',
      'kodya' => 'Jakarta Selatan',
      'kecamatan' => 'Mampang Prapatan',
      'kelurahan' => 'Kuningan Barat',
      'divisi_regional'  => 'Divisi Regional II',
      'witel' => 'Witel Jaksel',
      'luas' => 6715,
      'sk_hak'  => 'HGB 20',
      'jenis' => 'HGB',
      'akhir' => '2037-01-18',
      'tahun' => '2037',
      'bulan' => '1',
      'tanggal' => '18',
      'status_hgb'  => 'aktif',
      'loker' => 21144,
      'bundel'  => 'I',
      'halaman' => '29 B',
      'status_penyimpanan'  => 'ada',
      // 'final_status'  => 'aktif',
      // 'keterangan'  => '',
      'scan_sertifikat' => 'C:\xampp\htdocs\project\assets\img\scan_1.jpg'
    ];

    $this->db->table('sertifikat')->insert($data);
  }
}