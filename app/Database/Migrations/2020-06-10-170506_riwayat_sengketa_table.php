<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RiwayatSengketaTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'riwayat_sengketa_id'=> [
				'type'			=> 'INT',
				'constraint'	=> 11,
				'unsigned'		=> TRUE,
				'auto_increment'=> TRUE
			],
			'kode_lokasi'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'id_areal'			=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'riwayat_sengketa'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'keterangan'		=> [
				'type'			=> 'TEXT',
				'null'			=> TRUE
			],			
		]);

		$this->forge->addKey('riwayat_sengketa_id', TRUE);
		$this->forge->createTable('riwayat_sengketa');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('riwayat_sengketa');
	}
}
