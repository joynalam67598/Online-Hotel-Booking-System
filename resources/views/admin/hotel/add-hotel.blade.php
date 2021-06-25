@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center text-success" id="message">{{Session::get('message')}}</h3>
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="text-primary">Add Hotel</h4>
                    </div>
                    <div class="card-body">
                        {{ Form::open(['route'=>'new-hotel','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data']) }}
                        <div class="form-group row">
                            {{Form::label('location_id','Location',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                <select class="form-control" name="location_id" required>
                                    <option value="" disabled selected>{{'-- Select Location --'}}</option>
                                @foreach($locations as $location)
                                        <option value="{{$location->id}}">{{$location->location_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->has('location_id')? $errors->first('location_id'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('hotel_name','Hotel Name',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::text('hotel_name','',['class'=>'form-control','required'])}}
                                <span class="text-danger">{{$errors->has('hotel_name')? $errors->first('hotel_name'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('room_numbers','Room Numbers',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::number('room_numbers','',['class'=>'form-control','required'])}}
                                <span class="text-danger">{{$errors->has('room_numbers')? $errors->first('room_numbers'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('minimum_price','Minimum Price',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::number('minimum_price','',['class'=>'form-control','required'])}}
                                <span class="text-danger">{{$errors->has('minimum_price')? $errors->first('minimum_price'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('hotel_facilities','Facilities',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::text('hotel_facilities','',['class'=>'form-control','required'])}}
                                <span class="text-danger">{{$errors->has('hotel_facilities')? $errors->first('hotel_facilities'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('address','Address',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::textarea('address','',['class'=>'form-control','rows'=>'3','required'])}}
                                <span class="text-danger">{{$errors->has('address')? $errors->first('address'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('description','Description',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::textarea('description','',['class'=>'form-control','rows'=>'3','required'])}}
                                <span class="text-danger">{{$errors->has('description')? $errors->first('description'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('hotel_image','Hotel Image',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::file('hotel_image',['accept'=>'image/*','required'])}}
                                <span class="text-danger">{{$errors->has('hotel_image')? $errors->first('hotel_image'):''}}</span>
                            </div>
                        </div>
                        <div class="col-sm-9 offset-3">
                            {{Form::submit('Save',['class'=>'btn btn-block btn-primary'])}}
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
