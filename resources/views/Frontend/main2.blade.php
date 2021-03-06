@extends ('Frontend.master')
@section ('content')

<!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <p class="text-uppercase">
                 welcome
                </p>
                <h2 class="text-uppercase mt-4 mb-5">
                find and join teacher 
                </h2>
                <div>
                  
                  @if(Auth::check())

                  @if(Auth::user()->getRoleNames()[0] == 'User')

                     <a href="{{route('tregister.create')}}" class="primary-btn2 mt-3">Request to become Teacher</a>
                     
                 @endif
                  @if(Auth::user()->getRoleNames()[0] == 'Teacher')
                   <a href="{{route('teacherpage',Auth::user()->teacher->id)}}" class="primary-btn2 mt-3">view your detail</a>
                  
                 
                 @endif 
                  @else
                    <a href="{{route('tregister.create')}}" class="primary-btn2 mt-3">Request to become Teacher</a>
                     
                 @endif
          
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start Feature Area =================-->
        <div class="row justify-content-center d-flex align-items-center">
          @foreach ($userlist as $userlists)
          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              
            </div>
            <div class="meta-text text-sm-center">
              <img class="card-img" src="{{$userlists->profile}}" width="200px" height="300px" alt="" />
              <h4>{{$userlists->name}}</h4>
              <p class="designation" style="color: gold;">{{-- {{$teacherlist->user->email}} --}}
              <a href="{{$userlists->email}}" target="_blank" style="color: gold;">{{$userlists->email}}</a></p>
              <div class="mb-4">
                <p><a href="{{$userlists->teacher->porfolio}}" target="_blank" style="color: gold;">{{$userlists->teacher->porfolio}}</a></p>

                
                @role('User')
                 <p><a href="{{route('subjectjoin',[$userlists->teacher->id,$userlists->teacher->subject->id])}}" class="primary-btn2 mt-3">Hire</a></p>
                @else
                <a href="{{route('loginpage')}}" class="btn btn-info float-right buy_now">Login</a>
          
                @endrole
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>
          @endforeach

        </div>
    <!--================ End Trainers Area =================-->

   
@endsection