@extends('web.admin.app')
@section('title','index')
@inject('clients','App\Models\Client')
@inject('governorates','App\Models\Governorate')
@inject('donations','App\Models\DonationRequest')
@inject('contacts','App\Models\Contact')
@section('pageHeader','Statistics')
@section('content')

    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$clients->count()}}</h3>

                    <p>Clients</p>
                </div>
                <div class="icon">
                    <i class="bi bi-people nav"></i>
                </div>
                <a href="{{route('admin.clients.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$governorates->count()}}</h3>

                    <p>Governorates</p>
                </div>
                <div class="icon">
                    <i class="bi bi-flag-fill nav"></i>
                </div>
                <a href="{{route('admin.general.governorates.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$donations->count()}}</h3>

                    <p>Donations</p>
                </div>
                <div class="icon">
                    <i class="bi bi-box2-heart nav"></i>
                </div>
                <a href="{{route('admin.donations.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$contacts->count()}}</h3>

                    <p>Contacts</p>
                </div>
                <div class="icon">
                    <i class="bi-envelope nav"></i>
                </div>
                <a href="{{route('admin.contacts.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>


        <!-- ./col -->
    </div>


@stop
