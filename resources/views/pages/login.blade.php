@extends('layouts.auth')

@section('content')

    <div class="account-content">
        <div class="login-wrapper">
            <div class="login-content">
                <div class="login-userset">
                    <div class="login-logo">
                        <img src="{{ asset('assets/img/logo-banner.png') }}" alt="img">
                    </div>
                    <div class="login-userheading">
                        <h3>Sign In</h3>
                        <h4>Please login to your account</h4>
                    </div>
                    <form id="loginForm">
                        <div class="form-login">
                            <label>Email</label>
                            <div class="form-addons" id="emailGroup">
                                <input type="email" name="email" placeholder="Enter your email address">
                                <img src="{{ asset('admin/img/icons/mail.svg') }}" alt="img">
                            </div>
                        </div>
                        <div class="form-login">
                            <label>Password</label>
                            <div class="pass-group" id="passwordGroup">
                                <input type="password" name="password" class="pass-input" placeholder="Enter your password">
                                <span class="fas toggle-password fa-eye-slash"></span>
                            </div>
                        </div>
                        <div class="form-login">
                            <div class="alreadyuser">
                                <h4><a href="#" class="hover-a">Forgot Password?</a></h4>
                            </div>
                        </div>
                        <div class="form-login">
                            @csrf
                            <button type="submit" class="btn btn-login">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="login-img" style="background-image: url('{{ asset('admin/img/login-img-right.jpg') }}'); background-position: center">
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script src="{{ asset('js/login.js') }}?v{{ \Illuminate\Support\Str::random() }}"></script>
@endpush
