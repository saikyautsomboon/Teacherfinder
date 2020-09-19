@extends('Backend.backendtemplate')

@section('content')
	<div class="container">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Subjects List</h1>
            <a href="{{route('subjects.create')}}" class="btn btn-info float-right">Add New</a>
    		
  		</div>
  	</div>
    
    <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered text-center">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					<th>Name</th>
                        <th>Description</th>
                        <th>Photo</th>
    					<th>Actions</th>
    					

    				</tr>
    			</thead>
    			<tbody>
    				@php $i=1; @endphp
    				@foreach($subjects as $subject)
    				<tr>
    					<td>{{$i++}}</td>
    					<td>{{$subject->name}}</td>
                        <td>{{$subject->description}}</td>
                        <td><img src="{{asset($subject->photo)}}" width="100" height="100"></td>
                        <td >
                            
                                
                                
                            <a href="{{route('subjects.edit',$subject->id)}}" class="btn btn-success ml-5">Edit
</a>
                            <!-- delete function ko write yin form ko use y a tal -->
                            
                                <br><br><br>
                           <form action="{{route('subjects.destroy',$subject->id)}}" method="POST" class="d-inline-block">
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