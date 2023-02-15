@extends('layouts.app')

@section('content')


<div class="top-home bg-cover bg-top bg-no-repeat justify-center flex flex-wrap content-end bg-primary">
    <div class=" w-full">
        <div class="text-center">
            <h1 class="text-white ">Research Methods Support</h1>
            <h2 class="text-white mt-0">for CCRP</h2>
         </div>
    </div>
    <div class="w-full 2xl:w-5/6 ">
        <div class="text-center container flex flex-col md:flex-row justify-center items-center mx-auto">
            <div class="ml-3 sm:mx-5 mt-8 self-stretch w-11/12 md:w-3/12"><a href="{{ url('grantees') }}"><button class="btn-box "> <h3>Help for Grantees </h3><p class="font-normal hidden lg:block">Are you a CCRP Grantee in need of Research support? Click here!</p></button></a></div>
            <div class="ml-3 sm:mx-5 mt-8 self-stretch w-11/12 md:w-3/12"><a href="{{ url('grantees') }}"><a href="{{ url('capacity-building') }}"><button class="btn-box "> <h3>Capacity Building </h3><p class="font-normal hidden lg:block">See our growing collection of online resources.</p></button></a></div>
            <div class="ml-3 sm:mx-5 mt-8 self-stretch w-11/12 md:w-3/12"><a href="{{ url('grantees') }}"><a href="{{ url('events') }}"><button class="btn-box "> <h3>Whats On </h3><p class="font-normal hidden lg:block">We run a series of training courses and webinars throughout the year.</p></button></a></div>
        </div>
    </div>
</div>
<div class="container mx-auto mt-5 ">
    <div class= "text-center w-full flex flex-col sm:flex-row justify-around items-center mb-16">
        <a href="https://stats4sd.org"><img class="mt-4 h-6" src="img/stats4sdlogo.png"></a>
<a href="https://idems.international"><img class="mt-4 h-8" src="img/idemslogo.png"></a>
<a href="https://www.ccrp.org/"><img class="mt-4 h-9" src="img/ccrplogo1.png"></a>
<a href="https://www.mcknight.org/"><img class="mt-4 h-7" src="img/mcknightlogo.png"></a>
</div>
<div class="w-5/6 mx-auto">
<p> The Research Methods Support team (RMS) has been working with the <a href="https://www.ccrp.org/" target="_blank">Collaborative Crop Research Programme (CCRP)</a> since 2009, and continues to provide support to its grantees throughout the research process:</p>


</div>
</div>


<!-- <div class="content-center ">
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
</div> -->
@endsection
