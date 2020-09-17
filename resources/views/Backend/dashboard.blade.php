@extends('Backend.backendtemplate')
@section('content')
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span6">
          <!-- /widget -->
          
          <!-- /widget -->
          <div class="widget">
            <div class="widget-header"> <i class="icon-file"></i>
              <h3> Teacher Request</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">

              <ul class="messages_layout">
                @foreach($teachers as $teacher)
                <li class="from_user left"> <a href="#" class="avatar"><img src="{{$teacher->user->profile}}" style="border-radius: 100%; width: 40px ; height: 40px"/></a>
                  <div class="message_wrap"> <span class="arrow"></span>
                    <div class="info"> <a class="name">{{$teacher->user->name}}</a> <span class="time">
                      {{$teacher->user->created_at}}
                    </span>
                    </div>
                    <div class="text">{{$required}} </div>
                  </div>
                </li>
                @endforeach
                
              </ul>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 
        </div>
        <!-- /span6 -->
        <div class="span6">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Teacher</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="shortcuts"> 
                @foreach($teacherlists as $teacherlist)
                  <a href="javascript:;" class="shortcut">
                    <img src="{{asset($teacherlist->user->profile)}}" style="width: 30px;height: 30px">
                    <span class="shortcut-label">{{$teacherlist->user->name}}</span>
                  </a>
                @endforeach
                </div>
                    <!-- /shortcuts --> 
              </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
@endsection