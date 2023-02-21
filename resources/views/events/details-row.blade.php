<div class="row">
    <div class="col-12 col-lg-6">
        <div class="card">

            <div class="card-body">
                <h5 class="card-title">Event Details</h5>
                {{ $entry->body }}
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-6">
        <div class="card">

            <div class="card-body">
                <h5 class="card-title">Joining Instructions</h5>
                @if($entry->has_custom_instructions)
                    <div class="alert alert-info">Note - these instructions are unique to this event.</div>
                @else
                    <div class="alert alert-link">(Standard joining instructions for
                        all {{ Str::plural($entry->eventType->name) }})</div>
                @endif
                {{ $entry->joining_instructions }}
                <br/><br/>
                {{ $entry->registration_url }}
            </div>
        </div>
    </div>
</div>
