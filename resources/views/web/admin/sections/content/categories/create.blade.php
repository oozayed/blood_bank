@extends('web.admin.app')
@section('title','Add Category')
@section('pageHeader','Add Category')
@inject('model','App\Models\Category')
@section('content')

    <div class="container mt-6">
        {{ Form::model($model,[
            'route' => 'admin.content.categories.store',
        ]) }}
            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{Form::text('name',null,['class'=>'form-control'])}}
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
