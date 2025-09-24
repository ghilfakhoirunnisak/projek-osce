<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    // menampilkan seluruh data jadwal
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('admin.jadwal.index', compact('jadwal'));
    }

    // menampilkan form jadwal
    public function create()
    {
        return view('admin.jadwal.create');
    }

    // menambahkan data jadwal
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'waktu_mulai' => 'required|date_format:H:i',
            'waktu_akhir' => 'required|date_format:H:i|after:waktu_mulai',
            'sesi' => 'required|integer|min:1',
        ]);

        Jadwal::create([
            'tanggal' => $request->tanggal,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_akhir' => $request->waktu_akhir,
            'sesi' => $request->sesi,
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Data jadwal berhasil ditambahkan.');
    }

    // menampilkan data jadwal
    public function edit($id_jadwal)
    {
        $jadwal = Jadwal::where('id_jadwal', $id_jadwal)->firstOrFail();
        return view('admin.jadwal.edit', compact('jadwal'));
    }

    //mengupdate data jadwal yang baru
    public function update(Request $request, $id_jadwal)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'waktu_mulai' => 'required|date_format:H:i',
            'waktu_akhir' => 'required|date_format:H:i|after:waktu_mulai',
            'sesi' => 'required|integer|min:1',
        ]);

        $jadwal = Jadwal::findOrFail($id_jadwal);

        $jadwal->update([
            'tanggal' => $request->tanggal,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_akhir' => $request->waktu_akhir,
            'sesi' => $request->sesi,
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Data jadwal berhasil diperbarui.');
    }

    // menghapus data jadwal
    public function destroy($id_jadwal)
    {
        $jadwal = Jadwal::findOrFail($id_jadwal);
        $jadwal->delete();

        return redirect()->route('jadwal.index')->with('success', 'Data jadwal berhasil dihapus.');
    }
}
