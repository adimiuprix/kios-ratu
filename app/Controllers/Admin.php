<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Setting;
use App\Models\Notification;

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
        $setting = new Setting();
        $setting = $setting->first();

        $notification = new Notification();
        $notifications = $notification->findAll();
    
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

        return view('admin/dashboard', $data);
    }

    public function updateSettings()
    {
        $settingModel = new Setting();

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'keywords' => $this->request->getPost('keywords'),
            'background' => $this->request->getPost('background'),
            'banner' => $this->request->getPost('banner'),
            'tutorial_bongkar' => $this->request->getPost('tutorial_bongkar'),
            'tutorial_jual' => $this->request->getPost('tutorial_jual'),
            'admin_img' => $this->request->getPost('admin_img'),
            'admin_id' => $this->request->getPost('admin_id'),
        ];

        $settingModel->update(1, $data);

        return redirect()->to(base_url('/admin/dashboard'));
    }

    public function addNotification()
    {
        $notificationModel = new Notification();

        $data = [
            'name' => $this->request->getPost('name'),
            'qty' => $this->request->getPost('qty'),
            'amount' => $this->request->getPost('amount'),
        ];

        $notificationModel->insert($data);

        return redirect()->to(base_url('/admin/dashboard'));
    }

    public function deleteNotification($id)
    {
        $notificationModel = new Notification();
        $notificationModel->delete($id);

        return redirect()->to(base_url('/admin/dashboard'));
    }

    public function logout()
    {
        // Clear session or any other logout mechanism
        session()->destroy();
        return redirect()->to(base_url('/admin/login'));
    }
}