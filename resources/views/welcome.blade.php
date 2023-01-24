<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello RMS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                <li><a>Item 1</a></li>
                <li tabindex="0">
                    <a class="justify-between">
                        Parent
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24">
                            <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"/>
                        </svg>
                    </a>
                    <ul class="p-2">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </li>
                <li><a>Item 3</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost normal-case text-xl">RMS</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a>Help for Grantees</a></li>
            <li tabindex="0"><a>Capacity Building</a></li>
            <li><a>Events</a></li>
        </ul>
    </div>
</div>
<div class="content-center ">
    <div class="my-14 flex justify-evenly items-center">

        <div class="card w-96 bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Help for Grantees</h2>
                <p>Are you a CCRP Grantee in need of Research support? Click here!</p>
            </div>
        </div>
        <div class="card w-96 bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Capacity Building</h2>
                <p>See our growing collection of online resources.</p>
            </div>
        </div>
        <div class="card w-96 bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">What's On</h2>
                <p>We run a series of training courses and webinars throughout the year.</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
