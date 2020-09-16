@extends('Backend.backendtemplate')
@section('content')

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Teacher  Lists</h1>
  </div>
  <div class="container-fluid">



  	<div class="col-lg-12">
            <div class="owl-carousel active_course">
              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="img/courses/c1.jpg" alt="" />
                </div>
                <div class="course_content">
                   <span class="meta_info"
                        ><a href="#"> NAME:<i class="ti-heart mr-2"></i>35 </a></span
                      >
                   <span class="meta_info"
                        ><a href="#"> EMAIL:<i class="ti-heart mr-2"></i>35 </a></span
                      >
                  <h4 class="mb-3">
                     <span class="meta_info"
                        ><a href="#"> CV:<i class="ti-heart mr-2"></i>35 </a></span
                      >
                  </h4>
                  <p>
                    One make creepeth man bearing their one firmament won't fowl
                    meat over sea
                  </p>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                  >
                    <div class="authr_meta">
                      <img src="img/courses/author1.png" alt="" />
                      <span class="d-inline-block ml-2">Cameron</span>
                    </div>
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> PORTFOLIO:<i class="ti-user mr-2"></i>25 </a>
                      </span>
                      <span class="meta_info"
                        ><a href="#"> PHONE:<i class="ti-heart mr-2"></i>35 </a></span
                      >
                       <span class="meta_info"
                        ><a href="#"> ADDRESS:<i class="ti-heart mr-2"></i>35 </a></span
                      >
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>

    

    <div class="row">
      <div class="col-md-12">
        <br>
        <table class="table table-bordered">
          <thead class="table-dark" style="color: #4FBD8A">
            <tr>
              <th>No</th>
              <th>Profile</th>
              <th>Name</th>
              <th>Email</th>
              <th>CV</th>
              <th>Portfolio</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp
            @foreach ($teacherlists as $teacherlist)
            <tr>
            
              <td>{{$i++}}</td>
              <td><img src="{{$teacherlist->user->profile}}" width="150px" height="150px"></td>
              <td>{{$teacherlist->user->name}}</td>
              <td>{{$teacherlist->user->email}}</td>
              <td>{{$teacherlist->cv}}</td> 
              <td><a href="{{$teacherlist->porfolio}}" target="_blank">{{$teacherlist->porfolio}}</a></td>
              <td>{{$teacherlist->user->phone}}</td>
              <td>{{$teacherlist->user->address}}</td>
              <td><a href="{{-- {{route('items.show',$item->id)}} --}}" class="btn btn-info mx-2 mb-3">Detail</a>
               {{--  <a href="{{route('accept',$teacherlist->id)}}" class="btn btn-info mx-2 mb-3">Accept</a> --}}
                <form action="{{route('teacher.destroy',$teacherlist->id)}}" method="POST" class="d-inline-block"><br>
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-danger  mt-2" value="Delete">
                </form>


                </td>
            </tr>
            @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection