@extends('web.admin.app')
@section('title','Blood Types')
@section('pageHeader','Blood Types')
@section('content')

    <div class="card container mb-4 p-4 shadow bg-white ">
        @include('flash::message')
        <div class="table-responsive mt-4">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Name</th>
                    <th class="text-center" scope="col">Email</th>
                    <th class="text-center" scope="col">Phone</th>
                    <th class="text-center" scope="col">Date Of Birth</th>
                    <th class="text-center" scope="col">Blood Type</th>
                    <th class="text-center" scope="col">Last Donation Date</th>
                    <th class="text-center" scope="col">City</th>
                    <th class="text-center" scope="col">Governorate</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <th class="text-center"
                            scope="row">{{ ($clients->currentPage() - 1) * $clients->perPage() + $loop->iteration }}</th>
                        <td class="text-center">{{$client->name}}</td>
                        <td class="text-center">{{$client->email}}</td>
                        <td class="text-center">{{$client->phone}}</td>
                        <td class="text-center">{{$client->d_o_b}}</td>
                        <td class="text-center">{{$client->bloodType->name}}</td>
                        <td class="text-center">{{$client->last_donation_date}}</td>
                        <td class="text-center">{{$client->city->name}}</td>
                        <td class="text-center">{{$client->governorate->name}}</td>
                        <td class="text-center">
                            <a href="{{route('admin.general.blood-types.edit',$client->id)}}"
                               class="btn btn-primary">edit</a>
                            <form style="display: inline" method="POST"
                                  action="{{route('admin.general.blood-types.destroy',$client->id)}}">
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
            {{ $clients->links() }}

        </div>
    </div>

@stop
