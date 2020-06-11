<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AssetMappingTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'asset_mapping_id'=> [
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
			'asset_mapping'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],		
		]);

		$this->forge->addKey('asset_mapping_id', TRUE);
		$this->forge->createTable('asset_mapping');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('asset_mapping');
	}
}
