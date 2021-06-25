@extends('front-end.master')
@section('content')
    <div class="container mt-5 ">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-sm-4" style="padding-bottom: 50px">
                <div class="card">
                    <img src="{{asset($blog->blog_image)}}" class="card-img-top" height="200px" width="200px">
                    <div class="card-body text-center">
                        <h4><a href="{{route('read-blog',['id'=>$blog->id])}}" class="text-decoration-none text-dark">{{$blog->blog_title}}</a></h4>
                        <hr>
                        <h5 class="text-secondary">{{$blog->writer_name}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
