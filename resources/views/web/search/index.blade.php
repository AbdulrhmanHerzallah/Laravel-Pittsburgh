@extends('web.landing-page.index')




@section('content')

    <div class="container mt-5">
        @foreach($trailer as $i)
            <div>
                <a class="" style="font-size: 20px" href="{{route('topic.index' , ['slug' => $i->slug])}}" title="{{$i->title}}">{{$i->title}}</a>
            </div>
        @endforeach
    </div>
<br><br><br><br><br><br>
@endsection
