@extends("layouts.enmaster")

@section('content')


    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-lg-offset-2 col-lg-8 col-md-10 icerik-container col-sm-12 mx-auto">
                <div class="post-preview">
                    <h1 class="post-title">{{$makale->enbaslik}}</h1>
                    <hr>
                    <p class="post-content">
                        {!! $makale->enicerik !!}
                    </p>
                </div>

            </div>
        </div>
    </div>
@stop