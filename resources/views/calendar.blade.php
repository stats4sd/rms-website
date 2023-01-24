<head>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
</head>
<body>

<h1 x-data="{ message: 'howdy' }" x-text="message"></h1>

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
                initialView: 'dayGridMonth',
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
</body>
