@extends('web.admin.app')
@section('title','Add Governorates')
@section('pageHeader','Add Governorates')
@inject('model','App\Models\BloodType')
@section('content')

    <div class="container mt-6">
        {{ Form::model($model,[
            'route' => 'admin.general.blood-types.store',
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
