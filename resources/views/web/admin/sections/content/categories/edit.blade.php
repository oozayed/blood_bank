@extends('web.admin.app')
@section('title','edit Governorates')
@section('pageHeader','edit Category')
@inject('model','App\Models\Category')
@section('content')

    <div class="container mt-6">
        {{ Form::model($model,[
            'route' => ['admin.content.categories.update',$category->id],
            'method' => 'PUT',
        ]) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{Form::text('name',$category->name,['class'=>'form-control'])}}
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
