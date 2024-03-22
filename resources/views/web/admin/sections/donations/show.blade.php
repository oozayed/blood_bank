@extends('web.admin.app')

@section('title', 'Donation Details')

@section('pageHeader', 'Donation Details')

@section('content')


    <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Back</a>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Client: {{ $donation->client->name }}</h3>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">Patient Name:</dt>
                            <dd class="col-sm-9">{{ $donation->patient_name }}</dd>

                            <dt class="col-sm-3">Patient Phone:</dt>
                            <dd class="col-sm-9">{{ $donation->patient_phone }}</dd>

                            <dt class="col-sm-3">Date:</dt>
                            <dd class="col-sm-9">{{ $donation->created_at->format('Y-m-d H:i:s') }}</dd>

                            <dt class="col-sm-3">City:</dt>
                            <dd class="col-sm-9">{{ $donation->city->name }}</dd>

                            <dt class="col-sm-3">Hospital Name:</dt>
                            <dd class="col-sm-9">{{ $donation->hospital_name }}</dd>

                            <dt class="col-sm-3">Blood Type:</dt>
                            <dd class="col-sm-9">{{ $donation->bloodType->name }}</dd>

                            <dt class="col-sm-3">Patient Age:</dt>
                            <dd class="col-sm-9">{{ $donation->patient_age }}</dd>

                            <dt class="col-sm-3">Bags Num:</dt>
                            <dd class="col-sm-9">{{ $donation->bags_num }}</dd>

                            <dt class="col-sm-3">Hospital Address:</dt>
                            <dd class="col-sm-9">{{ $donation->hospital_address }}</dd>

                            <dt class="col-sm-3">Details:</dt>
                            <dd class="col-sm-9">{{ $donation->details }}</dd>

                            <dt class="col-sm-3">Governorate:</dt>
                            <dd class="col-sm-9">{{ $donation->governorate->name }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
