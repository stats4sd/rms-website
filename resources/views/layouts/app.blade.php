<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello RMS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('header')

</head>
<body data-theme="lemonade" class="h-screen">

<div class="navbar bg-base-100">
    <div class="navbar-start">
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
        <a class="btn btn-ghost normal-case text-xl">RMS</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <x-nav-menu/>
    </div>
</div>

<div class="content-center px-20 w-screen">
    @yield('content')

</div>


</body>

</html>
