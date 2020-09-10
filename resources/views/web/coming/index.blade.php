@extends('web.landing-page.index')




@section('content')

<div class="container text-center">
<p class="font-weight-bold" style="font-size: 40px">{{$guide->title}}</p>

    <div class="mb-3 text-justify" style="font-size: 20px">
        <p class="text-center">{{$guide->desc}}</p>
    </div>
    <img src="{{$guide->img}}" class="img-thumbnail" height="500px" width="500px" title="{{$guide->title}}">

    <div>
        <br/>
        <p style="font-size: 20px;font-weight: bold">{{$guide->download_word}}</p>
        <a href="{{$guide->file}}"><i class="fas fa-arrow-circle-down" style="font-size: 60px"></i></a>
    </div>
</div>


@endsection
