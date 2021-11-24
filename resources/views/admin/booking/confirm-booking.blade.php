@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center text-success" id="message">{{Session::get('message')}}</h3>
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="text-success">Confirm Booking</h4>
                    </div>
                    <div class="card-body text-center">
                        {{ Form::open(['route'=>'confirm-new-booking','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data']) }}
                        <div class="form-group row">
                            {{Form::label('customer_name','Customer Name',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::text('customer_name',$customer->first_name." ".$customer->last_name,['class'=>'form-control','readonly'])}}
                                <span class="text-danger">{{$errors->has('customer_name')? $errors->first('customer_name'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('email','Email',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::text('email',$customer->email,['class'=>'form-control','readonly'])}}
                                <span class="text-danger">{{$errors->has('email')? $errors->first('email'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('location_name','Location',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::text('location_name',$location->location_name,['class'=>'form-control','readonly'])}}
                                <span class="text-danger">{{$errors->has('location_name')? $errors->first('location_name'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('hotel_name','Hotel Name',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::hidden('hotel_id',$hotel->id)}}
                                {{Form::text('hotel_name',$hotel->hotel_name,['class'=>'form-control','readonly'])}}
                                <span class="text-danger">{{$errors->has('hotel_name')? $errors->first('hotel_name'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('booking_room','booking Room',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::text('booking_room',$booking->number_of_room,['class'=>'form-control','readonly'])}}
                                <span class="text-danger">{{$errors->has('booking_room')? $errors->first('booking_room'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('available_room','Available Room',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::text('available_room',$room->available_room,['class'=>'form-control','readonly'])}}
                                <span class="text-danger">{{$errors->has('available_room')? $errors->first('available_room'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('book_room','Book Room',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                <label hidden>{{$j=$room->available_room}}</label>
                                <select class="form-control" name="book_room">
                                    <option value="" disabled selected>{{'-- Select Number Of Room Want To Book --'}}</option>
                                    @for ($i=1;$i<=$j;$i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                                {{Form::hidden('room_id',$room->id)}}
                                {{Form::hidden('booking_id',$booking->id)}}
                                <span class="text-danger">{{$errors->has('book_room')? $errors->first('book_room'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('payment_status','Book Room',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                <label hidden>{{$j=$room->available_room}}</label>
                                <select class="form-control" name="payment_status">
                                    <option value="" disabled selected>{{'-- Select Payment Status --'}}</option>
                                    <option value="{{0}}">{{"Pending"}}</option>
                                    <option value="{{1}}">{{"Paid"}}</option>
                                </select>
                                {{Form::hidden('payment_id',$payment->id)}}
                                <span class="text-danger">{{$errors->has('payment_status')? $errors->first('payment_status'):''}}</span>
                            </div>
                        </div>
                        <div class="col-sm-9 offset-3">
                            {{Form::submit('Book',['class'=>'btn btn-block btn-primary'])}}
                        </div>

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

