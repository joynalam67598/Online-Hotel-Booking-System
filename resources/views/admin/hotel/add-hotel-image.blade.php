@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center text-success" id="message">{{Session::get('message')}}</h3>
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="text-primary">Add hotel Image</h4>
                    </div>
                    <div class="card-body">
                        {{ Form::open(['route'=>'new-hotel-image','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data']) }}
                        <div class="form-group row">
                            {{Form::label('hotel_name','Hotel',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                <select class="form-control" name="hotel_id" id="hotel_id" required>
                                    <option value="" selected disabled>{{'-- Select Hotel --'}}</option>
                                @foreach($hotels as $hotel)
                                        <option value="{{$hotel->id}}">{{$hotel->hotel_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->has('hotel_id')? $errors->first('hotel_id'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('hotel_image','Hotel Image',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::file('hotel_image',['accept'=>'image/*'])}}
                                <span class="text-danger">{{$errors->has('hotel_image')? $errors->first('hotel_image'):''}}</span>
                            </div>
                        </div>
                        <div class="col-sm-9 offset-3">
                            {{Form::submit('Save',['class'=>'btn btn-block btn-primary'])}}
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
