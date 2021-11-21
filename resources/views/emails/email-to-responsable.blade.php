@component('mail::message')
# Stok

{!! $mail['message'] !!}

Merci,<br>
{{ config('app.name') }}
@endcomponent
