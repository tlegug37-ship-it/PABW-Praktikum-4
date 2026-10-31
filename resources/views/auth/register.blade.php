@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow">
    <h2 class="text-2xl font-bold mb-2">Registrasi Petugas</h2>
    <p class="text-gray-600 mb-5">Buat akun untuk mengakses data laporan banjir.</p>
    <form method="POST" action="{{ route('register.store') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block font-medium mb-1">Nama Lengkap</label>
            <input name="name" value="{{ old('name') }}" required class="w-full border rounded p-2">
            @error('name') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block font-medium mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required class="w-full border rounded p-2">
            @error('email') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block font-medium mb-1">Password</label>
            <input type="password" name="password" required class="w-full border rounded p-2">
            @error('password') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block font-medium mb-1">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" required class="w-full border rounded p-2">
        </div>
        <button class="w-full bg-blue-700 text-white rounded p-2 font-semibold">Daftar</button>
    </form>
    <p class="mt-4 text-sm">Sudah memiliki akun? <a class="text-blue-700 underline" href="{{ route('login') }}">Login</a></p>
</div>
@endsection
