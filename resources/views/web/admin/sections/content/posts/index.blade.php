@extends('web.admin.app')
@section('title','Posts')
@section('pageHeader','Posts')
@section('content')
    <div class="card container mb-4 p-4 shadow bg-white ">

        <div class="text-left mt-3">
            <a href="{{route('admin.content.posts.create')}}" class="btn btn-success">Add Post</a>
        </div>
        <br>
        @include('flash::message')
        <div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="text-center" scope="col">#</th>
                        <th class="text-center" scope="col">title</th>
                        <th class="text-center" scope="col">content</th>
                        <th class="text-center" scope="col">image</th>
                        <th class="text-center" scope="col">category</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th class="text-center"
                                scope="row">{{ ($posts->currentPage() - 1) * $posts->perPage() + $loop->iteration }}</th>
                            <td class="text-center">{{$post->title}}</td>
                            <td class="text-center">
                                {{ Str::limit(strip_tags($post->content), 50) }}
                            </td>
                            <td class="text-center">
                                @if ($post->image)
                                    <img src="{{ asset('storage/uploads/' . $post->image) }}" alt="{{ $post->title }}" width="50" height="50">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td class="text-center">{{$post->category->name}}</td>
                            <td class="text-center">
                                <a href="{{route('admin.content.posts.show',$post->id)}}"
                                   class="btn btn-info">show</a>
                                <a href="{{route('admin.content.posts.edit',$post->id)}}"
                                   class="btn btn-primary">edit</a>
                                <form style="display: inline" method="POST"
                                      action="{{route('admin.content.posts.destroy',$post->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')" type="submit"
                                            class="btn btn-danger">
                                        delete
                                    </button>

                                </form>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                {{ $posts->links() }}

            </div>
        </div>

@stop
