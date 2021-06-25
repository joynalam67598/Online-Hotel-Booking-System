@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center text-success" id="message">{{Session::get('message')}}</h3>
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="text-success">Hotel Images Table</h4>
                    </div>
                    <div class="card-body text-center">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-bordered">
                                <tr>
                                    <th>SL NO.</th>
                                    <th>Hotel Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                @php($i=1)
                                @foreach($images as $image)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$image->hotel_name}}</td>
                                        <td>
                                            <img src="{{asset($image->hotel_image)}}" alt="" height="100px" width="100px">
                                        </td>
                                        <td>
                                            <a  href="{{route('delete-image',['id'=>$image->id])}}" class="btn btn-danger btn-xs" title="Delete">
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
