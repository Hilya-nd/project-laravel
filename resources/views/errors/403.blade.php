<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akses Ditolak</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div>
        <h1 class="text-2xl font-bold text-gray-800 mb-2">403 - Akses Ditolak</h1>
        <p class="text-gray-600 mb-6">
            {{ $exception->getMessage() ?: 'Maaf, Anda tidak memiliki izin untuk mengakses halaman ini.' }}
        </p>
        <a href="javascript:history.back()" class="inline-block bg-indigo-600 text-white px-5 py-2 rounded-md font-medium hover:bg-indigo-700 transition-colors">
            Kembali ke Halaman Sebelumnya
        </a>
    </div>
</body>
</html>