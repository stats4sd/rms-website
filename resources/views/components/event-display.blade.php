<div
    x-data="{
        id: {{$event->id}},
        get open() {
            return this.active === this.id
        },
        set open(value) {
            this.active = value ? this.id : null
        }
    }"
    class="card bg-base-100 shadow-md rounded-none event"
>

    <button class="text-left">
        <h4
            x-on:click="open = !open"
            :aria-expanded="open"
            class="card-title grid grid-row md:grid-cols-10 font-light p-3 pl-5"
        >
            <div class="font-semibold md:col-span-6 xl:col-span-7"> {{ $event->title }}</div>
            <div class="md:pl-4 md:col-span-3 xl:col-span-2">
                {{ ($event->start)->format('d/m/Y G:i')}}
            </div>
            <div class="md:col-span-1 text-right pr-5">
                <span x-show="open" aria-hidden="true" class="ml-4">&minus;</span>
                <span x-show="!open" aria-hidden="true" class="ml-4">&plus;</span>
            </div>
        </h4>
    </button>
    <div
        x-show="open"
        x-collapse
        class="pl-5 pb-5"
    >
        <p class="pb-4">
            {!! $event->body !!}
        </p>
        <div class="card">
            <div class="card-body pl-0">
                <h4>Related Resources</h4>
                <ul class="pb-4 pl-4 list-disc">

                    @foreach($event->eventResources as $resource)
                        <li><a href="{{ $resource->url }}">{{ $resource->title }}</a></li>
                    @endforeach
                </ul>

            </div>
        </div>

        @if(!$isPast)
            <p class="pb-4">
                {{ ($event->joining_instructions ?? $event->eventType?->joining_instructions) ?? '' }}
            </p>
            <a href="{{ ($event->registration_url ?? $event->eventType?->registration_url) ?? '' }}">Click here to
                register</a>
        @endif
    </div>
</div>
