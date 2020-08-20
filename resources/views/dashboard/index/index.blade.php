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
    <br><br><br>
    <div class="alert alert-success" role="alert">
        تم تسجيل الدخول للوحة التحكم بنجاح!
    </div>
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
