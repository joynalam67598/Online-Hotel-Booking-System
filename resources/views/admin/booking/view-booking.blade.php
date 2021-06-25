@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center text-info">Hotel Details for this booking</h4>
                    </div>
                    <div class="card-body text-center ">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm" >
                                <tr>
                                    <th>Customer Name</th>
                                    <td>{{$customer->first_name." ".$customer->last_name}}</td>
                                </tr>
                                <tr>
                                    <th>Phone Number</th>
                                    <td>{{$customer->phone_number}}</td>
                                </tr>
                                <tr>
                                    <th>Email Address</th>
                                    <td>{{$customer->email}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center text-info">Hotel Details for this booking</h4>
                    </div>
                    <div class="card-body text-center ">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm" >
                                <tr>
                                    <th>Location</th>
                                    <td>{{$location->location_name}}</td>
                                </tr>
                                <tr>
                                    <th>Hotel Name</th>
                                    <td>{{$hotel->hotel_name}}</td>
                                </tr>
                                <tr>
                                    <th>Hotel Address</th>
                                    <td>{{$hotel->address}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center text-info">Room info for this booking</h4>
                    </div>
                    <div class="card-body text-center ">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm" >
                                <tr>
                                    <th>Room Number</th>
                                    <td>{{$room->id}}</td>
                                </tr>
                                <tr>
                                    <th>Room Name</th>
                                    <td>{{$room->room_name}}</td>
                                </tr>
                                <tr>
                                    <th>Room Code</th>
                                    <td>{{$room->room_code}}</td>
                                </tr>
                                <tr>
                                    <th>Total room in Hotel</th>
                                    <td>{{$room->number_of_room}}</td>
                                </tr>
                                <tr>
                                    <th>Available Room</th>
                                    <td>{{$room->available_room}}</td>
                                </tr>
                                <tr>
                                    <th>Price Per Night</th>
                                    <td>{{$room->price_per_night}}</td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td>{{$room->room_type}}</td>
                                </tr>
                                <tr>
                                    <th>Capacity</th>
                                    <td>{{$room->room_capacity}}</td>
                                </tr>
                                <tr>
                                    <th>Facilities</th>
                                    <td>{{$room->room_facilities}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center text-info">Booking info for this booking</h4>
                    </div>
                    <div class="card-body text-center ">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <tr>
                                    <th>Booking No.</th>
                                    <td>{{$booking->id}}</td>
                                </tr>
                                <tr>
                                    <th>Booking status</th>
                                    <td>{{$booking->booking_status==1 ? "Booked":($booking->booking_status==2 ? "Released" : "Pending") }}</td>
                                </tr>
                                <tr>
                                    <th>Booking total</th>
                                    <td>{{$booking->booking_total}}</td>
                                </tr>
                                <tr>
                                    <th>Booking room</th>
                                    <td>{{$booking->number_of_room}}</td>
                                </tr>
                                <tr>
                                    <th>Arrival date</th>
                                    <td>{{$bookingDetails->checkIn_dateTime}}</td>
                                </tr>
                                <tr>
                                    <th>Departure  date</th>
                                    <td>{{$bookingDetails->checkout_dateTime}}</td>
                                </tr>
                                <tr>
                                    <th>Total Day</th>
                                    <td>{{$bookingDetails->total_day}}</td>
                                </tr>
                                <tr>
                                    <th>Total Night</th>
                                    <td>{{$bookingDetails->total_night}}</td>
                                </tr>
                                <tr>
                                    <th>Booking Date</th>
                                    <td>{{$bookingDetails->created_at}}</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center text-info">Payment info for this booking</h4>
                    </div>
                    <div class="card-body text-center ">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <tr>
                                    <th>Payment Type</th>
                                    <td>{{$payment->payment_type}}</td>
                                </tr>
                                <tr>
                                    <th>Payment Status</th>
                                    <td>{{$payment->payment_status==1 ? "Paid":"Pending"}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

@endsection

