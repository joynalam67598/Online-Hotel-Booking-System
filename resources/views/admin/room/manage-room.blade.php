@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center text-success" id="message">{{Session::get('message')}}</h3>
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="text-success">Rooms Table</h4>
                    </div>
                    <div class="card-body text-center">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-bordered">
                                <tr>
                                    <th>SL NO.</th>
                                    <th>Hotel Name</th>
                                    <th>Room Name</th>
                                    <th>Room Code</th>
                                    <th>Total Room</th>
                                    <th>Available Room</th>
                                    <th>Capacity</th>
                                    <th>Price Per Night</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                                @php($i=1)
                                @foreach($rooms as $room)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$room->hotel_name}}</td>
                                        <td>{{$room->room_name}}</td>
                                        <td>{{$room->room_code}}</td>
                                        <td>{{$room->number_of_room}}</td>
                                        <td>{{$room->available_room}}</td>
                                        <td>{{$room->room_capacity}}</td>
                                        <td>{{$room->price_per_night}}</td>
                                        <td>{{$room->location_name}}</td>
                                        <td>
                                            <a href="{{route('room-details',['id'=>$room->id])}}" class="btn btn-warning btn-xs" title="View Details">
                                                <span class="fa fa-search-plus"></span>
                                            </a>
{{--                                        @if($room->room_status)--}}
{{--                                                <a href="{{route('book-room',['id'=>$room->id])}}" class="btn btn-success btn-xs" title="Booked Room">--}}
{{--                                                    <span class="fa fa-arrow-up"></span>--}}
{{--                                                </a>--}}
{{--                                        @else--}}
{{--                                                <a href="{{route('unbooked-room',['id'=>$room->id])}}" class="btn btn-danger btn-xs" title="Unbooked Room">--}}
{{--                                                    <span class="fa fa-arrow-down"></span>--}}
{{--                                                </a>--}}
{{--                                        @endif--}}
                                            <a href="{{route('edit-room',['id'=>$room->id])}}" class="btn btn-primary btn-xs" title="Edit">
                                                <span class="fa fa-edit"></span>
                                            </a>
                                            <a  href="{{route('delete-room',['id'=>$room->id])}}" class="btn btn-danger btn-xs" title="Delete">
                                                <span class="fa fa-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
