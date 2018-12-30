@component('mail::message')
# Hey admin

- {{ $msg->name }}
- {{ $msg->email }}

@component('mail::panel')
	{{ $msg->message }}
@endcomponent

{{ config('app.name') }}
@endcomponent
