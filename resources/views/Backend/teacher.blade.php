@extends('Backend.backendtemplate')
@section('content')

   <div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Teacher Lists</h1>
  </div>
  <div class="container-fluid">

    

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
            @foreach ($teachers as $teacher)
            <tr>
            
              <td>{{$i++}}</td>
              <td><img src="{{$teacher->user->profile}}" width="150px" height="150px"></td>
              <td>{{$teacher->user->name}}</td>
              <td>{{$teacher->user->email}}</td>
              <td>{{$teacher->cv}}</td> 
              <td><a href="{{$teacher->porfolio}}" target="_blank">{{$teacher->porfolio}}</a></td>
              <td>{{$teacher->user->phone}}</td>
              <td>{{$teacher->user->address}}</td>
              <td><a href="{{-- {{route('items.show',$item->id)}} --}}" class="btn btn-info mx-2 mb-3">Detail</a>
                <a href="{{route('accept',$teacher->id)}}" class="btn btn-info mx-2 mb-3">Accept</a>
                
               {{--  <form action="{{route('teacher.destroy',$teacher->id)}}" method="POST" class="d-inline-block"><br>
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-danger  mt-2" value="Delete">
                </form> --}}


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

