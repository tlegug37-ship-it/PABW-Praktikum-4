<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir - BPBD Kabupaten Bandung</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen text-gray-800">
    <nav class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">LaporBanjir BPBD Kab. Bandung</h1>
            <div>
                <a href="{{ route('laporan.index') }}" class="mr-4 hover:underline">Daftar Laporan</a>
                <a href="{{ route('laporan.form') }}" class="bg-white text-blue-600 px-3 py-1 rounded shadow font-semibold hover:bg-gray-100">Buat Laporan</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto p-6">
        @yield('content')
    </main>
</body>
</html>