<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    public function login()
    {
        return view('admin/login');
    }

    public function authenticate()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Simple authentication logic (replace with real authentication)
        if ($username === 'admin' && $password === 'admin') {

            // Set session or any other login mechanism
            return redirect()->to(base_url('/admin/dashboard'));
        } else {
            // Authentication failed
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Bongkar Chip Higgs Domino 24 Jam - Proses Cepat dan Aman',
            'description' => 'Bongkar Chip Higgs Domino Anda melalui layanan bongkaran 24 jam. Proses cepat, aman, dan terpercaya. Layanan bongkaran koin Higgs Domino siap membantu kapan saja.',
            'keywords' => 'bongkaran koin Higgs Domino, layanan bongkaran koin domino, top up koin Higgs Domino 24 jam, beli koin Higgs Domino, jual koin Higgs Domino terpercaya',
            'robots' => 'index, follow',

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

            'background' => 'bg.jpg',
            'banner' => 'banner.jpg',

            'tutorial_bongkar' => 'https://www.youtube.com/@kiosratu_digital',
            'tutorial_kirim' => 'https://www.youtube.com/@kiosratu_digital',

            'admin_img' => 'oke122.png',
            'admin_id' => '939393938',
        ];

        return view('admin/dashboard', $data);
    }

    public function logout()
    {
        // Clear session or any other logout mechanism
        session()->destroy();
        return redirect()->to(base_url('/admin/login'));
    }
}
