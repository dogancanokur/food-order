@extends('layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="m-b-40 text-center">
                    <a href="/makale/create" class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                        YENİ MAKALE EKLE
                    </a>
                </div>
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>Başlık</th>
                        <th>Slug</th>
                        <th>Kategori</th>
                        <th>Yazar</th>
                        <th>Yayınlanma Tarihi</th>
                        <th>Eylem</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($makaleler as $makale)
                        <tr>
                            <td>{{$makale->baslik}}</td>
                            <td>{{$makale->slug}}</td>
                            <td>{{$makale->kategori->baslik}}</td>
                            <td>{{$makale->user->name}}</td>
                            <td>{{$makale->created_at->diffForHumans()}}</td>

                            <td>
                                <a href="/makale/{{$makale->id}}/edit" class="btn btn-primary eylem"
                                   data-toggle="tooltip" title="Düzenle"><i class="fa fa-edit"></i></a>
                                <a href="/makale/{{$makale->id}}" class="btn btn-danger eylem" data-toggle="tooltip"
                                   title="Sil" data-method="delete" data-confirm="Emin misin ?"><i
                                            class="fa fa-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="text-center">
                    {{$makaleler->links()}}
                </div>
            </div>
        </div>
    </div>


    </div>
    </div>
@stop