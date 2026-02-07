<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Setting;
use App\Models\Notification;

class Home extends BaseController
{
    public function index(): string
    {
        $setting = new Setting();
        $setting = $setting->first();

        $notifications = new Notification();
        $notifications = $notifications->findAll(15);

        $data = [
            'notifications' => $notifications,
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
