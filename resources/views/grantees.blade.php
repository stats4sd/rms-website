<x-layouts.app>
    <div class="top-help bg-cover bg-top bg-no-repeat justify-center flex flex-wrap content-end bg-primary">
        <div class=" w-full">
            <div class="text-center">
                <h1 class="text-white ">{{ t("Help for Grantees") }}</h1>
            </div>
        </div>
    </div>
    <div class="container mx-auto ">


        <div class="lg:w-5/6 mx-auto mt-16 px-10">
        <p class="headline"> {!! t("RMS is constantly looking for opportunities to work with our partners at CCRP to fulfil the programme’s mission “<i>to ensure a world where all have access to nutritious food that is sustainably produced by local people</i>”") !!}.
</p>    
        <h3>{{ t("How can we help?") }}</h3>
            <div class="divider mb-10"></div>
            <div class="mx-auto w-full xl:w-5/6  md:text-center grid md:grid-cols-3 ">
                <div class="w-full mb-4 sm:mb-10 flex items-center md:block sm:px-2 2xl:px-5">
                    <img src="img/talkicon.png" class="md:px-20  2xl:px-24 mr-6 md:mx-auto md:mb-5 w-14 md:w-full">
                    <div class="grid grid-rows">
                        <div>
                    
                            <b>{{ t("Let's talk") }}</b>
                        </div>
                        <div> 
                            <p>{{ t("We can arrange discussions through zoom or email at any time, and in-person meetings where appropriate.") }}</p></div>
                        </div>
                 </div>
                 <div class="w-full mb-4 sm:mb-10 flex items-center md:block  sm:px-2 2xl:px-5">
                    <img src="img/pplicon.png" class="md:px-20 2xl:px-24 mr-6 md:mx-auto md:mb-5 w-14 md:w-full">
                    <div class="grid grid-rows">
                        <div>
                    
                            <b>{{ t("Get our input") }}</b>
                        </div>
                        <div> 
                            <p>{{ t("Invite us to your inception, design, progress or analysis meetings.") }}</p></div>
                        </div>
                 </div>
                 <div class="w-full mb-4 sm:mb-10 flex items-center md:block sm:px-2 2xl:px-5">
                    <img src="img/yticon.png" class="md:px-20 2xl:px-24 mr-6 md:mx-auto md:mb-5 w-14 md:w-full">
                    <div class="grid grid-rows">
                        <div>
                    
                            <b>{{ t("Capacity Building") }}</b>
                        </div>
                        <div> 
                            <p>{!! t("We also offer online <a href=\"{{ url('capacity-building') }}\">resources and events</a> to support capacity-building.") !!} </p></div>
                        </div>
                 </div>
</div>

<a href="#getintouch">
                <button class="btn-primary block mx-auto mt-4 mb-20">{{ t("Contact the team") }}</button>
            </a>
</div>
                 <div class="container lg:w-11/12 2xl:w-10/12 mx-auto grid grid-cols-1 lg:grid-cols-5 lg:pr-5">
                    <div class="lg:col-span-2 my-3">
                        <div class="supportimg">
                        </div>
                    </div>
                    <div class="lg:col-span-3 pt-4  px-10">
                        <div class="mb-5">
                            <h3>{{ t("We work:") }}</h3>
                            <p class="font-bold mt-6">{{ t("At all levels: ") }} </p>
                            <p>{{ t("From providing individual project support and developing students’ research skills to working with the leadership team to help develop the program’s long-term strategies. ") }}</p>
                            <p class="font-bold mt-5">{{ t("In multiple languages: ") }}</p>
                            <p>{{ t("English, Spanish, French and Swahili. ") }}</p>
                            <p class="font-bold mt-5">{{ t("Across all CCRP regions: ") }}</p>
                            <p>{{ t("East & Southern Africa, West Africa and the Andes. ") }}</p>
                            <p class="font-bold mt-5">{{ t("Advocating mixed methods:") }}</p>
                            <p>{{ t("Our team includes research design specialists, statisticians, qualitative researchers and data engineers.") }} </p>


</p>
                        </div>
                    </div>
                </div>

                

                <div class="lg:w-5/6 mx-auto mt-16 px-10">



        

        <h3 id="getintouch">{{ t("Get in touch") }}</h3>
            <div class="divider"></div>
            <p > {{ t("Our team has three regional coordinators that form part of the CCRP Regional team.
                If you would like any support with your own research at any time, please contact the relevant
                coordinator for your region. They are:") }}
            </p>
            <div
                class="text-center w-full 2xl:w-9/12  mx-auto flex flex-col md:flex-row justify-around items-start mb-16 mt-6">
                <div class=" w-5/6 sm:w-4/6 mx-auto md:mx-3 md:w-3/12 my-5 ">
                    <img src="/img/carlos1.jpg" class="w-3/5 md:w-full xl:w-5/8 mb-5 mx-auto">
                    <p class="font-bold">Carlos Barahona</p>
                    <p>{{ t("Andes CoP") }}</p>
                    <p>{{ t("Spanish and English") }}</p>
                    <a href="mailto:c.e.barahona@stats4sd.org">c.e.barahona@stats4sd.org</a>
                </div>
                <div class=" w-5/6 sm:w-4/6 mx-auto md:mx-3 md:w-3/12 my-5 ">
                    <img src="/img/lucie.jpg" class="w-3/5 md:w-full xl:w-5/8 mb-5 mx-auto">
                    <p class="font-bold">Lucie Hazelgrove-Planel</p>
                    <p>{{ t("West Africa CoP") }}</p>
                    <p>{{ t("French and English") }}</p>
                    <a href="mailto:lucie@idems.international">lucie@idems.international</a>
                </div>
                <div class=" w-5/6 sm:w-4/6 mx-auto md:mx-3 md:w-3/12 my-5 ">
                <img src="/img/shiphar1.jpg" class="w-3/5 md:w-full xl:w-5/8 mb-5 mx-auto"> 
        <p class="font-bold">Shiphar Mulumba </p>
                    <p>{{ t("East and Southern Africa CoP") }}</p>
                    <p>{{ t("English and Swahili") }}</p>
                    <a href="mailto:m.shiphar@stats4sd.org" >m.shiphar@stats4sd.org</a>
                </div>

            </div>
            <p>{{ t("You can of course get in touch with any of your familiar contacts from the RMS team if you prefer.") }}</p>
            <div class="block mt-3"></div>

            <p> {{ t("Not sure who to speak to? Use the contact form below to get in touch and we'll put you in contact with a
                colleague who can help.") }}</p>

            <livewire:contact-form></livewire:contact-form>

           
        </div>
    </div>

</x-layouts.app>
