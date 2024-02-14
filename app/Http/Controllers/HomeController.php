<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai; // Sesuaikan dengan model Pegawai yang Anda miliki

class HomeController extends Controller
{
    public function Home()
    {
        $jumlahPegawaiLaki = Pegawai::where('jk', 'laki')->count();
        $jumlahPegawaiPerempuan = Pegawai::where('jk', 'perempuan')->count();
        

        return view('home', compact('jumlahPegawaiLaki', 'jumlahPegawaiPerempuan'));
    }
}
