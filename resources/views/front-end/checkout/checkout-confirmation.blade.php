@extends('front-end.master')
@section('content')

    <div class="container pt-5">
        <div class="row">
            <div class="col-sm-4">
                <h3><b>Customer Details</b></h3>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="col-sm-12">
                            <table class="table">
                                <tr>
                                    <th>
                                        <p>Name :</p>
                                        <p>Email :</p>
                                        <p>Mobile No.:</p>
                                    </th>
                                    <td>
                                        <p>{{Session::get('customerName')}}</p>
                                        <p>{{$customer->email}}</p>
                                        <p>{{$customer->phone_number}}</p>
                                    </td>
                                </tr>
                                <tr >
                                    <th>
                                        <p>Rooms :</p>
                                    </th>
                                    <td>
                                        <p>{{Session::get('room_quantity')}}</p>
                                    </td>
                                <tr>
                                    <th>
                                        <p>CheckIn Date</p>
                                        <p>CheckOut Date</p>
                                    </th>
                                    <td>
                                        <p>{{Session::get('checkin_date')}}</p>
                                        <p>{{Session::get('checkout_date')}}</p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <h3><b>Payment Method</b></h3>
                <div class="card shadow-sm">
                    <div class="card-body shadow-lg bg-light">
                        <div class="table-responsive">
                            {{Form::open(['route'=>'new-booking-payment','method'=>'post'])}}
                            <table class="table table-bordered border-warning table-hover bg-white">
                                <tr>
                                    <th>{{'Cash on delivery'}}</th>
                                    <td> <label>{{ Form::radio('payment_type', 'cash') }} {{'Cash on delivery'}}</label></td>
                                </tr>
                                <tr>
                                    <th>{{'Bkash'}}</th>
                                    <td> <label>{{ Form::radio('payment_type', 'bkash') }} {{'Bkash'}}</label></td>
                                </tr>
                                <tr>
                                    <th>{{'Paypal'}}</th>
                                    <td> <label>{{ Form::radio('payment_type', 'paypal') }} {{'Paypal'}}</label></td>
                                </tr>
                            </table>
                            {{Form::submit('Confirm Booking',['class'=>'btn btn-block btn-primary'])}}
                            {{Form::close()}}
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-sm-4">
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
                                    {{Session::put('booking_total',$total)}}
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
    <br>
    <div class="container">
        <div class="col-sm-12">
            <h5 class="text-center text-info">By <b class="text-primary">confirming booking</b> you agree to our terms and conditions and you will be redirected to payment gateway to pay your bill.</h5>
        </div>
    </div>
    <br>
@endsection

