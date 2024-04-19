<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
    </style>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tikets') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name','ticket') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        {{-- <main class="py-4">
            @yield('content')

        </main> --}}
    </div>
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <svg class="h-16 w-auto bg-gray-100 dark:bg-gray-900" id="logosandtypes_com" data-name="logosandtypes com" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150"><defs><style>.cls-1{fill:none;}.cls-2{fill:#fec338;}.cls-3{fill:#0774cc;}.cls-4{fill:#7344bc;}.cls-5{fill:#f32f42;}.cls-6{fill:#3cb065;}</style></defs><path class="cls-1" d="M0,.2H150v150H0Z" transform="translate(0 -0.2)"/><path class="cls-2" d="M95,73.6c-.32-7.17,2-18.53,7.63-23.06,4-3.3,9.11-2.65,11.92,1.67,3.92,6,24.81,40.09,31.74,50.78,3,4.68,2,10.57-4.25,12.9-15.52,6.12-31.95,3.19-40-12.45-3.74-6.76-5.33-14.17-6.43-21.71A32,32,0,0,1,95,73.6Z" transform="translate(0 -0.2)"/><path class="cls-3" d="M31.88,101.37C33.85,65,59.75,35.36,95,27c1.17-.24,3-.49,3.34,1,.28,1.29-1.1,1.86-2,2.32-28.05,11.9-42.38,41.73-42.8,71.06-.07,4-1.18,7.64-4.29,10.32-3.35,2.89-7.23,2.93-11.09,1.24C33.45,111,31.56,106.14,31.88,101.37Z" transform="translate(0 -0.2)"/><path class="cls-4" d="M56.1,104.6c0-12.85,1.67-25.42,6.56-37.41Q73.6,40.37,100.55,29.72c1.39-.55,2.82-1,4.23-1.52a1.77,1.77,0,0,1,2.44.73c.62,1.2-.11,2-1.08,2.52C85.8,42.11,75.56,63.9,75.35,86.27a108.77,108.77,0,0,0,2,23.48c2.68,15.62-20.09,18.45-21.21,1.88C56,109.3,56.1,106.94,56.1,104.6Z" transform="translate(0 -0.2)"/><path class="cls-5" d="M77.46,87.9c-.64-23.18,9.86-46.44,31.7-55.37a1.63,1.63,0,0,1,2,.56,1.57,1.57,0,0,1-.37,2c-1,1-2,2-3,3C90.77,53.7,89,79.82,98,100.16c1.35,3.09,3.08,6,4.07,9.27,2.23,7.4-3.22,14.4-10.49,13.93-10-.72-11.62-12.27-12.86-20.49C77.88,97.59,77.2,92.29,77.46,87.9Z" transform="translate(0 -0.2)"/><path class="cls-6" d="M17.3,33.58a174.19,174.19,0,0,1,29.75,1.66,24.85,24.85,0,0,1,6.79,1.68c4,1.84,4.84,5.78,1.74,8.88a101.94,101.94,0,0,0-11,12.75A61.15,61.15,0,0,0,38.09,69.7c-.62,1.43-1.3,2.72-3.11,2.85s-2.77-1.19-3.56-2.65C24.47,57,14,46.67,2.64,37.61c-.89-.71-2-1.35-1.56-2.69.46-1.53,1.87-1.33,3.06-1.33C8.64,33.56,13.14,33.58,17.3,33.58Z" transform="translate(0 -0.2)"/></svg>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <a href="/welcome.blade.php" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 48 48">
                                    <path fill="#FFA000" d="M30 41L26 45 22 45 18 41 18 21 30 21 30 29 28 31 30 33 30 35 28 37 30 39z"></path><path fill="#FFA000" d="M38,7.8C37.5,6,36,4.7,34.3,4.2C31.9,3.7,28.2,3,24,3s-7.9,0.7-10.3,1.2C12,4.7,10.5,6,10,7.8c-0.5,1.7-1,4.1-1,6.7c0,2.6,0.5,5,1,6.7c0.5,1.8,1.9,3.1,3.7,3.5C16.1,25.3,19.8,26,24,26s7.9-0.7,10.3-1.2c1.8-0.4,3.2-1.8,3.7-3.5c0.5-1.7,1-4.1,1-6.7C39,11.9,38.5,9.5,38,7.8z M29,13H19c-1.1,0-2-0.9-2-2V9c0-0.6,3.1-1,7-1s7,0.4,7,1v2C31,12.1,30.1,13,29,13z"></path><path fill="#D68600" d="M23 26H25V45H23z"></path>
                                    </svg>
                            </div>
                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Cambio de contraseña</h2>
                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Documentacion para poder cambiar tu contrasena de tu laptop                            </p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <a href="" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" version="1">
                                    <rect style="opacity:0.2" width="25" height="16" x="3" y="12" rx="1.25" ry="1.25"/>
                                    <path style="fill:#dd772f" d="M 3,21.75 C 3,22.442 3.5575,23 4.25,23 H 26.75 C 27.442,23 28,22.442 28,21.75 V 8.25 C 28,7.5575 27.442,7 26.75,7 H 14 V 6.25 C 14,5.5575 13.443,5 12.75,5 H 4.25 C 3.5575,5 3,5.5575 3,6.25"/>
                                    <rect style="opacity:0.2" width="25" height="16" x="3" y="10" rx="1.25" ry="1.25"/>
                                    <rect style="fill:#e4e4e4" width="21" height="10" x="5" y="9" rx="1.25" ry="1.25"/>
                                    <rect style="fill:#ee923a" width="25" height="16" x="3" y="11" rx="1.25" ry="1.25"/>
                                    <path style="opacity:0.1;fill:#ffffff" d="M 4.25 5 C 3.5575 5 3 5.5575 3 6.25 L 3 7.25 C 3 6.5575 3.5575 6 4.25 6 L 12.75 6 C 13.443 6 14 6.5575 14 7.25 L 14 8 L 26.75 8 C 27.442 8 28 8.5575 28 9.25 L 28 8.25 C 28 7.5575 27.442 7 26.75 7 L 14 7 L 14 6.25 C 14 5.5575 13.443 5 12.75 5 L 4.25 5 z"/>
                                </svg>
                            </div>
                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Archivos</h2>
                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Docuementacion para acceder a los archivos de las carpetas compartidas.
                            </p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <a href="" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <?xml version="1.0" ?><svg height="32" id="svg4063" version="1.1" viewBox="0 0 32 32.000001" width="32" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><defs id="defs4065"/><g id="layer1" transform="translate(0,-1020.3621)"><g id="g7966" transform="translate(-766.49658,-562.0323)"><g id="g8296"><path d="m 791.49658,1590.3944 0,18.5 c 0,0.831 -0.669,1.5 -1.50001,1.5 l -15.99997,0 c -0.83101,0 -1.50002,-0.669 -1.50002,-1.5 l 0,-22 c 0,-0.831 0.66901,-1.5 1.50002,-1.5 l 12.49998,0" id="path4992" style="opacity:1;fill:#f5ba15;fill-opacity:1;stroke:none;stroke-width:1;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4.0999999;stroke-dasharray:none"/><path d="m 786.49661,1585.3944 0,3.5 c 0,0.831 0.66899,1.5 1.5,1.5 l 3.5,0 z" id="path5330" style="opacity:1;fill:#fadc87;fill-opacity:1;stroke:none;stroke-width:1;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4.0999999;stroke-dasharray:none"/><path d="m 776.49731,1594.3944 0,11 11,0 0,-11 -11,0 z m 2,3 7,0 0,5 -7,0 0,-5 z" id="path5332" style="fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.99999994;stroke-linecap:round;stroke-linejoin:round"/></g></g></g></svg>
                            </div>
                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentacion</h2>
                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Documentacion sobre soluciones a problemas tecnicos
                            </p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg style="enable-background:new 0 0 312 312;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                                    .st0{display:none;}
                                    .st1{display:inline;fill:#F3AD2E;}
                                    .st2{display:inline;}
                                    .st3{fill:#F3AD2E;}
                                    .st4{clip-path:url(#SVGID_2_);}
                                    .st5{fill:none;}
                                </style><g><g class="st0" id="Layer_1"><path class="st1" d="M256,28C130.1,28,28,130.1,28,256s102.1,228,228,228s228-102.1,228-228S381.9,28,256,28z M256,122     c36.7,0,66.5,29.8,66.5,66.5S292.7,255,256,255s-66.5-29.8-66.5-66.5S219.3,122,256,122z M363.5,351.2     c0,21.3-17.4,38.7-38.7,38.7H187.2c-21.3,0-38.7-17.4-38.7-38.7v-82c0-21.3,17.4-38.7,38.7-38.7h3.2c13.5,22,37.8,36.7,65.5,36.7     s52-14.7,65.5-36.7h3.2c21.3,0,38.7,17.4,38.7,38.7V351.2z"/></g><g class="st0" id="Layer_2"><g class="st2"><path class="st3" d="M366.8,29h-279c-27.5,0-50,22.5-50,50v354c0,27.5,22.5,50,50,50h279c27.5,0,50-22.5,50-50V79      C416.8,51.5,394.3,29,366.8,29z M227.3,122c36.7,0,66.5,29.8,66.5,66.5S264,255,227.3,255s-66.5-29.8-66.5-66.5      S190.5,122,227.3,122z M334.8,351.2c0,21.3-17.4,38.7-38.7,38.7H158.5c-21.3,0-38.7-17.4-38.7-38.7v-82      c0-21.3,17.4-38.7,38.7-38.7h3.2c13.5,22,37.8,36.7,65.5,36.7s52-14.7,65.5-36.7h3.2c21.3,0,38.7,17.4,38.7,38.7V351.2z"/><g><defs><rect height="275" id="SVGID_1_" width="61.5" x="412.8" y="113"/></defs><clipPath id="SVGID_2_"><use style="overflow:visible;" xlink:href="#SVGID_1_"/></clipPath><g class="st4"><path class="st3" d="M464.3,120h-72c-5.5,0-10,4.5-10,10v46c0,5.5,4.5,10,10,10h72c5.5,0,10-4.5,10-10v-46        C474.3,124.5,469.8,120,464.3,120z"/><path class="st3" d="M436.8,318h-72c-5.5,0-10,4.5-10,10v46c0,5.5,4.5,10,10,10h72c5.5,0,10-4.5,10-10v-46        C446.8,322.5,442.3,318,436.8,318z"/><path class="st3" d="M453.8,219h-72c-5.5,0-10,4.5-10,10v46c0,5.5,4.5,10,10,10h72c5.5,0,10-4.5,10-10v-46        C463.8,223.5,459.3,219,453.8,219z"/></g></g></g></g><g class="st0" id="Layer_3"><g class="st2"><path class="st3" d="M475,107h-20.5c-3.2,22-22.1,39-45,39s-41.9-17-45-39H147.5c-3.2,22-22.1,39-45,39s-41.9-17-45-39H37      c-5.5,0-10,4.5-10,10v322c0,5.5,4.5,10,10,10h438c5.5,0,10-4.5,10-10V117C485,111.5,480.5,107,475,107z M156,175      c28.2,0,51.1,22.9,51.1,51.1s-22.9,51.1-51.1,51.1s-51.1-22.9-51.1-51.1S127.8,175,156,175z M238.6,351.2      c0,16.4-13.4,29.8-29.8,29.8H103.1c-16.4,0-29.8-13.4-29.8-29.8v-63c0-16.4,13.4-29.8,29.8-29.8h2.5      c10.4,16.9,29,28.2,50.4,28.2s40-11.3,50.4-28.2h2.5c16.4,0,29.8,13.4,29.8,29.8V351.2z M438,348c0,5.5-4.5,10-10,10H273      c-5.5,0-10-4.5-10-10v-7c0-5.5,4.5-10,10-10h155c5.5,0,10,4.5,10,10V348z M438,283c0,5.5-4.5,10-10,10H273c-5.5,0-10-4.5-10-10      v-7c0-5.5,4.5-10,10-10h155c5.5,0,10,4.5,10,10V283z M438,218c0,5.5-4.5,10-10,10H273c-5.5,0-10-4.5-10-10v-7      c0-5.5,4.5-10,10-10h155c5.5,0,10,4.5,10,10V218z"/><path class="st3" d="M102.5,63C82.3,63,66,79.3,66,99.5S82.3,136,102.5,136S139,119.7,139,99.5S122.7,63,102.5,63z M102.5,123      c-13,0-23.5-10.5-23.5-23.5S89.5,76,102.5,76S126,86.5,126,99.5S115.5,123,102.5,123z"/><path class="st3" d="M410.5,63C390.3,63,374,79.3,374,99.5s16.3,36.5,36.5,36.5S447,119.7,447,99.5S430.7,63,410.5,63z       M410.5,123c-13,0-23.5-10.5-23.5-23.5S397.5,76,410.5,76S434,86.5,434,99.5S423.5,123,410.5,123z"/></g></g><g class="st0" id="Layer_4"><g class="st2"><path class="st3" d="M357.4,182.7h-64c-4.1,0-7.5,3.4-7.5,7.5v0c0,4.1,3.4,7.5,7.5,7.5h64c4.1,0,7.5-3.4,7.5-7.5v0      C364.9,186,361.5,182.7,357.4,182.7z"/><path class="st3" d="M357.4,155.3h-64c-4.1,0-7.5,3.4-7.5,7.5s3.4,7.5,7.5,7.5h64c4.1,0,7.5-3.4,7.5-7.5      S361.5,155.3,357.4,155.3z"/><path class="st3" d="M256,28C130.1,28,28,130.1,28,256s102.1,228,228,228s228-102.1,228-228S381.9,28,256,28z M197,194      c28.5,0,51.6,23.1,51.6,51.6c0,28.5-23.1,51.6-51.6,51.6s-51.6-23.1-51.6-51.6C145.4,217.1,168.5,194,197,194z M280.5,371.9      c0,16.5-13.5,30.1-30.1,30.1H143.6c-16.5,0-30.1-13.5-30.1-30.1v-63.7c0-16.5,13.5-30.1,30.1-30.1h2.5      c10.5,17.1,29.3,28.5,50.9,28.5s40.4-11.4,50.9-28.5h2.5c16.5,0,30.1,13.5,30.1,30.1V371.9z M405.4,183.7      c0,17.9-12.7,32.6-28.2,32.6h-62.1L255.2,240l17.9-23.8h0.4c-15.5,0-28.2-14.7-28.2-32.6v-41.3c0-17.9,12.7-32.6,28.2-32.6      h103.7c15.5,0,28.2,14.7,28.2,32.6V183.7z"/><path class="st3" d="M357.4,128h-64c-4.1,0-7.5,3.4-7.5,7.5s3.4,7.5,7.5,7.5h64c4.1,0,7.5-3.4,7.5-7.5S361.5,128,357.4,128z"/></g></g><g class="st0" id="Layer_5"><path class="st1" d="M255,27C129.1,27,27,129.1,27,255s102.1,228,228,228s228-102.1,228-228S380.9,27,255,27z M208.6,146.8     c34,0,61.6,27.6,61.6,61.6c0,34-27.6,61.6-61.6,61.6S147,242.4,147,208.4C147,174.4,174.6,146.8,208.6,146.8z M308.1,359.1     c0,19.7-16.1,35.9-35.9,35.9H144.9c-19.7,0-35.9-16.1-35.9-35.9v-75.9c0-19.7,16.1-35.9,35.9-35.9h3c12.5,20.4,35,34,60.7,34     c25.7,0,48.2-13.6,60.7-34h3c19.7,0,35.9,16.1,35.9,35.9V359.1z M378.4,205.9V257h-23.9v-51.1h-51.1v-23.9h51.1V131h23.9v51.1     h51.1v23.9H378.4z"/></g><g class="st0" id="Layer_6"><path class="st1" d="M256,28C130.1,28,28,130.1,28,256s102.1,228,228,228s228-102.1,228-228S381.9,28,256,28z M209.6,147.8     c34,0,61.6,27.6,61.6,61.6c0,34-27.6,61.6-61.6,61.6S148,243.4,148,209.4C148,175.4,175.6,147.8,209.6,147.8z M309.1,360.1     c0,19.7-16.1,35.9-35.9,35.9H145.9c-19.7,0-35.9-16.1-35.9-35.9v-75.9c0-19.7,16.1-35.9,35.9-35.9h3c12.5,20.4,35,34,60.7,34     c25.7,0,48.2-13.6,60.7-34h3c19.7,0,35.9,16.1,35.9,35.9V360.1z M305,207v-24h122v24H305z"/></g><g class="st0" id="Layer_7"><path class="st1" d="M256,28C130.1,28,28,130.1,28,256s102.1,228,228,228s228-102.1,228-228S381.9,28,256,28z M209.6,147.8     c34,0,61.6,27.6,61.6,61.6c0,34-27.6,61.6-61.6,61.6S148,243.4,148,209.4C148,175.4,175.6,147.8,209.6,147.8z M309.1,360.1     c0,19.7-16.1,35.9-35.9,35.9H145.9c-19.7,0-35.9-16.1-35.9-35.9v-75.9c0-19.7,16.1-35.9,35.9-35.9h3c12.5,20.4,35,34,60.7,34     c25.7,0,48.2-13.6,60.7-34h3c19.7,0,35.9,16.1,35.9,35.9V360.1z M368.8,239.2l-17,17l-17-17l-41-41l17-17l41,41l69.3-69.3l17,17     L368.8,239.2z"/></g><g class="st0" id="Layer_8"><g class="st2"><path class="st3" d="M256,28C130.1,28,28,130.1,28,256s102.1,228,228,228s228-102.1,228-228S381.9,28,256,28z M340.7,103      c25.8,0,46.7,20.9,46.7,46.7c0,25.8-20.9,46.7-46.7,46.7c-25.8,0-46.7-20.9-46.7-46.7C294,123.9,314.9,103,340.7,103z       M302.6,269.7c0,25.8-20.9,46.7-46.7,46.7c-25.8,0-46.7-20.9-46.7-46.7c0-25.8,20.9-46.7,46.7-46.7      C281.7,223,302.6,243.9,302.6,269.7z M171.3,103c25.8,0,46.7,20.9,46.7,46.7c0,25.8-20.9,46.7-46.7,46.7      c-25.8,0-46.7-20.9-46.7-46.7C124.6,123.9,145.5,103,171.3,103z M95.9,263.8v-57.5c0-14.9,12.2-27.2,27.2-27.2h2.3      c9.5,15.5,26.5,25.8,46,25.8c19.5,0,36.5-10.3,46-25.8h2.3c14.9,0,27.2,12.2,27.2,27.2v11c-25.2,4.3-44.4,26.2-44.4,52.4      c0,7.6,1.6,14.8,4.5,21.3H123C108.1,291,95.9,278.8,95.9,263.8z M331.4,381.8c0,14.9-12.2,27.2-27.2,27.2h-96.5      c-14.9,0-27.2-12.2-27.2-27.2v-57.5c0-14.9,12.2-27.2,27.2-27.2h2.3c9.5,15.5,26.5,25.8,46,25.8c19.5,0,36.5-10.3,46-25.8h2.3      c14.9,0,27.2,12.2,27.2,27.2V381.8z M416.1,263.8c0,14.9-12.2,27.2-27.2,27.2h-83.8c2.9-6.5,4.5-13.7,4.5-21.3      c0-26.3-19.2-48.1-44.4-52.4v-11c0-14.9,12.2-27.2,27.2-27.2h2.3c9.5,15.5,26.5,25.8,46,25.8c19.5,0,36.5-10.3,46-25.8h2.3      c14.9,0,27.2,12.2,27.2,27.2V263.8z"/></g></g><g class="st0" id="Layer_9"><g class="st2"><rect class="st3" height="63.7" width="27.3" x="312.4" y="308.1"/><path class="st3" d="M256,28C130.1,28,28,130.1,28,256s102.1,228,228,228s228-102.1,228-228S381.9,28,256,28z M216,91      c36.7,0,66.5,29.8,66.5,66.5S252.7,224,216,224s-66.5-29.8-66.5-66.5S179.3,91,216,91z M319.5,221.2      C266.2,224.5,224,268.8,224,323c0,12.7,2.3,24.8,6.5,36h-83.3c-21.3,0-38.7-17.4-38.7-38.7v-82c0-21.3,17.4-38.7,38.7-38.7h3.2      c13.5,22,37.8,36.7,65.5,36.7s52-14.7,65.5-36.7h3.2C300,199.5,313.2,208.4,319.5,221.2 M326,404.7c-45.1,0-81.7-36.6-81.7-81.7      c0-45.1,36.6-81.7,81.7-81.7c45.1,0,81.7,36.6,81.7,81.7C407.7,368.1,371.1,404.7,326,404.7z"/><rect class="st3" height="23.1" width="27.3" x="312.4" y="274.2"/></g></g><g id="Layer_10"><g><path class="st3" d="M327.7,354.2c-3.3,0-6.1,1.2-8.5,3.5c-2.3,2.3-3.5,5.1-3.5,8.5c0,3.3,1.2,6.1,3.5,8.5      c2.4,2.4,5.2,3.5,8.6,3.5s6.2-1.2,8.6-3.5c2.4-2.4,3.6-5.2,3.6-8.5c0-3.3-1.2-6.1-3.6-8.5C334,355.3,331.1,354.2,327.7,354.2z"/><path class="st3" d="M256,28C130.1,28,28,130.1,28,256s102.1,228,228,228s228-102.1,228-228S381.9,28,256,28z M216,91      c36.7,0,66.5,29.8,66.5,66.5S252.7,224,216,224s-66.5-29.8-66.5-66.5S179.3,91,216,91z M147.2,359c-21.3,0-38.7-17.4-38.7-38.7      v-82c0-21.3,17.4-38.7,38.7-38.7h3.2c13.5,22,37.8,36.7,65.5,36.7s52-14.7,65.5-36.7h3.2c15.2,0,28.4,8.9,34.8,21.7      C266.2,224.5,224,268.8,224,323c0,12.7,2.3,24.8,6.5,36H147.2z M329,405c-45,0-81.5-36.5-81.5-81.5c0-45,36.5-81.5,81.5-81.5      s81.5,36.5,81.5,81.5C410.5,368.5,374,405,329,405z"/><path class="st3" d="M346.7,272.5c-4.6-2.4-10.2-3.6-16.8-3.6c-10.2,0-18.4,2.9-24.7,8.8c-6.2,5.9-9.3,13.3-9.2,22.2h18.3      c0-4,1.4-7.2,4.2-9.8c2.7-2.5,6.3-3.8,10.6-3.8c4.2,0,7.5,1,10,3.1c2.5,2.1,3.7,4.6,3.7,7.6c0,2.2-0.5,4.1-1.5,5.7      c-1,1.6-4,4.6-8.9,8.9c-5.1,4.5-8.8,9.3-11.1,14.4s-3.4,10.8-3.4,17l0.1,3.1h18.9c0.2-4.5,0.6-8,1.3-10.5s1.6-4.5,2.6-6      c1-1.5,3.6-4.1,7.6-7.8c4.2-3.9,6.9-6.6,8-8.2c1.9-2.8,3.3-5.5,4.2-8.2c0.9-2.7,1.3-5.4,1.3-8.1c0-5-1.4-9.8-4.2-14.4      C355,278.4,351.3,274.9,346.7,272.5z"/></g><line class="st5" x1="318.5" x2="318.5" y1="220.2" y2="241"/></g></g></svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Usuarios</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Para modificar tu usuario
                            </p>
                        </div>
                    </div>
                </div>
            </div>
                <br>
                <br>

                <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    TV Azteca, M.R. & ©, TV Azteca, S.A.B. de C.V. Todos los derechos reservados, 2024.
                    <br>
                    Queda prohibida la reproducción total o parcial sin la autorización previa, expresa y por escrito de su titular.
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    @yield('scripts')
</body>
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
    <script>
        var botmanWidget = {
            displayMessageTime: 'true',
            mainColor: '#F3AD2E',
            bubbleBackground: '#F3AD2E',
            title: 'Bot Asistente TV Azteca',
            aboutText: 'Empieza la conversación con "Hola"',
            introMessage: "¡Bienvenido al soporte técnico de TV Azteca Puebla! ¿En qué podemos ayudarte hoy? Estamos aquí para resolver tus dudas y problemas técnicos de manera rápida y eficiente."
        };
    </script>
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script> --}}
</html>

