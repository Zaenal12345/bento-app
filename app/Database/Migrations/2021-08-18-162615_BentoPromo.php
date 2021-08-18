<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BentoPromo extends Migration
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
			'promo_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'promo_code'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '15'
			],
			'type'       => [
				'type'           => 'ENUM',
				'constraint'     => ['Persent','Nominal']
			],
			'value'       => [
				'type'           => 'DECIMAL',
				'constraint'     => 11
			],
			'start_periode'       => [
				'type'           => 'DATE'
			],
			'end_periode'       => [
				'type'           => 'DATE'
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
		// Membuat tabel bento_promo
		$this->forge->createTable('bento_promo', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('bento_promo', TRUE);
	}
}
