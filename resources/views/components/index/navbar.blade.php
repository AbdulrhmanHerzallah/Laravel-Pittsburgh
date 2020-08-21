<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 4px solid #d5ca99">
    <!--        <a class="navbar-brand" style="margin-right: 110px" href="#">-->
    <!--            <img src="logo/Pittsburgh%20Coffee%20Talk%20%5BSocial%20Media%5D.png" width="100">-->
    <!--        </a>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active font-weight-bold">
                <a class="nav-link text-dark" style="font-size: 20px" href="{{url('/')}}"><i class="fas fa-home"></i><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item font-weight-bold">
                <a class="nav-link text-dark" href="{{route('videos.index')}}">
                    يوتيوب
                </a>
            </li>
            <li class="nav-item font-weight-bold">
                <a class="nav-link text-dark" href="{{route('twitter.index')}}">
                    تويتر</a>
            </li>

            <li class="nav-item font-weight-bold">
                <a class="nav-link text-dark" href="{{route('spotify.index')}}">
                    البرودكاست
                </a>
            </li>

{{--            <li class="nav-item font-weight-bold">--}}
{{--                <a class="nav-link" href="#">من نحن</a>--}}
{{--            </li>--}}
        </ul>
        <form action="{{route('trailer.search')}}" method="get" class="navbar-nav mr-auto">
{{--            @csrf--}}
            <input name="title" class="form-control mr-sm-2" type="search" placeholder="ابحث عن موضوع" aria-label="Search">
            <button  class="btn  my-2 my-sm-0 m-1" type="submit"><i style="color: #d5ca99" class="fas fa-search"></i></button>
        </form>
    </div>
</nav>



<div  class="container mt-3 mb-3">
    <div class="container mt-3 mb-2">
        <img dir="ltr" src="/logo/ddlogo.png" width="150px">
    </div>
</div>
