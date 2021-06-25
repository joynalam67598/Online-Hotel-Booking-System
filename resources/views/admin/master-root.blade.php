<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{asset('/')}}/front-end/images/favicon.png" type="image">
    <title>Royal Hotel - Dashboard</title>
    <link href="{{asset('/')}}/admin/css/bootstrap.css" rel="stylesheet"/>
    <link href="{{asset('/')}}/admin/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/front-end/css/jquery.datetimepicker.min.css"/>
    <script src="{{asset('/')}}/admin/ckeditor/ckeditor.js"></script>
    <script src="{{asset('/')}}/admin/ckeditor/samples/js/sample.js"></script>
    <link rel="stylesheet" href="{{asset('/')}}/admin/ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="{{asset('/')}}/admin/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
    {{--    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/admin/DataTables/css/jquery.dataTables.min.css"/>--}}
    <link rel="stylesheet" href="{{asset('/')}}/admin/css/style.css" />
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="navbar_top">
    <div class="container">
        <a href="{{url('/home')}}" class="navbar-brand">
            <img src="{{asset('/')}}/front-end/images/logo-2.png">
        </a>
        <button type="button" class="navbar-toggler" data-target="#mainMenu" data-toggle="collapse" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav mr-auto">
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">{{"Location"}}</a>
                    <ul class="dropdown-menu bg-dark">
                        <li><a href="{{route("add-location")}}" class="nav-link">{{"Add Location"}}</a></li>
                        <hr class="bg-white">
                        <li><a href="{{route("manage-location")}}" class="nav-link">{{"Manage Location"}}</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">{{"Hotel"}}</a>
                    <ul class="dropdown-menu bg-dark">
                        <li><a href="{{route("add-hotel")}}" class="nav-link">{{"Add Hotel"}}</a></li>
                        <hr class="bg-white">
                        <li><a href="{{route("manage-hotel")}}" class="nav-link">{{"Manage Hotel"}}</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">{{"Hotel Image"}}</a>
                    <ul class="dropdown-menu bg-dark">
                        <li><a href="{{route("add-hotel-image")}}" class="nav-link">{{"Add Image"}}</a></li>
                        <hr class="bg-white">
                        <li><a href="{{route("manage-hotel-image")}}" class="nav-link">{{"Manage Image"}}</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">{{"Room"}}</a>
                    <ul class="dropdown-menu bg-dark">
                        <li><a href="{{route("add-room")}}" class="nav-link">{{"Add Room"}}</a></li>
                        <hr class="bg-white">
                        <li><a href="{{route("manage-room")}}" class="nav-link">{{"Manage Room"}}</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">{{"Blog"}}</a>
                    <ul class="dropdown-menu bg-dark">
                        <li><a href="{{route("add-blog")}}" class="nav-link">{{"Add Blog"}}</a></li>
                        <hr class="bg-white">
                        <li><a href="{{route("manage-blog")}}" class="nav-link">{{"Manage Blog"}}</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">{{"Booking"}}</a>
                    <ul class="dropdown-menu bg-dark">
                        <li><a href="{{route("manage-booking")}}" class="nav-link">{{"Manage Booking"}}</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav bg-dark">
                {{--                <li><a href="{{route("register")}}" class="nav-link">{{"Register"}}</a></li>--}}
                <li class="nav-item dropdown ">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}  <span><i class="fa fa-user-o" aria-hidden="true"></i></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right bg-light" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
                        {{Form::open(['route'=>'logout','method'=>'post','id'=>'logout-form'])}}
                        {{Form::close()}}
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>


@yield('content')


<script src="{{asset('/')}}/admin/js/jquery-3.5.1.js"></script>
<script src="{{asset('/')}}/admin/js/jquery.datetimepicker.full.min.js"></script>
<script src="{{asset('/')}}/admin/js/popper.min.js"></script>
<script src="{{asset('/')}}/admin/js/bootstrap.js"></script>
{{--<script type="text/javascript" src="{{asset('/')}}/admin/DataTables/js/datatables.bootstrap.min.js"></script>--}}
{{--<script type="text/javascript" src="{{asset('/')}}/admin/DataTables/js/jquery.dataTables.min.js"></script>--}}


<script>
    window.onscroll = function() {
        if ($(window).width() > 992) {
            $(window).scroll(function(){
                if ($(this).scrollTop() > 40) {
                    $('#navbar_top').addClass("fixed-top");
                    // add padding top to show content behind navbar
                    $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
                }else{
                    $('#navbar_top').removeClass("fixed-top");
                    // remove padding top from body
                    $('body').css('padding-top', '0');
                }
            });
        }
    };

    $(document).ready(function (){
        $('#message').click(function (){
            $(this).text('');
        });
    });


    $(document).ready(function (){
        $('select[name="location_id"]').on('change',function (){
            var location_id = $(this).val();
            if(location_id){
                $.ajax({
                    url: "{{url('/get/hotels/')}}/"+location_id,
                    type:'GET',
                    dataType:'json',
                    success:function (data){
                        $('#hotel_id').empty();
                        $.each(data,function(kye,value){
                            $('#hotel_id').append(' <option value="'+value.id+'">'+value.hotel_name+'</option>');

                        });
                    }
                });
            }
            else
            {
                $('#hotel_id').empty();
            }
        });
    });
    initSample();
    // $(document).ready( function () {
    //     $('#dataTable').DataTable();
    // } );
</script>

</body>
</html>
