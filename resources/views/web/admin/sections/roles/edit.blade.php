@extends('web.admin.app')
@section('title','Edit Role')
@section('pageHeader','Edit Role')
@inject('model','Spatie\Permission\Models\Role')
@section('content')

    <div class="container mt-6 ">
        {{ Form::model($model,[
            'route' => ['admin.roles.update',$role->id],
            'method' => 'put'
        ]) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{Form::text('name',$role->name,['class'=>'form-control'])}}
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
                    {{Form::checkbox('permissions[]',$permission->id,$role->hasPermissionTo($permission->name))}}
                    {{$permission->name}}
                </label>
                <br>
            @endforeach
        <div>
            @error('permissions')
            <span class="text-danger">{{$message}}</span>
            @enderror
            {{Form::submit('Update',['class'=>'btn btn-primary'])}}
        </div>
        {{ Form::close() }}
    </div>
@stop
