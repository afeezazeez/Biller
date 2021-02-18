@component('mail::message')
# Hi

This is your new Billing information.

@component('mail::button', ['url' => ''])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
