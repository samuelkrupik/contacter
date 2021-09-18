@component('mail::message')
# New message from {{$contact->name}}!

{{$contact->message}}

@component('mail::button', ['url' => 'localhost'])
Go home
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
