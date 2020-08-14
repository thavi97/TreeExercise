@component('mail::message')

You have received contact message from {{$data['email']}}
<br>
{{$data['message']}}

@endcomponent
