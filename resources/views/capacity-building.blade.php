<x-layouts.app>
    <div class="top-capacity bg-cover bg-top bg-no-repeat justify-center flex flex-wrap content-end bg-primary">
        <div class=" w-full">
            <div class="text-center">
                <h1 class="text-white ">Capacity Building</h1>
                <h2 class="text-white mt-0">Courses and Resources</h2></div>
        </div>
    </div>
    <div class="container mx-auto ">

        <div class="lg:w-5/6 mx-auto mt-16 px-10 lg:px-0">
            <p class="px-10 lg:px-0"></p>


            <h3>RMS Resources</h3>
            <div class="divider"></div>
            <p class="mb-10">Over the last 10 years of supporting CCRP grantees, we have created many different
                resources, including videos, reference documents, training guides and webinar recordings. You can find
                these on our <a
                    href="{{ config('app.resources_site_url') }}/resources?refinementList%5Baudiences.name.en%5D%5B0%5D=CCRP">
                    resources repository</a> on the Stats4SD website.

            </p>
            <h4>Featured Resources</h4>
            <div
                class="text-left w-full resource-cards  mx-auto flex flex-col lg:flex-row justify-between items-stretch mb-8 mt-10">

                @foreach($featuredTroves as $trove)
                    <div class="card  lg:w-96 bg-base-100 shadow-xl image-full mx-3 mb-5 ">
                        <figure><img src="{{ $trove->trove_cover_image }}"
                                     alt="{{ $trove->trove_data['title'] }} . 'cover image'" class=""/></figure>
                        <div class="card-body  self-end mt-10">
                            <h3 class="card-title">{{ $trove->trove_data['title'] }}</h3>
                            <p>{!! Str::limit($trove->trove_data['description'], 100, '...') !!}</p>

                        </div>
                        <a class="block absolute h-full w-full top-0 z-50 rounded-2xl hover:bg-black hover:opacity-20"
                           href="{{ config('app.resources_site_url') . '/resources/' . $trove->trove_data['slug'] }}"
                           target="blank"> </a>
                    </div>

                @endforeach

                {{--<div class="card  lg:w-96 bg-base-100 shadow-xl image-full mx-3 mb-5">--}}
                {{--  <figure><img src="img/oxc1.png" alt="Shoes" class="" /></figure>--}}
                {{--  <div class="card-body  self-end mt-10">--}}
                {{--    <h3 class="card-title">Options by Context - The Concept</h3>--}}
                {{--    <p>An online guide about how to present research results. Includes videos, written guidance and links for further reading.</p>--}}

                {{--  </div>--}}
                {{--  <a class="block absolute h-full w-full top-0 z-50 rounded-2xl hover:bg-black hover:opacity-20" href="https://stats4sd.org/resources/options-by-context-the-concept_2019-05-13_19:34:34" target="blank"> </a>--}}
                {{--</div>--}}
                {{--<div class="card  lg:w-96 bg-base-100 shadow-xl image-full mx-3 mb-5">--}}
                {{--  <figure><img src="img/datamanagement.png" alt="Shoes" class="" /></figure>--}}
                {{--  <div class="card-body  self-end mt-10">--}}
                {{--    <h3 class="card-title">Introduccion al manejo de datos en R</h3>--}}
                {{--    <p>Introduccion al manejo de datos en R (en español).</p>--}}

                {{--  </div>--}}
                {{--  <a class="block absolute h-full w-full top-0 z-50 rounded-2xl hover:bg-black hover:opacity-20" href="https://stats4sd.org/resources/introduccion-al-manejo-de-datos-en-r_2019-05-13_19:49:55" target="blank"> </a>--}}
                {{--</div>--}}
            </div>

            <!--

            <div class= "text-left w-full   mx-auto flex flex-col md:flex-row justify-between items-stretch mb-16 mt-10">
            <div class="card w-96 bg-base-100 shadow-xl mx-3">
              <figure><img src="img/presentingresults.jpg" class="object-cover w-full h-48" alt="Presenting results" /></figure>
              <div class="card-body ">
                <h3 class="card-title mt-0">Presenting Research Results</h3>
                <p>An online guide about how to present research results. Includes videos, written guidance and links for further reading.</p>
                <div class="card-actions justify-center">
                  <a href="https://stats4sd.org/resources/presenting-research-results-placeholder_2021-05-10_06:15:25" target="blank"><button class="btn btn-primary border-none mt-4">View Resource</button></a>
                </div>
              </div>
            </div>
            <div class="card w-96 bg-base-100 shadow-xl mx-3">
              <figure><img src="img/oxc1.png" class="object-cover w-full h-48" alt="Presenting results" /></figure>
              <div class="card-body ">
                <h3 class="card-title mt-0">Options by Context - The Concept</h2>
                <p>In this short video, Ric Coe introduces the concepts of options by context interactions.</p>
                <div class="card-actions justify-center">
                  <a href="https://stats4sd.org/resources/options-by-context-the-concept_2019-05-13_19:34:34" target="blank"><button class="btn btn-primary border-none mt-4">View Resource</button></a>
                </div>
              </div>
            </div>
            <div class="card w-96 bg-base-100 shadow-xl mx-3">
              <figure><img src="img/datamanagement.png" class="object-cover w-full h-48" alt="Presenting results" /></figure>
              <div class="card-body ">
                <h3 class="card-title mt-0">Introduccion al manejo de datos en R</h3>
                <p class="hidden md:block" >Introduccion al manejo de datos en R (en español).</p>
                <div class="card-actions justify-center">
                  <a href="https://stats4sd.org/resources/introduccion-al-manejo-de-datos-en-r_2019-05-13_19:49:55" target="blank"><button class="btn btn-primary border-none mt-4">View Resource</button></a>
                </div>
              </div>
            </div>

            </div>

            <div class="carousel w-full 2xl:w-5/6 mt-4 mb-10 max-h-80 md:max-h-full mx-auto drop-shadow-xl" style="height: 420px">
              <div id="slide1" class="carousel-item relative w-full">
                <img src="img/presentingresults.jpg" class="w-full object-cover " />
                <div class="absolute bg-black bg-opacity-70 h-1/3 w-full top-2/3 text-white px-10 sm:px-20 py-2 sm:py-5">
                <h3 class="text-white mt-0">Presenting Research Results</h3>
                <p class="hidden md:block" >An online guide about how to present research results. Includes videos, written guidance and links for further reading.</p>
                </div>
                <a class="block absolute h-full w-full top-0" href="https://stats4sd.org/resources/presenting-research-results-placeholder_2021-05-10_06:15:25"> </a>
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2 ">

                  <a href="#slide3" class="btn btn-circle">❮</a>
                  <a href="#slide2" class="btn btn-circle">❯</a>
                </div>
              </div>
              <div id="slide2" class="carousel-item relative w-full">
                <img src="img/oxc1.png" class="w-full object-cover" />
                <div class="absolute bg-black bg-opacity-70 h-1/3 w-full top-2/3 text-white px-20 py-50">
                <h3 class="text-white">Options by Context - The Concept</h3>
                <p class="hidden md:block" >In this short video, Ric Coe introduces the concepts of options by context interactions.</p>
                </div>
                <a class="block absolute h-full w-full top-0" href="https://stats4sd.org/resources/options-by-context-the-concept_2019-05-13_19:34:34"> </a>
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                  <a href="#slide1" class="btn btn-circle">❮</a>
                  <a href="#slide3" class="btn btn-circle">❯</a>
                </div>
              </div>
              <div id="slide3" class="carousel-item relative w-full">
                <img src="img/datamanagement.png" class="w-full object-cover" />
                <div class="absolute bg-black bg-opacity-70 h-1/3 w-full top-2/3 text-white px-20 py-50">
                <h3 class="text-white">Introduccion al manejo de datos en R </h3>
                <p class="hidden md:block" >Introduccion al manejo de datos en R (en español). </p>
                </div>
                <a class="block absolute h-full w-full top-0" href="https://stats4sd.org/resources/introduccion-al-manejo-de-datos-en-r_2019-05-13_19:49:55"> </a>
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                  <a href="#slide2" class="btn btn-circle">❮</a>
                  <a href="#slide1" class="btn btn-circle">❯</a>
                </div>
              </div>


            </div> -->


            <a href="{{ config('app.resources_site_url')}}/resources?refinementList%5Baudiences.name.en%5D%5B0%5D=CCRP">
                <button class="btn-primary block mx-auto">View all RMS Resources</button>
            </a>


            <h3>Upcoming Courses</h3>
            <div class="divider"></div>



            <button class="btn-primary block">See all RMS events</button>
</x-layouts.app>
