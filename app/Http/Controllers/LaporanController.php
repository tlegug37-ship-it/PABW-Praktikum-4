<?php

namespace App\Http\Controllers;

use App\Models\LaporModel;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = LaporModel::latest()->get();
        return view('laporan.index', compact('laporan'));
    }

    public function create()
    {
        return view('laporan.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pelapor' => ['required', 'string', 'max:255'],
            'lokasi' => ['required', 'string', 'max:255'],
            'tinggi_genangan' => ['required', 'integer', 'min:1', 'max:1000'],
            'tanggal_kejadian' => ['required', 'date'],
        ]);

        LaporModel::create($validated);

        return redirect()->route('laporan.konfirmasi')
            ->with('nama_pelapor', $validated['nama_pelapor']);
    }

    public function confirmation()
    {
        if (!session()->has('nama_pelapor')) {
            return redirect()->route('laporan.form');
        }

        return view('laporan.konfirmasi', [
            'nama' => session('nama_pelapor'),
        ]);
    }
}
