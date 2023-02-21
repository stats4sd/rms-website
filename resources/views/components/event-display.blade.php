<div class="card bg-base-100 shadow-md">
    <div tabindex="0" class="collapse collapse-arrow border border-base-300">

        <h4 class="collapse-title card-title">
            <b>{{ $event->human_date }}</b>
            {{ $event->title }}
        </h4>
        <div class="collapse-content">
            <p class="pb-4">
                {{ $event->body }}
            </p>


            <div class="card">
                <div class="card-body">
                    <h4>Related Resources</h4>
                    <ul class="pb-4 list-disc">

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
