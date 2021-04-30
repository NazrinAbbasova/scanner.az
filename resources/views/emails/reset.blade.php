@component('mail::message')
Şifrənizi yeniləmək üçün aşağıdakı linkə daxil olun.

<a href="{{ route('reset', ['token' => $token]) }}">{{ route('reset', ['token' => $token]) }}</a>

Hörmətlə,<br>
{{ config('app.name') }}
@endcomponent
