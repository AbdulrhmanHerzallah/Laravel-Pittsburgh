<!doctype html>
<html dir="rtl" lang="ar">
<head>
    <x-index.head/>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/css/uikit.min.css" />

    <style>
        body{font-family: 'Mada', sans-serif;background-color: #dfe6e9}
        .main {
            font-size: 18px;text-align: justify;line-height: 2.5;padding: 0 160px 0 160px;margin-top: 15px;
        }
        .references{
            padding: 0 160px 75px 160px;
        }
        @media only screen and (max-width: 990px) {
            .main {
                padding: 13px;
                line-height: 1.3;
            }
            .references {
                padding: 0;
                font-size: 16px;

            }

        }

    </style>
</head>
<body>


<x-index.navbar/>


<div class="container">

    @if($trailer->url_id == !null)
    <div class="row d-flex justify-content-center mt-4 ">
        <div class="col-lg-7 text-center">
            <iframe width="100%" height="350" src="https://www.youtube.com/embed/{{$trailer->url_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
        <h4 class="text-center font-weight-bold">{{$trailer->title}}</h4>
@endif


        @if($trailer->type == 't')
            <div class="row d-flex justify-content-center mt-4 ">
                <div class="col-lg-7 text-center">
                {!! $trailer->iframe !!}
                </div>
            </div>
            <h4 class="text-center font-weight-bold">{{$trailer->title}}</h4>
        @endif

        <div class="row d-flex justify-content-center mt-2">
            <div class="col-lg-5">
                <div class="d-flex justify-content-center" style="height: 2px;background-color: #d5ca99"></div>
            </div>
        </div>


        <div class="row mt-3" style="border: #d5ca99 solid 1px;">
            <div class="col-lg-12 bg-white">
                <div class="mt-5">
                @foreach($iframes as $i)
                    @if($i->type == 'y')
                <iframe width="100%" height="340" src="https://www.youtube.com/embed/{{$i->url_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @endif
                @endforeach


                <div class="row justify-content-center">
                @foreach($iframes as $i)
                    @if($i->type == 't')
                        <div class="col-lg-6">
                            {!! $i->iframe !!}
                        </div>
                     @endif
                @endforeach
                </div>


                <div class="row justify-content-center">
                    @foreach($iframes as $i)
                        @if($i->type == 'p')
                            <div class="col-lg-6">
                                {!! $i->iframe !!}
                            </div>
                        @endif
                    @endforeach
                </div>
                </div>

                <div class="main">
                    {!! $topic->desc !!}
                </div>

                <div class="container-fluid">
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                            @foreach($imgs as $i)
                                <li style="width: 300px;height: 210px">
                                    <img src="{{$i->img}}" style="width: 100%;height: 100%;cursor: pointer"
                                         data-toggle="modal" data-target="#img_po" data-path="{{$i->img}}"
                                         alt="">
                                    <div class="uk-position-center uk-panel"></div>
                                </li>
                            @endforeach
                        </ul>

                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                    </div>



{{--                <div class="row d-flex justify-content-center">--}}
{{--                    @foreach($imgs as $i)--}}
{{--                    <div class="col-lg-6 text-center">--}}
{{--                        <img class="img-fluid text-center" src="{{$i->img}}" style="width:500px;height:400px;" alt="">--}}
{{--                        <br><br>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}



            @if($gestesManin->count() == 1)
                    <p style="" class="main text-center mt-5 font-weight-bold">المتحدث</p>
                @elseif($gestesManin->count() > 1)
                    <p style="" class="main text-center mt-5 font-weight-bold">المتحدثون</p>
                @endif

                <div class="testimonials" style="padding: 5px">
                    <div class="container">
                    @foreach($gestesManin as $i)
                        <div class="phpkida_testimonials_grids">
                            <section class="center slider">
                                <div class="agileits_testimonial_grid">
                                    <div class="pk_testimonial_grid">
                                        <h6 class="text-center" style="font-size: 20px !important;">{{$i->name}}</h6>
                                        <h4 class="text-center">{{$i->desc}}</h4>

                                        <div class="row text-center d-flex justify-content-center">
                                        @if($i->twitter == !null)
                                                <div class="col-2" style="font-size: 30px">
                                                    <a target="_blank" href="{{$i->twitter}}" class="text-info">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </div>
                                            @endif

                                                @if($i->facebook == !null)
                                                    <div class="col-2" style="font-size: 30px">
                                                        <a target="_blank" href="{{$i->facebook}}" class="text-primary">
                                                            <i class="fab fa-facebook"></i>
                                                        </a>
                                                    </div>
                                                @endif

                                                @if($i->youtube == !null)
                                                    <div class="col-2" style="font-size: 30px">
                                                        <a target="_blank" href="{{$i->youtube}}" class="text-danger">
                                                            <i class="fab fa-youtube"></i>
                                                        </a>
                                                    </div>
                                                @endif

                                                @if($i->instagram == !null)
                                                    <div class="col-2" style="font-size: 30px">
                                                        <a target="_blank" href="{{$i->instagram}}" style="color: brown;">
                                                            <i class="fab fa-instagram"></i>
                                                        </a>
                                                    </div>
                                                @endif

                                                @if($i->snapchat == !null)
                                                    <div class="col-2" style="font-size: 30px">
                                                        <a target="_blank" href="{{$i->snapchat}}" class="text-warning">
                                                            <i class="fab fa-snapchat"></i>
                                                        </a>
                                                    </div>
                                                @endif
                                        </div>
                                        <div class="pk_testimonial_grid_pos">
                                            @if($i->img_url != null)
                                            <img src="{{$i->img_url}}" alt="{{$i->name}}" style="cursor: pointer;height: 90px;width: 90px" data-toggle="modal" data-target="#img_po" data-path="{{$i->img_url}}" data-name="{{$i->name}}" class="img-responsive" />
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        @endforeach
                    </div>
                </div>


                @if($gestesUnMane->count() == 1)
                    <hr>
                <p style="" class="main text-center mt-5 font-weight-bold">الضيف</p>
                @elseif($gestesUnMane->count() > 1)
                    <p style="" class="main text-center mt-5 font-weight-bold">الضيوف</p>
                @endif

                <div class="testimonials" style="padding: 5px">
                    <div class="container mb-5">
                        @foreach($gestesUnMane as $i)
                            <div class="phpkida_testimonials_grids">
                                <section class="center slider">
                                    <div class="agileits_testimonial_grid">
                                        <div class="pk_testimonial_grid">
                                            <h6 class="text-center" style="font-size: 20px !important;">{{$i->name}}</h6>
                                            <h4 class="text-center">{{$i->desc}}</h4>

                                            <div class="row text-center d-flex justify-content-center">
                                                @if($i->twitter == !null)
                                                    <div class="col-2" style="font-size: 30px">
                                                        <a target="_blank" href="{{$i->twitter}}" class="text-info">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </div>
                                                @endif

                                                @if($i->facebook == !null)
                                                    <div class="col-2" style="font-size: 30px">
                                                        <a target="_blank" href="{{$i->facebook}}" class="text-primary">
                                                            <i class="fab fa-facebook"></i>
                                                        </a>
                                                    </div>
                                                @endif

                                                @if($i->youtube == !null)
                                                    <div class="col-2" style="font-size: 30px">
                                                        <a target="_blank" href="{{$i->youtube}}" class="text-danger">
                                                            <i class="fab fa-youtube"></i>
                                                        </a>
                                                    </div>
                                                @endif

                                                @if($i->instagram == !null)
                                                    <div class="col-2" style="font-size: 30px">
                                                        <a target="_blank" href="{{$i->instagram}}" style="color: brown;">
                                                            <i class="fab fa-instagram"></i>
                                                        </a>
                                                    </div>
                                                @endif

                                                @if($i->snapchat == !null)
                                                    <div class="col-2" style="font-size: 30px">
                                                        <a target="_blank" href="{{$i->snapchat}}" class="text-warning">
                                                            <i class="fab fa-snapchat"></i>
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="pk_testimonial_grid_pos">
                                                @if($i->img_url != null)
                                                    <img src="{{$i->img_url}}" alt="{{$i->name}}" style="cursor: pointer;height: 90px;width: 90px" data-toggle="modal" data-target="#img_po" data-path="{{$i->img_url}}" data-name="{{$i->name}}" class="img-responsive" />
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        @endforeach
                    </div>
                </div>


                @if($links->count() > 0)
                 <hr>
                <div class="container references">
                   <div style="font-size: 20px;text-align: justify;line-height: 3;">
                        الروابط:
                       <ul>
                           @foreach($links as $link)
                           <li style="list-style: none"><span style="color: #535318"><a target="_blank" title="{{$link->title}}" href="{{$link->link}}">{{$link->title}}</a></span></li>
                           @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <br>
    </div>








</div>




<div class="modal fade" id="img_po" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="name"></h5>
            </div>
            <div class="modal-body">
                <img id="img" height="100%" width="100%">
            </div>
        </div>
    </div>
</div>

<x-index.footer/>
{{--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>--}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit-icons.min.js"></script>

<script>
    $('#img_po').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var path = button.data('path') // Extract info from data-* attributes
        var name = button.data('name') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('#img').attr('src' , path)
        modal.find('#name').text(name)
    })

</script>
</body>
</html>
