@extends('web.admin.app')
@section('title','Categories')
@section('pageHeader','Categories')
@section('content')
        <div class="card container mb-4 p-4 shadow bg-white ">

            <div class="text-left mt-3">
                <a href="{{route('admin.content.categories.create')}}" class="btn btn-success">Add Category</a>
            </div>
            <br>
            @include('flash::message')
            <div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="text-center" scope="col">#</th>
                        <th class="text-center" scope="col">Name</th>
                        <th class="text-center" scope="col">Number of posts</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <th class="text-center" scope="row">{{ ($categories->currentPage() - 1) * $categories->perPage() + $loop->iteration }}</th>
                            <td class="text-center">{{$category->name}}</td>
                            <td class="text-center">{{$category->posts_count}}</td>
                            <td class="text-center">
                                <a href="{{route('admin.content.categories.edit',$category->id)}}" class="btn btn-primary">edit</a>
                                <form style="display: inline" method="POST" action="{{route('admin.content.categories.destroy',$category->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">
                                        delete
                                    </button>

                                </form>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                {{ $categories->links() }}

            </div>
        </div>


@stop
