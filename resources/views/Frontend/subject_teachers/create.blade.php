@extends('Frontend.teachers.master')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Subject Edit Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('subject_teachers.store')}}" method="post" enctype="multipart/form-data">
			      @csrf
			      
			      <div class="col-md-6 mt-auto">
			      	<div class="form-group">
			      		<label class="" for="inputSubject">Subject</label>
			      		<select class="form-control form-control-md @error('subject_id') is-invalid @enderror" id="inputSubject" name="subject_id">
			      			<optgroup label="Choose Subject">
			      				@foreach($subjects as $subject)
			      				<option value="{{$subject->id}}">{{$subject->name}}</option>
			      				@endforeach
			      			</optgroup>
			      		</select>
			      	</div>
			      </div>

			      <div class="form-group row {{ $errors->has('teacher_id') ? 'has-error' : '' }}">
			        <label for="tecid" class="col-sm-2 col-form-label">Teacher_ID</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="tecid" name="tecid" value="{{Auth::user()->id}}" readonly="readonly">
			          <span class="text-danger">{{ $errors->first('teacher_id') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('description') ? 'has-error' : '' }}">
			        <label for="dec" class="col-sm-2 col-form-label">Description</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="dec" name="dec">
			          <span class="text-danger">{{ $errors->first('description') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('price') ? 'has-error' : '' }}">
			        <label for="pric" class="col-sm-2 col-form-label">Price</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="pric" name="pric">
			          <span class="text-danger">{{ $errors->first('price') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('pdf') ? 'has-error' : '' }}">
			        <label for="pdf" class="col-sm-2 col-form-label">PDF</label>
			        <div class="col-sm-5">
			          <input type="file" class="form-control" id="pdf" name="pdf">
			          <span class="text-danger">{{ $errors->first('pdf') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('video') ? 'has-error' : '' }}">
			        <label for="video" class="col-sm-2 col-form-label">Video</label>
			        <div class="col-sm-5">
			          <input type="file" class="form-control" id="video" name="video">
			          <span class="text-danger">{{ $errors->first('video') }}</span>
			        </div>
			      </div>

			      
			      
			     
			      <div class="form-group row">
			        <div class="col-sm-5">
			          <input type="submit" class="btn btn-primary" name="btnsubmit" value="Create New Subject">
			        </div>
			      </div>
			    </form>
      	</div>
      </div>
    </div>
 	</div>
@endsection