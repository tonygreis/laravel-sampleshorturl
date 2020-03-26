<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     {!! SEOMeta::generate() !!}
     {!! OpenGraph::generate() !!}
     {!! Twitter::generate() !!}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="flex flex-wrap items-center justify-between p-4">
            <div class="lg:order-2 w-auto lg:w-1/5 lg:text-center"><a class="text-xl text-indigo-500 font-semibold" href="#">Dunder Mifflin</a></div>
            <div class="block lg:hidden"><button class="navbar-burger flex items-center py-2 px-3 text-indigo-500 rounded border border-indigo-500"><svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg></button>    </div>
            <div class="navbar-menu hidden lg:order-1 lg:block w-full lg:w-2/5"><a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-blue-700" href="#">Products</a><a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-blue-700" href="#">Team</a><a class="block lg:inline-block mt-4 lg:mt-0 text-blue-900 hover:text-blue-700" href="#">Customers</a></div>
            <div class="navbar-menu hidden lg:order-3 lg:block w-full lg:w-2/5 lg:text-right"><a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-blue-700" href="{{ route('disclaimer') }}">Disclaimer</a><a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-blue-700" href="{{ route('terms') }}">Terms</a><a class="block lg:inline-block mt-4 lg:mt-0 text-blue-900 hover:text-blue-700" href="{{ route('contact') }}">Contact</a></div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
