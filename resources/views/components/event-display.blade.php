<div class="card bg-base-100 shadow-md rounded-none border border-base-300">
    <div tabindex="0" class="collapse collapse-arrow ">

        <h4 class="collapse-title card-title font-light">
            
           <span class="font-semibold"> {{ $event->title }}</span>
           {{ ($event->start)->format('d/m/Y G:i')}}
        </h4>
        <div class="collapse-content pl-5">
            <p class="pb-4">
                {{ $event->body }}
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
                    {{ $event->eventType->joining_instructions }}
                </p>
                <a href="{{ $event->register_url }}">Click here to register</a>
            @endif
        </div>
    </div>
</div>
