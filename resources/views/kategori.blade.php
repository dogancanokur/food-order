@extends("layouts.master")

@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <h1>{{$kategori->baslik}}</h1>
                @foreach($makaleler as $makale)
                    <div class="post-preview">
                        <a href="/{{$makale->slug}}">
                            <h4 class="post-title">
                                {{$makale->baslik}}
                            </h4>
                        </a>
                    </div>
                    <hr>
                @endforeach
            <!-- Pager -->
                <div class="text-center">
                    {{$makaleler->links()}}
                </div>
            </div>
        </div>
    </div>
@stop