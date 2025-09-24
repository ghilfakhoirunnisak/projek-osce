<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    // menampilkan seluruh data mahasiswa
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('admin.mahasiswa.index', compact('mahasiswa'));
    }

    // menampilkan form mahasiswa
    public function create()
    {
        return view('admin.mahasiswa.create');
    }

    // menambahkan data mahasiswa
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswa,nim',
            'nama' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    // menampilkan data mahasiswa
    public function edit($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
        return view('admin.mahasiswa.edit', compact('mahasiswa'));
    }

    //mengupdate data mahasiswa yang baru
    public function update(Request $request, $nim)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($nim);

        $mahasiswa->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diperbarui.');
    }

    // menghapus data mahasiswa
    public function destroy($nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
