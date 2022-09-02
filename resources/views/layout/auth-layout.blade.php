<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    @vite('resources/css/app.css')
    @stack('stylesheets')
</head>
<link rel="icon" href="images/favicon.ico" />
<title>@yield('pageTitle')</title>

<body>
    <div class="py-[100px]">
        @yield('content')
    </div>
    @stack('scripts')
    {{-- To display messages --}}
    <x-flash-message />
</body>

</html>
