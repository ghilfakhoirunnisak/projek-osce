<?php

namespace App\Http\Controllers;

use App\Models\Penguji;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PengujiController extends Controller
{
    // menampilkan data penguji
    public function index()
    {
        $penguji = Penguji::all();
        return view('admin.penguji.index', compact('penguji'));
    }

    // menampilkan form penguji
    public function create()
    {
        return view('admin.penguji.create');
    }

    // menambahkan data penguji
    public function store(Request $request)
    {
        $request->validate([
            'nama_penguji' => 'required|string|max:100',
            'telp' => 'required|max:13',
            'email' => 'required|email|unique:penguji,email',
            'asal_instansi' => 'required|string|max:100',
            'password' => 'required|min:6',
        ]);

        Penguji::create([
            'nama_penguji' => $request->nama_penguji,
            'telp' => $request->telp,
            'email' => $request->email,
            'asal_instansi' => $request->asal_instansi,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('penguji.index')->with('success', 'Data penguji berhasil ditambahkan.');
    }

    // menampilkan data penguji
    public function edit($id_penguji)
    {
        $penguji = Penguji::where('id_penguji', $id_penguji)->firstOrFail();
        return view('admin.penguji.edit', compact('penguji'));
    }

    //mengupdate data penguji yang baru
    public function update(Request $request, $id_penguji)
    {
        $request->validate([
            'nama_penguji' => 'required|string|max:100',
            'telp' => 'required|max:13',
            'email' => 'required|email',
            'asal_instansi' => 'required|string|max:100',
            'password' => 'nullable|min:6',
        ]);

        $penguji = Penguji::findOrFail($id_penguji);

        $data = [
            'nama_penguji' => $request->nama_penguji,
            'telp' => $request->telp,
            'email' => $request->email,
            'asal_instansi' => $request->asal_instansi,
        ];

        if (!empty($request->password)) {
            $data['password'] = Hash::make($request->password);
        }

        $penguji->update($data);

        return redirect()->route('penguji.index')->with('success', 'Data penguji berhasil diperbarui.');
    }

    // menghapus data penguji
    public function destroy($id_penguji)
    {
        $penguji = Penguji::findOrFail($id_penguji);
        $penguji->delete();

        return redirect()->route('penguji.index')->with('success', 'Data penguji berhasil dihapus.');
    }
}
