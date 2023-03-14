<x-mail::message>
## New Support Request received

A support request has been submitted through the RMS website.

### Name:
{{ $supportRequest->name }}

### Email:
{{ $supportRequest->email }}

### Message:
{{ $supportRequest->message }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
