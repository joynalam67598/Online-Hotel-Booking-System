@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="text-success">Room Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Hotel Name :</th>
                                    <td>{{$hotel->hotel_name}}</td>
                                </tr>
                                <tr>
                                    <th>Room Name :</th>
                                    <td>{{$room->room_name}}</td>
                                </tr>
                                <tr>
                                    <th>Room Code :</th>
                                    <td>{{$room->room_code}}</td>
                                </tr>
                                <tr>
                                    <th>Status  :</th>
                                    @if($room->room_status)
                                        <td>{{'Available'}}</td>
                                    @else
                                        <td>{{'Not available'}}</td>
                                    @endif
                                </tr>
                                <tr>
                                    <th>Room Type :</th>
                                    <td>{{$room->room_type}}</td>
                                </tr>
                                <tr>
                                    <th>Capacity :</th>
                                    <td>{{$room->room_capacity}}</td>
                                </tr>
                                <tr>
                                    <th>Total Room :</th>
                                    <td>{{$room->number_of_room}}</td>
                                </tr>
                                <tr>
                                    <th>Available Room :</th>
                                    <td>{{$room->available_room}}</td>
                                </tr>
                                <tr>
                                    <th>Facilities :</th>
                                    <td>{{$room->room_facilities}}</td>
                                </tr>
                                <tr>
                                    <th>Price Per Night :</th>
                                    <td>{{$room->price_per_night}}</td>
                                </tr>

                                <tr>
                                    <th>Hotel Location :</th>
                                    <td>{{$location->location_name}}</td>
                                </tr>
                                <tr>
                                    <th>Description :</th>
                                    <td>{{$hotel->description}}</td>
                                </tr>
                                <tr>
                                    <th>Room Image :</th>
                                    <td>
                                        <img src="{{asset($room->room_image)}}" height="100px" width="100px" alt="">
                                    </td>
                                </tr>
                            </table>
                            <div class="pull-right col-sm-2">
                                <a href="{{route('manage-room')}}" class="btn btn-block btn-success">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
