@extends('front-end.master')
@section('content')
    @include('front-end.includes.search-box')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel slide" id="mainSlider" data-ride="carousel" data-interval="10000" >
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{asset($hotel->hotel_image)}}" alt="" height="400px"  class="w-100 ">
                                        </div>
                                        @foreach($hotelImages as $hotelImage)
                                        <div class="carousel-item">
                                            <img src="{{asset($hotelImage->hotel_image)}}" alt="" height="400px" class="w-100">
                                        </div>
                                        @endforeach
                                    </div>
                                    <a href="#mainSlider" class="carousel-control-prev" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a href="#mainSlider" class="carousel-control-next" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <h3 class="text-warning">{{$hotel->hotel_name}}</h3>
                                        <div id="star-box"></div>
                                        <br>
                                        <h6>Address: {{$hotel->address}}</h6>
                                    </div>
                                    <div class="col-sm-2">
                                        <img src="{{asset('/')}}/front-end/images/rooms/best.png" height="50px" width="50px">
                                    </div>
                                </div>
                                <hr class="bg-warning">
                                <h6>Tag : {{$hotel->hotel_facilities}}</h6>
                                <hr class="bg-warning">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card shadow text-center text-warning border-warning">
                                            <div class="card-body ">
                                                <h5>Check In</h5>
                                                <h5><b>{{Session::get('checkin_date')}}</b></h5>
                                                <hr class="bg-warning">
                                                <h6>Time</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card shadow text-center text-warning border-warning">
                                            <div class="card-body">
                                                <h5>Check Out</h5>
                                                <h5><b>{{Session::get('checkout_date')}}</b></h5>
                                                <hr class="bg-warning">
                                                <h6>Time</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card shadow text-center text-warning border-warning">
                                            <div class="card-body ">
                                                <h5>Adults</h5>
                                                <h5><b>{{Session::get('adult_select_value')}}</b></h5>
                                                <h5>Child</h5>
                                                <h5><b>{{Session::get('child_select_value')}}</b></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card border-warning">
                    <div class="card-body">
                        @foreach($rooms as $room)
                        <div class="card border-warning">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="{{asset($room->room_image)}}" height="250px" width="100%">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <h4 class="text-warning">{{$room->room_name}}</h4>
                                                <div id="star-box"></div>
                                                <div>
                                                    <h6>Tags: {{$room->room_facilities}}</h6>
                                                </div>
                                                <div class="bg-light text-danger border-danger">
                                                    <p><b>Note :</b> 10% VAT & 5% Service Charge</p>
                                                </div>
                                                <h6><b>Capacity :</b> {{$room->room_capacity}}</h6>
                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <div class='card shadow border-warning'>
                                                    <div class="card-body">
                                                        <label hidden>{{$total_night = Session::get('total_day')-1}}</label>
                                                        <label hidden>{{$sub_total = $room->price_per_night*$total_night}}</label>
                                                        <h6>For {{$total_night}} Night</h6>
                                                        <label hidden>{{$serviceCharge = ($sub_total*5)/100}}</label>
                                                        <label hidden>{{$vat = ($sub_total*10)/100}}</label>
                                                        <label hidden>{{$total = $sub_total+$serviceCharge+$vat}}</label>
                                                        <h5>BDT {{$total}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 bg-light text-right">
                                        <h5>Price Per Night</h5>
                                        <h4>BDT {{$room->price_per_night}}</h4>
                                        {{Form::open(['route'=>'booking-details','method'=>'get', 'class'=>'form-inline text-warning'])}}
                                            <div class="form-group pt-4 text-center text-dark">
                                                {{ Form::label('room_quantity','Number of Rooms') }}
                                            </div>
                                            <div>
                                                <label hidden>{{$i=1}}</label>
                                                <label hidden>{{$j=$room->available_room}}</label>
                                                 <select class="form-control border-warning" name="room_quantity">
                                                        <option value="" disabled>{{'--Select number of rooms--'}}</option>
                                                     @for ($i=1;$i<=$j;$i++)
                                                         @if($i==1)
                                                            <option value="{{$i}}" selected>{{$i}}</option>
                                                         @else
                                                         <option value="{{$i}}">{{$i}}</option>
                                                         @endif
                                                     @endfor
                                                </select>
                                                {{Form::hidden('room_id',$room->id)}}
                                                {{Form::hidden('hotel_id',$hotel->id)}}
                                            </div>
                                        <div class="col-sm-12 pt-4">
                                            {{ Form::submit('Book', ['class' => 'btn btn-lg btn-block btn-warning']) }}
                                        </div>
                                        {{Form::close()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
@endsection

