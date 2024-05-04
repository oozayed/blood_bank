@extends('web.admin.app')
@section('title','edit User')
@section('pageHeader','edit User')
@inject('model','App\Models\User')
@section('content')

    <div class="container mt-6">
        {{ Form::model($model,[
            'route' => ['admin.permissions.update',$permission->id],
            'method' => 'put'
        ]) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{Form::text('name',$permission->name,['class'=>'form-control'])}}
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            {{Form::submit('Update',['class'=>'btn btn-primary'])}}
        </div>
        {{ Form::close() }}
@stop
