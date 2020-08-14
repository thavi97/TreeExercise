@component('mail::message')

You have received contact message from {{$data['name']}}
<br>
{{$data['message']}}

@endcomponent
