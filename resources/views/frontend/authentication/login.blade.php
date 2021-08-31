@extends('layouts.frontend')
@section('content')
<div id="main-wrapper">
    <div class="site-wrapper-reveal">

        <div class="login-register-page-area section-space--ptb_80">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6 m-auto">
                        <div class="login-content">

                            <div class="login-header mb-40">
                                <h5>LOG IN YOUR ACCOUNT</h5>
                            </div>

                            <form action="#">
                                <input type="text" placeholder="Username">
                                <input type="password" placeholder="Password">
                                <div class="remember-forget-wrap mb-30">
                                    <div class="remember-wrap">
                                        <input type="checkbox">
                                        <p>Remember</p>
                                        <span class="checkmark"></span>
                                    </div>
                                    <div class="forget-wrap">
                                        <a href="#">Forgot your password?</a>
                                    </div>
                                </div>
                                <button type="button" class="btn-primary btn-large">Log in</button>
                                <div class="member-register mt-5">
                                    <p> Not a member? <a href="register.html"> Register now</a></p>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
