<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'user_id'			=> [
				'type'			=> 'INT',
				'constraint'	=> 11,
				'unsigned'		=> TRUE,
				'auto_increment'=> TRUE
			],
			'nama'				=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'username'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'email'				=> [
				'type'			=>  'VARCHAR',
				'constraint'	=> 255,
				'unique'		=> TRUE
			],
			'password'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'role'				=> [
				'type'			=> 'INT',
				'constraint'	=> 1
			]
		]);

		$this->forge->addKey('user_id', TRUE);
		$this->forge->createTable('user');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
