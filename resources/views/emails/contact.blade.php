@component('mail::message')
# {{ $data->subject }}

{{ $data->text }}

Hörmətlə,<br>
{{ $data->name }}<br> 
{{ $data->phone }}
@endcomponent