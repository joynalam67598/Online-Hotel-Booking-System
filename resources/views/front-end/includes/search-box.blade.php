<div class="container-fluid  mt-5 mb-5 wow animate__bounce">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card shadow border-warning">
                <div class="card-body border-dark">
                    {{Form::open(['route'=>'available-hotel','method'=>'get', 'class'=>'form-inline text-warning'])}}
                    <div class="form-group  text-center col-md-2">
                        {{Form::label('location','Location')}}
                        <select class="form-control" name="location_id" required>
                            <option value="" disabled selected>{{'-- Select Location --'}}</option>
                            @foreach($locations as $location)
                                <option value="{{$location->id}}">{{$location->location_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group  text-center col-md-2">
                        {{Form::label('checkin_date','Arrival Date')}}
                        {{ Form::text('checkin_date',null, ['class' => 'form-control ','required','id' => 'from','placeholder'=>'Arrival Date']) }}
                    </div>
                    <div class="form-group  text-center col-md-2">
                        {{Form::label('checkout_date','Departure Date')}}
                        {{ Form::text('checkout_date',null, ['class' => 'form-control','required','id' => 'to','placeholder'=>'Departure Date']) }}
                    </div>
                    <div class="form-group text-center col-md-2">
                        {{Form::label('adult','Number of Adult')}}
                        <select class="form-control" name="adult_select_value" id="adult_select_value" required>
                                <option value="" disabled selected>{{'Select Number of Adult'}}</option>
                                <option value="{{1}}">{{1}}</option>
                                <option value="{{2}}">{{2}}</option>
                                <option value="{{3}}">{{3}}</option>
                                <option value="{{4}}">{{4}}</option>
                                <option value="{{5}}">{{5}}</option>
                                <option value="{{6}}">{{6}}</option>
                                <option value="{{7}}">{{7}}</option>
                                <option value="{{8}}">{{8}}</option>
                                <option value="{{9}}">{{9}}</option>
                                <option value="{{10}}">{{10}}</option>
                                <option disabled class="text-danger"><h6 >Age above 18 years!!</h6></option>
                        </select>
                    </div>
                    <div class="form-group text-center col-md-2">
                        {{Form::label('child','Number of Children')}}
                        <select class="form-control" name="child_select_value" id="child_select_value" required>
                            <option value="" disabled selected>{{'Select Number of Child'}}</option>
                            <option value="{{0}}">{{0}}</option>
                            <option value="{{1}}">{{1}}</option>
                            <option value="{{2}}">{{2}}</option>
                            <option value="{{3}}">{{3}}</option>
                            <option value="{{4}}">{{4}}</option>
                            <option value="{{5}}">{{5}}</option>
                            <option disabled class="text-danger"><h6 >Age above 12 years!!</h6></option>
                        </select>
                    </div>
                    <div class="form-group  text-center col-md-2" style="padding-top: 20px">
                        {{ Form::submit('Search', ['class' => 'btn btn-lg btn-block btn-warning','id'=>'searchBtn']) }}
                    </div>
                    {{Form::close()}}
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>


