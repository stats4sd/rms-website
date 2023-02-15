<x-mail::message>
## Thank you for your message

    Your message has been sent to the RMS team. A member of the team will get back to you as soon as possible.
    For reference, the details of the message are below:

    ### Name:
    {{ $supportRequest->name }}

    ### Email:
    {{ $supportRequest->email }}

    ### Message:
    {{ $supportRequest->message }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
