<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LahanTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'lahan_id'			=> [
				'type'			=> 'INT',
				'constraint'	=> 11,
				'unsigned'		=> TRUE,
				'auto_increment'=> TRUE
			],
			'id_areal_fix_old'	=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'nama_lahan'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'alamat'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'provinsi_nama'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'kota_nama'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'kecamatan_nama'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'desa_nama'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'lat'				=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'long'				=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'takos_t_f'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'luas_tanah'		=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'luas_gedung'		=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'penggunaan'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'sertifikat'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'penyimpanan_sertifikat' => [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'area_regional'		=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'kode_prov'			=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'witel'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'kode_witel'		=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'kode_lokasi'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			]
		]);

		$this->forge->addKey('lahan_id', TRUE);
		$this->forge->createTable('lahan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('lahan');
	}
}
