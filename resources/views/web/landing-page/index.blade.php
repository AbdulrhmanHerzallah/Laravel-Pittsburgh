<!doctype html>
<html dir="rtl" lang="ar">
<head>
 <x-index.head/>
</head>
<body>
<x-index.navbar/>


@if(Request::is('/'))
    <x-index.body :trailer="$trailer"  />
@endif

<div class="container mb-5">
@yield('content')
</div>

<x-index.footer/>
<x-index.scripts-component/>
</body>
</html>
