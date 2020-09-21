<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{{Auth::user()->name}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
<link href="{{asset('backend/css/pages/dashboard.css')}}" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> 
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="{{route('dashboardpage')}}">{{Auth::user()->name}} </a>

                    
                <div class="nav-collapse">
                  <ul class="nav pull-right">
                    <li class="dropdown">
                      @guest
                        <li class="nav-item @if(\Route::current()->uri == 'loginpage'){{'active'}}@endif">
                          <a class="nav-link" href="{{ route('loginpage') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item @if(\Route::current()->uri == 'registerpage'){{'active'}}@endif">
                          <a class="nav-link" href="{{ route('registerpage') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="font-size: 20px">
                            {{ Auth::user()->name }}
                            <img class="img-profile ml-3" src="{{asset(Auth::user()->profile)}}" style="border-radius: 100%; width: 40px ; height: 40px">
                          </a>


                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                          </form>
                        </div>
                      </li>
                      @endguest
                    </li>
                  </ul>
                </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="@if(\Route::current()->uri == 'teacherlist'){{'active'}}@endif" ><a href="{{route('teacherlist')}}"><span style="font-size: 20px">Teacher</span>
            <span style="font-size: 20px;margin-top: 10px">{{ \App\Teacher::where('status',0)->count() }}</span>
          </a>
        </li>
        <li class="@if(\Route::current()->uri == 'teacherreq'){{'active'}}@endif"><a href="{{route('teacherreq')}}"><span style="font-size: 20px">Teacher Request</span> 
            <span style="font-size: 20px;margin-top: 10px">{{ \App\Teacher::where('status',1)->count() }}</span>
          </a>
         </li>
        <li class="@if(\Route::current()->uri == 'students'){{'active'}}@endif"><a href="{{route('students.index')}}"><span style="font-size: 20px">Students</span> 
          @php 

          $users=\App\User::all();
          $userList=array();
          foreach($users as $user){
            if ($user->hasRole('User')){
              $userList[] = $user;
            }
          }
          $user_count=count($userList);
          @endphp

            <span style="font-size: 20px;margin-top: 10px">{{$user_count}}</span>
          </a>
        </li>
        <li class="@if(\Route::current()->uri == 'subjects'){{'active'}}@endif"><a href="{{route('subjects.index')}}"><span style="font-size: 20px">Subject</span>
            <span style="font-size: 20px;margin-top: 10px">{{ \App\Subject::all()->count() }}</span>
         </a></li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
  @yield('content')
<!-- /extra -->
<div class="extra" style="margin-top: 500px;">
  <div class="extra-inner">
    <div class="container">
      <div class="row">
                    <div class="span3">
                        <h4>
                            About Free Admin Template</h4>
                        <ul>
                            <li><a href="javascript:;">EGrappler.com</a></li>
                            <li><a href="javascript:;">Web Development Resources</a></li>
                            <li><a href="javascript:;">Responsive HTML5 Portfolio Templates</a></li>
                            <li><a href="javascript:;">Free Resources and Scripts</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Support</h4>
                        <ul>
                            <li><a href="javascript:;">Frequently Asked Questions</a></li>
                            <li><a href="javascript:;">Ask a Question</a></li>
                            <li><a href="javascript:;">Video Tutorial</a></li>
                            <li><a href="javascript:;">Feedback</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Something Legal</h4>
                        <ul>
                            <li><a href="javascript:;">Read License</a></li>
                            <li><a href="javascript:;">Terms of Use</a></li>
                            <li><a href="javascript:;">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Open Source jQuery Plugins</h4>
                        <ul>
                            <li><a href="">Open Source jQuery Plugins</a></li>
                            <li><a href="">HTML5 Responsive Tempaltes</a></li>
                            <li><a href="">Free Contact Form Plugin</a></li>
                            <li><a href="">Flat UI PSD</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /extra-inner --> 
</div>
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; 2013 <a href="#">Bootstrap Responsive Admin Template</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="{{asset('backend/js/jquery-1.7.2.min.js')}}"></script> 
<script src="{{asset('backend/js/excanvas.min.js')}}"></script> 
<script src="{{asset('backend/js/chart.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('backend/js/bootstrap.js')}}"></script>
<script language="javascript" type="text/javascript" src="{{asset('backend/js/full-calendar/fullcalendar.min.js')}}"></script>
 
<script src="{{asset('backend/js/base.js')}}"></script> 
<script type="text/javascript" src="{{asset('backend/js/script.js')}}"></script>
<!-- /Calendar -->
</body>
</html>
