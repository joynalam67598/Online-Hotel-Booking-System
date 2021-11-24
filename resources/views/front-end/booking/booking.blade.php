@extends('front-end.master')
@section('content')

    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-sm-8 offset-1">
                <h3><b>Review & Confirm Your Booking</b></h3>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="carousel slide" id="mainSlider" data-ride="carousel" data-interval="10000" >
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{asset($hotel->hotel_image)}}" alt="" height="300px"  class="w-100 ">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset($room->room_image)}}" alt="" height="300px" class="w-100">
                                        </div>
                                    </div>
                                    <a href="#mainSlider" class="carousel-control-prev" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a href="#mainSlider" class="carousel-control-next" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>
                                <br>
                                <h5 class="text-center border border-warning">{{$room->room_name}}</h5>
                            </div>
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <h4 class="text-warning"><b>{{$hotel->hotel_name}}</b></h4>
                                        <div id="star-box"></div>
                                        <h6>Address: {{$hotel->address}}</h6>
                                    </div>
                                    <div class="col-sm-2">
                                        <img src="{{asset('/')}}/front-end/images/rooms/best.png" height="50px" width="50px">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="card text-center text-warning border-warning">
                                            <div class="card-body ">
                                                <h6>Check In</h6>
                                                <h6><b>{{Session::get('checkin_date')}}</b></h6>
                                                <h6>Time</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="card text-center text-warning border-warning">
                                            <div class="card-body">
                                                <h6>Check Out</h6>
                                                <h6><b>{{Session::get('checkout_date')}}</b></h6>
                                                <h6>Time</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <h6><b>Number of Room : {{Session::get('room_quantity')}}</b></h6>
                                        <hr>
                                        <h5><b>{{Session::get('total_day')}} Days and {{Session::get('total_day')-1}} Nights</b></h5>
                                        <hr>
                                        <h6><b>Room Cpacity : {{$room->room_capacity}}</b></h6>
                                        <hr>
                                        <a href="{{route('change-room',['id'=>$hotel->id])}}" class="btn btn-block btn-warning">Change Room</a>
                                    </div>
                                </div>
                                <p class="text-danger"><b>Include : 5% Service Charge and 10% VAT</b></p>
                            </div>
                        </div>
                        <div class="bg-light">
                            <p><b>Cancellation Policy:</b></p>
                            <pre>
            Before 7 days of checkin: FREE cancellation
            Within 7 days of checkin: full amount of the first night's charge
            Failure to arrive at the hotel or property will be treated as No-show and will incur the first night’s charge.
            During Blackout/Long Holidays period Cancellation policy will not be applicable.
        </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <h3><b>Tariff Details</b></h3>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="col-sm-12">
                            <table class="table">
                                <tr >
                                    <th>
                                        <p>Hotel Charges</p>
                                        <p>Discount</p>
                                    </th>
                                    <td>
                                        <label hidden>{{$price = $room->price_per_night * Session::get('room_quantity')}}</label>
                                        <p>BDT {{$price}}</p>
                                        <label hidden>{{$discount = ($price*5)/100}}</label>
                                        <p>BDT {{$discount}}</p>
                                    </td>
                                </tr>
                                <tr >
                                    <th>
                                        <p>Sub Total</p>
                                        <p>Service Charge</p>
                                        <p>VAT</p>
                                    </th>
                                    <td>
                                        <label hidden>{{$subTotal = $price-$discount}}</label>
                                        <p>BDT {{$subTotal}}</p>
                                        <label hidden>{{$serviceCharge = ($price*5)/100}}</label>
                                        <p>BDT {{$serviceCharge}}</p>
                                        <label hidden>{{$vat = ($price*10)/100}}</label>
                                        <p>BDT {{$vat}}</p>
                                    </td>
                                <tr>
                                    <th>
                                        <p class="text-primary">You Pay Total</p>
                                        <p class="text-success">Total Savings</p>
                                    </th>
                                    <td>
                                        <label hidden>{{$total = $subTotal+$serviceCharge+$vat}}</label>
                                        <p class="text-primary"><b>BDT {{$total}}</b></p>
                                        <p  class="text-success"><b>BDT {{$discount}}</b></p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-2">
        <div class="row">
            <div class="col-sm-8 offset-1">
                <div class="col-sm-12">
                    <h5 class="text-center text-info">Please, press continue if all information are ok!</h5>
                </div>
                <div class="col-sm-6 offset-3 pt-2">
                    @if(Session::get('customerId'))
                        <a href="{{route('checkout-confirmation')}}" class="btn btn-block btn-success"><h5>Continue</h5></a>
                    @else
                        <a href="{{route('checkout-payment')}}" class="btn btn-block btn-success"><h5>Continue</h5></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
@endsection

