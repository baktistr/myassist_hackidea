<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GedungTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'gedung_id'			=> [
				'type'			=> 'INT',
				'constraint'	=> 11,
				'unsigned'		=> TRUE,
				'auto_increment'=> TRUE
			],
			'id_areal_fix_old'	=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'kode_lokasi'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'urut_gedung'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'kode_gedung'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'nama_gedung'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'peruntukan'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'jumlah_lantai'		=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'nop'				=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'luas_bangunan'		=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
		]);

		$this->forge->addKey('gedung_id', TRUE);
		$this->forge->createTable('gedung');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('gedung');
	}
}
