@extends('Backend.backendtemplate')

@section('content')
	<div class="container">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Subject Insert Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('subjects.store')}}" method="post" enctype="multipart/form-data">
			      @csrf
			      
			      
			      
			      
			      <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
			        <label for="name" class="col-sm-2 col-form-label">Name</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="name" name="name">
			          <span class="text-danger">{{ $errors->first('name') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('description') ? 'has-error' : '' }}">
			        <label for="description" class="col-sm-2 col-form-label">Description</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="description" name="description">
			          <span class="text-danger">{{ $errors->first('description') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
			        <label for="photo" class="col-sm-2 col-form-label">Photo</label>
			        <div class="col-sm-5">
			          <input type="file" class="form-control" id="photo" name="photo">
			          <span class="text-danger">{{ $errors->first('photo') }}</span>
			        </div>
			      </div>
			      
			      
			      
			      
			     
			      <div class="form-group row">
			        <div class="col-sm-5">
			          <input type="submit" class="btn btn-primary" name="btnsubmit" value="Insert New Subject">
			        </div>
			      </div>
			    </form>
      	</div>
      </div>
    </div>
 	</div>
@endsection