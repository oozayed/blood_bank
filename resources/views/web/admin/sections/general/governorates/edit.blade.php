@extends('web.admin.app')
@section('title','edit Governorates')
@section('pageHeader','edit Governorates')
@inject('model','App\Models\Governorate')
@section('content')

    <div class="container mt-6">
        {{ Form::model($model,[
            'route' => ['admin.general.governorates.update',$governorate->id],
            'method' => 'PUT',
        ]) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{Form::text('name',$governorate->name,['class'=>'form-control'])}}
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
