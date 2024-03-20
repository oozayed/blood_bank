@extends('web.admin.app')
@section('title','Add Governorates')
@section('pageHeader','Add Governorates')
@inject('model','App\Models\City')
@inject('governorate','App\Models\Governorate')
@section('content')

    <div class="container mt-6">
        {{ Form::model($model,[
            'route' => 'admin.general.cities.store',
        ]) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{Form::text('name',null,['class'=>'form-control'])}}
        </div>
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        <div class="form-group">
            {{Form::select('governorate_id', $governorate->pluck('name','id')->toArray(),null, [
                'class' => 'form-control',
                'placeholder' => 'Select Governorate',
])}}
        </div>

        <div>
            {{Form::submit('Add',['class'=>'btn btn-primary'])}}
        </div>
        {{ Form::close() }}
    </div>
@stop
