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
            <p class="pb-4">
                {{ $event->eventType->instructions }}
            </p>

            <h5>Related Resources</h5>
            <ul class="pb-4">

                @foreach($event->eventResources as $resource)
                    <li><a href="{{ $resource->url }}">{{ $resource->title }}</a></li>
                @endforeach
            </ul>

            @if(!$isPast)
                <a href="{{ $event->register_url }}">Click here to register</a>
            @endif
        </div>
    </div>
</div>
