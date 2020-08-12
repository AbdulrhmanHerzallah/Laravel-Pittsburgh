<!doctype html>
<html dir="rtl" lang="ar">
<head>
    <x-index.head/>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet">

    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />

    <style>
        body{font-family: 'Mada', sans-serif;background-color: #dfe6e9}
        .main {
            font-size: 20px;text-align: justify;line-height: 2.5;padding: 0 160px 0 160px
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


{{--@if(Request::is('/'))--}}
{{--    <x-index.body :trailer="$trailer"  />--}}
{{--@endif--}}

<div class="container">

    @if($trailer->url_id == !null)
    <div class="row d-flex justify-content-center mt-4 ">
        <div class="col-lg-7 text-center">
            <iframe width="100%" height="350" src="https://www.youtube.com/embed/{{$trailer->url_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    @endif

    <!--    <div class="container mt-4">-->
    <!--        <div class="row mt-2">-->
    <!--            <div class="col-lg-12 text-center font-weight-bold ">-->
    <!--                <p class="text-justify">-->
    <!--                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consectetur cupiditate enim hic inventore nam nisi! Aspernatur fuga laudantium natus nemo pariatur quibusdam quod. Ab culpa, dignissimos excepturi fugit libero maiores natus odio perferendis porro praesentium quibusdam, recusandae temporibus tenetur vero voluptatem! Alias doloribus eius perferendis perspiciatis placeat reiciendis sint! At atque aut, autem consectetur, corporis delectus dolores dolorum esse excepturi fuga in ipsum libero maiores nam natus necessitatibus nostrum omnis perspiciatis porro quidem quis ratione reprehenderit sunt temporibus tenetur veritatis voluptate voluptatibus. Animi eaque labore, pariatur repellat sapiente velit?-->
    <!--                </p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->

    <!--    <div class="row d-flex justify-content-center mt-2">-->
    <!--        <div class="col-lg-5">-->
    <!--            <div class="d-flex justify-content-center" style="height: 2px;background-color: #d5ca99"></div>-->

    <!--        </div>-->
    <!--    </div>-->
    <div class="container-fluid">


        <div class="row mt-3" style="border: #d5ca99 solid 1px;">
            <div class="col-lg-12 bg-white">
                <p class="text-center font-weight-bold mt-5 mb-3" style="font-size: 20px">{{$trailer->title}}</p>

                <p class="main text-justify mt-4" style="font-size: 15px">
                    {{$trailer->desc}}
                </p>
                @if($topic->type == 'y')
                <iframe width="100%" height="340" src="https://www.youtube.com/embed/{{$topic->url_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @endif
                <p class="main">
                    {{$topic->desc}}
                </p>

                <p style="font-size: 20px;font-family: 'Changa', sans-serif;" class="main text-center mt-5">الضيف</p>

                <div class="testimonials" style="padding: 5px">
                    <div class="container">
                        <div class="phpkida_testimonials_grids">
                            <section class="center slider">
                                <div class="agileits_testimonial_grid">
                                    <div class="pk_testimonial_grid ">
                                        <p class="">Awesome services, i am happy to here becouse of your services. in future i will contine.</p>
                                        <h4>Mukesh Jakhar</h4>
                                        <h5>Developer</h5>
                                        <div class="pk_testimonial_grid_pos">
                                            <img src="images/1.jpg" alt=" " class="img-responsive" />
                                        </div>
                                    </div>
                                </div>


                            </section>
                        </div>
                    </div>
                </div>
                <hr>

                <p style="font-size: 20px;font-family: 'Changa', sans-serif;" class="main text-center mt-5">ضيوف الشرف</p>
                <!-- testimonials -->
                <div class="testimonials mb-5" style="padding: 5px">
                    <div class="container">
                        <div class="phpkida_testimonials_grids">
                            <section class="center slider">
                                <div class="agileits_testimonial_grid">
                                    <div class="pk_testimonial_grid">
                                        <p>Awesome services, i am happy to here becouse of your services. in future i will contine.</p>
                                        <h4>Mukesh Jakhar</h4>
                                        <h5>Developer</h5>
                                        <div class="pk_testimonial_grid_pos">
                                            <img src="images/1.jpg" alt=" " class="img-responsive" />
                                        </div>
                                    </div>
                                </div>
                                <div class="agileits_testimonial_grid">
                                    <div class="pk_testimonial_grid">
                                        <p>Awesome services, i am happy to here becouse of your services. in future i will contine.</p>
                                        <div class="row text-center d-flex justify-content-center">
                                            <div class="col-2" style="font-size: 30px"><i class="fab fa-facebook"></i></div>
                                            <div class="col-2">d</div>
                                            <div class="col-2">d</div>
                                            <div class="col-2">d</div>
                                        </div>
                                        <h4>Shivani Gupta</h4>
                                        <h5>Designer</h5>
                                        <div class="pk_testimonial_grid_pos">
                                            <img src="images/2.jpg" alt=" " class="img-responsive" />
                                        </div>
                                    </div>
                                </div>
                                <div class="agileits_testimonial_grid">
                                    <div class="pk_testimonial_grid">
                                        <p>IAwesome services, i am happy to here becouse of your services. in future i will contine.</p>
                                        <h4>Michael DoeMukesh Jakhar</h4>
                                        <h5>Developer</h5>
                                        <div class="pk_testimonial_grid_pos">
                                            <img src="images/1.jpg" alt=" " class="img-responsive" />
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <!-- //testimonials -->




                <!--<div class="container references">-->
                <!--    <div style="font-size: 20px;text-align: justify;line-height: 3;">-->
                <!--        الحسابات:-->
                <!--        <ul>-->
                <!--            <li style="list-style: none"><span style="color: #535318">@Rebdis — حساب عبدالله الربدي</span> على تويتر</li>-->
                <!--            <li style="list-style: none"><span style="color: #535318">@Rebdis — حساب عبدالله الربدي</span> على تويتر</li>-->
                <!--            <li style="list-style: none"><span style="color: #535318">@Rebdis — حساب عبدالله الربدي</span> على تويتر</li>-->
                <!--            <li style="list-style: none"><span style="color: #535318">@Rebdis — حساب عبدالله الربدي</span> على تويتر</li>-->


                <!--        </ul>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
        <br>
    </div>

</div>


<x-index.footer/>
</body>
</html>
