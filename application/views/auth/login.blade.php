@extends('layouts.authentication')
@section('page_title', 'Login')

@section('content')
    <main class="auth auth-floated">
        <!-- .auth-announcement -->
        <div id="announcement" class="auth-announcement" style="background-image: url({{ base_url('assets/images/illustration/img-1.png') }});">
            <div class="announcement-body">
                <h2 class="announcement-title"> How to Prepare for an Automated Future </h2><a href="#" class="btn btn-warning"><i class="fa fa-fw fa-angle-right"></i> Check Out Now</a>
            </div>
            <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1349" height="656"></canvas></div><!-- /.auth-announcement -->

        <!-- form -->
        {!! form_open("login", ['class' => 'auth-form']) !!}
            <div class="mb-4">
                <div class="mb-3">
                    <img class="rounded" src="assets/apple-touch-icon.png" alt="" height="72">
                </div>
                <h1 class="h3"> Sign In </h1>
            </div>
            <p class="text-left mb-4"> Do you have problem with your account? <a href="auth-signup.html">Contact Admin</a>
            </p><!-- .form-group -->
            <div class="form-group mb-4">
                <label class="d-block text-left" for="inputUser">Username / Email</label>
                <input type="text" id="inputIdendity" class="form-control form-control-lg" name="identity" required autofocus>
            </div><!-- /.form-group -->
            <!-- .form-group -->
            <div class="form-group mb-4">
                <label class="d-block text-left" for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control form-control-lg" name="password" required>
            </div><!-- /.form-group -->
            <!-- .form-group -->
            <div class="form-group mb-4">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
            </div><!-- /.form-group -->
            <!-- .form-group -->
            <div class="form-group text-center">
                <div class="custom-control custom-control-inline custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                    <label class="custom-control-label" for="remember">Keep me sign in</label>
                </div>
            </div><!-- /.form-group -->
            <!-- recovery links -->
            <p class="py-2">
                <a href="auth-recovery-username.html" class="link">Forgot Username?</a> <span class="mx-2">·</span> <a href="auth-recovery-password.html" class="link">Forgot Password?</a>
            </p><!-- /recovery links -->
            <!-- copyright -->
            <p class="mb-0 px-3 text-muted text-center font-size-sm">
                ©{{ date('Y') }} All Rights Reserved. PT. Inti Bangun Sejahtera, Tbk.
            </p>
        {!! form_close() !!}
    </main>

@endsection