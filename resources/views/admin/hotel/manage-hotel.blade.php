@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center text-success" id="message">{{Session::get('message')}}</h3>
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="text-success">Hotels Table</h4>
                    </div>
                    <div class="card-body text-center">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-bordered">
                                <tr>
                                    <th>SL NO.</th>
                                    <th>Hotel Name</th>
                                    <th>Total Room</th>
                                    <th>Available Room</th>
                                    <th>Minimum Price</th>
                                    <th>Facilities</th>
                                    <th>Hotel Location</th>
                                    <th>Hotel Image</th>
                                    <th>Action</th>
                                </tr>
                                @php($i=1)
                                @foreach($hotels as $hotel)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$hotel->hotel_name}}</td>
                                    <td>{{$hotel->room_numbers}}</td>
                                    <td>{{$hotel->available_room}}</td>
                                    <td>{{$hotel->minimum_price}}</td>
                                    <td>{{$hotel->hotel_facilities}}</td>
                                    <td>{{$hotel->location_name}}</td>
                                    <td>
                                        <img src="{{asset($hotel->hotel_image)}}" alt="" height="50px" width="50px">
                                    </td>
                                    <td>
                                        <a href="{{route('hotel-details',['id'=>$hotel->id])}}" class="btn btn-success btn-xs" title="View Details">
                                            <span class="fa fa-search-plus"></span>
                                        </a>
                                        <a href="{{route('edit-hotel',['id'=>$hotel->id])}}" class="btn btn-primary btn-xs" title="Edit">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a  href="{{route('delete-hotel',['id'=>$hotel->id])}}" class="btn btn-danger btn-xs" title="Delete">
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
