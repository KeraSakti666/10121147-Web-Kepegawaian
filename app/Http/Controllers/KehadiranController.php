<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Kehadiran;

class KehadiranController extends Controller
{
    public function Kehadiran()
    {
        $kehadiran = Kehadiran::all(); 
        return view('kehadiran', compact('kehadiran'));
    }
    public function absen($id)
    {
        $kehadiran = Kehadiran::findOrFail($id);
        $kehadiran->absen += 1;
        $kehadiran->gaji += 50000;
        $kehadiran->save();

        return redirect()->back()->with('success', 'Absen berhasil ditambahkan.');
    }
    public function ambilGaji($id)
    {
        $kehadiran = Kehadiran::findOrFail($id);
        $kehadiran->absen = 0;
        $kehadiran->gaji = 0;
        $kehadiran->save();

        return redirect()->back()->with('success', 'Gaji berhasil diambil.');
    }
}