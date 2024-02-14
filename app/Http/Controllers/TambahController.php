<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Kehadiran;
class TambahController extends Controller
{
    public function tambah()
    {
            return view('tambah');
    }

    public function actiontambah(Request $request)
    {
        $existingPegawai = Pegawai::where('email', $request->email)->first();
        if ($existingPegawai) {
            Session::flash('error', 'Email sudah terdaftar. Silakan gunakan email lain.');
            return redirect('tambah');
        }
        $pegawai = Pegawai::create([
            'email' => $request->email,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
            'jk' => $request->jk,
        ]);

        if ($pegawai) {
            Session::flash('success', 'Pendaftaran Berhasil.');
        } else {
            Session::flash('gagal', 'Pendaftaran Gagal.');
        }
        $kehadiran = Kehadiran::create([
            'pegawai_id' => $pegawai->id,
            'absen' => 0,
            'gaji' => 0,
        ]);
        
        if ($kehadiran) {
            Session::flash('success', 'Pendaftaran Berhasil.');
        } else {
            Session::flash('gagal', 'Pendaftaran Gagal.');
        }
        return redirect('tambah');
    }
    
}