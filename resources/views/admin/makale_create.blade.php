@extends('layouts.master')

@section('content')

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="m-b-40 text-center">
                    <a href="/kategori/create" class="btn btn-danger"><i class="fa fa-plug"></i>Yeni Kategori Ekle</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                {!! Form::open(["url" => "/makale" ,"method" => "post", "files" => true]) !!}

                {!! Form::bsText("baslik","Türkçe Başlık") !!}
                {!! Form::bsText("enbaslik","İnglizce Başlık") !!}
                {!! Form::bsSelect("kategori_id","Kategori",null,$kategoriler,"Lütfen bir kategori seçiniz") !!}
                {!! Form::bsTextArea("icerik","Türkçe İçerik",null,["id" => "summernote"]) !!}
                {!! Form::bsTextArea("enicerik","İngilizce İçerik",null,["id" => "summernote"]) !!}


                {!! Form::bsSubmit("KAYDET") !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop