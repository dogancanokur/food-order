@extends('layouts.master')

@section('content')


    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
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
                        <th>Roller</th>
                        <th>İsim</th>
                        <th>Email</th>
                        <th>Eylem</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($users as $user)
                            <td>
                                @foreach($user->roles as $role)
                                    {{$role->name}}<br>
                                @endforeach
                            </td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="/user/{{$user->id}}/edit" class="btn-primary eylem" data-toggle="tooltip"
                                   title="Düzenle"><i class="fa fa-edit"></i></a>
                                <a href="/user/{{$user->id}}" class="btn-danger eylem" data-toggle="tooltip"
                                   title="Sil"><i class="fa fa-trash"></i></a>
                            </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {{$users->links()}}
                </div>

            </div>
        </div>
    </div>
@stop

