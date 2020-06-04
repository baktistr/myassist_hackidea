<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GedungSeeder extends Seeder
{
  public function run()
  {
    $data = [
      'gedung_id' => 1,
      'id_areal_fix_old'  => 2144,
      'kode_lokasi' => '2-12-16-01',
      'urut_gedung' => 'a',
      'kode_gedung' => '2-12-16-01-a',
      'nama_gedung' => 'Graha Merah Putih',
      'lat'  => '-6.121435',
      'long'  => '106.774124',
      'peruntukan'  => 'Gedung Perkantoran',
      'jumlah_lantai' => 13,
      'nop' => '31.71.040.005 001-0003.0',
      'luas_gedung' => 332
    ];

    $this->db->table('gedung')->insert($data);
  }
}