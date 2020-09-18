@extends('Frontend.teachers.master')
@section('content')

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0" > Student Request Lists</h1>
  </div>
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12">
        <br>
        <table class="table table-bordered">
          <thead class="table-info" >
            <tr>
              <th>No</th>
              <th>Profile</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Subject</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
             @php $i=1; @endphp
            @foreach ($subjectjoins as $subjectjoin)
            <tr>
            
              <td>{{$i++}}</td>
              <td><img src="{{asset($subjectjoin->user->profile)}}" width="100" height="100"></td>
               <td>{{$subjectjoin->user->name}}</td>
              <td>{{$subjectjoin->user->email}}</td>
              <td>{{$subjectjoin->user->phone}}</td>
              <td>{{$subjectjoin->subject->name}}</td>
              <td><a href="{{-- {{route('accept',$teacher->id)}} --}}" class="btn btn-info mx-2 mb-3">Accept</a></td>  
            @endforeach
              {{--  {{ <form action="{{route('teacher.destroy',$teacherlist->id)}}" method="POST" class="d-inline-block"><br>
                  @csrf
                  @method('DELETE') --}} 
                 
                
                {{-- </form> --}}


                {{-- </td>
            </tr>
            @endforeach  --}}

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection