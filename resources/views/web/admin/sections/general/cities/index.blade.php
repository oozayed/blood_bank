@extends('web.admin.app')
@section('title','Cities')
@section('pageHeader','Cities')
@section('content')


    <div class="card container mb-4 p-4 shadow bg-white ">

        <div class="text-left mt-3">
            <a href="{{route('admin.general.cities.create')}}" class="btn btn-success">Add City</a>

        </div>
        <br>
        @include('flash::message')
        <div class="table-responsive mt-4">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Name</th>
                    <th class="text-center" scope="col">Governorate</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cities as $city)
                    <tr>
                        <th class="text-center"
                            scope="row">{{ ($cities->currentPage() - 1) * $cities->perPage() + $loop->iteration }}</th>
                        <td class="text-center">{{$city->name}}</td>
                        <td class="text-center">{{$city->governorate->name}}</td>
                        <td class="text-center">
                            <a href="{{route('admin.general.cities.edit',$city->id)}}" class="btn btn-primary">edit</a>
                            <form style="display: inline" method="POST"
                                  action="{{route('admin.general.cities.destroy',$city->id)}}">
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
            {{ $cities->links() }}

        </div>
    </div>

@stop
