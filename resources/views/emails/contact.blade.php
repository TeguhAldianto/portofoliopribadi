@component('mail::message')
# New Contact Form Submission

You have received a new message from your portfolio website.

**From:** {{ $contactMessage->name }}
**Email:** {{ $contactMessage->email }}
**Subject:** {{ $contactMessage->subject ?? 'No subject' }}

## Message:

{{ $contactMessage->message }}

@component('mail::button', ['url' => config('app.url') . '/admin/messages/' . $contactMessage->id])
View in Admin Panel
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
# Introduction

The body of your message.

<x-mail::button :url="''">
    Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>