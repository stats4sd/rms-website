<x-layouts.app>
    <div class="top-capacity bg-cover bg-top bg-no-repeat justify-center flex flex-wrap content-end bg-primary">
        <div class=" w-full">
            <div class="text-center">
                <h1 class="text-white ">{{ t("Capacity Building") }}</h1>
                <h2 class="text-white mt-0">{{ t("Courses and Resources") }}</h2></div>
        </div>
    </div>
    <div class="container mx-auto ">

        <div class="lg:w-5/6 mx-auto mt-16 px-10 lg:px-0">
            <p class="px-10 lg:px-0"></p>


            <h3>{{ t("RMS Resources") }}</h3>
            <div class="divider"></div>
            <p class="mb-10">{!! t("Over the last 10 years of supporting CCRP grantees, we have created many different
                resources, including videos, reference documents, training guides and webinar recordings. You can find
                these on our <a href=:href> resources repository</a> on the Stats4SD website.",
                [':href' => config('app.resources_site_url').'/resources?refinementList%5Baudiences.name.en%5D%5B0%5D=CCRP']) !!}

            </p>
            <h4>{{ t("Featured Resources") }}</h4>
            <div
                class="text-left w-full resource-cards  mx-auto flex flex-col lg:flex-row justify-between items-stretch mb-8 mt-10">

                @foreach($featuredTroves as $trove)
                    @if($trove->trove_data)
                        <div class="card lg:w-96 bg-base-100 shadow-xl image-full mx-3 mb-5 ">
                            <figure><img src="{{ Storage::disk('public')->url($trove->cover_image) }}"
                                         alt="{{ $trove->trove_data['title'] }} . 'cover image'" class=""/></figure>
                            <div class="card-body  self-end mt-10">
                                <h3 class="card-title">{{ $trove->trove_data['title'] }}</h3>
                                {{ Str::limit($trove->trove_data['description']) }}

                            </div>
                            <a class="block absolute h-full w-full top-0 z-50 rounded-2xl hover:bg-black hover:opacity-20"
                               href="{{ config('app.resources_site_url') . '/resources/' . $trove->trove_data['slug'] }}"
                               target="blank"> </a>
                        </div>
                    @endif

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


            <a href="{{ config('app.resources_site_url')}}/resources?refinementList%5Baudiences.name.en%5D%5B0%5D=CCRP">
                <button class="btn-primary block mx-auto">{{ t("View all RMS Resources") }}</button>
            </a>

            <div class="grid-cols-1 lg:flex lg:flex-row  lg:justify-between items-center my-10 ">

                <div class="lg:mx-8 lg:pr-5 mx-auto pt-5 lg:pt-0">
                    <h4 class=" my-4">{{ t("Youtube Channel") }}</h4>
                    {{ t("Visit the Stats4SD YouTube channel to find guides to statistical concepts and software, useful
                    walkthroughs, and reflections on the research process.") }}
                    <a href="https://www.youtube.com/@Stats4SD">
                        <button class="btn-primary block mx-auto mb-10">{{ t("View YouTube Channel") }}</button>
                    </a>

                </div>
                <div>
                    <iframe class=" mx-auto " width="560" height="315" src="https://www.youtube.com/embed/mXwTomEpHvc"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                </div>
            </div>


            <h3>{{ t("Courses and workshops") }}</h3>
            <div class="divider"></div>

            <p class="mb-10">{!! t( "RMS frequently organises workshops, seminars and training events. The majority of these are
                held online, usually with live translation between English, French and Spanish available. Our
                <a href=:href> events page</a> contains details and links to register for upcoming events.",
                [':href' => 'events']) !!}
            </p>
            <a href="{{ url('events') }}">
                <button class="btn-primary block mx-auto">{{ t("See upcoming events") }}</button>
            </a>
            <!--
            <p class="mt-10 mb-5">Along with other one-off events, we are also running two series of regular webinars in 2023:
            </p>


            <div class= "flex flex-col lg:flex-row justify-around items-stretch mb-8 ">
            <div class="lg:w-5/12 mb-6"><h4>Research Methods Seminar Series</h4>
            <p>RMS is running seminars every two months in 2023. These cover a range of topics related to research design, data collection and management, data analysis and interpretation.
            </p>
            </div>
            <div class="lg:w-5/12 mb-6 "><h4>FRN RM Sessions</h4>
            <p>Monthly FRN sessions alternate between having a practical agroecological focus and going into detail on relevant research methods topics. Contributions are led by grantees or other external speakers involved with FRNs.

            </p>
            </div> -->
        </div>
</x-layouts.app>
