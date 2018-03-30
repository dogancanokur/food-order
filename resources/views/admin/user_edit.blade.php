@extends('layouts.master')

@section('content')


    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Kullanıcı Düzenle</div>
                    <div class="panel-body">
                        {!! Form::model($user, ['route' => ['user.update', $user -> id],"method"=>"put"]) !!}
                        {!! Form::bsCheckbox("rol","Roller",[
                        ["value"=>  1,"text"=> "Admin","is_checked"=> $user->yetkisi_var_mi("admin")],
                        ["value"=>  2,"text"=> "Standart","is_checked"=> $user->yetkisi_var_mi("standart")],
                        ]) !!}

                        {!! Form::bsText("name","İsim") !!}
                        {!! Form::bsText("email","E-Mail") !!}
                        {!! Form::bsPassword("password","Şifre") !!}
                        {!! Form::bsSubmit("Kaydet") !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
