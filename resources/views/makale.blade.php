@extends("layouts.master")

@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h1>{{$makale->baslik}}</h1>

                {!! $makale->icerik !!}
            </div>
        </div>
    </div>
@stop