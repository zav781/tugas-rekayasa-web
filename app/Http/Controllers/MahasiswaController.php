<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011700264',
            'nama' => 'Muhammad Zhafkaviandra Bastyan',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'email' => 'zhafka@gmail.com',
            'status' => 'Aktif',
        ];
        return view('page.profile', compact('mahasiswa'));
    }
}
