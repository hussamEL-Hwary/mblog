@component('mail::message')
#welcome {{ $user->name }} to Competitive Programming blog :)

@component('mail::button', ['url' => ''])
see Posts
@endcomponent



Thanks,<br>
{{ config('app.name') }} team
@endcomponent
