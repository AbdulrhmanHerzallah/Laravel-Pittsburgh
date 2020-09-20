@extends('web.landing-page.index')





@section('content')
    @foreach($iframe as $y)
        <div class="row bg-white mt-3 card-body rounded">
            <div class="col-lg-6">
                {!! $y->iframe !!}
            </div>
            <div class="col-lg-6 mt-3 mb-3">
                <h3 style="font-family: 'Almarai', sans-serif !important;">{{$y->title}}</h3>
                <hr>
                <p>
                    {!! $y->desc !!}
                </p>
                <div>
                    <a href="{{route('topic.index' , ['slug' => $y->slug])}}" title="{{$y->title}}">إقرأ المزيد ...</a>
                </div>
            </div>
        </div>

    @endforeach
    <div class="container d-flex justify-content-center mt-3">
        {!! $iframe->links() !!}
    </div>
@endsection
