<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'keywords' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'background' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'banner' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'tutorial_bongkar' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'tutorial_jual' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'admin_img' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'admin_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('settings');

        $initialData = [
            'title' => 'Bongkar Chip Higgs Domino 24 Jam - Proses Cepat dan Aman',
            'description' => 'Bongkar Chip Higgs Domino Anda melalui layanan bongkaran 24 jam. Proses cepat, aman, dan terpercaya. Layanan bongkaran koin Higgs Domino siap membantu kapan saja.',
            'keywords' => 'bongkaran koin Higgs Domino, layanan bongkaran koin domino, top up koin Higgs Domino 24 jam, beli koin Higgs Domino, jual koin Higgs Domino terpercaya',
            'background' => 'bg.jpg',
            'banner' => 'banner.jpg',
            'tutorial_bongkar' => 'https://www.youtube.com/@kiosratu_digital',
            'tutorial_jual' => 'https://www.youtube.com/@kiosratu_digital',
            'admin_img' => 'oke122.png',
            'admin_id' => '939393938',
        ];
        $this->db->table('settings')->insert($initialData);
    }

    public function down()
    {
        $this->forge->dropTable('settings');
    }
}
