@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center text-success" id="message">{{Session::get('message')}}</h3>
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="text-primary">Add Room</h4>
                    </div>
                    <div class="card-body">
                        {{ Form::open(['route'=>'update-room','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data','id'=>'editRoomForm']) }}
                        <div class="form-group row">
                            {{Form::label('location_id','Location',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                <select class="form-control" name="location_id">
                                    @foreach($locations as $location)
                                        <option value="{{$location->id}}">{{$location->location_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->has('category_id')? $errors->first('category_id'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('hotel_name','Hotel',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                <select class="form-control" name="hotel_id" id="hotel_id">
                                    @foreach($hotels as $hotel)
                                        <option value="{{$hotel->id}}">{{$hotel->hotel_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->has('hotel_id')? $errors->first('hotel_id'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('room_name','Room Name',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::text('room_name',$room->room_name,['class'=>'form-control','required'])}}
                                {{Form::hidden('room_id',$room->id)}}
                                <span class="text-danger">{{$errors->has('room_name')? $errors->first('room_name'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('room_type','Room Type',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                <select class="form-control" name="room_type" required>
                                    <option value="{{'AC'}}">{{'AC'}}</option>
                                    <option value="{{'NON-AC'}}">{{'NON-AC'}}</option>
                                    <option value="{{'Deluxe'}}">{{'Deluxe'}}</option>
                                    <option value="{{'Super Deluxe'}}">{{'Super Deluxe'}}</option>
                                </select>
                                <span class="text-danger">{{$errors->has('hotel_id')? $errors->first('hotel_id'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('room_code','Room Code',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::text('room_code',$room->room_code,['class'=>'form-control','required'])}}
                                <span class="text-danger">{{$errors->has('room_code')? $errors->first('room_code'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('number_of_room','Number of Room',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::text('number_of_room',$room->number_of_room,['class'=>'form-control','required'])}}
                                <span class="text-danger">{{$errors->has('number_of_room')? $errors->first('number_of_room'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('room_price','Price Per Night',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::number('price_per_night',$room->price_per_night,['class'=>'form-control','required'])}}
                                <span class="text-danger">{{$errors->has('room_price')? $errors->first('room_price'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('room_capacity','Capacity',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::number('room_capacity',$room->room_capacity,['class'=>'form-control','required'])}}
                                <span class="text-danger">{{$errors->has('room_capacity')? $errors->first('room_capacity'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('room_facilities','Facilities',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::text('room_facilities',$room->room_facilities,['class'=>'form-control','required'])}}
                                <span class="text-danger">{{$errors->has('room_facilities')? $errors->first('room_facilities'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('description','Description',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::textarea('description',$room->description,['class'=>'form-control','rows'=>'3','required'])}}
                                <span class="text-danger">{{$errors->has('description')? $errors->first('description'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('room_image','Room Image',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::file('room_image',['accept'=>'image/*'])}}
                                <img src="{{asset($room->room_image)}}" height="50px" width="50px">
                                <span class="text-danger">{{$errors->has('room_image')? $errors->first('room_image'):''}}</span>
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

    <script>
        document.forms['editRoomForm'].elements['location_id'].value = '{{$room->location_id}}';
        document.forms['editRoomForm'].elements['hotel_id'].value = '{{$room->hotel_id}}';
        document.forms['editRoomForm'].elements['room_type'].value = '{{$room->room_type}}';
    </script>
@endsection
