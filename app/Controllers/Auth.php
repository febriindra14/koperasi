<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        // Logika untuk menampilkan halaman login
        return view('auth/login'); // Ini akan memuat tampilan login.php
    }
}
