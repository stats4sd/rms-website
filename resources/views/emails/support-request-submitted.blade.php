<x-mail::message>
## New Support Request received

    RMS Team, Assemble! Someone, somewhere, needs our help...

    ### Name:
    {{ $supportRequest->name }}

    ### Email:
    {{ $supportRequest->email }}

    ### Message:
    {{ $supportRequest->message }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
