@extends('web.admin.app')
@section('title','Roles')
@section('pageHeader','Roles')
@section('content')

    <div class="card container mb-4 p-4 shadow bg-white ">

        <div class="text-left mt-3">
            <a href="{{route('admin.roles.create')}}" class="btn btn-success">Add Role</a>

        </div>
        <br>
        @include('flash::message')
        <div class="table-responsive mt-4">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Name</th>
                    <th class="text-center" scope="col">Guard</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <th class="text-center"
                            {{--                            scope="row">{{ ($users->currentPage() - 1) * $users->perPage() + $loop->iteration }}</th>--}}
                            scope="row">{{$loop->iteration }}</th>
                        <td class="text-center">{{$role->name}}</td>
                        <td class="text-center">{{$role->guard_name}}</td>
                        <td class="text-center">
                            <a href="{{route('admin.roles.edit',$role->id)}}"
                               class="btn btn-primary">edit</a>
                            <form style="display: inline" method="POST"
                                  action="{{route('admin.roles.destroy',$role->id)}}">
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
            {{--            {{ $roles->links() }}--}}

        </div>
    </div>

@stop
