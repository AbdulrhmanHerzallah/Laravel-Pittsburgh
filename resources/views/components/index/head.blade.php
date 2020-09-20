<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--<link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">--}}
<link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">

<link rel="stylesheet" href="/bootstrap-rtl.min.css">
{{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">--}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" />


<title>{{config('app.name')}}</title>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        /*font-family: 'Tajawal', sans-serif;*/
        font-family: 'Almarai', sans-serif;

        background-color: #dfe6e9

    }
    .parallax2{
        min-height: 600px !important;
    }
    .parallax {
        /* The image used */
        /* Set a specific height */
        min-height: 300px;
        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .navbar-nav .nav-item {
        margin: 0 30px 0 30px;
    }

    @media only screen and (max-width: 600px) {
        #video {
            height: 300px !important;
        }
        .parallax2 {
            min-height: 500px !important;
        }
        #about{
            padding: 2px 0.4px 2px 0.4px !important;
        }
    }

</style>
