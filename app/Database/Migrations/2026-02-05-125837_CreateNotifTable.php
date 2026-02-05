<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNotifTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'qty' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],
            'amount' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('notifications');

        $initialData = [
            ['name' => 'Andi Pratama', 'qty' => '2B', 'amount' => 126000],
            ['name' => 'Siti Aminah', 'qty' => '500M', 'amount' => 31500],
            ['name' => 'Budi Santoso', 'qty' => '1B', 'amount' => 63000],
            ['name' => 'Dewi Lestari', 'qty' => '10B', 'amount' => 630000],
            ['name' => 'Rizky Fauzi', 'qty' => '3B', 'amount' => 189000],
            ['name' => 'Lutfi Hakim', 'qty' => '5B', 'amount' => 315000],
            ['name' => 'Eka Wijaya', 'qty' => '700M', 'amount' => 44100],
            ['name' => 'Sari Putri', 'qty' => '1.5B', 'amount' => 94500],
            ['name' => 'Hendra Kurniawan', 'qty' => '12B', 'amount' => 756000],
            ['name' => 'Maya Indah', 'qty' => '800M', 'amount' => 50400],
            ['name' => 'Agus Setiawan', 'qty' => '4B', 'amount' => 252000],
            ['name' => 'Rina Melati', 'qty' => '300M', 'amount' => 18900],
            ['name' => 'Yudi Prayoga', 'qty' => '20B', 'amount' => 1260000],
            ['name' => 'Anisa Fitri', 'qty' => '6B', 'amount' => 378000],
            ['name' => 'Fajar Sidik', 'qty' => '2.5B', 'amount' => 157500],
        ];

        $this->db->table('notifications')->insertBatch($initialData);
    }

    public function down()
    {
        $this->forge->dropTable('notifications');
    }
}