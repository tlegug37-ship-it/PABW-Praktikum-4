<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporModel;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = LaporModel::all();
        return view('laporan.index', compact('laporan'));
    }

    public function create()
    {
        return view('laporan.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaPelapor' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tinggi_genangan' => 'required|numeric',
            'tanggal_kejadian' => 'required|date',
        ]);

        LaporModel::create([
            'nama_pelapor' => $request->namaPelapor,
            'lokasi' => $request->lokasi,
            'tinggi_genangan' => $request->tinggi_genangan,
            'tanggal_kejadian' => $request->tanggal_kejadian,
        ]);

        return redirect()->route('laporan.index')->with('success', 'Laporan kejadian banjir berhasil disimpan ke database!');
    }
}
