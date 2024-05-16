<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            'nama' => 'Zulfan Afandi Siregar',
            'nim' => '0110123289',
            'programStudi' => 'Sistem Informasi',
            'tahunAngkatan' => '2023'
        ]);
    }
}