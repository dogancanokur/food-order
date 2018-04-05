<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{!! config("ayarlar.aciklama") !!}">
    <meta name="keywords" content="{!! config("ayarlar.keywords") !!}">
    <meta name="author" content="{!! config("ayarlar.author") !!}">

    <script src="{{asset("vendor/jquery/jquery.js")}}"></script>


    <link rel="stylesheet" href="{{asset("css/custom.css")}}">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">

    <title> {!!config("ayarlar.enbaslik") !!}</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset("css/modern-business.css")}}" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="{{asset("css/toastr.min.css")}}" rel="stylesheet">
    <link href="{{asset("css/bootstrap-switch.min.css")}}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset("css/Footer-with-logo.css")}}">

    <!-- Custom Fonts -->
    <link href="{{asset("vendor/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!-- include summernote css/js -->
    <script src="{{asset("js/bootstrap.js")}}"></script>

    <![endif]-->

    <script>
        window.csrfToken = " {{ csrf_token() }}";
    </script>
</head>


<body data-status="{{Session::get("durum")}}">


<!-- Navigation -->

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{!! config("ayarlar.baslik") !!}}" class=""></a>
            <img src="{{asset("img/bau2.png")}}" alt="" class="navbar-brand" width="150px"
                 style="padding: 0px; margin-left: 15px;margin-top: 10px; margin-bottom:10px;">
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @foreach(App\Kategori::all() as $kategori)
                    <li class="dropdown">
                        <a href="#" class="menu-ayar dropdown-toggle" data-toggle="dropdown">{{$kategori->enbaslik}}<b
                                    class="caret"></b></a>
                        <ul class="dropdown-menu">
                            @foreach(App\Makale::where("kategori_id", $kategori->id)->where("durum", 1)->orderBy("created_at", "desc")->paginate(10) as $makale)
                                <li>
                                    <a href="/en/{{$makale->enslug}}">{{$makale->enbaslik}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
                <li><a class="menu-ayar" href="/tr">TR</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- /.navbar-collapse -->
<!-- Page Header -->

<header class="intro-header" style="background-image: url({{asset('img/home-bg.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-12">
                <div class="site-heading">
                    <h1 class="reformat">{!!config("ayarlar.eniceriktitle") !!}</h1>
                    <hr class="small">
                    <span class="subheading reformat">{!!config("ayarlar.ensubiceriktitle") !!}</span>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')



<!-- Footer -->
<footer class="myfooter">
    <div class="container">
        <div class="row">
            <div class="footer-div col-sm-3 col-sm-offset-1    ">
                <ul>
                    <li><a href="https://bau.edu.tr/icerik/2432-bahcesehir-universitesi-akademik-takvim">ACADEMIC
                            CALENDER</a></li>
                </ul>
            </div>
            <div class="footer-div col-sm-3">
                <ul>
                    <li><a href="#">BAU E-MAIL</a></li>
                </ul>
            </div>
            <div class="footer-div col-sm-3">
                <ul>
                    <li><a href="/faq">FAQ</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
            <div class="footer-div col-sm-2 info">
                <img src="{{asset("img/bau1.png")}}" alt="" class="logo" width="100px" height="auto">
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap Core JavaScript -->
<script src="{{asset("js/bootstrap.min.js")}}"></script>


<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<!-- jQuery -->
<script src="{{asset("vendor/jquery/jquery.js")}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset("js/toastr.min.js")}}"></script>

<!-- Theme JavaScript -->
<script src="{{asset("vendor/summernote/summernote.min.js")}}"></script>
<script src="{{asset("vendor/summernote/lang/summernote-tr-TR.js")}}"></script>
<script src="{{asset("js/bootstrap-switch.min.js")}}"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="{{asset("js/laravel-delete.js")}}"></script>
<script type='text/javascript' src="{{asset("js/custom.js")}}"></script>


</body>

</html>

<?php
// @todo: Meta etiketlerini doldur.
?>