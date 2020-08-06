<div class="container">

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 7:3; animation: push;autoplay: true">

        <ul class="uk-slideshow-items">
            @foreach($imgs as $i)
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
            <p class="text-center font-weight-bold p-3">هل نعيش علي كوكب أمن؟</p>
            <div class="row">
                <div class="col-lg-6 uk-animation-toggle position-relative">
                    <!--                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/I-QfPUz1es8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

                    <!--                    <img src="images/Twitter%20logo%202012.png"-->
                    <!--                         class="uk-animation-fade"-->
                    <!--                         style="cursor: pointer;width: 50%;position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%)"-->
                    <!--                         data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">-->


                    <iframe src="https://open.spotify.com/embed-podcast/episode/0NlT42K1vlR4Ke76LE2TWZ" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>

                </div>
                <div class="col-lg-6 text-justify mt-2">
                    <p>
                        عاش الإنسان على سطح الأرض من آلاف السنين، يأكل من خيراتها ويستغل ثرواتها لتحقيق مصالحه وتسهيل حياته قدر المستطاع. ولكن، يزعم العلماء أن الأرض بعد النهضة الصناعية ليست كما كانت قبلها، وهذا بطبيعة الحال سيتسبب بكوارث جسيمة على المدى البعيد. وبالرغم من تقدم علوم الطب والهندسة والتقنية والعلوم الإنسانية عبر السنين، الا أننا دخلنا في طريق اللاعودة للخروج من المأزق بدون أضرار ما لم تحدث تغييرات جذرية في التقنيات والسلوك الإنساني والصناعات اللي تشكل نمط حياة الانسان في المستقبل.
                    </p>
                    <div class="row d-flex justify-content-between">
                        <div class="col">
                            <a href="#">إقرأ المزيد...</a>
                        </div>
                    </div>
                </div>
            </div>
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
{{--        <div class="row d-flex justify-content-center text-center mb-5 mt-5 div-a">--}}
{{--            <div class="col-lg-3">--}}
{{--                <img src="images/well-dressed-businessman-sitting-on-sofa-3771839.jpg" class="rounded">--}}
{{--                <p class="font-weight-bold mt-3">محمد أحمد</p>--}}
{{--                <p class="text-justify">ipsum dolor sit amet, consectetur adipisicing elit. Ea eveniet odit officia porro recusandae ut.</p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3">--}}
{{--                <img src="images/well-dressed-businessman-sitting-on-sofa-3771839.jpg" class="rounded">--}}
{{--                <p class="font-weight-bold mt-3">محمد أحمد</p>--}}
{{--                <p class="text-justify">ipsum dolor sit amet, consectetur adipisicing elit. Ea eveniet odit officia porro recusandae ut.</p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3">--}}
{{--                <img src="images/well-dressed-businessman-sitting-on-sofa-3771839.jpg" class="rounded">--}}
{{--                <p class="font-weight-bold mt-3">محمد أحمد</p>--}}
{{--                <p class="text-justify">ipsum dolor sit amet, consectetur adipisicing elit. Ea eveniet odit officia porro recusandae ut.</p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3">--}}
{{--                <img src="images/well-dressed-businessman-sitting-on-sofa-3771839.jpg" class="rounded">--}}
{{--                <p class="font-weight-bold mt-3">محمد أحمد</p>--}}
{{--                <p class="text-justify">ipsum dolor sit amet, consectetur adipisicing elit. Ea eveniet odit officia porro recusandae ut.</p>--}}
{{--            </div>--}}

{{--        </div>--}}

        <div uk-slider="center: true">

            <div class="uk-position-relative uk-visible-toggle uk-light"  tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
                    <li>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="images/photo.jpg" alt="">
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Headline</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="images/dark.jpg" alt="">
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Headline</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="images/light.jpg" alt="">
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Headline</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="images/photo2.jpg" alt="">
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Headline</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="images/photo3.jpg" alt="">
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Headline</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>



        <div class="container-fluid bg-white p-2">
            <p class="text-center font-weight-bold">رسالة قهوة بيتسبرغ</p>
            <p class="text-justify text-center ml2" style="font-size: 20px">
                {{$data->coffee_message ?? __('index.coffee_message')}}
            </p>
        </div>

        <div class="parallax parallax2" style="position: relative;background-image: url('{{$data->img_parallax ?? ''}}')">
            <div style="width: 60%;height : 70% ;position: absolute;top: 45%;left: 50%;transform: translate(-50%, -50%)">
                <div class="text-center font-weight-bold text-white mb-2">{{$data->video_title ?? null}}</div>
                <iframe height="100%" width="100%" src="https://www.youtube.com/embed/CZTCciHE72I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
