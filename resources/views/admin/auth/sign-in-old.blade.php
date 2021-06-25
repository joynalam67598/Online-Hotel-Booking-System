<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{asset('/')}}/front-end/images/favicon.png" type="image">
    <title>Royal Hotel</title>
    <link href="{{asset('/')}}/admin/css/bootstrap.css" rel="stylesheet"/>
    <link href="{{asset('/')}}/admin/css/font-awesome.css" rel="stylesheet">
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

            display:block;
            position:absolute;
            top: 50%;
            left: 50%;
            text-align:center;
            transform: translate(-50%,-50%);
        }
    </style>
</head>
<body>
<div id="wrapper">
    <div class="row">
        <div class="col-md-4 sign p-5">
            {{Form::open(['route'=>'login','method'=>'post','class'=>'form-horizontal'])}}
            <div class="form-group" >
                <div class="input-group-prepend">
                    <span class="input-group-text bg-light"><i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i></span>
                    {{Form::email('email','',['class'=>'form-control','placeholder'=>'Enter Email','required'])}}
                </div>
                <br>
                <div class="input-group-prepend">
                    <span class="input-group-text bg-light"><i class="fa fa-key fa-lg" aria-hidden="true"></i></span>
                    {{Form::password('password',['class'=>'form-control','placeholder'=>'Enter Password','required'])}}
                </div>
                <br>
                {{Form::submit('Sign In',['class'=>'form-control btn btn-block btn-info'])}}
            </div>
            {{Form::close()}}
            <div class="bg-light form-control border-danger">
                <h5 class=" text-center"><a href="{{"register"}}" class="text-success text-decoration-none"><a href="{{route('password.request')}}" class="text-danger text-decoration-none"><b>Forget password?</b></a></h5>
            </div>
            <br>
        </div>
    </div>
</div>
<script src="{{asset('/')}}/admin/js/bootstrap.js"></script>

</body>
</html>
