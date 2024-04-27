@extends('web.admin.app')
@section('title','Add Role')
@section('pageHeader','Add Role')
@inject('model','Spatie\Permission\Models\Role')
@section('content')

    <div class="container mt-6 ">
        {{ Form::model($model,[
            'route' => 'admin.roles.store',
        ]) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{Form::text('name',null,['class'=>'form-control'])}}
        </div>
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
{{--       import permission check boxs--}}
        <div class="form-group">
            {{ Form::label('permissions', 'Permissions') }}
            <br>
            @foreach($permissions as $permission)
                <label>
                    {{Form::checkbox('permissions[]',$permission->id,null)}}
                    {{$permission->name}}
                </label>
                <br>
            @endforeach
        <div>
            @error('permissions')
            <span class="text-danger">{{$message}}</span>
            @enderror
            {{Form::submit('Add',['class'=>'btn btn-primary'])}}
        </div>
        {{ Form::close() }}
    </div>
@stop
