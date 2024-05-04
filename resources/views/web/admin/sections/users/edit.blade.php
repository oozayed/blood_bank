@extends('web.admin.app')
@section('title','edit User')
@section('pageHeader','edit User')
@inject('model','App\Models\User')
@section('content')

    <div class="container mt-6">
        {{ Form::model($model,[
            'route' => ['admin.users.update',$user->id],
            'method' => 'PUT',
        ]) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{Form::text('name',$user->name,['class'=>'form-control'])}}
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
            {{ Form::label('email', 'Email') }}
            {{Form::email('email',$user->email,['class'=>'form-control'])}}
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
            {{ Form::label('password', 'Password') }}
            {{Form::password('password',['class'=>'form-control'])}}
            @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror
            {{ Form::label('password_confirmation', 'Password Confirmation') }}
            {{Form::password('password_confirmation',['class'=>'form-control'])}}
            @error('password_confirmation')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <div class="form-group">
                {{ Form::label('roles', 'Roles') }}
                <br>
            @foreach($roles as $role)
                    <label>
                        {{Form::checkbox('roles[]',$role->id,$user->hasRole($role->name))}}
                        {{$role->name}}
                    </label>
                    <br>
                @endforeach
            @error('roles')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        <div>
            {{Form::submit('Update',['class'=>'btn btn-primary'])}}
        </div>
        {{ Form::close() }}
    </div>
@stop
