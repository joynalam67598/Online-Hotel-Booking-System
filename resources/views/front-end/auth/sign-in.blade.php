@extends('front-end.master')
@section('content')
    <style type="text/css">
        html, body {
            height: 100%;
            margin: 0;
        }
        #wrapper {
            min-height: 100%;
            background-image: url("{{asset('/')}}/front-end/images/about_banner.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            overflow: hidden;

        }
        .sign{

            /*margin: auto;*/
            /*display: table;*/
            display:block;
            position:absolute;
            top: 50%;
            left: 50%;
            text-align:center;
            transform: translate(-50%,-50%);
        }
    </style>
<div id="wrapper">
    <div class="row">
        <div class="col-md-4 sign p-5 bg-light border border-info ">
            <br>
            {{Form::open(['route'=>'customer-sign-in','method'=>'post','class'=>'form-horizontal'])}}
            <div class="form-group" >
                <div class="input-group-prepend ">
                    <span class="input-group-text bg-light border border-info "><i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i></span>
                    {{Form::email('email','',['class'=>'form-control border border-info ','placeholder'=>'Enter Email','required'])}}
                </div>
                <br>
                <div class="input-group-prepend">
                    <span class="input-group-text bg-light border border-info "><i class="fa fa-key fa-lg" aria-hidden="true"></i></span>
                    {{Form::password('password',['class'=>'form-control border border-info  ','placeholder'=>'Enter Password','required'])}}
                </div>
                <br>
                {{Form::submit('Sign In',['class'=>'form-control btn btn-block btn-info'])}}
            </div>
            {{Form::close()}}
            <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="{{route('login-facebook')}}" class="btn btn-block btn-primary">
                    <i class="fa fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="{{route('login-google')}}" class="btn btn-block btn-danger">
                    <i class="fa fa-google-plus mr-2"></i> Sign in using Google+
                </a>
                <a href="{{route('login-github')}}" class="btn btn-block btn-dark">
                    <i class="fa fa-github mr-2"></i> Sign in using Github
                </a>
            </div>
            <h5 class="text-center" style="color: red" id="message">{{Session::get('message')}}</h5>
            <br>
        </div>
    </div>
</div>
@endsection
