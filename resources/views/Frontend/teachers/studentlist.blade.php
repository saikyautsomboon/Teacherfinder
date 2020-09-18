@extends('Frontend.teachers.master')
@section('content')

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0" > Student  Lists</h1>
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
              <th>Address</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
           {{--  @php $i=1; @endphp
            @foreach ($user as $users)
            <tr>
            
              <td>{{$i++}}</td>
              <td><img src="{{$users->profile}}" width="150px" height="150px"></td>
              <td>{{$users->name}}</td>
              <td>{{$users->email}}</td>
              <td>{{$users->phone}}</td>
              <td>{{$users->address}}</td>
              <td>  --}}


               {{--  <form action="{{route('teacher.destroy',$teacherlist->id)}}" method="POST" class="d-inline-block"><br>
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-danger  mt-2" value="Delete">
                {{ </form> --}}


               {{--  </td>
            </tr>
            @endforeach  --}} 

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection