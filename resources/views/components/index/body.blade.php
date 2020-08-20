<div class="container">
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 7:3; animation: scale;autoplay: true">

        <ul class="uk-slideshow-items">
            @foreach($imgs  as $i)
            <li>
                <img src="{{$i->img_url}}"  alt="" uk-cover>
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                    <h3 class="uk-margin-remove">{{$i->title}}</h3>
                    <p class="uk-margin-remove">{{$i->desc}}</p>
                </div>
            </li>
            @endforeach
        </ul>

        <a class=" uk-position-center-left uk-position-small uk-hidden-hover" href="#"uk-slidenav-next  uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous  uk-slideshow-item="next"></a>

    </div>
    <div class="container-fluid bg-white">
        <div class="container-fluid bg-white">
            <br>
            <p class="text-center font-weight-bold p-3">{{$trailer->title}}</p>
            <div class="row">
                @if($trailer->url_id == !null || $trailer->iframe == !null)

                <div class="col-lg-6 uk-animation-toggle position-relative" style="height: 300px">

                    @if($trailer->type == 'y')
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{$trailer->url_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @endif

                    @if($trailer->type == 't')
                     <img src="/images/Twitter%20logo%202012.png"
                        class="uk-animation-fade"
                        style="cursor: pointer;width: 50%;position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%)"
                        data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"
                     >
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

            <p class="text-justify">
                <!--            <iframe src="https://open.spotify.com/embed-podcast/episode/0NlT42K1vlR4Ke76LE2TWZ" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>-->
                <!--            <iframe width="100%" height="450" src="https://www.youtube.com/embed/0AsVK4B15W0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

                <!--            <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Problem solving : sort by senior engineer⁣<a href="https://twitter.com/hashtag/Python?src=hash&amp;ref_src=twsrc%5Etfw">#Python</a> <a href="https://twitter.com/hashtag/rstats?src=hash&amp;ref_src=twsrc%5Etfw">#rstats</a> <a href="https://twitter.com/hashtag/java?src=hash&amp;ref_src=twsrc%5Etfw">#java</a> <a href="https://twitter.com/hashtag/javascript?src=hash&amp;ref_src=twsrc%5Etfw">#javascript</a> <a href="https://twitter.com/hashtag/AWS?src=hash&amp;ref_src=twsrc%5Etfw">#AWS</a> <a href="https://twitter.com/hashtag/100DaysOfCode?src=hash&amp;ref_src=twsrc%5Etfw">#100DaysOfCode</a> <a href="https://twitter.com/hashtag/ReactJS?src=hash&amp;ref_src=twsrc%5Etfw">#ReactJS</a> <a href="https://twitter.com/hashtag/Coding?src=hash&amp;ref_src=twsrc%5Etfw">#Coding</a> <a href="https://twitter.com/hashtag/CloudComputing?src=hash&amp;ref_src=twsrc%5Etfw">#CloudComputing</a> <a href="https://twitter.com/hashtag/HTML?src=hash&amp;ref_src=twsrc%5Etfw">#HTML</a> <a href="https://twitter.com/hashtag/Serverless?src=hash&amp;ref_src=twsrc%5Etfw">#Serverless</a> <a href="https://twitter.com/hashtag/cybersecurity?src=hash&amp;ref_src=twsrc%5Etfw">#cybersecurity</a> <a href="https://twitter.com/hashtag/DataScientist?src=hash&amp;ref_src=twsrc%5Etfw">#DataScientist</a> ⁣<a href="https://twitter.com/hashtag/Linux?src=hash&amp;ref_src=twsrc%5Etfw">#Linux</a> <a href="https://twitter.com/hashtag/Programming?src=hash&amp;ref_src=twsrc%5Etfw">#Programming</a> ⁣⁣<br>⁣ <a href="https://t.co/8WKQmQLMhQ">pic.twitter.com/8WKQmQLMhQ</a></p>&mdash; coding_monkeys (@coding_monkeys) <a href="https://twitter.com/coding_monkeys/status/1274524734173007874?ref_src=twsrc%5Etfw">June 21, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>-->


            </p>
        </div>



        <div class="container-fluid bg-white  pt-5 pl-5 pr-5 pb-3">
            <p class="text-center font-weight-bold ">من نحن</p>
            <p class="text-justify letter ml2" style="font-size: 20px">
                {{$data->about_us ?? __('index.about_as')}}
            </p>
        </div>


        <hr>
        <p class="text-center font-weight-bold">المتطوعون</p>

        <div uk-slider="center: true;autoplay: true">

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slider-items  uk-grid">
                    @foreach($volunteer as $i)
                    <li>
                        <div class="uk-card uk-card-default" style="width: 300px">
                            <div class="uk-card-media-top">
                                <img src="{{$i->img_url}}"
                                     alt="{{$i->name}}"
                                     title="{{$i->name}}"
                                >
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">{{$i->name}}</h3>
                                <p>{{$i->desc}}</p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>

                <a class="uk-position-center-right uk-position-small uk-hidden-hover text-dark" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover text-dark" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>

        <div class="container-fluid bg-white p-2">
            <p class="text-center font-weight-bold">رسالة قهوة بيتسبرغ</p>
            <p class="text-justify text-center ml2" style="font-size: 20px">
                {{$data->coffee_message ?? __('index.coffee_message')}}
            </p>
        </div>

        <div class="parallax parallax2" style="position: relative;background-image: url('{{$data->img_parallax ?? ''}}');">
            <div style="width: 60%;height : 70% ;position: absolute;top: 43%;left: 50%;transform: translate(-50%, -50%)">
                <div class="text-center font-weight-bold text-white mb-2" style="font-size: 22px">{{$data->video_title ?? null}}</div>
                <iframe height="100%" width="100%" src="https://www.youtube.com/embed/{{$video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="row mt-3">
                    <div class="col text-center text-white number" style="font-size: 20px">{{$data->subscribed ?? ''}} مشترك</div>
                    <div class="col text-center text-white number" style="font-size: 20px">{{$data->meeting_count ?? ''}} لقاء</div>
                </div>
            </div>

        </div>

        <div class="container-fluid bg-white p-5 mb-5">


            <p class="text-center font-weight-bold">هدف قهوة بيتسبرغ</p>
            <p class="text-justify text-center ml2" style="font-size: 20px">
               {{$data->target_coffee ?? __('index.target_coffee')}}
            </p>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="height: 0">
            <div class="row">
                @if($trailer->type == 't')
                    {!! $trailer->iframe !!}
                @endif
            </div>
        </div>
    </div>
</div>
