<!DOCTYPE html>
<html>
<head>
    <title>Keluhkan</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<style type="text/css">
   .navbar-default .navbar-nav>li>a {
    color: white;
    }
    .navbar-default .navbar-brand {
        color: white;
        }
    .white{
        color: white;
    }
    .red{
        color: red;
    }
    a:hover {
        color: default;
        text-decoration: none;
    }

    body{
        padding-top: 100px; background-color: #DADFE1;
    }

    .bg-white{
        background-color: white;
    }
</style>
<body>
<div class="container">
<nav class="navbar navbar-default navbar-fixed-top" style="background-color: red;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ URL::to('') }}">Keluhkan</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
               <ul class="nav navbar-nav pull-left">
                    <li><a href="{{ URL::to('posts') }}">Lihat Semua Keluhan</a></li>
                    <li><a href="{{ URL::to('posts/create') }}">Buat Keluhan Baru</a></li>
                    <li>
                         <div>
                            {{ Form::open(array('url' => 'search', 'class' => "navbar-form", 'method' => 'get')) }}

                                <div class="input-group">
                                 
                                    {{ Form::text('search', Input::old('search'), array('class' => 'form-control', 'placeholder' => 'cari ...')) }}
                                </div>
                            {{ Form::close() }}
                        </div>   
                    </li> 
                </ul>
                 <ul class="nav navbar-nav pull-right">
                    <li>@if ( Auth::guest() )
                            <li>{{ HTML::link('login', 'Login') }}</li>
                            <li>{{ HTML::link('users/create', 'signup') }}</li>
                        @else
                            <li>{{ HTML::link('logout', 'Logout') }}</li>
                        @endif
                    </li>
                </ul>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

</div>
		<div class="container">
		    @yield('content')
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>