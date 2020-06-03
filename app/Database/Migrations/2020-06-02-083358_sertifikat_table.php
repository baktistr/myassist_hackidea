<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SertifikatTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'sertifikat_id'		=> [
				'type'			=> 'INT',
				'constraint'	=> 11,
				'unsigned'		=> TRUE,
				'auto_increment'=> TRUE
			],
			'id_areal'			=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'no_sertifikat'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'lokasi_aset'		=> [
				'type'			=> 'TEXT',
				'null'			=> FALSE
			],
			'provinsi'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 100
			],
			'kotamadya'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 100
			],
			'kecamatan'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 100
			],
			'kelurahan'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 100
			],
			'div_regional'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'witel'				=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 100
			],
			'luas'				=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'sk_hak'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'jenis'				=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 100
			],
			'akhir'				=> [
				'type'			=> 'date'
			],
			'tahun'				=> [
				'type'			=> 'year'
			],
			'bulan'				=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'tanggal'			=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'status_hgb'		=> [
				'type'			=> 'enum',
				'constraint'	=> ['aktif', 'tidak aktif'],
				'default'		=> 'aktif'
			],
			'loker'				=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'bundel'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 10
			],
			'halaman'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 10
			],
			'status_penyimpanan'=> [
				'type'			=> 'enum',
				'constraint'	=> ['ada', 'tidak ada'],
				'default'		=> 'ada'
			],
			'final_status'		=> [
				'type'			=> 'enum',
				'constraint'	=> ['aktif', 'tidak aktif'],
				'default'		=> 'aktif'
			],
			'keterangan'		=> [
				'type'			=> 'TEXT',
				'null'			=> TRUE
			]
		]);
		$this->forge->addKey('sertifikat_id', TRUE);
		$this->forge->createTable('sertifikat');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('sertifikat');
	}
}
