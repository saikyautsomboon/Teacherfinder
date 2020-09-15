@extends('Backend.backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Students List</h1>
    		
  		</div>
  	</div>
    
    <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered text-center">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					<th>Name</th>
    					<th>Email</th>
    					<th>Profile</th>
    					<th>Phone</th>
                        <th>Address</th>

    				</tr>
    			</thead>
    			<tbody>
    				@php $i=1; @endphp
    				@foreach($students as $student)
    				<tr>
    					<td>{{$i++}}</td>
    					<td>{{$student->name}}</td>
    					<td>{{$student->email}}</td>
    					<td>{{$student->profile}}</td>
                        <td>{{$student->phone}}</td>
                        <td>{{$student->address}}</td>
    					
    				</tr>
    				@endforeach
    			</tbody>
    		</table>
    	</div>
    </div>

 	</div>
@endsection