<x-layouts.app>

    <x-slot:scripts>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css">
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    </x-slot:scripts>

    <div class="top-events bg-cover bg-center bg-no-repeat justify-center flex flex-wrap content-end bg-primary">
        <div class=" w-full">
            <div class="text-center">
                <h1 class="text-white ">RMS Events</h1>
                <h2 class="text-white mt-0">Webinars, workshops and more</h2>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-10">


        <div class="lg:w-5/6 mx-auto mt-16 sm:px-10 sm:px-0">

            We run a series of events throughout the year, where any CCRP grantees are welcome. We are also involved in
            many of the events run by the other cross-cutting and regional teams.

            <h3>Upcoming Events</h3>
            <div class="divider"></div>

            @foreach($events as $event)
                <x-event-display :event="$event"/>
            @endforeach
            <h3 class="mt-10">Past Events</h3>
            <div class="divider"></div>

            @foreach($pastEvents as $event)
                <x-event-display :event="$event" :isPast="true"/>
            @endforeach
        </div>
    </div>
</x-layouts.app>
