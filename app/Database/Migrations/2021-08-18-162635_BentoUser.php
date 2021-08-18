<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BentoUser extends Migration
{
	public function up()
	{
		// Membuat kolom/field untuk tabel news
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '15'
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'address'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'phone'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'status'      => [
				'type'           => 'ENUM',
				'constraint'     => ['publish', 'unpublish', 'trash'],
				'default'        => 'publish',
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
			'updated_at' =>[
				'type'		=> 'DATE'
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);
		// Membuat tabel bento_user
		$this->forge->createTable('bento_user', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('bento_user', TRUE);
	}
}
