@extends('web.admin.app')
@section('title','Users')
@section('pageHeader','Users')
@section('content')



    <div class="card container mb-4 p-4 shadow bg-white ">

        <div class="text-left mt-3">
            <a href="{{route('admin.users.create')}}" class="btn btn-success">Add User</a>

        </div>
        <br>
        @include('flash::message')
        <div class="table-responsive mt-4">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Name</th>
                    <th class="text-center" scope="col">Email</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th class="text-center"
                            scope="row">{{ ($users->currentPage() - 1) * $users->perPage() + $loop->iteration }}</th>
                        <td class="text-center">{{$user->name}}</td>
                        <td class="text-center">{{$user->email}}</td>
                        <td class="text-center">
                            <a href="{{route('admin.users.edit',$user->id)}}"
                               class="btn btn-primary">edit</a>
                            <form style="display: inline" method="POST"
                                  action="{{route('admin.users.destroy',$user->id)}}">
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
            {{ $users->links() }}

        </div>
    </div>


@stop
