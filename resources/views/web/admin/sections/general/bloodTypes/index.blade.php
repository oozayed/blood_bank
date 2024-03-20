@extends('web.admin.app')
@section('title','Blood Types')
@section('pageHeader','Blood Types')
@section('content')

    <div class="card container mb-4 p-4 shadow bg-white ">

        <div class="text-left mt-3 ">
            <a href="{{route('admin.general.blood-types.create')}}" class="btn btn-success">Add Blood Type</a>

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
                @foreach($bloodTypes as $bloodType)
                    <tr>
                        <th class="text-center"
                            scope="row">{{ ($bloodTypes->currentPage() - 1) * $bloodTypes->perPage() + $loop->iteration }}</th>
                        <td class="text-center">{{$bloodType->name}}</td>
                        <td class="text-center">
                            <a href="{{route('admin.general.blood-types.edit',$bloodType->id)}}"
                               class="btn btn-primary">edit</a>
                            <form style="display: inline" method="POST"
                                  action="{{route('admin.general.blood-types.destroy',$bloodType->id)}}">
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
            {{ $bloodTypes->links() }}

        </div>
    </div>

@stop
