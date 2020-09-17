@component('mail::message')
# From : <span>{{$data['email']}}</span>

<p style="text-align: right">{{$data['desc']}}</p>



{{--Thanks,<br>--}}
{{--{{ config('app.name') }}--}}
@endcomponent
