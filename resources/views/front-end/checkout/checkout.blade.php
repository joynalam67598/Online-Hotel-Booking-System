@extends('front-end.master')
@section('content')
    <br>
    <div class="container-fluid">
        <div class="col-sm-12  bg-light border border-success">
            <h3 class="text-center text-success">You have to login to complete your valuable order. If you are not registered then please register first.</h3>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-5 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center text-info">Register if you are not registered before</h4>
                    </div>
                    <div class="card-body">
                        {{ Form::open(['route'=>'new-customer-sign-up','method'=>'post']) }}
                        <div class="form-group row">
                            {{Form::text('first_name','',['class'=>'form-control','placeholder'=>'First Name','required'])}}
                        </div>
                        <div class="form-group row">
                            {{Form::text('last_name','',['class'=>'form-control','placeholder'=>'Last Name','required'])}}
                        </div>
                        <div class="form-group row">
                            {{Form::email('email','',['class'=>'form-control','placeholder'=>'Email','required'])}}
                        </div>
                        <div class="form-group row">
                            {{Form::password('password',['class'=>'form-control','placeholder'=>'Password','required'])}}
                        </div>
                        <div class="form-group row">
                            {{Form::text('phone_number','',['class'=>'form-control','placeholder'=>'Phone Number','required'])}}
                        </div>
                        <div class="form-group row">
                            {{Form::textarea('address','',['class'=>'form-control','placeholder'=>'Address','rows'=>'5','required'])}}
                        </div>
                        <div class="form-group row">
                            {{Form::submit('Register',['class'=>'btn btn-block btn-info'])}}
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
            <div class="col-sm-5  well" style="margin-left: 20px;">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center text-info">Already Registred? Login here!</h4>
                    </div>
                    <div class="card-body">
                        {{ Form::open(['route'=>'new-customer-sign-in','method'=>'post']) }}
                        <div class="form-group row">
                            {{Form::email('email','',['class'=>'form-control','placeholder'=>'Email','required'])}}
                        </div>
                        <div class="form-group row">
                            {{Form::password('password',['class'=>'form-control','placeholder'=>'Password','required'])}}
                        </div>
                        <div class="form-group row">
                            {{Form::submit('Login',['class'=>'btn btn-block btn-success'])}}
                        </div>
                        <h5 class="text-center text-danger" id="message">{{Session::get('message')}}</h5>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

