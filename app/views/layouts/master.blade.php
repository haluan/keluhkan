<!DOCTYPE html>
<html>
<head>
    <title>Keluhkan</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
    .black{
        color: #6C7A89;
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
    .bg-red{
        color: #F9BF3B;
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
                    <li>@if ( !Auth::guest() )
                            <a href="{{ URL::to('posts') }}">Lihat Semua Keluhan</a>
                        @endif
                    </li>
                    <li><a href="{{ URL::to('posts/create') }}">Buat Keluhan Baru</a></li>
                    <li>
                         <div>
                            {{ Form::open(array('url' => 'search', 'class' => "navbar-form", 'method' => 'get')) }}

                                <div class="input-group" style="width:520px;">
                                 
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
                            <li><a href="{{ URL::to('users/' . Auth::user()->id) }}">{{Auth::user()->name}}</a></li>
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
      <script type="text/javascript" src="{{ URL::asset('tinymce/tinymce.min.js') }}"></script>
        <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            theme: "modern",
             menubar : false,
            plugins: [
                "advlist autolink lists link charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar1: "insertfile undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image preview media |emoticons",
            image_advtab: true,
            templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
            ]
        });
        </script>
</body>
</html>