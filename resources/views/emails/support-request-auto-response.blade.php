<x-mail::message>
## {{ t("Thank you for your message") }}

{{ t("Your message has been sent to the RMS team. A member of the team will get back to you as soon as possible.
For reference, the details of the message are below:") }}

### {{ t("Name:") }}
{{ $supportRequest->name }}

### {{ t("Email:") }}
{{ $supportRequest->email }}

### {{ t("Message:") }}
{{ $supportRequest->message }}

{{ t("Thanks,") }}<br>
{{ config('app.name') }}
</x-mail::message>
