@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-2">Form Laporan Kejadian Banjir</h2>
    <p class="text-gray-600 mb-5">Masyarakat dapat mengirim laporan tanpa harus login.</p>
    <form action="{{ route('laporan.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium mb-1">Nama Pelapor</label>
            <input type="text" name="nama_pelapor" value="{{ old('nama_pelapor') }}" class="block w-full border rounded-md p-2" required>
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Lokasi / Kecamatan</label>
            <input type="text" name="lokasi" value="{{ old('lokasi') }}" class="block w-full border rounded-md p-2" placeholder="Contoh: Dayeuhkolot" required>
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Tinggi Genangan (cm)</label>
            <input type="number" name="tinggi_genangan" value="{{ old('tinggi_genangan') }}" min="1" max="1000" class="block w-full border rounded-md p-2" required>
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Tanggal Kejadian</label>
            <input type="date" name="tanggal_kejadian" value="{{ old('tanggal_kejadian') }}" class="block w-full border rounded-md p-2" required>
        </div>
        <button type="submit" class="w-full bg-blue-700 text-white font-semibold py-2 rounded-md hover:bg-blue-800">Kirim Laporan</button>
    </form>
</div>
@endsection
