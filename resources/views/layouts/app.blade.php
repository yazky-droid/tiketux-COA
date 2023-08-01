<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tiketux COA - @yield('title')</title>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')

    </head>
    <body class="font-nunito">
        
        @section('navbar')
        <!-- navbar -->
        <nav class="fixed top-0 z-10 w-full px-2 shadow-md backdrop-blur-md">
            <div class="container flex items-center justify-between py-5 mx-auto">
                <div class="flex items-center gap-2 ">
                    <img src="{{ asset('img/logo-luffy.jpg') }}" class="object-cover w-8 h-8 rounded-full" alt="logo luffy">
                    <p class="text-2xl font-bold text-blue-400">TiketuxCOA</p>
                </div>
                <ul class="hidden space-x-10 text-sm font-bold text-gray-600 uppercase dark:text-gray-100 md:flex">
                    <li class="hover:text-gray-400">
                        <a href="{{ route('home') }}">home</a>
                    </li>
                    <li class="hover:text-gray-400">
                        <a href="{{route('categories.index')}}">categories</a>
                    </li>
                    <li class="hover:text-gray-400">
                        <a href="{{route('coa.index')}}">coa</a>
                    </li>
                    <li class="hover:text-gray-400">
                        <a href="#transactions">transactions</a>
                    </li>
                    <li class="hover:text-gray-400">
                        <a href="#report">report</a>
                    </li>
                </ul>
                <img id="moon" src="{{ asset('img/moon.png') }}" class="hidden w-8 h-8 rounded-full cursor-pointer md:block" alt="">
                <div id="hamburgerMenu" class="z-10 space-y-1 cursor-pointer md:hidden">
                    <div class="w-6 h-0.5 bg-black dark:bg-white"></div>
                    <div class="w-6 h-0.5 bg-black dark:bg-white"></div>
                    <div class="w-6 h-0.5 bg-black dark:bg-white"></div>
                </div>
                <ul id="menu" class="absolute top-0 left-0 hidden w-full p-10 space-y-10 text-center uppercase bg-indigo-900 text-slate-100 rounded-b-3xl">
                    <li>
                        <a id="hLink" href="{{ route('home') }}">home</a>
                    </li>
                    <li>
                        <a id="hLink" href="{{route('categories.index')}}">categories</a>
                    </li>
                    <li>
                        <a id="hLink" href="{{route('coa.index')}}">coa</a>
                    </li>
                    <li>
                        <a id="hLink" href="#transactions">transactions</a>
                    </li>
                    <li>
                        <a id="hLink" href="#report">report</a>
                    </li>
                    <li>
                        <img id="moon" src="{{ asset('img/moon.png') }}" class="my-0 mx-auto w-8 h-8 rounded-full cursor-pointer md:block" alt="">
                    </li>
                </ul>
            </div>
        </nav>
        @show
        <div class="flex justify-center">
        
            <div class="container flex items-center gap-20 py-40 mx-auto lg:flex-row">
                @yield('content')
            </div>
        
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            //message with toastr

            @if(session()->has('success'))
            
                toastr.success('{{ session('success') }}', 'BERHASIL!');
            
            @elseif(session()->has('error'))
    
                toastr.error('{{ session('error') }}', 'GAGAL!');
    
            @endif
        </script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>