<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BentoCategories extends Migration
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
			'category_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'status'      => [
				'type'           => 'ENUM',
				'constraint'     => ['publish', 'unpublish', 'trash'],
				'default'        => 'publish',
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel bento_category
		$this->forge->createTable('bento_category', TRUE);
	}

	public function down()
	{
		/// Membuat tabel bento_category
		$this->forge->dropTable('bento_category', TRUE);
	}
}
