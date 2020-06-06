<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
  public function run()
  {
    $data = [
      'user_id' => NULL,
      'nama'    => 'Admin_nama',
      'username'=> 'admin',
      'email'   => 'admin@gmail.com',
      'password'=> '$2y$10$bFk5vncnxcpC97RVLI1NYOPIcfLUf.IG3/O/j9EMYYyY80vLOpgAK',
      'role'    => 1,
    ];

    $this->db->table('user')->insert($data);

    $data = [
      'user_id' => NULL,
      'nama'    => 'amc_nama',
      'username'=> 'amc',
      'email'   => 'amc@gmail.com',
      'password'=> '$2y$10$XBd5QfnI3mzP0.QNWXVlVuB/utOgKlyjDncMCv3fPiLITRwlDnona',
      'role'    => 2,
    ];

    $this->db->table('user')->insert($data);

    $data = [
      'user_id' => NULL,
      'nama'    => 'treg_nama',
      'username'=> 'treg',
      'email'   => 'treg@gmail.com',
      'password'=> '$2y$10$LXLcSJN2wgcFEwI8yM4XqOo9byTskozU.4XVs6bZ7xInhdQZiKNTy',
      'role'    => 3,
    ];

    $this->db->table('user')->insert($data);
  }
}