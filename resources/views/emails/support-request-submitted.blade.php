<x-mail::message>
## {{ t("New Support Request received") }}

    {{ t("A support request has been submitted through the RMS website.") }}

### {{ t("Name:") }}
{{ $supportRequest->name }}

### {{ t("Email:") }}
{{ $supportRequest->email }}

### {{ t("Message:") }}
{{ $supportRequest->message }}

{{ t("Thanks,") }}<br>
{{ config('app.name') }}
</x-mail::message>
