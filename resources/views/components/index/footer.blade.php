<!-- Footer -->
<footer dir="ltr" class="page-footer font-small blue-grey lighten-5 text-white" style="background-color: #061117">
    <div style="background-color: #F8F9FA;border-top: 4px solid #d5ca99" class="text-dark">
        <div class="container">
            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">
                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    @foreach($links as $i)
                    <!-- Facebook -->
                    <a href="{{$i->link}}" class="mr-3 ml-3" title="{{$i->title}}" style="text-decoration: none;color: {{$i->color}};font-size: 20px">
                        {!! $i->icon !!}
                    </a>
                    @endforeach
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <h6 class="mb-0">!تواصل معنا على منصات التواصل الاجتماعي</h6>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row-->
        </div>
    </div>
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">
        <!-- Grid row -->
        <div class="row mt-3 dark-grey-text">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <!-- Content -->
                <!--                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">-->
                <div class="d-flex justify-content-center">
                    <form action="{{route('send.mail')}}" method="post">
                        @csrf
                        <h6 dir="rtl" class="text-uppercase font-weight-bold text-center" style="color: #F8F9FA">تواصل معنا</h6>
                        <fieldset class="uk-fieldset">
                            <div class="uk-margin">
                                <input name="email"  dir="rtl" class="uk-input" type="text" placeholder="الايميل*" required>
                            </div>
                            <div class="uk-margin">
                                <textarea name="desc" dir="rtl" class="uk-textarea" rows="5" placeholder="ما يخطر في بالك*" required></textarea>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="uk-button uk-button-primary">إرسال</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <!-- Grid column -->
{{--            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">--}}
{{--                <!-- Links -->--}}
{{--                <h6 class="text-uppercase font-weight-bold" style="color: #F8F9FA">روابط ذات صلة</h6>--}}
{{--                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">--}}
{{--                <p>--}}
{{--                    <a class="text-success" href="#!">MDBootstrap</a>--}}
{{--                </p>--}}
{{--                <p>--}}
{{--                    <a class="text-success" href="#!">MDWordPress</a>--}}
{{--                </p>--}}
{{--                <p>--}}
{{--                    <a class="text-success" href="#!">BrandFlow</a>--}}
{{--                </p>--}}
{{--                <p>--}}
{{--                    <a class="text-success" href="#!">Bootstrap Angular</a>--}}
{{--                </p>--}}
{{--            </div>--}}
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold" style="color: #F8F9FA">اخر الحلقات</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 45px;">
                @if($takeFourTopic())
                @foreach($takeFourTopic as $i)
                <p>
                    <a class="text-warning" href="{{route('topic.index' , ['slug' => $i->slug])}}">{{$i->title}}</a>
                </p>
                @endforeach
                @endif
            </div>
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold" style="color: #F8F9FA">معلومات التواصل</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fas fa-home mr-3"></i>{{$contact->title}}</p>
                <p>
                    <i class="fas fa-envelope mr-3"></i>{{$contact->email}}</p>
                <p>
                    <i class="fas fa-phone mr-3"></i>{{$contact->phone}}</p>
                <p>
{{--                    <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>--}}

            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>
    <!-- Footer Links -->
    <!-- Copyright -->
    <div class="footer-copyright text-center text-white py-3"  style="background-color: #161C27;">© {{Carbon\Carbon::now()->year}} جميع الحقوق محفوظة لقهوة بيتسبرغ
        <!--        <a class="dark-grey-text" href="https://mdbootstrap.com/"> google.com</a>-->
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
