@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center text-success" id="message">{{Session::get('message')}}</h3>
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="text-primary">Add Location</h4>
                    </div>
                    <div class="card-body">
                        {{Form::open(['route'=>'new-location','method'=>'post','class'=>'form-horizontal']) }}
                        <div class="form-group row">
                            {{Form::label('location_name','Location',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::text('location_name','',['class'=>'form-control','required'])}}
                                <span class="text-danger">{{$errors->has('location_name')? $errors->first('location_name'):''}}</span>
                            </div>
                        </div>
                        <div class="col-sm-9 offset-3">
                            {{Form::submit('Save',['class'=>'btn btn-block btn-primary form-control'])}}
                        </div>

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
