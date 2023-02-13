@extends('layouts.app')

@section('header')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>

@endsection

@section('content')
<div class="top-events bg-cover bg-center bg-no-repeat justify-center flex flex-wrap content-end bg-primary">
    <div class=" w-full">
        <div class="text-center">
            <h1 class="text-white ">RMS Events</h1>
            <h2 class="text-white mt-0">Webinars, workshops and more</h2>         
         </div>
    </div>
</div>
<div class="container mx-auto ">


<div class="lg:w-5/6 mx-auto mt-16 sm:px-10 sm:px-0">

    We run a series of events throughout the year, where any CCRP grantees are welcome. We are also involved in many of the events run by the other cross-cutting and regional teams.
    <div
        x-data="{
        calendar: null,
        events: {{$events->toJson()}},
        newEventTitle: null,
        newEventStart: null,
        newEventEnd: null,
        init() {
            this.calendar = new FullCalendar.Calendar(this.$refs.calendar, {
                events: (info, success) => success(this.events),
                initialDate: new Date(),
                initialView: 'listYear',
                selectable: true,
                unselectAuto: false,
                editable: false,
                select: (info) => {
                    this.newEventStart = info.startStr
                    this.newEventEnd = info.endStr
                },
                headerToolbar: {
                    start: '',
                    center: '',
                    end: 'dayGridMonth listYear today prev,next',
                },
                buttonText: {
                    dayGridMonth: 'Show Month Grid',
                    listYear: 'Show list of events',
                }
            })

            this.calendar.render()
        },
    }"
    >
        <div x-ref="calendar"></div>
    </div>
</div>
@endsection
