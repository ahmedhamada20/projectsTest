@extends('front.layouts.master')
@section('title')
تسجيل الدخول وتسجيل الان
@endsection
@section('style')
    
@endsection
@section('content')



<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Register or Sign in</li>
    </ol>
</div>
<!-- end Breadcrumb -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div id="page-main">
                <div class="col-md-10 col-sm-10 col-sm-offset-1 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-6">
                            <section id="account-register" class="account-block">
                                <header><h2>Create New Account</h2></header>
                                <form role="form" class="clearfix" action="course-joined.html">
                                    <div class="form-group">
                                        <label for="new-account-name">Full Name</label>
                                        <input type="text" class="form-control" id="new-account-name" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="new-account-email">Email address</label>
                                        <input type="email" class="form-control" id="new-account-email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="new-account-password">Password</label>
                                        <input type="password" class="form-control" id="new-account-password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="new-account-repeat-password">Repeat Password</label>
                                        <input type="password" class="form-control" id="new-account-repeat-password" placeholder="Repeat Password">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">I Understand <a href="#">Terms & Conditions</a>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn pull-right">Create New Account</button>
                                </form>
                            </section><!-- /#account-block -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <section id="account-sign-in" class="account-block">
                                <header><h2>Have an Account?</h2></header>
                                <form role="form" class="clearfix" action="{{ route('login_customer') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" name="email" required id="email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" required id="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn pull-right">Sign In</button>
                                </form>
                                <hr>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae tincidunt.</p>
                            </section><!-- /#account-block -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-md-10 -->
            </div><!-- /#page-main -->

            <!-- end SIDEBAR Content-->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
@endsection