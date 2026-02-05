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
        return view('admin/dashboard');
    }

    public function logout()
    {
        // Clear session or any other logout mechanism
        session()->destroy();
        return redirect()->to(base_url('/admin/login'));
    }
}

