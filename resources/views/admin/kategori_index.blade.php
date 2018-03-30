@extends('layouts.master')

@section('content')


    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="m-b-40 text-center">
                    <a href="/kategori/create" class="btn btn-danger"><i class="fa fa-plug"></i>Yeni Kategori Ekle</a>
                </div>
                <div class="panel panel-default">

                    <div class="panel-heading text-center">Kullanıcı Listesi</div>

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
                        <th>Resim</th>
                        <th>Başlık</th>
                        <th>Slug</th>
                        <th>Eylem</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($kategoriler as $kategori)
                            <td>{!! $kategori->kucuk_resim !!}</td>
                            <td>{{$kategori->baslik}}</td>
                            <td>{{$kategori->slug}}</td>
                            <td>
                                <a href="/user/{{$kategori->id}}/edit" class="btn-primary eylem" data-toggle="tooltip" title="Düzenle"><i class="fa fa-edit"></i></a>
                                <a href="/user/{{$kategori->id}}" class="btn-danger eylem" data-toggle="tooltip" title="Sil"><i class="fa fa-trash"></i></a>
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

