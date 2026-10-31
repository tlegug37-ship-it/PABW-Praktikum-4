@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-bold">Daftar Laporan Banjir</h2>
            <p class="text-gray-600">Halaman khusus petugas BPBD yang telah login.</p>
        </div>
        <a href="{{ route('laporan.form') }}" class="bg-blue-700 text-white px-4 py-2 rounded">Form Publik</a>
    </div>

    @if($laporan->isEmpty())
        <div class="bg-white p-6 rounded shadow text-center text-gray-500">Belum ada data laporan banjir.</div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($laporan as $item)
                @include('partials.laporan-card', ['item' => $item])
            @endforeach
        </div>
    @endif
</div>
@endsection
