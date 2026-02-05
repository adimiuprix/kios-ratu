<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Bongkar Chip Higgs Domino 24 Jam - Proses Cepat dan Aman',
            'description' => 'Bongkar Chip Higgs Domino Anda melalui layanan bongkaran 24 jam. Proses cepat, aman, dan terpercaya. Layanan bongkaran koin Higgs Domino siap membantu kapan saja.',
            'keywords' => 'bongkaran koin Higgs Domino, layanan bongkaran koin domino, top up koin Higgs Domino 24 jam, beli koin Higgs Domino, jual koin Higgs Domino terpercaya',
            'robots' => 'index, follow',
            'site_name' => 'Higgs Games',

            'notifications' => [
                [
                    'name' => 'Adi',
                    'qty' => '2B',
                    'amount' => 1260000
                ],
                [
                    'name' => 'Farix',
                    'qty' => '1B',
                    'amount' => 13000
                ],
                [
                    'name' => 'Sony',
                    'qty' => '2B',
                    'amount' => 547000
                ],
                [
                    'name' => 'Refvop',
                    'qty' => '12B',
                    'amount' => 7835700
                ],
            ],

            'background' => 'bg.jpg',
            'banner' => 'banner.jpg',

            'tutorial_bongkar' => 'https://www.youtube.com/@kiosratu_digital',
            'tutorial_jual' => 'https://www.youtube.com/@kiosratu_digital',

            'admin_img' => 'oke122.png',
            'admin_id' => '939393938',
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
