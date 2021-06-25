@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center text-success" id="message">{{Session::get('message')}}</h3>
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="text-success">Locations Table</h4>
                    </div>
                    <div class="card-body text-center">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-bordered">
                                <tr>
                                    <th>SL NO.</th>
                                    <th>Location Name</th>
                                    <th>Action</th>
                                </tr>
                                @php($i=1)
                                @foreach($locations as $location)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$location->location_name}}</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-xs" title="View Details">
                                                <span class="fa fa-search-plus"></span>
                                            </a>
                                            <a  href="{{route('delete-location',['id'=>$location->id])}}" class="btn btn-danger btn-xs" title="Delete">
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
