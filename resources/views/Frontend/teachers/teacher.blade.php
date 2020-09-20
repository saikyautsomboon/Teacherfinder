@extends('Frontend.teachers.master')
@section('content')
<main id="main" style="margin-top: -590px;">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img" data-aos="fade-right" data-aos-delay="100">
              <img src="{{$user->profile}}"  alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content" data-aos="fade-left" data-aos-delay="100">
              <h2>About Me</h2>
              <p><span style="font-family: bold;">NAME:</span>
                <span>{{$user->name}}</span>
              </p>
              <p><span style="font-family: bold;">EMAIL:</span>
                <a><span>{{$user->email}}</span>
              </p>
              <p><span style="font-family: bold;">PHONE:</span>
                <span>{{$user->phone}}</span>
              </p>
              <p><span style="font-family: bold;">DOB:</span>
                <span>{{$user->teacher->dob}}</span>
              </p>
              <p><span style="font-family: bold;">ADDRESS:</span>
                <span>{{$user->address}}</span>
              </p>
              <p><span style="font-family: bold;">CV:</span>
                <span>{{$user->teacher->cv}}</span>
              </p>
              <p><span style="font-family: bold;">PORFOLIO:</span>
                <span>{{$user->teacher->porfolio}}</span>
              </p>
              <p><span style="font-family: bold;">SUBJECT:</span>
                <span>{{$user->teacher->subject->name}}</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <a href="{{route('subject_teachers.index')}}" class="btn btn-info" style="margin-left: 280px;margin-top: 50px;">Add New subject</a>
      <a href="{{route('studentrequestlistpage',$user->teacher->id)}}" class="btn btn-info" style="margin-left: 280px;margin-top: 50px;">Student request list</a>
      <a href="{{route('studentlistpage',$user->teacher->id)}}" class="btn btn-info" style="margin-left: 280px;margin-top: 50px;">your Student list</a>
      
    </section>

    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Students Request List</h3>
        </header>

        <div class="row">
           @foreach($subjectacc as $subject)
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">

             

              <img src="{{$subject->user->profile}}" style="border-radius: 50%; width:80px; height: 80px" >
              <h4 class="title"><a href="">{{$subject->user->name}}</a></h4>
              <p class="description justify-content-center text-center">I Interested Your {{$subject->teacher->subject->name}}</p>
            
            </div>
          </div>
            @endforeach
      </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <!-- End Why Us Section -->

    <!-- ======= Call To Action Section ======= -->
    <!--  End Call To Action Section -->

    <!-- ======= Features Section ======= -->
    
   <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
   
    <!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <!-- End F.A.Q Section -->

  </main>
  @endsection