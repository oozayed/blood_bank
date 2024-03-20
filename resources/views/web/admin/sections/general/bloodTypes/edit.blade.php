@extends('web.admin.app')
@section('title','edit Blood Type')
@section('pageHeader','edit Blood Type')
@inject('model','App\Models\BloodType')
@section('content')

    <div class="container mt-6">
        {{ Form::model($model,[
            'route' => ['admin.general.blood-types.update',$bloodType->id],
            'method' => 'PUT',
        ]) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{Form::text('name',$bloodType->name,['class'=>'form-control'])}}
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
