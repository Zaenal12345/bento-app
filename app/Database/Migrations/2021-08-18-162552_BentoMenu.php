<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BentoMenu extends Migration
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
			'menu_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'category_id'       => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE,
			],
			'price'       => [
				'type'           => 'INT',
				'constraint'     => 11
			],
			'image'       => [
				'type'           => 'INT',
				'constraint'     => 11
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
		// Membuat tabel bento_menu
		$this->forge->createTable('bento_menu', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('bento_menu', TRUE);
	}
}
