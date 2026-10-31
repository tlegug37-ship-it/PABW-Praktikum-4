@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white rounded-lg shadow p-6">
    <h2 class="text-2xl font-bold mb-5">Profil Petugas</h2>
    <dl class="space-y-4">
        <div><dt class="text-sm text-gray-500">Nama</dt><dd class="font-semibold">{{ $user->name }}</dd></div>
        <div><dt class="text-sm text-gray-500">Email</dt><dd class="font-semibold">{{ $user->email }}</dd></div>
        <div><dt class="text-sm text-gray-500">Terdaftar Sejak</dt><dd class="font-semibold">{{ $user->created_at?->diffForHumans() }}</dd></div>
    </dl>
</div>
@endsection
