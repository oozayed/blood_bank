@extends('web.admin.app')
@section('title','Add User')
@section('pageHeader','Add User')
@inject('model','App\Models\User')
@section('content')

    <div class="container mt-6 ">
        {{ Form::model($model,[
            'route' => 'admin.users.store',
        ]) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{Form::text('name',null,['class'=>'form-control'])}}
            {{ Form::label('email', 'Email') }}
            {{Form::email('email',null,['class'=>'form-control'])}}
            {{ Form::label('password', 'Password') }}
            {{Form::password('password',['class'=>'form-control'])}}
            {{ Form::label('password_confirmation', 'Password Confirmation') }}
            {{Form::password('password_confirmation',['class'=>'form-control'])}}
        </div>
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        <div>
            {{Form::submit('Add',['class'=>'btn btn-primary'])}}
        </div>
        {{ Form::close() }}
    </div>
@stop
