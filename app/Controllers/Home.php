<?php

namespace App\Controllers;

use App\Models\Setting;

class Home extends BaseController
{
    public function index(): string
    {
        $setting = new Setting();
        $setting = $setting->first();

        $data = [
            'notifications' => [
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
            ],

            'title' => $setting['title'],
            'description' => $setting['description'],
            'keywords' => $setting['keywords'],
            'background' => $setting['background'],
            'banner' => $setting['banner'],
            'tutorial_bongkar' => $setting['tutorial_bongkar'],
            'tutorial_jual' => $setting['tutorial_jual'],
            'admin_img' => $setting['admin_img'],
            'admin_id' => $setting['admin_id'],
        ];

        return view('home', $data);
    }

    public function success(): string
    {
        $data = [
            'title' => 'Success',
            'description' => 'Ini adalah game online yang unik dan menyenangkan dengan gameplay yang sedeharna juga penuh tantangan, ayo gabung! Beragam permainan bisa Anda mainkan untuk membuat waktu luang Anda semakin menyenangkan!',
            'keywords' => 'success',
            'robots' => 'index, follow',
            'site_name' => 'Higgs Games',
            'background' => 'bg.jpg',
        ];

        return view('success', $data);
    }
}
