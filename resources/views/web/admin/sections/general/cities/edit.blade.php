@extends('web.admin.app')
@section('title','Edit City')
@section('pageHeader','Edit City')
@inject('model','App\Models\City')
@inject('governorate','App\Models\Governorate')
@section('content')

    <div class="container mt-6">
        {{ Form::model($model,[
            'route' => ['admin.general.cities.update',$city->id],
            'method' => 'PUT',
        ]) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{Form::text('name',$city->name,['class'=>'form-control'])}}
        </div>
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        <div class="form-group">
            {{ Form::label('governorate_id', 'Governorate') }}
            {{Form::select('governorate_id', [$governorate->pluck('name','id')],$city->governorate_id, ['class' => 'form-control'])}}
        </div>
        <div>
            {{Form::submit('Update',['class'=>'btn btn-primary'])}}
        </div>
        {{ Form::close() }}
    </div>
@stop
