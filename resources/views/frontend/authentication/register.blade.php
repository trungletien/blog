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
                                <h3 class="mb-2">Register</h3>
                                <h5>Become a member</h5>
                            </div>

                            <form action="#">
                                <input type="text" placeholder="Username">
                                <input type="email" placeholder="Email Address">
                                <input type="password" placeholder="Password">
                                <div class="remember-forget-wrap">
                                    <div class="remember-wrap">
                                        <input type="checkbox">
                                        <p>Agree to the <a href="#">Terms and Conditions</a></p>
                                        <span class="checkmark"></span>
                                    </div>
                                </div>
                                <div class="button-box mt-4">
                                    <button type="button" class="btn-primary btn-large">Register Now</button>
                                </div>
                                <div class="member-register mt-5">
                                    <p> A member? <a href="login.html"> Log in now</a></p>
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
