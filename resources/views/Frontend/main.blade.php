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
                     {{-- <a href="{{route('freecoursepage')}}" class="primary-btn ml-sm-3 ml-0">see free course</a> --}}
                 @endif
                  @if(Auth::user()->getRoleNames()[0] == 'Teacher')
                   <a href="{{route('teacherpage',Auth::user()->teacher->id)}}" class="primary-btn2 mt-3">view your detail</a>
                  {{-- <a href="{{route('freecoursepage')}}" class="primary-btn ml-sm-3 ml-0">see free course</a> --}}
                 
                 @endif 
                  @else
                    <a href="{{route('tregister.create')}}" class="primary-btn2 mt-3">Request to become Teacher</a>
                    {{--  <a href="{{route('freecoursepage')}}" class="primary-btn ml-sm-3 ml-0">see free course</a> --}}
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
    <section class="feature_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Awesome Feature</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-student"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Popular Teacher</h4>
                <p>
                  You can meet various popular teacher here!
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-book"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Popular Subject</h4>
                <p>
                  You can learn various popular subject here!
                </p>
              </div>
            </div>
          </div>

      
        </div>
      </div>
    </section>
    <!--================ End Feature Area =================-->

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Our Available Subject</h2>
              <p>
                Many subject are waiting for you!
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single course -->
            
          <div class="col-lg-12">
          
            <div class="owl-carousel active_course">
        @foreach ($subjects as $subject)

              <div class="single_course">
                <div class="course_head">
                  <img width="80px;" height="200px;" src="{{asset($subject->photo)}}" alt="" />
                </div>


                <div class="course_content">
                  <span class="price">Hi</span>
                  <span class="tag mb-4 d-inline-block">Hello User</span>
                  <h4 class="mb-3">
                    <a href="{{route('coursedetailspage')}}"> {{$subject->name}}</a>
                    <a href="{{route('coursedetailspage',$subject->id)}}">Custom Product Design</a>
                  </h4>
                  <p>
                    If You like this subject,welcome to join and learn!!
                  </p>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                  >
                    <div class="authr_meta">
                      <img src="{{asset('frontend/img/courses/author1.png')}}" alt="" />
                      <span class="d-inline-block ml-2">Cameron</span>
                    </div>
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                      <span class="meta_info"
                        ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                      >
                    </div>
                  </div>
                </div>

              </div>
        @endforeach


             
            </div>
            
          </div>

        </div>
      </div>
    </div>
    <!--================ End Popular Courses Area =================-->


     <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Our Free Courses</h2>
              <p>
                Many Free courses for you!
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single course -->
          <div class="col-lg-12">
            <div class="owl-carousel active_course">
              <div class="single_course">
                <div class="course_head">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/hBh_CC5y8-s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="course_content">
                  <span class="price">$Free</span>
                  <span class="tag mb-4 d-inline-block">JAVA</span>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                  >
                    <div class="authr_meta">
                      <img src="{{asset('frontend/img/courses/author1.png')}}" alt="" />
                      <span class="d-inline-block ml-2">Cameron</span>
                    </div>
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                      <span class="meta_info"
                        ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="single_course">
                <div class="course_head">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/ImtZ5yENzgE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="course_content">
                  <span class="price">$Free</span>
                  <span class="tag mb-4 d-inline-block">LARAVEL</span>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                  >
                    <div class="authr_meta">
                      <img src="{{asset('frontend/img/courses/author2.png')}}" alt="" />
                      <span class="d-inline-block ml-2">Cameron</span>
                    </div>
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                      <span class="meta_info"
                        ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="single_course">
                <div class="course_head">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/hx38tnlYGlA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="course_content">
                  <span class="price">$Free</span>
                  <span class="tag mb-4 d-inline-block">PHP</span>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                  >
                    <div class="authr_meta">
                      <img src="{{asset('frontend/img/courses/author3.png')}}" alt="" />
                      <span class="d-inline-block ml-2">Cameron</span>
                    </div>
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                      <span class="meta_info"
                        ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="single_course">
                <div class="course_head">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/rfscVS0vtbw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="course_content">
                  <span class="price">$Free</span>
                  <span class="tag mb-4 d-inline-block">PYTHON</span>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                  >
                    <div class="authr_meta">
                      <img src="{{asset('frontend/img/courses/author3.png')}}" alt="" />
                      <span class="d-inline-block ml-2">Cameron</span>
                    </div>
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                      <span class="meta_info"
                        ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ End Popular Courses Area =================-->

    <!--================ Start Events Area =================-->
    <div class="events_area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3 text-white">Upcoming Events</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="single_event position-relative">
              <div class="event_thumb">
                <img src="{{asset('frontend/img/tph.jpg')}}" height="720px" alt="" />
              </div>
              <div class="event_details">
                <div class="d-flex mb-4 ">
                  <div class="date"><span>15</span> Jun</div>

                  <div class="time-location">
                    <p>
                      <span class="ti-time mr-2"></span> 12:00 AM - 12:30 AM
                    </p>
                    <p>
                      <span class="ti-location-pin mr-2"></span> Yangon
                    </p>
                  </div>
                </div>
                <p>
                  One make creepeth man for so bearing their firmament won't
                  fowl meat over seas great
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="single_event position-relative">
              <div class="event_thumb">
                <img src="{{asset('frontend/img/ytmn.jpg')}}" height="720px" alt="" />
              </div>
              <div class="event_details">
                <div class="d-flex mb-4">
                  <div class="date"><span>15</span> Jun</div>

                  <div class="time-location">
                    <p>
                      <span class="ti-time mr-2"></span> 12:00 AM - 12:30 AM
                    </p>
                    <p>
                      <span class="ti-location-pin mr-2"></span> Yangon
                    </p>
                  </div>
                </div>
                <p>
                  One make creepeth man for so bearing their firmament won't
                  fowl meat over seas great
                </p>
               {{--  <a href="#" class="primary-btn rounded-0 mt-3">View Details</a> --}}
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="text-center pt-lg-5 pt-3">
              <a href="#" class="event-link">
                View All Event <img src="{{asset('frontend/img/next.png')}}" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ End Events Area =================-->

    <!--================ Start Trainers Area =================-->
    <section class="trainer_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Our Expert Teachers</h2>
              <p>
                Here are all of our expert teachers!!
              </p>
            </div>
          </div>
        </div>
        

        <div class="row justify-content-center d-flex align-items-center">
          @foreach ($teacher as $teacherlist)
          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              
            </div>
            <div class="meta-text text-sm-center">
              <img class="card-img" src="{{$teacherlist->user->profile}}" width="200px" height="200px" alt="" />
              <h4>{{$teacherlist->user->name}}</h4>
              <p class="designation" style="color: gold;">{{-- {{$teacherlist->user->email}} --}}
              <a href="{{$teacherlist->user->email}}" target="_blank" style="color: gold;">{{$teacherlist->user->email}}</a></p>
              <div class="mb-4">
                <p>
                 {{$teacherlist->subject->name}}
                </p>
                <p><a href="{{$teacherlist->porfolio}}" target="_blank" style="color: gold;">{{$teacherlist->porfolio}}</a></p>
                <p><a href="{{route('subjectjoin',[$teacherlist->id,$teacherlist->subject->id])}}" class="primary-btn2 mt-3">Hire</a></p>
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
      </div>
    </section>
    <!--================ End Trainers Area =================-->

   
@endsection