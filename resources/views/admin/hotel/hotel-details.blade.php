@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="text-success">Hotel Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                           <table class="table table-bordered table-hover">
                               <tr>
                                   <th>Hotel Name :</th>
                                   <td>{{$hotel->hotel_name}}</td>
                               </tr>
                               <tr>
                                   <th>Room Numbers :</th>
                                   <td>{{$hotel->room_numbers}}</td>
                               </tr>
                               <tr>
                                   <th>Available Room :</th>
                                   <td>{{$hotel->available_room}}</td>
                               </tr>
                               <tr>
                                   <th>Minimum Price :</th>
                                   <td>{{$hotel->minimum_price}}</td>
                               </tr>
                               <tr>
                                   <th>Hotel Location :</th>
                                   <td>{{$location->location_name}}</td>
                               </tr>
                               <tr>
                                   <th>Facilities :</th>
                                   <td>{{$hotel->hotel_facilities}}</td>
                               </tr>
                               <tr>
                                   <th>Address :</th>
                                   <td>{{$hotel->address}}</td>
                               </tr>
                               <tr>
                                   <th>Description :</th>
                                   <td>{{$hotel->description}}</td>
                               </tr>
                               <tr>
                                   <th>Hotel Image :</th>
                                   <td>
                                       <img src="{{asset($hotel->hotel_image)}}" height="200px" width="200px" alt="">
                                   </td>
                               </tr>
                           </table>
                            <div class="pull-right col-sm-2">
                                <a href="{{route('manage-hotel')}}" class="btn btn-block btn-success">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
