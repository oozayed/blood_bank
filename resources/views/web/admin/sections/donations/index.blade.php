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
                    <th class="text-center" scope="col">Patient Name</th>
                    <th class="text-center" scope="col">Patient Phone</th>
                    <th class="text-center" scope="col">Hospital Name</th>
                    <th class="text-center" scope="col">Blood Type</th>
                    <th class="text-center" scope="col">Bags Number</th>
                    <th class="text-center" scope="col">Details</th>
                    <th class="text-center" scope="col">Created At</th>
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
            "ajax": "{{ route('admin.donations.dataTable') }}",
            "columns": [
                {"data": null},
                {"data": "patient_name"},
                {"data": "patient_phone"},
                {"data": "hospital_name"},
                {"data": "blood_type.name"},
                {"data": "bags_num"},
                {"data": "details"},
                {
                    data: 'created_at',
                    render: function(data) {
                        var date = new Date(data);
                        return date.toISOString().split('T')[0];
                    }
                },
                {"data": "action", "orderable": false, "searchable": false}
            ],
            "createdRow": function (row, data, dataIndex) {
                $('td:eq(0)', row).html(dataIndex + 1);
            }
        });
    </script>
@endpush


