@extends('web.admin.app')
@section('title','Change Password')
@section('pageHeader','Change Password')
@section('content')

    <div class="card card-primary mb-4 p-4 shadow bg-white ">
        @include('flash::message')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Change Password</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.password.update') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="current_password">Current Password</label>
                                    <input id="current_password" type="password" class="form-control" name="current_password" required autofocus>
                                    @error('current_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">New Password</label>
                                    <input id="password" type="password" class="form-control " name="password" required>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Confirm New Password</label>
                                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                                    @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Change Password
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop


