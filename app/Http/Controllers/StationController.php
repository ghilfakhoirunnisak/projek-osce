<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    // menampilkan seluruh data station
    public function index()
    {
        $station = Station::all();
        return view('admin.station.index', compact('station'));
    }

    // menampilkan form station
    public function create()
    {
        return view('admin.station.create');
    }

    // menambahkan data station
    public function store(Request $request)
    {
        $request->validate([
            'nama_station' => 'required|string|max:100',
            'status' => 'required|in:active,block',
        ]);

        Station::create([
            'nama_station' => $request->nama_station,
            'status' => $request->status,
        ]);

        return redirect()->route('station.index')->with('success', 'Data station berhasil ditambahkan.');
    }

    // menampilkan data station
    public function edit($id_station)
    {
        $station = Station::where('id_station', $id_station)->firstOrFail();
        return view('admin.station.edit', compact('station'));
    }

    //mengupdate data station yang baru
    public function update(Request $request, $id_station)
    {
        $request->validate([
            'nama_station' => 'required|string|max:100',
            'status' => 'required|in:active,block',
        ]);

        $station = Station::findOrFail($id_station);

        $station->update([
            'nama_station' => $request->nama_station,
            'status' => $request->status,
        ]);

        return redirect()->route('station.index')->with('success', 'Data station berhasil diperbarui.');
    }

    // menghapus data station
    public function destroy($id_station)
    {
        $station = Station::findOrFail($id_station);
        $station->delete();

        return redirect()->route('station.index')->with('success', 'Data station berhasil dihapus.');
    }
}
