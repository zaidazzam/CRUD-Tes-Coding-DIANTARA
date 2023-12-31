<!DOCTYPE html>
<html data-theme="{{ config('app.theme') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('/icon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.0/dist/flowbite.bundle.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.1.0/dist/flowbite.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Tambahkan CSS Lightbox2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

    <!-- Tambahkan JavaScript Lightbox2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <!-- Tambahkan CSS Magnific Popup -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- Tambahkan JavaScript Magnific Popup -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    @livewireStyles()
</head>

<body class="font-display antialiased text-base-content">
    <x-alerts />

    <div class="drawer drawer-mobile min-h-screen">
        <input id="drawer" type="checkbox" class="drawer-toggle">
        <main class="drawer-content bg-base-200">
            <div
                class="flex lg:hidden items-center mb-4 h-16 bg-base-100/50 backdrop-blur-lg border-b border-base-300 px-6 sticky top-0 z-10">
                <label for="drawer" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </label>
            </div>
            <div class="p-6">
                {{ $slot }}
            </div>
        </main>
        <div class="drawer-side border-r border-r-base-300">
            <label for="drawer" class="drawer-overlay"></label>
            <aside class="overflow-y-auto w-80 bg-base-100 text-base-content">
                <div
                    class="flex items-center p-4 border-b border-b-base-300 backdrop-blur-lg h-16 max-h-16 sticky top-0 z-50">
                    <img src="{{ asset('/icon.svg') }}" class="w-6 h-6 object-contain" />
                    <h5 class="text-lg font-medium ml-2">
                        {{ config('app.name') }}
                    </h5>
                </div>
                <div class="px-8 py-4 border-b border-b-base-200">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="flex flex-col ml-2">
                            <span class="text-xs mb-1 line-clamp-1 font-medium">
                                {{ auth()->user()->name }}
                            </span>
                            <span class="text-xs">
                                {{ auth()->user()->role ?? '' }}
                            </span>
                        </div>
                    </div>
                </div>

                @include('layouts.sidebar')
            </aside>
        </div>
    </div>
    @livewireScripts()
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</html>
