@extends('web.site.layouts.app',['bodyClass' =>'signin-account'])

@section('content')
    <!--form-->
    <div class="form">

        <div class="container">
            <div class="path">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('site.index') }}">الرئيسية</a></li>
                        <li class="breadcrumb-item active" aria-current="page">تسجيل الدخول</li>
                    </ol>
                </nav>
            </div>
            <div class="signin-form">
                @if(Session::has('errors'))
                    <div class="alert alert-danger">{{ $errors }}</div>
                @endif
                <form method="POST" action="{{ route('site.handleLogin') }}">
                    @csrf
                    <div class="logo">
                        <img src="{{ asset('site/imgs/logo.png') }}" alt="Logo">
                    </div>
                    <div class="form-group">
                        <input name="phone" type="text" class="form-control" placeholder="الجوال" value="{{ old('phone') }}">
                        @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="كلمة المرور">
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row options">
                        <div class="col-md-6 remember">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">تذكرنى</label>
                            </div>
                        </div>
                        <div class="col-md-6 forgot">
                            <img src="{{ asset('site/imgs/complain.png') }}" alt="Complain Icon">
                            <a href="#">هل نسيت كلمة المرور</a>
                        </div>
                    </div>
                    <div class="row buttons">
                        <div class="col-md-6 right">
                            <button type="submit" class="btn btn-primary">دخول</button>
                        </div>
                        <div class="col-md-6 left">
                            <a href="" class="btn btn-secondary">انشاء حساب جديد</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
