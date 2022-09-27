<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class HomeController extends Controller
{
    public function index()
    {
        $countpegawai = karyawan::count();
        $karyawan = karyawan::all();
        return view('karyawan.index', compact('countpegawai', 'karyawan'));
    }
}
