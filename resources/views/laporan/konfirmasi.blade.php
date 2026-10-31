@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white rounded-lg shadow p-6 text-center">
    <h2 class="text-2xl font-bold text-green-700 mb-3">Laporan Berhasil Dikirim</h2>
    <p>Terima kasih, <strong>{{ $nama }}</strong>. Laporan Anda telah tersimpan di sistem BPBD Kabupaten Bandung.</p>
    <a href="{{ route('laporan.form') }}" class="inline-block mt-5 bg-blue-700 text-white px-4 py-2 rounded">Kirim Laporan Lain</a>
</div>
@endsection
