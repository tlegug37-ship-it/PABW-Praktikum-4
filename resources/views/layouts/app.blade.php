<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir - BPBD Kabupaten Bandung</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen text-gray-800">
    <nav class="bg-blue-700 text-white p-4 shadow-md">
        <div class="container mx-auto flex flex-wrap justify-between items-center gap-3">
            <a href="{{ route('laporan.form') }}" class="text-xl font-bold">LaporBanjir BPBD Kab. Bandung</a>
            <div class="flex flex-wrap items-center gap-4">
                <a href="{{ route('laporan.form') }}" class="hover:underline">Buat Laporan</a>
                @auth
                    <a href="{{ route('laporan.index') }}" class="hover:underline">Daftar Laporan</a>
                    <a href="{{ route('profile') }}" class="hover:underline">Profil Petugas</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-white text-blue-700 px-3 py-1 rounded font-semibold">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="hover:underline">Login Petugas</a>
                    <a href="{{ route('register') }}" class="bg-white text-blue-700 px-3 py-1 rounded font-semibold">Register Petugas</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="container mx-auto p-6">
        @if (session('success'))
            <div class="mb-5 rounded bg-green-100 border border-green-300 text-green-800 p-3">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="mb-5 rounded bg-red-100 border border-red-300 text-red-800 p-3">
                <p class="font-semibold mb-1">Periksa kembali data yang dimasukkan:</p>
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @yield('content')
    </main>
</body>
</html>
