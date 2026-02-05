<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'title'            => 'Bongkar Chip Higgs Domino 24 Jam - Proses Cepat dan Aman',
            'description'      => 'Bongkar Chip Higgs Domino Anda melalui layanan bongkaran 24 jam. Proses cepat, aman, dan terpercaya. Layanan bongkaran koin Higgs Domino siap membantu kapan saja.',
            'keywords'         => 'bongkaran koin Higgs Domino, layanan bongkaran koin domino, top up koin Higgs Domino 24 jam, beli koin Higgs Domino, jual koin Higgs Domino terpercaya',
            'background'       => 'bg.jpg',
            'banner'           => 'banner.jpg',
            'tutorial_bongkar' => 'https://www.youtube.com/@kiosratu_digital',
            'tutorial_jual'    => 'https://www.youtube.com/@kiosratu_digital',
            'admin_img'        => 'oke122.png',
            'admin_id'         => '939393938',
        ];

        // Check if data already exists to avoid duplicate seed
        $check = $this->db->table('settings')->where('title', $data['title'])->get()->getRow();

        if (!$check) {
            $this->db->table('settings')->insert($data);
        }
    }
}
