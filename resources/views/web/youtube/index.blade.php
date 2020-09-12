@extends('web.landing-page.index')





@section('content')
    @foreach($iframe as $y)
    <div class="row bg-white mt-3 card-body rounded">
        <div class="col-lg-6">
            <iframe width="98%" height="315" src="https://www.youtube.com/embed/{{$y->url_id ?? ''}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-lg-6 mt-3">
            <a target="_blank" href="https://www.youtube.com/watch?v={{$y->url_id ?? ''}}">{{Youtube::getVideoInfo($y->url_id)->snippet->title ?? ''}}</a>
            <hr>
            <p>
                {!! $y->desc !!}
            </p>
            <div>
                <span class="font-weight-bold">احصائية الفديو:</span>
                <table style="width: 100%" class="mt-2">
                    <tr>
                        <th class="text-warning">المشاهدات</th>
                        <th class="text-success">الاعجابات</th>
                        <th class="text-secondary">غير معجب</th>
                    </tr>
                    <tr>
                        <td>{{Youtube::getVideoInfo($y->url_id)->statistics->viewCount}}</td>
                        <td>{{Youtube::getVideoInfo($y->url_id)->statistics->likeCount}}</td>
                        <td>{{Youtube::getVideoInfo($y->url_id)->statistics->dislikeCount}}</td>
                    </tr>
                </table>
                <a href="{{route('topic.index' , ['slug' => $y->slug])}}" title="{{$y->title}}">إقرأ المزيد ...</a>
            </div>
        </div>
    </div>

    @endforeach
    <div class="container d-flex justify-content-center mt-3">
        {!! $iframe->links() !!}
    </div>
@endsection
