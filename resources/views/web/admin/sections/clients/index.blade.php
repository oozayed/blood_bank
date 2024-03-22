@extends('web.admin.app')
@section('title','Clients')
@section('pageHeader','Clients')
@section('content')

    <div class="card card-primary mb-4 p-4 shadow bg-white ">
        @include('flash::message')
        <div class="table-responsive mt-4">
            <table class="table table-bordered table-hover" id="myTable">
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


                </tbody>
            </table>

        </div>
    </div>

@stop
@push('scripts')
    <script>
        new DataTable('#myTable', {
            processing: true,
            "serverSide": true,
            "ajax": "{{ route('admin.clients.dataTable') }}",
            "columns": [
                {"data": null},
                {"data": "name"},
                {"data": "email"},
                {"data": "phone"},
                {"data": "d_o_b"},
                {"data": "blood_type.name", "name": "bloodType.name"},
                {"data": "last_donation_date"},
                {"data": "city.name", "name": "city.name"},
                {"data": "governorate.name", "name": "governorate.name"},
                {"data": "action", "orderable": false, "searchable": false}
            ],
            "createdRow": function (row, data, dataIndex) {
                $('td:eq(0)', row).html(dataIndex + 1);
            }
        });
    </script>
@endpush


