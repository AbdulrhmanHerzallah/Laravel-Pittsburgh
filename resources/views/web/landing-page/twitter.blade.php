<!doctype html>
<html dir="rtl" lang="ar">
<head>
    <x-index.head/>
</head>
<body>
<x-index.navbar/>


<div class="container mb-3">

    <div class="row d-flex justify-content-center mt-2">
        <div class="col-lg-5">
            <div class="d-flex justify-content-center" style="height: 2px;background-color: #d5ca99"></div>
        </div>
    </div>
</div>


<div class="d-flex justify-content-center">
{!! $trailer->iframe !!}
</div>








<x-index.footer/>
<x-index.scripts-component/>
</body>
</html>
