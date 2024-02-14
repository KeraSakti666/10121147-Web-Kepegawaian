<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai; 
use App\Models\Kehadiran; 

class DataController extends Controller
{
    public function data()
    {
        $pegawai = Pegawai::all(); 
        return view('data', compact('pegawai'));
    }
    public function hapus($id)
    {
        $pegawai = Pegawai::find($id);

        if (!$pegawai) {
            return redirect()->back()->with('error', 'Pegawai tidak ditemukan.');
        }

        Kehadiran::where('pegawai_id', $id)->delete();

        $pegawai->delete();

        return redirect()->route('data')->with('success', 'Pegawai berhasil dihapus.');
    }
    public function searchById(Request $request)
    {
        $searchId = $request->input('search_id');

        $pegawai = Pegawai::where('id', $searchId)->get();

        return view('data', compact('pegawai'));
    }
}
