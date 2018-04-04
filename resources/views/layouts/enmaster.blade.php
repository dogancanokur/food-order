<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{!! config("ayarlar.aciklama") !!}">
    <meta name="keywords" content="{!! config("ayarlar.keywords") !!}">
    <meta name="author" content="{!! config("ayarlar.author") !!}">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">


    <title> {!!config("ayarlar.baslik") !!}</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset("vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="{{asset("css/toastr.min.css")}}" rel="stylesheet">
    <link href="{{asset("css/bootstrap-switch.min.css")}}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset("css/Footer-with-logo.css")}}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
    <link href="{{asset("css/clean-blog.css")}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{asset("vendor/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href="{{asset("css/custom.css")}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!-- include summernote css/js -->

    <![endif]-->

    <script>
        window.csrfToken = " {{ csrf_token() }}";
    </script>
    <script>
        window.csrfToken = " {{ csrf_field() }}";
    </script>
</head>


<body data-status="{{Session::get("durum")}}">

<!-- Navigation -->
<div>
    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="container-fluid">
            <div class="navbar-header">
                <a href="{!! config("ayarlar.baslik") !!}}" class=""></a>
                <img src="{{asset("img/bau2.png")}}" alt="" class="navbar-brand" width="150px"
                     style="padding: 0px; margin-left: 15px;margin-top: 10px">
            </div>
            <ul class="nav navbar-nav" style="float: right;">
                @foreach(App\Kategori::all() as $kategori)
                    <li class="ddown">
                        <button href="/kategoriler/{{$kategori->slug}}" class="dbtn">{{$kategori->enbaslik}}</button>
                        <ul class="ddown-content">
                            @foreach(App\Makale::where("kategori_id", $kategori->id)->where("durum", 1)->orderBy("created_at", "desc")->paginate(10) as $makale)
                                <li>
                                    <a href="/{{$makale->enslug}}">{{$makale->enbaslik}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
                <li><a class="ddown" href="/">TR</a></li>
            </ul>
        </div>
    </nav>

    <!-- /.navbar-collapse -->
    <!-- Page Header -->
    <header class="intro-header" style="background-image: url({{asset('img/home-bg.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>BAU IT</h1>
                        <hr class="small">
                        <span class="subheading">Bahçeşehir üniversitesi IT</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

@yield('content')


<hr>
<!-- Footer -->
<footer id="myFooter">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-sm-offset-1    ">
                <ul>
                    <li><a href="https://bau.edu.tr/icerik/4100-webmail">BAU E-MAIL</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul>
                    <li><a href="https://bau.edu.tr/icerik/2513-academic-calendar">ACADEMIC CALENDAR</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul>
                    <li><a href="https://bau.edu.tr/icerik/3522-kurumsal-iletisim-direktorlugu-iletisim-ulasim">CONTACT
                            & TRANSPORTATION</a></li>
                </ul>
            </div>
            <div class="col-sm-2 info">
                <img src="{{asset("img/bau1.png")}}" alt="" class="logo" width="100px" height="auto">
            </div>
        </div>
    </div>
</footer>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<!-- jQuery -->
<script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset("vendor/bootstrap/js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/toastr.min.js")}}"></script>

<!-- Theme JavaScript -->
<script src="{{asset("vendor/summernote/summernote.min.js")}}"></script>
<script src="{{asset("vendor/summernote/lang/summernote-tr-TR.js")}}"></script>
<script src="{{asset("js/bootstrap-switch.min.js")}}"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
<script src="{{asset("js/laravel-delete.js")}}"></script>
<script src="{{asset("js/clean-blog.js")}}"></script>
<script type='text/javascript' src="{{asset("js/custom.js")}}"></script>

</body>

</html>

<?php
// @todo: Meta etiketlerini doldur.
?>