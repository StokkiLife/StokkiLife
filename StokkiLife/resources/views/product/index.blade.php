<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stokki</title>
    <link rel="icon" href="{{ asset('imgs/stokkilife-logo.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
</head>
<body class="bg-lime-600">
    <header class="bg-white border-b border-gray-200 sticky top-0 z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex items-center gap-4">
                <a href=" {{ route('dashboard') }} " class="ml-5"><i class="bi bi-arrow-return-left"></i>
                </a>
                <h1 class="text-2xl font-bold text-lime-600"><i class="bi bi-box"></i> Stokki</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- Ainda não decidido -->
    <!-- <main class="max-w-7xl mx-auto p-6">
    <article class="bg-white p-4 rounded-lg shadow-md mb-4"><i class="bi bi-folder-fill"></i></article>
    <article class="bg-white p-4 rounded-lg shadow-md mb-4"><i class="bi bi-folder-fill"></i></article>
    -->
    </main>
</body>
</html>