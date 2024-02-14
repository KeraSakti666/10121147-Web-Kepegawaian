<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Kehadiran;

class EditController extends Controller
{
    public function edit($id)
    {
        $data = Pegawai::find($id);
        if (!$data) {
            return redirect()->route('data')->with('error', 'data not found.');
        }
        return view('edit', compact('data'));
    }
    public function actionedit(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'nomor_telepon' => 'required',
            'jk' => 'required|in:laki,perempuan',
        ]);

        $data = Pegawai::find($request->id);
        if (!$data) {
            return redirect()->route('data')->with('error', 'Data pegawai tidak ditemukan.');
        }

        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->email = $request->email;
        $data->nomor_telepon = $request->nomor_telepon;
        $data->jk = $request->jk;

        $data->save();

        return redirect()->route('data')->with('success', 'Data pegawai berhasil diperbarui.');
    }
}