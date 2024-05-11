@extends('web.admin.app')
@section('title','Permissions')
@section('pageHeader','Permissions')
@section('content')



    <div class="card container mb-4 p-4 shadow bg-white ">

        <div class="text-left mt-3">
            <a href="{{route('admin.permissions.create')}}" class="btn btn-success">Add Permission</a>

        </div>
        <br>
        @include('flash::message')
        <div class="table-responsive mt-4">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Name</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <th class="text-center"
                            {{--                            scope="row">{{ ($users->currentPage() - 1) * $users->perPage() + $loop->iteration }}</th>--}}
                            scope="row">{{$loop->iteration }}</th>
                        <td class="text-center">{{$permission->name}}</td>
                        <td class="text-center">
                            <a href="{{route('admin.permissions.edit',$permission->id)}}"
                               class="btn btn-primary">edit</a>
                            <form style="display: inline" method="POST"
                                  action="{{route('admin.permissions.destroy',$permission->id)}}">
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
