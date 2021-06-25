@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center text-success" id="message">{{Session::get('message')}}</h3>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Blogs Table</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL NO.</th>
                                <th>Blog Title</th>
                                <th>Writer Name </th>
                                <th>Publication Status</th>
                                <th>Blog Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=1)
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$blog->blog_title}}</td>
                                    <td>{{$blog->writer_name}}</td>
                                    @if($blog->publication_status)
                                        <td>{{'Published'}}</td>
                                    @else
                                        <td>{{'Unpublished'}}</td>
                                    @endif
                                    <td>
                                        <img src="{{asset($blog->blog_image)}}" alt="" height="50px" width="50px">
                                    </td>
                                    <td>
                                        @if($blog->publication_status)
                                            <a href="{{route('unpublished-blog',['id'=>$blog->id])}}" class="btn btn-success btn-xs" title="Unpublished">
                                                <span class="fa fa-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{route('published-blog',['id'=>$blog->id])}}" class="btn btn-danger btn-xs" title="Published">
                                                <span class="fa fa-arrow-down"></span>
                                            </a>
                                        @endif
                                        <a href="{{route('edit-blog',['id'=>$blog->id])}}" class="btn btn-primary btn-xs" title="Edit">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a  href="{{route('delete-blog',['id'=>$blog->id])}}" class="btn btn-danger btn-xs" title="Delete">
                                            <span class="fa fa-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>SL NO.</th>
                                <th>Blog Title</th>
                                <th>Writer Name </th>
                                <th>Publication Status</th>
                                <th>Blog Image</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
