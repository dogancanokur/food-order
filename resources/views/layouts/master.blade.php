<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{!! config("ayarlar.aciklama") !!}">
    <meta name="keywords" content="{!! config("ayarlar.keywords") !!}">
    <meta name="author" content="{!! config("ayarlar.author") !!}">

    <title> {!!config("ayarlar.baslik") !!}</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset("vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="{{asset("css/toastr.min.css")}}" rel="stylesheet">
    <link href="{{asset("css/bootstrap-switch.min.css")}}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link href="{{asset("vendor/summernote/summernote.css")}}" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid" id="topbar">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li><a href="/"><i class="fa fa-home"></i>Ana Sayfa</a></li>
                    @if(Auth::guest())
                        <li><a href="/login" class="uyelik-tus"><i class="fa fa-sign-in"></i> Üye Girişi</a></li>
                        <li><a href="/register" class="uyelik-tus"><i class="fa fa-users"></i> Üye Ol</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                @if(Auth::user()->yetkisi_var_mi("admin"))
                                    <li><a href="{{ url('/site-ayarlari') }}"><i class="fa fa-btn fa-wrench"></i>Site
                                            Ayarları</a></li>
                                    <li><a href="{{ url('/user') }}"><i class="fa fa-btn fa-users"></i>Kullanıcılar</a>
                                    </li>
                                    <li><a href="{{ url('/kategori') }}"><i
                                                    class="fa fa-btn fa-cube"></i>Kategoriler</a></li>
                                    <li><a href="{{ url('/makale') }}"><i class="fa fa-btn fa-list-ol"></i>Tüm Makaleler</a>
                                    </li>
                                    <li><a href="{{ url('/talep') }}"><i class="fa fa-btn fa-envelope-o"></i>Yazarlık
                                            Talepleri</a></li>
                                    <li class="divider"></li>
                                @endif
                                @if(Auth::user()->yetkisi_var_mi("standart"))
                                    <li><a href="{{ url('/makalem') }}"><i class="fa fa-btn fa-list"></i>Makalelerim</a>
                                    </li>
                                    <li><a href="{{ url('/makalem/create') }}"><i class="fa fa-btn fa-plus"></i>Yeni
                                            Makale Ekle</a></li>
                                @endif
                                @if(!Auth::user()->yetkisi_var_mi("admin") && !Auth::user()->yetkisi_var_mi("standart"))
                                <!-- Adminlik kontrolü -->
                                    <li><a href="{{ url('/yetki-talebi') }}"><i class="fa fa-btn fa-envelope"></i>Yetki
                                            Talebi</a></li>
                                @endif
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Çıkış</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a href="{!! config("ayarlar.baslik") !!}}" class=""></a><img src="{{asset("img/bau2.jpg")}}" alt=""
                                                                          class="navbar-brand" width="150px"
                                                                          style="padding: 0px; margin-left: 15px;margin-top: 10px">

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="post.html">Sample Post</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

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


@yield('content')


<hr>
<!-- Footer -->
<footer id="myFooter">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <ul>
                    <li><a href="https://bau.edu.tr/icerik/2591-idari-birimler">İdari Birimler</a></li>
                    <li><a href="https://bau.edu.tr/icerik/2432-bahcesehir-universitesi-akademik-takvim">Akademik
                            Takvim</a></li>
                    <li><a href="https://bau.edu.tr/icerik/2983-burslar-ve-ucretler">Burslar ve Ücretler</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul>
                    <li><a href="#">Yüksek Lisans ve Doktora</a></li>
                    <li><a href="#">BAU E-Posta</a></li>
                    <li><a href="#">Fakülte ve Okullar</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul>
                    <li><a href="#">SSS</a></li>
                    <li><a href="#">İletişim ve Ulaşım</a></li>
                </ul>
            </div>
            <div class="col-sm-3 info">
                <img src="{{asset("img/bau2.jpg")}}" alt="" class="logo" width="250px" height="auto">
                <div class="social-icons" style="padding: 10px">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<script src="{{asset("js/custom.js")}}"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


</body>

</html>

<?php
// @todo: Meta etiketlerini doldur.
?>