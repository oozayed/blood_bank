@extends('web.admin.app')
@section('title','Contacts')
@section('pageHeader','Contacts')
@section('content')

<div class="card card-primary mb-4 p-4 shadow bg-white ">
    @include('flash::message')
    <div class="table-responsive mt-4">
        <table class="table table-bordered table-hover" id="myTable">
            <thead>
            <tr>
                <th class="text-center" scope="col">#</th>
                <th class="text-center" scope="col">Client</th>
                <th class="text-center" scope="col">Subject</th>
                <th class="text-center" scope="col">Message</th>
                <th class="text-center" scope="col">Date</th>
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
        "ajax": "{{ route('admin.contacts.dataTable') }}",
        "columns": [
            {"data": null},
            {"data": "client.name"},
            {"data": "subject"},
            {
                data: 'message',
                render: function(data) {
                    var maxLength = 50;
                    var truncatedMessage = data.length > maxLength ? data.substr(0, maxLength) + '...' : data;
                    return truncatedMessage;
                }
            },
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


