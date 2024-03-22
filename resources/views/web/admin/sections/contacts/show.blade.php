@extends('web.admin.app')
@section('title', 'Contact Details')
@section('pageHeader', 'Contact Details')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Back</a>

                <div class="card mb-3 shadow border-0">
                    <div class="card-body">
                        <h3>Client: {{ $contact->client->name }}</h3>  <hr class="mb-3">
                        <h3 class="card-title mb-0">Subject: {{ $contact->subject }}</h3>
                        <p class="card-text text-muted"><small>{{ $contact->created_at->diffForHumans() }}</small></p>

                        <dl class="row">
                            <dt class="col-sm-3">Message:</dt>
                            <dd class="col-sm-9">{{ $contact->message }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
