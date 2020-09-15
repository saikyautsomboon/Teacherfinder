@extends('Backend.backendtemplate')

@section('content')
	<div class="container">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Subjects List With Teacher</h1>
            {{-- <a href="{{route('subject_teachers.create')}}" class="btn btn-info float-right">Add New</a> --}}
    		
  		</div>
  	</div>
    
    <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered text-center">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					<th>Subject_Id</th>
                        <th>Teacher_Id</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Pdf</th>
                        <th>Video</th>
    					<th>Actions</th>
    					

    				</tr>
    			</thead>
    			<tbody>
    				@php $i=1; @endphp
    				@foreach($subject_teachers as $subject_teacher)
    				<tr>
    					<td>{{$i++}}</td>
    					<td>{{$subject_teacher->subject_id}}</td>
                        <td>{{$subject_teacher->teacher_id}}</td>
                        <td>{{$subject_teacher->description}}</td>
                        <td>{{$subject_teacher->price}}</td>
                        <td>{{$subject_teacher->pdf}}</td>
                        <td>{{$subject_teacher->video}}</td>
                        <td >
                            
                                
                                
                            <a href="{{route('subject_teachers.edit',$subject->id)}}" class="btn btn-success ml-5">Edit
</a>
                            <!-- delete function ko write yin form ko use y a tal -->
                            
                                <br><br><br>
                           <form action="{{route('subject_teachers.destroy',$subject->id)}}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <!-- delete lote yin method ka post nat ma ya buu dar kout method ko delete so pe change pay ya mal update lo myoe pot -->
                        <button class="btn btn-warning ml-5">Delete</button>
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

 	</div>
@endsection