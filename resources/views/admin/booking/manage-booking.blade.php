@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center text-success" id="message">{{Session::get('message')}}</h3>
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="text-success">Bookings Table</h4>
                    </div>
                    <div class="card-body text-center">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-bordered">
                                <tr>
                                    <th>SL NO.</th>
                                    <th>Location Name</th>
                                    <th>Hotel Name</th>
                                    <th>Room Name</th>
                                    <th>Customer Name</th>
                                    <th>Booking Status</th>
                                    <th>Booking Total</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>
                                </tr>
                                @php($i=1)
                                @foreach($bookings as $booking)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$booking->location_name}}</td>
                                        <td>{{$booking->hotel_name}}</td>
                                        <td>{{$booking->room_name}}</td>
                                        <td>{{$booking->first_name.' '.$booking->last_name}}</td>
                                        <td>{{$booking->booking_status==1 ? "Booked":($booking->booking_status==2 ? "Released" : "Pending") }}</td>
                                        <td>{{$booking->booking_total}}</td>
                                        <td>{{$booking->payment_status==1 ? "Paid":"Pending"}}</td>
                                        <td>
                                            <a href="{{route('view-booking',['id'=>$booking->id])}}" class="btn btn-warning btn-xs" title="View Details">
                                                <span class="fa fa-search-plus"></span>
                                            </a>
                                            @if($booking->booking_status==0)
                                                <a href="{{route('confirm-booking',['id'=>$booking->id])}}" class="btn btn-primary btn-xs" title="Confirm Booking">
                                                    <span class="fa fa-plus"></span>
                                                </a>
                                                <a href="{{route('not-confirmed')}}"  class="btn btn-secondary btn-xs" title="Not Confirmed">
                                                    <span class="fa fa-clock"></span>
                                                </a>
                                            @elseif($booking->booking_status==1)
                                                <a href="{{route('confirm-release',['id'=>$booking->id])}}" class="btn btn-info btn-xs" title="Release Booking">
                                                    <span class="fa fa-minus"></span>
                                                </a>
                                                <a href="{{route('confirmed')}}"  class="btn btn-success btn-xs" title="Confirmed">
                                                    <span class="fa fa-check"></span>
                                                </a>
                                            @else
                                                <a href="" class="btn btn-light btn-xs" title="Released" onclick="return false">
                                                    <span class="fas fa-ban"></span>
                                                </a>
                                                <a href=""  class="btn btn-light btn-xs" title="Confirmed" onclick="return false">
                                                    <span class="fas fa-ban"></span>
                                                </a>
                                            @endif

                                            <a  href="{{route('delete-booking',['id'=>$booking->id])}}" class="btn btn-danger btn-xs" title="Delete">
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

