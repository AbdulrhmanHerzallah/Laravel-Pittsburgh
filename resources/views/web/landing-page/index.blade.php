<!doctype html>
<html dir="rtl" lang="ar">
<head>
 <x-index.head/>
</head>
<body>
<x-index.navbar/>


@if(Request::is('/'))
    <x-index.body/>
@endif

<div class="container">

</div>

<x-index.footer/>
</body>
</html>
