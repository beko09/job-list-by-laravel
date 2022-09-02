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
<link rel="icon" href="{{ asset('images/favicon.jpeg') }}" type="jpeg" />
<title>@yield('pageTitle')</title>

<body>

    @include('layout.header')

    @yield('hero')

    <main class="px-4 lg:px-20">
        @yield('content')
    </main>
    @include('layout.footer')

    {{-- To display messages --}}
    <x-flash-message />
    <script src="{{ asset('js/alpinejs.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
