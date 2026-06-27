<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    // ==========================================================
    // METHOD INDEX - Menampilkan daftar semua user
    // URL: http://localhost:8080/user
    // ==========================================================
    public function index()
    {
        // Judul halaman
        $title = 'Daftar User';

        // Panggil model User
        $model = new UserModel();

        // Ambil semua data user dari database
        $users = $model->findAll();

        // Tampilkan view dan kirim data users & title
        return view('user/index', compact('users', 'title'));
    }

    // ==========================================================
    // METHOD LOGIN - Menampilkan form login & memproses login
    // URL: http://localhost:8080/user/login (GET  = tampilkan form)
    //      http://localhost:8080/user/login (POST = proses login)
    // ==========================================================
    public function login()
    {
        // Load helper form untuk validasi sederhana
        helper(['form']);

        // Ambil data dari form (jika ada)
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // ------------------------------------------------------
        // KASUS 1: Belum ada input email (tampilkan form login)
        // ------------------------------------------------------
        if (!$email) {
            return view('user/login');
        }

        // ------------------------------------------------------
        // KASUS 2: Ada input email (proses login)
        // ------------------------------------------------------

        // Inisialisasi session
        $session = session();

        // Panggil model User
        $model = new UserModel();

        // Cari user berdasarkan email
        $login = $model->where('useremail', $email)->first();

        // Apakah email ditemukan?
        if ($login) {
            // Email ditemukan, verifikasi password
            $hashedPassword = $login['userpassword'];

            if (password_verify($password, $hashedPassword)) {
                // PASSWORD BENAR: Buat session data
                $login_data = [
                    'user_id'    => $login['id'],
                    'user_name'  => $login['username'],
                    'user_email' => $login['useremail'],
                    'logged_in'  => true,
                ];
                $session->set($login_data);

                // Redirect ke halaman admin artikel
                return redirect()->to('/admin/article');
            } else {
                // PASSWORD SALAH
                $session->setFlashdata('flash_msg', 'Password salah.');
                return redirect()->to('/user/login');
            }
        } else {
            // EMAIL TIDAK DITEMUKAN
            $session->setFlashdata('flash_msg', 'Email tidak terdaftar.');
            return redirect()->to('/user/login');
        }
    }

    // ==========================================================
    // METHOD LOGOUT - Menghancurkan session dan logout
    // URL: http://localhost:8080/user/logout
    // ==========================================================
    public function logout()
    {
        // Hancurkan semua session
        session()->destroy();

        // Redirect ke halaman login
        return redirect()->to('/user/login');
    }
}