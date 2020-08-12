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


{{--<x-dashboard.info/>--}}
    <div class="content-wrapper">
        @yield('content')
    </div>



<x-dashboard.footer/>
</div>
<!-- ./wrapper -->


<x-dashboard.script/>

    @yield('script')

</body>
</html>
