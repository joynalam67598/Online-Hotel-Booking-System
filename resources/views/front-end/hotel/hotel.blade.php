@extends('front-end.master')
@section('content')
    @include('front-end.includes.search-box')
    <div class="container-fluid mt-5">
        <div class="col-sm-12 ">
            @foreach($hotels as $hotel)
                <div class="row">
                    <div class="col-sm-8 offset-sm-1 pt-3">
                        <div class="card border-warning">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="{{asset($hotel->hotel_image)}}" height="300px" width="100%">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <h3 class="text-warning">{{$hotel->hotel_name}}</h3>
                                                <div id="star-box"></div>
                                                <hr class="bg-warning">
                                                <h6>Tags : {{$hotel->hotel_facilities}}</h6>
                                                <hr class="bg-warning">
                                                <h5>Address : {{$hotel->address}} </h5>

                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <div class='card shadow border-warning'>
                                                    <div class="card-body">
                                                        <h6>Start From</h6>
                                                        <h5>TK. {{$hotel->minimum_price}}</h5>
                                                    </div>
                                                </div>
                                                <div class="pt-lg-4">
                                                    <a href="{{route('choose-room',['id'=>$hotel->id])}}" class="btn btn-warning btn-lg btn-block">Choose Room</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 text-center pt-3">
                        <div class="card border-warning">
                            <div class="card-body">
                                <div class="col-sm-12">
                                    <img src="{{asset('/')}}/front-end/img/rooms/room3.jpg" height="200px" width="100%">
                                    <h5 class="text-warning">{{$hotel->hotel_name}}</h5>
                                    <h6 >About our hotel</h6>
                                    <a href="" class="btn btn-warning">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <br>
@endsection
