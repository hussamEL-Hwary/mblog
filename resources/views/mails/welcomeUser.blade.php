@component('mail::message')
# Introduction

#welcome to Competitive Programming blog :)

@component('mail::button', ['url' => ''])
see Posts
@endcomponent

@component('mail::panel', ['url' => ''])
just for test
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
