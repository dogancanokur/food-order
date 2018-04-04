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
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <!--
                                   <th>Resim</th>
                        -->
                        <th>Türkçe Başlık</th>
                        <th>Türkçe Slug</th>
                        <th>İnglizce Başlık</th>
                        <th>İngilizce Slug</th>
                        <th>Eylem</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    @foreach($kategoriler as $kategori)
                        <tr>

                            <td>{{$kategori->baslik}}</td>
                            <td>{{$kategori->slug}}</td>
                            <td>{{$kategori->enbaslik}}</td>
                            <td>{{$kategori->enslug}}</td>

                            <td>
                                <a href="/kategori/{{$kategori->id}}/edit" class="btn btn-primary eylem"
                                   data-toggle="tooltip" title="Düzenle"><i class="fa fa-edit"></i></a>
                                <a href="/kategori/{{$kategori->id}}" class="btn btn-danger eylem" data-toggle="tooltip"
                                   title="Sil" data-method="delete" data-confirm="Emin misin?"><i
                                            class="fa fa-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {{$kategoriler->links()}}
                </div>

            </div>
        </div>
    </div>
@stop

