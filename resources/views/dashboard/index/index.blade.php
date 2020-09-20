<!DOCTYPE html>
<html>
<head>
<x-dashboard.head/>
@yield('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
<x-dashboard.nav/>

    <!-- Main Sidebar Container -->
<x-dashboard.sidebar/>
    <!-- Content Wrapper. Contains page content -->


    <div class="content-wrapper">
        @yield('content')

 @if(Request::is('admin'))
<div class="container-fluid">
{{--    <br><br><br>--}}
{{--    <div class="alert alert-success" role="alert">--}}
{{--        تم تسجيل الدخول للوحة التحكم بنجاح!--}}
{{--    </div>--}}
    <section class="content">
<br/><br/>
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{App\Models\Trailer::count()}}</h3>

                    <p>عدد الموضوعات المسجلة</p>
                </div>
                <div class="icon">
{{--                    <i class="ion ion-bag"></i>--}}
                    <i class="far fa-file"></i>
                </div>
            </div>
        </div>
    </div>
    </section>

</div>
 @endif



    </div>



<x-dashboard.footer/>
</div>
<!-- ./wrapper -->


<x-dashboard.script/>

    @yield('script')

</body>
</html>
