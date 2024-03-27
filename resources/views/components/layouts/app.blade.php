<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ t("RMS for CRFS") }}</title>

     <style>[x-cloak] { display: none !important; }</style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @filamentStyles
    {{ $scripts ?? ''}}

</head>
<body data-theme="lemonade" class="">
@filamentScripts
@livewire('notifications')

<div class="w-100 flex justify-between bg-base-100 py-3">
    <div class="">
        {{-- Mobile Navigation --}}
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/>
                </svg>
            </label>
            <x-nav-menu tabindex="0"
                        class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52"/>
        </div>
        <a class="btn btn-ghost normal-case text-xl" href="/">RMS</a>
    </div>
    <div class="navbar-center hidden lg:flex flex-row-reverse mr-20  ">
        <x-nav-menu/>
    </div>
</div>

<div class="content-center  w-screen pb-20">
    {{ $slot }}

</div>


</body>

</html>
