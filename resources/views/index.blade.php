<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Comparision Online shopping Store</title>

    @include('includes.links')
</head>
<body>
    @include('includes.auth')
            @include('includes.topbar')
            @include('includes.header')
            @yield('pages-content')
            @include('includes.footer')
            <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    @include('includes.scripts')
</body>
</html>
















{{-- 
 <body >
    <div class="antialiased">
    
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                   <button> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></button>

                    @if (Route::has('register'))
                       <button> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></button>
                    @endif
                @endauth
            </div>
        @endif
    </div> --}}
       