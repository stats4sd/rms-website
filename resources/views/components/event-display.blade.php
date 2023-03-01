<div class="card bg-base-100 shadow-md rounded-none event">
    <div tabindex="0" class="collapse collapse-arrow ">

        <h4 class="collapse-title card-title grid grid-row md:grid-cols-4 font-light">

           <div class="font-semibold md:col-span-3"> {{ $event->title }}</div>
           <div class="pl-4 md:col-span-1">{{ ($event->start)->format('d/m/Y G:i')}}</div>

        </h4>
        <div class="collapse-content pl-5">
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
                <a href="{{ ($event->registration_url ?? $event->eventType?->registration_url) ?? '' }}">Click here to register</a>
            @endif
        </div>
    </div>
</div>
