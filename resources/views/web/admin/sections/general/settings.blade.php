@extends('web.admin.app')
@section('title','General Settings')
@section('pageHeader','General Settings')
@section('content')

<div class="row">
    <div class="col-md 12">
        <div class="card-header">
            <h3 class="card-title">General Settings Form</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.general.settings.update')}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h3>General Settings</h3>
                        <div class="form-group">
                            <label for="site_name">Site Name</label>
                            <input type="text" class="form-control" value="{{old('site_name',settings()->get('site_name'))}}" name="site_name" id="site_name">
                            @error('site_name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" value="{{old('email',settings()->get('email'))}}" name="email" id="email">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" value="{{old('phone',settings()->get('phone'))}}" name="phone" id="phone">
                            @error('phone')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                    </div>
                    <div class="col-md-6">
                        <h3>About Us </h3>
                        <div class="form-group">
                            <label for="about_us">About Us</label>
                            <textarea name="about_us" class="form-control"  rows="5">{{old('about_us',settings()->get('about_us'))}}</textarea>
                            @error('about_us')
                                 <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="url" class="form-control" value="{{old('facebook',settings()->get('facebook'))}}" name="facebook" id="facebook">
                            @error('facebook')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="url" class="form-control" value="{{old('twitter',settings()->get('twitter'))}}" name="twitter" id="twitter">
                            @error('twitter')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input type="url" class="form-control" value="{{old('instagram',settings()->get('instagram'))}}" name="instagram" id="instagram">
                            @error('instagram')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="youtube">Youtube</label>
                            <input type="url" class="form-control" value="{{old('youtube',settings()->get('youtube'))}}" name="youtube" id="youtube">
                            @error('youtube')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                    </div>




                </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </form>
    </div>
</div>




@stop
