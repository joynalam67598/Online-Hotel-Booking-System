@extends('front-end.master')
@section('content')
<style>
    #tarns-div {
        margin: 30px;
        background-color: black;
        border: 5px solid gold;
        opacity: 0.9;
    }
    .facilities_area {
        position: relative;
        z-index: 1;
        background: #04091e;
        overflow: hidden;
    }

    .facilities_area .bg-parallax {
        background: url("{{asset('/')}}/front-end/images/banner_bg.jpg") no-repeat scroll center 0/cover;
        opacity: 0.15;
    }

    .facilities_item {
        border: 1px solid #777777;
        border-radius: 10px;
        background-color: rgba(249, 249, 255, 0.102);
        padding: 31px 40px 37px;
        color: #fff;
        margin-bottom: 30px;
    }

    .facilities_item .sec_h4 {
        padding-bottom: 18px;
        color: #fff;
    }

    .facilities_item .sec_h4 i {
        color: #f3c300;
        font-size: 24px;
        line-height: 38px;
        display: inline-block;
        vertical-align: bottom;
        padding-right: 20px;
    }

    .facilities_item p {
        font-size: 14px;
        line-height: 24px;
        margin-bottom: 0px;
    }
    .section_gap {
        padding: 120px 0;
    }
    .section_title {
        margin-bottom: 75px;
    }

    .section_title h2 {
        font-size: 36px;
        line-height: 45px;
        font-weight: 600;
    }

    .section_title p {
        font-size: 14px;
        line-height: 30px;
        color: #777777;
        margin-bottom: 0px;
    }
    .sec_h4 {
        font-size: 18px;
        line-height: 38px;
        font-weight: 600;
        color: #222222;
        margin-bottom: 0px;
    }
    .overlay {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        height: 125%;
        bottom: 0;
        z-index: -1;
    }


</style>
    <div class="carousel slide" id="mainSlider" data-ride="carousel" data-interval="5000" >
        <ol class="carousel-indicators">
            <li  data-target="#mainSlider" data-slide-to="0" class="active" ></li>
            <li  data-target="#mainSlider" data-slide-to="1"></li>
            <li  data-target="#mainSlider" data-slide-to="2"></li>
            <li  data-target="#mainSlider" data-slide-to="3"></li>
            <li  data-target="#mainSlider" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('/')}}/front-end/images/royal/1.jpg" height="400px"  class="w-100 ">
                <div class="carousel-caption text-center">
                    <h5>Away from monotonous life</h5>
                    <h1 class="text-warning"><b>Relax Your Mind</b></h1>
                    <h5>Search and book cheap hotels in 3 easy steps here!<br>Find the best deals on every Royal product you need!</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}/front-end/images/royal/2.jpg" height="400px" class="w-100">
                <div class="carousel-caption text-center">
                    <h5>Away from monotonous life</h5>
                    <h1 class="text-warning"><b>Relax Your Mind</b></h1>
                    <h5>If you are looking at blank cassettes on the web, you may be very confused at the<br> difference in price. You may see some for as low as TK.1700  each.</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}/front-end/images/royal/3.jpg"  height="400px" class="w-100 ">
                <div class="carousel-caption text-center">
                    <h5>Away from monotonous life</h5>
                    <h1 class="text-warning"><b>Relax Your Mind</b></h1>
                    <h5>Search and book cheap hotels in 3 easy steps here!<br>Find the best deals on every Royal product you need!</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}/front-end/images/royal/a1.jpg"  height="400px" class="w-100 ">
                <div class="carousel-caption text-center">
                    <h5>Away from monotonous life</h5>
                    <h1 class="text-warning"><b>Relax Your Mind</b></h1>
                    <h5>Search and book cheap hotels in 3 easy steps here!<br>Find the best deals on every Royal product you need!</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}/front-end/images/royal/about.jpg"  height="400px" class="w-100 ">
                <div class="carousel-caption text-center">
                    <h5>Away from monotonous life</h5>
                    <h1 class="text-warning"><b>Relax Your Mind</b></h1>
                    <h5>Search and book cheap hotels in 3 easy steps here!<br>Find the best deals on every Royal product you need!</h5>
                </div>
            </div>
        </div>
        <a href="#mainSlider" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#mainSlider" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    @include('front-end.includes.search-box')

    <hr class="bg-warning" id="about">
    <section style="margin-bottom: 50px;margin-top: 50px" >
        <div class="row">
            <div class="col-sm-6 mr-0">
                <img src="{{asset('/')}}/front-end/images/customer.jpg" class="wow animate__fadeInLeft" height="400px" width="100%">
            </div>
            <div class="col-sm-6">
                <div class="col-8  wow animate__fadeInRight" style="padding-top:50px">
                    <h5 class="text-warning">About our company</h5>
                    <h2><b>Make the customer the hero of your story</b></h2>
                    <h5>Booking hotels online worldwide, more than 30,000 accommodations. </h5>
                    <p class="text-secondary">We are partnering with hotel chains across the globe to ensure a comfortable stay wherever you travel! </p>
                    <p class="text-secondary">We are partnering with hotel chains across the globe to ensure a comfortable stay wherever you travel! </p>
{{--                    <a href="" class="btn btn-warning btn-lg">Learn More</a>--}}
                </div>

            </div>
        </div>
    </section>
    <hr class="bg-warning">
    <div class="text-center" style="margin-bottom: 40px;margin-top: 70px">
        <h1 class="text-warning">Our Hotels</h1>
    </div>
    <div class="container ">
        <div class="row">
            @php($i=1)
            @foreach($hotels as $hotel)
                @if($i%3==0)
                    <div class="col-sm-4 pt-3 wow animate__fadeInRight">
                        <div class="card">
                            <img src="{{asset($hotel->hotel_image)}}" class="card-img-top animate__animated" height="300px" width="250px">
                            <div class="card-body text-center">
                                <h3><a href=""  class="text-warning">{{"$hotel->hotel_name"}}</a></h3>
                                <h5 class="text-secondary">Start from TK. {{$hotel->minimum_price}}</h5>
                                <a href="{{route('choose-room',['id'=>$hotel->id])}}}" class="btn btn-outline-warning">Choose Room Now</a>
                            </div>
                        </div>
                    </div>
                @elseif($i%3==1)
                    <div class="col-sm-4 pt-3 wow animate__fadeInLeft">
                        <div class="card">
                            <img src="{{asset($hotel->hotel_image)}}" class="card-img-top" height="300px" width="250px">
                            <div class="card-body text-center">
                                <h3><a href=""  class="text-warning">{{"$hotel->hotel_name"}}</a></h3>
                                <h5 class="text-secondary">Start from TK. {{$hotel->minimum_price}}</h5>
                                <a href="{{route('choose-room',['id'=>$hotel->id])}}}" class="btn btn-outline-warning">Choose Room Now</a>
                            </div>
                        </div>
                    </div>
                @elseif($i%2==0)
                    <div class="col-sm-4 pt-3 wow animate__fadeInUp">
                        <div class="card">
                            <img src="{{asset($hotel->hotel_image)}}" class="card-img-top animate__animated" height="300px" width="250px">
                            <div class="card-body text-center">
                                <h3><a href=""  class="text-warning">{{"$hotel->hotel_name"}}</a></h3>
                                <h5 class="text-secondary">Start from TK. {{$hotel->minimum_price}}</h5>
                                <a href="{{route('choose-room',['id'=>$hotel->id])}}}" class="btn btn-outline-warning">Choose Room Now</a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-sm-4 pt-3 wow animate__fadeInDown">
                        <div class="card">
                            <img src="{{asset($hotel->hotel_image)}}" class="card-img-top" height="300px" width="250px">
                            <div class="card-body text-center">
                                <h3><a href=""  class="text-warning">{{"$hotel->hotel_name"}}</a></h3>
                                <h5 class="text-secondary">Start from TK. {{$hotel->minimum_price}}</h5>
                                <a href="{{route('choose-room',['id'=>$hotel->id])}}}" class="btn btn-outline-warning">Choose Room Now</a>
                            </div>
                        </div>
                    </div>
                @endif
                <label hidden>{{$i++}}</label>
            @endforeach
        </div>
    </div>
    <div class="text-center" style="margin-bottom: 40px;margin-top: 70px">
        <h1 class="text-warning">Blogs</h1>
    </div>
    <div class="container ">
        <div class="row">
            @php($i=1)
            @foreach($blogs as $blog)
                @if($i%3==0)
                <div class="col-sm-4 pt-3 wow animate__fadeInRight">
                    <div class="card">
                        <img src="{{asset($blog->blog_image)}}" class="card-img-top" height="250px" width="250px">
                        <div class="card-body text-center">
                            <h4><a href=""  class="text-warning">{{"$blog->blog_title"}}</a></h4>
                            <h5 class="text-secondary">{{$blog->writer_name}}</h5>
                            <a href="{{route('read-blog',['id'=>$blog->id])}}}" class="btn btn-outline-warning">Read Now</a>
                        </div>
                    </div>
                </div>
                @elseif($i%3==1)
                    <div class="col-sm-4 pt-3 wow animate__fadeInLeft">
                        <div class="card">
                            <img src="{{asset($blog->blog_image)}}" class="card-img-top" height="250px" width="250px">
                            <div class="card-body text-center">
                                <h4><a href=""  class="text-warning">{{"$blog->blog_title"}}</a></h4>
                                <h5 class="text-secondary">{{$blog->writer_name}}</h5>
                                <a href="{{route('read-blog',['id'=>$blog->id])}}}" class="btn btn-outline-warning">Read Now</a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-sm-4 pt-3">
                        <div class="card">
                            <img src="{{asset($blog->blog_image)}}" class="card-img-top" height="250px" width="250px">
                            <div class="card-body text-center">
                                <h4><a href=""  class="text-warning">{{"$blog->blog_title"}}</a></h4>
                                <h5 class="text-secondary">{{$blog->writer_name}}</h5>
                                <a href="{{route('read-blog',['id'=>$blog->id])}}}" class="btn btn-outline-warning">Read Now</a>
                            </div>
                        </div>
                    </div>
                @endif
                <label hidden>{{$i++}}</label>
            @endforeach
        </div>
    </div>
<br>
<br>
{{--    <div class="text-center" style="margin-bottom: 40px;margin-top: 70px">--}}
{{--        <h3 class="text-warning">Comments</h3>--}}
{{--    </div>--}}
{{--    <div class="add-section">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-12 ">--}}
{{--                    <div class="carousel slide" data-ride="carousel" data-interval="5000">--}}
{{--                        <div class="carousel-inner">--}}
{{--                            <div class="carousel-item carousel-item-padding active ">--}}
{{--                                <div id="tarns-div" class="col-sm-12 text-center">--}}
{{--                                    <img src="{{asset('/')}}/front-end/images/c1.jpg" class="rounded-circle m-5" alt="Cinque Terre" width="150" height="150">--}}
{{--                                    <hr class="bg-warning">--}}
{{--                                    <h5 class="text-bold text-warning"><i>Best site I have ever Visited !!</i></h5>--}}
{{--                                    <hr class="bg-warning">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item carousel-item-padding">--}}
{{--                                <div id="tarns-div" class="col-sm-12 text-center">--}}
{{--                                    <img src="{{asset('/')}}/front-end/images/c2.jpg" class="rounded-circle m-5" alt="Cinque Terre" width="150" height="150">--}}
{{--                                    <hr class="bg-warning">--}}
{{--                                    <h5 class="text-bold text-warning"><i>You can trust this site !!</i></h5>--}}
{{--                                    <hr class="bg-warning">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item carousel-item-padding">--}}
{{--                                <div id="tarns-div" class="col-sm-12 text-center ">--}}
{{--                                    <img src="{{asset('/')}}/front-end/images/c3.jpg" class="rounded-circle m-5" alt="Cinque Terre" width="150" height="150">--}}
{{--                                    <hr class="bg-warning">--}}
{{--                                    <h5 class="text-bold text-warning"><i>Best service I get ever !!</i></h5>--}}
{{--                                    <hr class="bg-warning">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item carousel-item-padding">--}}
{{--                                <div id="tarns-div" class="col-sm-12 text-center">--}}
{{--                                    <img src="{{asset('/')}}/front-end/images/c4.jpg" class="rounded-circle m-5" alt="Cinque Terre" width="150" height="150">--}}
{{--                                    <hr class="bg-warning">--}}
{{--                                    <h5 class="text-bold text-warning"><i>Best site I have ever Visited !!</i></h5>--}}
{{--                                    <hr class="bg-warning">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item carousel-item-padding">--}}
{{--                                <div id="tarns-div" class="col-sm-12  text-center">--}}
{{--                                        <img src="{{asset('/')}}/front-end/images/c5.jpg" class="rounded-circle m-5" alt="Cinque Terre" width="150" height="150">--}}
{{--                                    <hr class="bg-warning">--}}
{{--                                    <h5 class="text-bold text-warning"><i>Best site I have ever Visited !!</i></h5>--}}
{{--                                    <hr class="bg-warning">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
<section class="facilities_area section_gap">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
    </div>
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_w text-warning">Facilities</h2>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>
        <div class="row mb_30">
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Sports CLub</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gymnesium</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
