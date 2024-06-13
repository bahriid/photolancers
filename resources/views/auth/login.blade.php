@extends('layouts._client')
@section('content')
    <main class="main">
        <section class="pt-100 login-register">
            <div class="container">
                <div class="row login-register-cover">
                    <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                        <div class="text-center">
                            <p class="font-sm text-brand-2">Welcome back! </p>
                            <h2 class="mt-10 mb-5 text-brand-1">Member Login</h2>
                            <p class="font-sm text-muted mb-30">Access to all features. No credit card required.</p>
                        </div>

                        @if ($message = Session::get('error'))
                            <div
                                class="alert alert-dismissible bg-danger d-flex flex-column align-items-center flex-sm-row">
                                <div class="d-flex flex-column align-items-center text-light ">
                                    <p class="m-0" style="color:#fff">{!! session('error') !!}</p>
                                </div>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div
                                class="alert alert-dismissible bg-danger d-flex flex-column align-items-center flex-sm-row">
                                <div class="d-flex flex-column align-items-center text-light ">
                                    <p class="m-0" style="color:#fff">Upss! Terjadi Kesalahan</p>
                                </div>
                            </div>
                        @endif
                            <form method="POST" action="{{ route('login') }}" class="login-register text-start mt-20" >
                                @csrf
                            <div class="form-group">
                                <label class="form-label" for="input-1">Email address *</label>
                                <input class="form-control" id="input-1"  type="text" required="" name="email" placeholder="great@photographer.com">
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="input-4">Password *</label>
                                <input class="form-control" id="input-4" type="password" required="" name="password" placeholder="************">
                                @error('password')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="login_footer form-group d-flex justify-content-between">
                                <label class="cb-container">
                                </label>
                                <a class="text-muted" href="{{route('home')}}">Forgot Password</a>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Login</button>
                            </div>
                            <div class="text-muted text-center">Don't have an Account? <a href="{{route('register')}}">Sign up</a></div>
                        </form>
                    </div>
                    <div class="img-1 d-none d-lg-block"><img class="shape-1" src="assets/imgs/page/login-register/img-4.svg" alt="JobBox"></div>
                    <div class="img-2"><img src="assets/imgs/page/login-register/img-3.svg" alt="JobBox"></div>
                </div>
            </div>
        </section>
    </main>
@endsection
