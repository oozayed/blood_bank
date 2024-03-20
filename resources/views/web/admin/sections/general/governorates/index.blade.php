@extends('web.admin.app')
@section('title','Governorates')
@section('pageHeader','Governorates')
@section('content')

    <div class="card container mb-4 p-4 shadow bg-white ">

        <div class="text-left mt-3">
            <a href="{{route('admin.general.governorates.create')}}" class="btn btn-success">Add Governorate</a>

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
                @foreach($governorates as $governorate)
                    <tr>
                        <th class="text-center"
                            scope="row">{{ ($governorates->currentPage() - 1) * $governorates->perPage() + $loop->iteration }}</th>
                        <td class="text-center">{{$governorate->name}}</td>
                        <td class="text-center">
                            <a href="{{route('admin.general.governorates.edit',$governorate->id)}}"
                               class="btn btn-primary">edit</a>
                            <form style="display: inline" method="POST"
                                  action="{{route('admin.general.governorates.destroy',$governorate->id)}}">
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
            {{ $governorates->links() }}

        </div>
    </div>

@stop
