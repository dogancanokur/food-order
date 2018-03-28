@extends('layouts.master')

@section('content')


    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Site Ayarları</div>
                    <div class="panel-body">
                        {!! Form::open(["url" =>"/site-ayarlari/guncelle", "method" => "put"]) !!}
                        @foreach($ayarlar as $ayar)
                            {!! Form::bsText($ayar->name,trans("formlar.".$ayar->name),$ayar->value) !!}
                        @endforeach
                        {!! Form::bsSubmit("Kaydet") !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
