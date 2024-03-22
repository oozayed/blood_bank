@extends('web.admin.app')
@section('title','Posts')
@section('pageHeader','Posts')
@section('content')


    <div class="text-left ">
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
    </div>
    <div class="card mb-3 shadow bg-white ">

        <div class="card-body ">

            <p class="card-text" class="text-muted">{{ $post->created_at->diffForHumans() }}</p>

            <h1 class="card-title text-center text-capitalize ">{{ $post->title }}</h1>
            <p class="card-text">{{ $post->content }}</p>
            <img src="{{ asset('storage/uploads/' . $post->image) }}"
                 class="card-img-top mb-3 rounded shadow img-fluid w-50 h-100 " alt="{{ $post->title }}"></div>
    </div>
@stop
