<div class="container">
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 16:9; animation: scale;autoplay: true">

        <ul class="uk-slideshow-items">
            @foreach($imgs  as $i)
            <li>
                @if($i->link == null)
                    <img src="{{$i->img_url}}" style="height: 100% !important;width: 100%" alt="">
                @else
                    <a href="{{$i->link}}" target="_blank"><img src="{{$i->img_url}}" style="height: 100% !important;width: 100%" alt=""></a>
                @endif

                @if($i->title == !null || $i->desc == !null)
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                    <h3 class="uk-margin-remove">{{$i->title}}</h3>
                    <p class="uk-margin-remove">{{$i->desc}}</p>
                </div>
                @endif
            </li>
            @endforeach
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover font-weight-bold" style="font-size: 20px" href="#" uk-slidenav-next uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover font-weight-bold" style="font-size: 20px" href="#" uk-slidenav-previous uk-slideshow-item="next"></a>

        {{--        <a class="uk-position-center-left uk-position-small uk-hidden-hover font-weight-bold bg-black" style="font-size: 20px" href="#"  uk-slideshow-item="previous"><i class="fas fa-arrow-alt-circle-left"></i></a>--}}
{{--        <a class="uk-position-center-right uk-position-small uk-hidden-hover font-weight-bold bg-black" style="font-size: 20px" href="#"   uk-slideshow-item="next"><i class="fas fa-arrow-alt-circle-right"></i></a>--}}

    </div>
    <div class="container-fluid bg-white">
<br/>
<br/>
        <div id="about" class="container-fluid bg-white  pt-5 pl-5 pr-5 pb-2">
            <p class="text-center font-weight-bold ">{{$title->first_title ?? 'من نحن'}}</p>
            <p class="text-justify" style="font-size: 20px">
                {{$data->about_us ?? __('index.about_as')}}
            </p>
        </div>

        <div class="container-fluid bg-white">
            <br>
            @if($trailer == !null)
                <p class="text-center font-weight-bold p-3">{{$trailer->title}}</p>
                <div class="row">
                    @if($trailer->url_id == !null || $trailer->iframe == !null)

                        <div class="col-lg-6 uk-animation-toggle position-relative" @if($trailer->type == 't')  @else style="height: 300px"  @endif>

                            @if($trailer->type == 'y')
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{$trailer->url_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            @endif

                            @if($trailer->type == 't')
{{--                                <img src="/images/Twitter%20logo%202012.png"--}}
{{--                                     class="uk-animation-fade"--}}
{{--                                     style="cursor: pointer;width: 50%;position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%)"--}}
{{--                                     data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"--}}
{{--                                >--}}
                                    <div>
                                        {!! $trailer->iframe !!}
                                    </div>
                            @endif

                            @if($trailer->type == 'p')
                                {!! $trailer->iframe !!}
                            @endif


                        </div>
                        <div class="col-lg-6 text-justify mt-3">
                            <p>
                                {{$trailer->desc}}
                            </p>
                            <div class="row d-flex justify-content-between">
                                <div class="col">
                                    <a href="{{route('topic.index' , ['slug' => $trailer->slug])}}">إقرأ المزيد...</a>
                                </div>
                            </div>
                        </div>
                </div>
            @else
                <div class="row">
                    <div class="col-lg text-justify mt-3">
                        <p>
                            {{$trailer->desc}}
                        </p>
                        <div class="row d-flex justify-content-between">
                            <div class="col">
                                <a href="{{route('topic.index' , ['slug' => $trailer->slug])}}">إقرأ المزيد...</a>
                            </div>
                        </div>
                    </div>
                </div>

            @endif
            @endif

        </div>

        <div class="container-fluid bg-white p-2 mt-5">
            <p class="text-center font-weight-bold">{{$title->second_title ?? 'رسالة قهوة بيتسبرغ'}}</p>
            <p class="text-justify text-center" style="font-size: 20px">
                {{$data->coffee_message ?? __('index.coffee_message')}}
            </p>
        </div>

        <div class="parallax parallax2" style="position: relative;background-image: url('{{$data->img_parallax ?? ''}}');">
            <div id="video" style="width: 90%;height : 80% ;position: absolute;top: 43%;left: 50%;transform: translate(-50%, -50%)">
                <div class="text-center font-weight-bold text-white mb-2" style="font-size: 22px">{{$data->video_title ?? null}}</div>
                <iframe height="100%" width="100%" src="https://www.youtube.com/embed/{{$video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>

        <div class="mb-5 mt-5">
            <p class="text-center font-weight-bold" style="font-size: 20px">{{$title->count_title ?? 'عدد اللقاءات'}}</p>
            <div class="row mt-3 font-weight-bold">
                <div class="col text-center text-dark" style="font-size: 25px;">{{$data->subscribed ?? ''}} {{$title->subscribe_title ?? 'مشترك'}}</div>
                <div class="col text-center text-dark" style="font-size: 25px;">{{$data->meeting_count ?? ''}} {{$title->meeting_title ?? 'لقاء'}}</div>
            </div>
        </div>

        <div id="target" class="container-fluid bg-white p-5 mb-3">
            <p class="text-center font-weight-bold">{{$title->third_title ?? 'هدف قهوة بيتسبرغ'}}</p>
            <p class="text-justify text-center" style="font-size: 20px">
                {{$data->target_coffee ?? __('index.target_coffee')}}
            </p>
        </div>

   <p class="text-center font-weight-bold">{{$title->volunteer ?? 'المتطوعون'}}</p>

<div class="container">
<div class="container">
        <div  uk-slider="center: false;autoplay: false" id="hell" class="mb-5" style="margin-right: 50px">

        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
            <ul class="uk-slider-items uk-grid">
                @foreach($volunteer as $i)
                    <li>
                        <div class="uk-card uk-card-default" style="width: 300px;height: 520px">
                            <div class="uk-card-media-top">
                                <img src="{{$i->img_url}}"
                                     alt="{{$i->name}}"
                                     title="{{$i->name}}"
                                >
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title" style="font-size: 20px!important;">{{$i->name}}</h3>
                                <p>{{$i->desc}}</p>
                                @if($i->twitter)
                                <a href="{{$i->twitter}}" target="_blank" style="font-size: 20px" class="text-primary"><i class="fab fa-twitter"></i></a>
                                @endif
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <a class="uk-position-center-left uk-position-large font-weight-bold text-dark" href="#"uk-slidenav-next  uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-large font-weight-bold text-dark" href="#" uk-slidenav-previous uk-slider-item="next"></a>

{{--            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slider-item="previous"><i class="fas fa-arrow-alt-circle-right"></i></a>--}}
{{--            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"  uk-slider-item="next"><i class="fas fa-arrow-alt-circle-left"></i></a>--}}
        </div>
 </div>

    <div class="container">
        <p class="text-center font-weight-bold">{{$title->success ?? 'شركاء النجاح'}}</p>
        <div uk-slider="center: false;autoplay: false" class="mb-5">

            <div  class="uk-position-relative uk-visible-toggle uk-light " tabindex="-1">

                <ul class="uk-slider-items uk-grid">
                    @foreach($success as $key => $i)
                        <li>
                            <div class="uk-card uk-card-default" style="width: 300px;height: 520px">
                                <div class="uk-card-media-top">
                                    <img src="{{$i->img_url}}"
                                         alt="{{$i->name}}"
                                         title="{{$i->name}}"
                                    >
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title" style="font-size: 20px!important;">{{$i->name}}</h3>
                                    <p>{{$i->desc}}</p>
                                    @if($i->twitter)
                                        <a href="{{$i->twitter}}" target="_blank" style="font-size: 20px" class="text-primary"><i class="fab fa-twitter"></i></a>
                                    @endif
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <a class="uk-position-center-left uk-position-large font-weight-bold text-dark" href="#"uk-slidenav-next  uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-large font-weight-bold text-dark" href="#"  uk-slidenav-previous uk-slider-item="next"></a>

{{--                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slider-item="previous"><i class="fas fa-arrow-alt-circle-right"></i></a>--}}
{{--                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"  uk-slider-item="next"><i class="fas fa-arrow-alt-circle-left"></i></a>--}}
            </div>

    </div>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="height: 0">
            <div class="row">
                @if($trailer == !null)
                @if($trailer->type == 't')
                    {!! $trailer->iframe !!}
                @endif
                @endif
            </div>
        </div>
    </div>
</div>
</div>
</div>
