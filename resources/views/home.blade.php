<x-layouts.app>
    <div class="top-home bg-cover bg-top bg-no-repeat justify-center flex flex-wrap content-end ">

        <div class=" w-full">
            <div class="text-center ">
                <h1 class="text-white ">{{ t("Research Methods Support for Agroecology") }}</h1>
                <h2 class="text-white mt-0">{{ t("A CCRP cross-cutting project") }}</h2>
            </div>
</div>
        </div>
<div class="w-full">

<div class="text-left w-full resource-cards callboxes mx-auto flex flex-col lg:flex-row justify-center items-stretch mb-8 mt-10">

    <div class="card h-80 lg:h-110 lg:w-80 bg-base-100 shadow-xl image-full mx-7 mb-5 ">
        <figure><img src="/img/helpbox.jpg"  class="min-h-full"/></figure>
        <div class="card-body  self-end mt-10">
            <h3 class="flex items-end">{{ t("Help for Grantees") }}</h3    >
            <p>{{ t("Are you a CCRP Grantee in need of Research support? Click here!") }}</p>

        </div>
        <a class="block absolute h-full w-full top-0 z-50 rounded-2xl hover:bg-black hover:opacity-20"
           href="{{ url('grantees') }}"> </a>
    </div>
    <div class="card h-80 lg:h-110 lg:w-80 bg-base-100 shadow-xl image-full mx-7 mb-5 ">
        <figure><img src="/img/capacitybox.jpg"  class="min-h-full"/></figure>
        <div class="card-body  self-end mt-10">
            <h3 class="flex items-end">{{ t("Capacity Building") }}</h3    >
            <p>{{ t("See our growing collection of online resources.") }}</p>

        </div>
        <a class="block absolute h-full w-full top-0 z-50 rounded-2xl hover:bg-black hover:opacity-20"
           href="{{ url('capacity-building') }}"> </a>
    </div>   <div class="card h-80 lg:h-110 lg:w-80 bg-base-100 shadow-xl image-full mx-7 mb-5 ">
        <figure><img src="/img/eventsbox.jpg"  class="min-h-full"/></figure>
        <div class="card-body  self-end mt-10">
            <h3 class="flex items-end">{{ t("Events") }}</h3    >
            <p>{{ t("We run a series of training courses and webinars throughout the year.") }}</p>

        </div>
        <a class="block absolute h-full w-full top-0 z-50 rounded-2xl hover:bg-black hover:opacity-20"
           href="{{ url('events') }}"> </a>
    </div>
</div>
<!-- <div class="text-left w-full xl:w-4/6 call-boxes mx-auto flex  flex-col relative md:flex-row items-stretch mb-8   ">


                    <div class="h-110 w-full md:w-1/3 mx-4 bg-base-100 image-full mb-5 ">
                        <div class="card-body text-white block absolute h-110 mx-4 rounded-xl  w-full md:w-1/3 top-0" id="grantees">
                            
                        <div class="mx-auto w-5/6 lg:w-2/3">
                            <h3 class=" mt-48">help for grantees</h3>
                            <p>stuff stuff </p>
</div>

                        </div>
                        <a class="block absolute h-110 w-full md:w-1/3 mx-4 rounded-xl top-0 z-50 hover:bg-black hover:opacity-20"
                           href=""
                           target="blank"> </a>
                    </div>
                    <div class="h-110 w-full mx-4  md:w-1/3 bg-base-100 image-full mb-5 ">
                        <div class="card-body text-white block absolute mx-4 rounded-xl h-110 w-full md:w-1/3 top-0" id="capacity">
                            <div class="mx-auto w-full lg:w-2/3">
                            <h3 class=" mt-48">help for grantees</h3>
                            <p>stuff stuff </p>
                            </div>

                        </div>
                        <a class="block absolute h-110 w-full md:w-1/3 mx-4 rounded-xl top-0 z-50 hover:bg-black hover:opacity-20"
                           href=""
                           target="blank"> </a>
                    </div>                   
                     <div class="h-110 w-full mx-4 md:w-1/3 bg-base-100 image-full mb-5 ">
                        <div class="card-body mx-4 rounded-xl text-white block absolute h-110 w-full md:w-1/3 top-0" id="events">
                        <div class="mx-auto w-5/6 lg:w-2/3">
                            <h3 class=" mt-48">Events</h3>
                            <p>What's on? </p>
</div>
                        </div>
                        <a class="block absolute h-110 w-full md:w-1/3 mx-4 rounded-xl top-0 z-50 hover:bg-black hover:opacity-20"
                           href=""
                           target="blank"> </a>
                    </div>
</div> -->
</div>


<!-- 


    <div class="container mx-auto mt-5 ">
    <div class="w-full 2xl:w-5/6 ">
            <div class="text-center container flex flex-col md:flex-row justify-center items-center mx-auto">
            <div class="ml-3 sm:mx-5 mt-8 self-stretch w-11/12 md:w-3/12"><a href="{{ url('grantees') }}"><button class="btn-box "> <h3>Help for Grantees </h3><p class="font-normal hidden lg:block">Are you a CCRP Grantee in need of Research support? Click here!</p></button></a></div>
            <div class="ml-3 sm:mx-5 mt-8 self-stretch w-11/12 md:w-3/12"><a href="{{ url('capacity-building') }}"><a href="{{ url('capacity-building') }}"><button class="btn-box "> <h3>Capacity Building </h3><p class="font-normal hidden lg:block">See our growing collection of online resources.</p></button></a></div>
            <div class="ml-3 sm:mx-5 mt-8 self-stretch w-11/12 md:w-3/12"><a href="{{ url('events') }}"><a href="{{ url('events') }}"><button class="btn-box "> <h3>Whats On </h3><p class="font-normal hidden lg:block">We run a series of training courses and webinars throughout the year.</p></button></a></div>
            </div>
        </div> -->
        <div class="w-4/6 mx-auto">
            <p class="headline"> {!! t("The Research Methods Support team (RMS) at <a href=\"https://stats4sd.org\">Statistics for Sustainable Development</a> has been working with the <a href=\"https://www.ccrp.org/\"  target=\"_blank\">Collaborative Crop
                    Research Programme (CCRP)</a> since 2009, and continues to provide support to its grantees
                throughout the research process:") !!}</p>
</div>
<div class="container mx-auto w-4/6 2xl:w-7/12 sm:text-center grid sm:grid-cols-11 ">
    <div class="w-full sm:col-span-4 sm:col-start-2 lg:col-span-3 mb-6 sm:mb-10 flex items-center sm:block">
        <img src="img/lightbulbicon1.png" class="md:px-16 lg:px-14 xl:px-16 w-14 sm:w-full 2xl:px-20  sm:px-8 mr-6 sm:mx-auto sm:mb-5">
        <p>{{ t("Research inception, design and planning") }} </p>
    </div>
    <div class="w-full sm:col-span-4 sm:col-start-7 lg:col-span-3 lg:col-start-5 mb-6 sm:mb-10 flex items-center sm:block" >
        <img src="img/handshakeicon1.png" class="md:px-16 lg:px-14 xl:px-16 w-14 sm:w-full 2xl:px-20  sm:px-8 mr-6 sm:mx-auto sm:mb-5">
        <p>{{ t("Adapting perspectives and methods for working with farmers ") }}</p>
    </div>
    <div class="w-full sm:col-span-4 sm:col-start-2 lg:col-span-3 lg:col-start-9 mb-6 sm:mb-10 flex items-center sm:block" >
        <img src="img/charticon1.png" class="md:px-16 lg:px-14 xl:px-16 w-14 sm:w-full 2xl:px-20  sm:px-8 mr-6 sm:mx-auto sm:mb-5">
        <p>{{ t("Data collection, management, and analysis") }}</p>
    </div>
    <div class="w-full sm:col-span-4 sm:col-start-7 lg:col-span-3 lg:col-start-3 mb-6 sm:mb-10 flex items-center sm:block" >
        <img src="img/bookicon1.png" class="md:px-16 lg:px-14 xl:px-16 w-14 sm:w-full 2xl:px-20  sm:px-8 mr-6 sm:mx-auto sm:mb-5">
        <p>{{ t("Preparation of research products") }}</p>
    </div>
    <div class="w-full sm:col-span-5 sm:col-start-4 lg:col-span-3 lg:col-start-7 mb-6 sm:mb-10 flex items-center sm:block" >
        <img src="img/leaficon1.png" class="md:px-20 lg:px-14 xl:px-16 2xl:px-20 sm:px-16 w-14 sm:w-full mr-6 sm:mx-auto sm:mb-5">
        <p><b>{{ t("Focus on research for agroecology.") }}</b> {{ t("Systems, transdisciplinarity, and action research") }}</p>
    </div>

</div>
<div class="w-4/6 mx-auto">
<h3>{{ t("Stay in touch") }}</h3>
            <div class="divider"></div>
<p>{{ t("We run mailing lists and WhatsApp groups for the CCRP CoPs. We use these groups to share new RMS resources, information on upcoming events, and general news from across the CCRP network. ") }}
</p>

<a href="https://docs.google.com/forms/d/e/1FAIpQLSf8EJo3hGbqXouYelFJxVOHFnT1jxC-lclMLJfHPsN8yz8sIA/viewform?usp=sf_link"><button class="btn-primary block mx-auto mb-10">Subscribe for updates</button></a>


            </div> 

        </div>
  
        <div class="text-center w-full flex flex-col sm:flex-row justify-around items-center mt-24 pb-8">
            <a href="https://stats4sd.org"><img class="mt-4 h-6" src="img/stats4sdlogo.png"></a>
            <a href="https://idems.international"><img class="mt-4 h-8" src="img/idemslogo.png"></a>
            <a href="https://www.ccrp.org/"><img class="mt-4 h-9" src="img/ccrplogo1.png"></a>
            <a href="https://www.mcknight.org/"><img class="mt-4 h-7" src="img/mcknightlogo.png"></a>
        </div>
    </div>

</x-layouts.app>
