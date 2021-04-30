@component('mail::message')
E-mail adresinizi təsdiqləmək üçün aşağıdakı linkə daxil olun.

<a href="{{ route('verify', ['token' => $token]) }}">{{ route('verify', ['token' => $token]) }}</a>

Hörmətlə,<br>
{{ config('app.name') }}
@endcomponent
