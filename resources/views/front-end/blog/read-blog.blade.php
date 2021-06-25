@extends('front-end.master')
@section('content')
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h4>{{$blog->blog_title}}</h4>
                            <h5 class="text-secondary">{{$blog->writer_name}}</h5>
                            <hr>
                        </div>
                        <div>
                            <img src="{{asset($blog->blog_image)}}" alt="" height="350" class="w-100">
                        </div>
                        <div class="mt-5">
                          <?php echo $blog->blog ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
