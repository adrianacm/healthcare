<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body class="{{ request()->routeIs('login') ? 'md:bg-primary-dark-green' : '' }}">
<div>
    <header>
        @include('includes.nav')
    </header>
    <div id="main" class="h-full max-w-[1400px] m-auto min-h-screen">
        @yield('content')
    </div>
    <footer>
        @include('includes.footer')
    </footer>
</div>
</body>
</html>
