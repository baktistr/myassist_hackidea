<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LahanSeeder extends Seeder
{
  public function run()
  {
    $data = [
      'lahan_id'  => 1,
      'id_areal_fix_old'  => 2144,
      'nama_lahan'  => 'Graha Merah Putih/Telkom Hub',
      'alamat'  => 'JL. GATOT SUBROTO KAV. 52, JAKARTA SELATAN KOTA',
      'provinsi_nama'  => 'DKI Jakarta',
      'kota_nama'  => 'Kota Jakarta Selatan',
      'kecamatan_nama'  => 'Mampang Prapatan',
      'desa_nama' => 'Kuningan Barat',
      'lat' => '-6.229954',
      'long'  => '106.818682',
      'takos_t_f' => FALSE,
      'luas_tanah'  => 27717,
      'luas_gedung' => 31127,
      'penggunaan'  => 'KANTOR, PLASA',
      'sertifikat'  => 'ada',
      'penyimpanan_sertifikat' => 'tersimpan',
      'kode_prov' => 12,
      'witel' => 'JAKSEL',
      'kode_witel'  => 16,
      'kode_lokasi' => '2-12-16-01'
    ];

    $this->db->table('lahan')->insert($data);
  }
}