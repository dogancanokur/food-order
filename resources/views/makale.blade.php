@extends("layouts.master")

@section('content')


<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-lg-offset-2 col-lg-8 col-md-10 icerik-container col-sm-12 mx-auto">
            <div class="post-preview">
                <h1 class="post-title">{{$makale->baslik}}</h1>
                <hr>
                <p class="post-content">
                    {!! $makale->icerik !!}
                </p>
            </div>

        </div>
    </div>
</div>
@stop