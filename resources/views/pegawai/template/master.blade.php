<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    @yield('addCss')
    @vite('resources/css/app.css')
</head>
<body class="max-w-[1200px] lg:w-full mx-auto lg:flex gap-10 font-plusJakarta text-slate-600 bg-red-700">
    @include('pegawai.template.nav')
    @include('pegawai.template.aside')
    <main class="w-[90%] mx-auto lg:w-[70%] my-6">
        @yield('content')
    </main>
    @vite('resources/js/app.js')
    @yield('addJs')
</body>

</html>
