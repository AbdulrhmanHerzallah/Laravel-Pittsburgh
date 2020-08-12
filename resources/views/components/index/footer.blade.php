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
                    <a href="{{$i->link}}" title="{{$i->title}}" style="text-decoration: none;color: {{$i->color}};font-size: 18px">
                        {!! $i->icon !!}
                    </a>
                    @endforeach
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <h6 class="mb-0">!تواصل معنا علي منصات التواصل الاجتماعي</h6>
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
                    <form>
                        <h6 dir="rtl" class="text-uppercase font-weight-bold text-center" style="color: #F8F9FA">تواصل معنا</h6>
                        <fieldset class="uk-fieldset">
                            <div class="uk-margin">
                                <input dir="rtl" class="uk-input" type="text" placeholder="الايميل*">
                            </div>
                            <div class="uk-margin">
                                <textarea dir="rtl" class="uk-textarea" rows="5" placeholder="ما يخطر في بالك*"></textarea>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="uk-button uk-button-primary">إرسال</button>

                            </div>
                        </fieldset>

                    </form>

                </div>

            </div>
            <!-- Grid column -->

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

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold" style="color: #F8F9FA">أخر الحلقات</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a class="text-warning" href="#!">Your Account</a>
                </p>
                <p>
                    <a class="text-warning" href="#!">Become an Affiliate</a>
                </p>
                <p>
                    <a class="text-warning" href="#!">Shipping Rates</a>
                </p>
                <p>
                    <a class="text-warning" href="#!">Help</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold" style="color: #F8F9FA">معلومات التواصل</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                <p>
                    <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                <p>
                    <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center text-white py-3"  style="background-color: #161C27;">© {{Carbon\Carbon::now()->year}} جميع الحقوق محفوظة لقهوة بيستبرغ
        <!--        <a class="dark-grey-text" href="https://mdbootstrap.com/"> google.com</a>-->
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->





<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit-icons.min.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/animejs@3.2.0/lib/anime.min.js"></script>

<script>

    let fab_class = document.getElementsByClassName('fab').length


    for (i=0 ; fab_class > i ; i++)
    {
        document.getElementsByClassName('fab')[i].classList.add('mr-4' ,'white-text')
    }

    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })


    var number = document.querySelector('.number');


    var textWrapper = document.querySelector('.ml2');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({loop: false})
        .add({
            targets: '.ml2 .letter',
            scale: [4,1],
            opacity: [0,1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: 950,
            delay: (el, i) => 70*i,
        }).add({
        targets: '.ml2',
        // opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000,
    });
</script>
