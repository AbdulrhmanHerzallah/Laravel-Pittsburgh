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

<div class="container">

</div>

<x-index.footer/>
</body>
</html>
