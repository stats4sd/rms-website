@extends('layouts.app')

@section('content')
<div class="top-capacity bg-cover bg-top bg-no-repeat justify-center flex flex-wrap content-end bg-primary">
    <div class=" w-full">
        <div class="text-center">
        <h1 class="text-white ">Capacity Building</h1>
            <h2 class="text-white mt-0">Courses and Resources</h2>         </div>
    </div>
</div>
<div class="container mx-auto ">

<div class="lg:w-5/6 mx-auto mt-16 px-10 lg:px-0">
<p class="px-10 lg:px-0"></p>


<h3>RMS Resources</h3>
<div class="divider"></div>
<p class="mb-10">Over the last 10 years of supporting CCRP grantees, we have created many different resources, including videos, reference documents, training guides and webinar recordings. You can find these on our <a href="https://stats4sd.org/resources?refinementList%5Baudiences.name.en%5D%5B0%5D=CCRP"> resources repository</a> on the Stats4SD website.
 
</p>
<h4>Featured Resources</h4>
<div class= "text-left w-full resource-cards  mx-auto flex flex-col lg:flex-row justify-between items-stretch mb-8 mt-10">
<div class="card  lg:w-96 bg-base-100 shadow-xl image-full mx-3 mb-5 ">
  <figure><img src="img/presentingresults.jpg"  class="" /></figure>
  <div class="card-body  self-end mt-10">
    <h3 class="card-title">Presenting Research Results</h3>
    <p>An online guide about how to present research results. Includes videos, written guidance and links for further reading.</p>

  </div>
  <a class="block absolute h-full w-full top-0 z-50 rounded-2xl hover:bg-black hover:opacity-20" href="https://stats4sd.org/resources/presenting-research-results-placeholder_2021-05-10_06:15:25" target="blank"> </a>
</div>
<div class="card  lg:w-96 bg-base-100 shadow-xl image-full mx-3 mb-5">
  <figure><img src="img/oxc1.png"  class="" /></figure>
  <div class="card-body  self-end mt-10">
    <h3 class="card-title">Options by Context - The Concept</h3>
    <p>An online guide about how to present research results. Includes videos, written guidance and links for further reading.</p>

  </div>
  <a class="block absolute h-full w-full top-0 z-50 rounded-2xl hover:bg-black hover:opacity-20" href="https://stats4sd.org/resources/options-by-context-the-concept_2019-05-13_19:34:34" target="blank"> </a>
</div>
<div class="card  lg:w-96 bg-base-100 shadow-xl image-full mx-3 mb-5">
  <figure><img src="img/datamanagement.png"  class="" /></figure>
  <div class="card-body  self-end mt-10">
    <h3 class="card-title">Introduccion al manejo de datos en R</h3>
    <p>Introduccion al manejo de datos en R (en español).</p>

  </div>
  <a class="block absolute h-full w-full top-0 z-50 rounded-2xl hover:bg-black hover:opacity-20" href="https://stats4sd.org/resources/introduccion-al-manejo-de-datos-en-r_2019-05-13_19:49:55" target="blank"> </a>
</div>
</div>



  <a href="https://stats4sd.org/resources?refinementList%5Baudiences.name.en%5D%5B0%5D=CCRP"><button class="btn-primary block mx-auto">View all RMS Resources</button></a>


<h3>Upcoming Courses</h3>
<div class="divider"></div>
<p class="mb-10">RMS frequently organises workshops, seminars and training events. The majority of these are held online, usually with live translation between English, French and Spanish available. Our <a href="{{ url('events') }}">events page</a> contains details and links to register for upcoming events. 
</p>
<a href="{{ url('events') }}"><button class="btn-primary block mx-auto">See upcoming events</button></a>

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
</div>
</div>

@endsection
