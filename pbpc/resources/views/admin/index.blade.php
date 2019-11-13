 <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
--><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('tittle','PBC Post | Dashboard')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="{{asset('/images/favicon.png')}}" type="image/png">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" >

    <header class="main-header"  >
        <!-- Logo -->
        <a href="{{asset('stu')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>PB</b>PC</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Pbpc</b>Pannel</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" >
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only"></span>
            </a>
            <div class="nav-item druse Illuminate\Support\Facades\Auth;use Illuminate\Support\Facades\Auth;dropdown pull-right">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="/uploads/avatar/{{Auth::user()->avatar}}" style ="width:50px; height:50px; float:left;border-radius:50%; margin-right:25px;margin-bottom:5px ;margin-top:5px;">
                                <span class="caret"></span>
                            </a>
                          <div>

                          </div>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="{{url('/profile')}}"class="dropdown-item">Profile</a><br>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>


            </div>
           

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
               
            </div>
            <!-- search form -->
            <form action="/search" method="POST" class="sidebar-form">
              {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>

            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>

                </li>
                <li class="treeview">


              
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Students Database</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('applied_table') }}"><i class="fa fa-circle-o"></i>Applied Students Table</a></li>
                        <li><a href="{{url('database_table')}}"><i class="fa fa-circle-o"></i>All Students Table</a></li>
                    </ul>
                    <a href="#">
                    <i class="fa fa-book"></i> <span>IPT Documentation</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{asset('pages/forms/general.html')}}"><i class="fa fa-circle-o"></i> IPT Documents</a></li>
                        <li><a href="{{asset('pages/forms/advanced.html')}}"><i class="fa fa-circle-o"></i> IPT Aggrement Form</a></li>
                        
                    </ul>
                </li>

                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Quick Accsess Point</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                    <li><a href="{{url('/students/auth_student_index')}}"><i class="fa fa-circle-o"></i>Registered Students Home Page</a></li>
                        <li><a href="https://osim.dit.ac.tz"><i class="fa fa-circle-o"></i>OSIM</a></li>
                        <li><a href="https://www.dit.ac.tz"><i class="fa fa-circle-o"></i>DIT</a></li>
                    </ul>
                </li>
                <li>
                    <a>
                        <i class="fa fa-calendar"></i> <span>Calendar</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-yellow">{{date('Y')}}</small>
              <small class="label pull-right bg-green">{{date('M')}}</small>
              <small class="label pull-right bg-red">{{date('d')}}</small>

            </span>
                    </a>
                </li>
                <li>
                    <a disable>
                        <i class="fa fa-envelope"></i> <span>Mailbox</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-red">5</small>
            </span>
                    </a>
                </li>
                <li class="header">Action</li>
                <li class="nav-item">

                <a class="dropdown-item" href="{{ url('/') }}">
                            <i class="fa fa-circle-o"></i>
                            {{ __('Home Page') }}
                  </a>


                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-circle-o text-danger"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('students/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-navy">
                        <div class="inner">
                             @foreach($post_1 as $p)
                                <h4 class="text-center text-dark">Post 1</h4>
                           
                                <p>Post Tittle:{{$p->Heading}}</p>
               
                                <div class="text-center">
                                    <br>
                                    <small>
                                        <a  class="btn btn-success btn-md inline" disable>Show</a>
                                        <a href="/edit/{{$p -> id}}" class="btn btn-primary btn-md inline">Edit</a>
                                    </small>
                                    <form action="#" method="POST" class="inline">
                                        @method('DELETE')
                                        @csrf
                                        <small><button type="submit" class="btn btn-danger btn-md inline">Delete</button></small>
                                    </form>

                                </div>
                         
                            @endforeach
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-navy">
                        <div class="inner">
                         @foreach($post_2 as $p)
                                <h4 class="text-center">Post 2</h4>
                               <p>Post Tittle:{{$p->Heading}}</p>
                                
                                <div class="text-center">
                                    <br>
                                    <small>
                                        <a class="btn btn-success btn-md inline" disable>Show</a>
                                         <a href="/edit/{{$p -> id}}" class="btn btn-primary btn-md inline">Edit</a>
                                    </small>
                                    <form action="#" method="POST" class="inline">
                                        @method('DELETE')
                                        @csrf
                                        <small><button type="submit" class="btn btn-danger btn-md inline">Delete</button></small>
                                    </form>
                                </div>
                         @endforeach
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-navy">
                        <div class="inner">
                           @foreach($post_3 as $p)
                                <h4 class="text-center">Post 3</h4>
                                
                                <p>Post Tittle:{{$p ->Heading}}</p>
                                <div class="text-center">
                                    <small>
                                        <a  class="btn btn-success btn-md inline" disable>Show</a>
                                         <a href="/edit/{{$p -> id}}" class="btn btn-primary btn-md inline">Edit</a>
                                    </small>
                                    <form action="#" method="POST" class="inline">
                                        @method('DELETE')
                                        @csrf
                                        <small><button type="submit" class="btn btn-danger btn-md inline">Delete</button></small>
                                    </form>
                                </div>
                         @endforeach
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-navy">
                        <div class="inner">
                           @foreach($post_4 as $p)
                                <h4 class="text-center">Post 4</h4>
                                <p>Post Tittle:{{$p -> Heading}}</p>
                                <div class="text-center">
                                    <br>
                                    <small>
                                        <a class="btn btn-success btn-md inline" disable >Show</a>
                                         <a href="/edit/{{$p -> id}}" class="btn btn-primary btn-md inline">Edit</a>
                                    </small>
                                    <form action="#" method="POST" class="inline">
                                        @method('DELETE')
                                        @csrf
                                        <small><button type="submit" class="btn btn-danger btn-md inline">Delete</button></small>
                                    </form>
                                </div>
                          @endforeach
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>


             <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-navy">
                        <div class="inner">

                            @foreach($post_5 as $p)
                                <h4 class="text-center text-dark">Post 5</h4>

                                <p>Post Tittle:{{$p -> Heading}}</p>
                                <div class="text-center">
                                    <br>
                                    <small>
                                        <a  class="btn btn-success btn-md inline" disable>Show</a>
                                         <a href="/edit/{{$p -> id}}" class="btn btn-primary btn-md inline">Edit</a>
                                    </small>
                                    <form action="#" method="POST" class="inline">
                                        @method('DELETE')
                                        @csrf
                                        <small><button type="submit" class="btn btn-danger btn-md inline">Delete</button></small>
                                    </form>
                                </div>
                            @endforeach

                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-navy">
                        <div class="inner">
                         @foreach($post_6 as $p)
                                <h4 class="text-center">Post 6</h4>
                                <p>Post Tittle:{{$p -> Heading}}</p>
                                <div class="text-center">
                                    <br>
                                    <small>
                                        <a class="btn btn-success btn-md inline" disable>Show</a>
                                         <a href="/edit/{{$p -> id}}" class="btn btn-primary btn-md inline">Edit</a>
                                    </small>
                                    <form action="#" method="POST" class="inline">
                                        @method('DELETE')
                                        @csrf
                                        <small><button type="submit" class="btn btn-danger btn-md inline">Delete</button></small>
                                    </form>
                                </div>
                         @endforeach
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-navy">
                        <div class="inner">
                           @foreach($post_7 as $p)
                                <h4 class="text-center">Post 7</h4>
                               <p>Post Tittle:{{$p -> Heading}}</p>
                                <div class="text-center">
                                    <small>
                                        <a  class="btn btn-success btn-md inline" disable>Show</a>
                                         <a href="/edit/{{$p -> id}}" class="btn btn-primary btn-md inline">Edit</a>
                                    </small>
                                    <form action="#" method="POST" class="inline">
                                        @method('DELETE')
                                        @csrf
                                        <small><button type="submit" class="btn btn-danger btn-md inline">Delete</button></small>
                                    </form>
                                </div>
                         @endforeach
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-navy">
                        <div class="inner">
                          @foreach($post_8 as $p)
                                <h4 class="text-center">Post 8</h4>
                                <p>Post Tittle:{{$p -> Heading}}</p>
                                <div class="text-center">
                                    <br>
                                    <small>
                                        <a class="btn btn-success btn-md inline" disable >Show</a>
                                         <a href="/edit/{{$p -> id}}" class="btn btn-primary btn-md inline">Edit</a>
                                    </small>
                                    <form action="#" method="POST" class="inline">
                                        @method('DELETE')
                                        @csrf
                                        <small><button type="submit" class="btn btn-danger btn-md inline">Delete</button></small>
                                    </form>
                                </div>
                          @endforeach
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>


             <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-navy">
                        <div class="inner">
                            @foreach($post_9 as $p)
                                <h4 class="text-center text-dark">Post 9</h4>

                               <p>Post Tittle:{{$p -> Heading}}</p>
                                 
                                <div class="text-center">
                                    <br>
                                    <small>
                                        <a  class="btn btn-success btn-md inline" disable>Show</a>
                                         <a href="/edit/{{$p -> id}}" class="btn btn-primary btn-md inline">Edit</a>
                                    </small>
                                    <form action="#" method="POST" class="inline">
                                        @method('DELETE')
                                        @csrf
                                        <small><button type="submit" class="btn btn-danger btn-md inline">Delete</button></small>
                                    </form>
                                </div>
                            @endforeach

                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-navy">
                        <div class="inner">
                         @foreach($post_10 as $p)
                                <h4 class="text-center">Post 10</h4>
                                <p>Post Tittle:{{$p -> Heading}}</p>
                                <div class="text-center">
                                    <br>
                                    <small>
                                        <a class="btn btn-success btn-md inline" disable>Show</a>
                                         <a href="/edit/{{$p -> id}}" class="btn btn-primary btn-md inline">Edit</a>
                                    </small>
                                    <form action="#" method="POST" class="inline">
                                        @method('DELETE')
                                        @csrf
                                        <small><button type="submit" class="btn btn-danger btn-md inline">Delete</button></small>
                                    </form>
                                </div>
                         @endforeach
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-navy">
                        <div class="inner">
                           @foreach($post_11 as $p)
                                <h4 class="text-center">Post 11</h4>
                                <p>Post Tittle:{{$p -> Heading}}</p>
                                <div class="text-center">
                                    <br>
                                    <small>
                                        <a  class="btn btn-success btn-md inline" disable>Show</a>
                                         <a href="/edit/{{$p -> id}}" class="btn btn-primary btn-md inline">Edit</a>
                                    </small>
                                    <form action="#" method="POST" class="inline">
                                        @method('DELETE')
                                        @csrf
                                        <small><button type="submit" class="btn btn-danger btn-md inline">Delete</button></small>
                                    </form>
                                </div>
                         @endforeach
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-navy">
                        <div class="inner">
                          @foreach($post_12 as $p)
                                <h4 class="text-center">Post 12</h4>
                               <p>Post Tittle:{{$p -> Heading}}</p>
                                <div class="text-center">
                                    <br>
                                    <small>
                                        <a class="btn btn-success btn-md inline" disable >Show</a>
                                         <a href="/edit/{{$p -> id}}" class="btn btn-primary btn-md inline">Edit</a>
                                    </small>
                                    <form action="#" method="POST" class="inline">
                                        @method('DELETE')
                                        @csrf
                                        <small><button type="submit" class="btn btn-danger btn-md inline">Delete</button></small>
                                    </form>
                                </div>
                          @endforeach
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        @yield('content')
        <!-- /.row -->
            <!-- Main row -->
            <br>
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                
                    <div class="box box-info">
                        <div class="box-header">
                           <b><h3 class=" text-center mt-3">Post Control Panel</h3></b>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                        title="Remove">
                                    <i class="fa fa-times"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <div class="box-body">

                        <form action="{{url('/admin/post')}}" method="POST" ectype="multipart/form-data">
                            <div class="form-group">
                                <label for="Heading">Post Title</label>
                                <input type="text" name="Heading" class="form-control" value="{{old('Heading')}}" placeholder="Post Title Here.."/>
                                    <div class="text-danger">{{$errors->first('Heading')}}</div>

                            </div>


                            <div class="form-group">
                                    <label for="Caption">Post Caption</label>
                                <input type="text" name="Caption" class="form-control" value="{{old('Caption')}}" placeholder="Post Caption Here..">

                            <div class="text-danger">{{$errors->first('Caption')}}</div>
                                </div>

                                <div class="form-group">
                                    <label for="CompanyName">Post Position</label>
                                    <select name="Position" id="" class="form-control" value="{{old('Position')}}">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">4</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                
                                </div>

                                 <div class="form-group"> 
                                      <label for="update">Post Photo</label>
                                      <input type="file" name ="Photo" class="form-control" value="{{old('Photo')}}"/>
                                      <div class="text-danger">{{$errors->first('Photo')}}</div>
                                </div>
             
                                <div class="form-group">
                                    <label for="AuthorName">Author Name</label>
                                    <input type="text" name="AuthorName" placeholder="Author Name"value="{{old('AuthorName')}}" class="form-control"/>

                                    <div class="text-danger">{{$errors->first('AuthorName')}}</div>
                                </div>


                            <div>
                                <label>Post Content</label>

                                   <textarea name="Content" placeholder="Post Content Here..."
                                         value="{{old('Content')}}" class="form-control" cols="30" rows="6">

                                   </textarea>
            
                                <div class="text-danger">{{$errors->first('Content')}}</div>
                            </div>


                                <div class="box-footer clearfix ">
                                    <button type="submit" class="pull-right btn btn-default bg-navy" id="sendEmail">Post Online
                                        <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable">

                    <!-- Map box -->
                    
                    <!-- solid sales graph -->

                    <!-- /.box -->

                    <!-- Calendar -->
                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
 
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer text-center">
        <strong>Copyright &copy; {{date('M Y')}} <a href="https://adminlte.io">Blacknative Inc</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark" style="display: none;">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
       
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
               
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
</body>
</html>







