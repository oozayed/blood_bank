@extends('web.admin.app')
@section('title','Update Post')
@section('pageHeader','Update Post')
@inject('model','App\Models\Post')
@inject('categories','App\Models\Category')
@section('content')
    <div class="card container mb-4 p-4 shadow bg-white ">

    <div class="container mt-6">
        {{ Form::model($model,[
            'route' => ['admin.content.posts.update',$post->id],
            'method' => 'PUT',
            'files' => true,
        ]) }}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{Form::text('title',$post->title,['class'=>'form-control'])}}
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror
            {{ Form::label('content', 'Content') }}
            {{Form::textarea('content',$post->content,['class'=>'form-control'])}}
            @error('content')
            <span class="text-danger">{{$message}}</span>
            @enderror
            {{ Form::label('image', 'Image') }}
            {{Form::file('image',['class'=>'form-control'])}}
            @error('image')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <div class="form-group">
                {{ Form::label('category_id', 'Category') }}
            {{Form::select('category_id',$categories->pluck('name','id')->toArray(),$post->category_id,['class'=>'form-control','placeholder'=>'Select Category'])}}
            </div>
        </div>

        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        <div>
            {{Form::submit('Update',['class'=>'btn btn-primary'])}}
        </div>
        {{ Form::close() }}
    </div>
    </div>
@stop
