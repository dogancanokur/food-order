@extends('layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h1>Makale Düzenle</h1>

                {!! Form::model($makale,["route" => ["makale.update",$makale->id], "method" => "put", "files" => true]) !!}

                {!! Form::bsText("baslik","Türkçe Başlık") !!}
                {!! Form::bsText("enbaslik","İngilizce Başlık") !!}
                {!! Form::bsSelect("kategori_id","Kategori",null,$kategoriler,"Lütfen bir kategori seçiniz") !!}
                {!! Form::bsTextArea("icerik","Türkçe İçerik",null,["class" => "summernote"]) !!}
                {!! Form::bsTextArea("enicerik","İngilizce İçerik",null,["class" => "summernote"]) !!}

                {!! Form::bsSubmit("KAYDET") !!}
                {!! Form::close() !!}

            </div>
        </div>
@stop