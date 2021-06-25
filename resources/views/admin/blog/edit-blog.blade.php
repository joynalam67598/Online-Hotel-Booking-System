@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center text-success" id="message">{{Session::get('message')}}</h3>
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="text-primary">Write Blog</h4>
                    </div>
                    <div class="card-body">
                        {{ Form::open(['route'=>'update-blog','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data']) }}
                        <div class="form-group row">
                            {{Form::label('blog_title','Blog Title',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::text('blog_title',$blog->blog_title,['class'=>'form-control','required'])}}
                                {{Form::hidden('blog_id',$blog->id)}}
                                <span class="text-danger">{{$errors->has('blog_title')? $errors->first('blog_title'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('writer_name','Writer Name',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::text('writer_name',$blog->writer_name,['class'=>'form-control','required'])}}
                                <span class="text-danger">{{$errors->has('writer_name')? $errors->first('writer_name'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('blog','Blog',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::textarea('blog',$blog->blog,['class'=>'form-control','rows'=>'10','id'=>'editor','required'])}}
                                <span class="text-danger">{{$errors->has('blog')? $errors->first('blog'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('publication_status','Publication Status',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9 form-check">
                                <label><input type="radio"  value="1" {{$blog->publication_status==1 ? 'checked':""}} name="publication_status"/>{{__('Published')}}</label>
                                <label><input type="radio" value="0"  {{$blog->publication_status==0 ? 'checked':""}} name="publication_status"/>{{__('Unpublished')}}</label>
                                <span class="text-danger">{{$errors->has('publication_status')? $errors->first('publication_status'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('blog_image','Blog Image',['class'=>'col-sm-3'])}}
                            <div class="col-sm-9">
                                {{Form::file('blog_image',['accept'=>'image/*'])}}
                                <img src="{{asset($blog->blog_image)}}" alt="" width="50px" height="50px">
                                <span class="text-danger">{{$errors->has('blog_image')? $errors->first('blog_image'):''}}</span>
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

