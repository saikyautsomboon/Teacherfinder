
@extends('Frontend.master') 
@section('content')
  <!-- Subcategory Title -->
  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container mt-5">
        <h1 class="text-center">Register Teacher Account </h1>
      </div>
  </div>
  
  <!-- Content -->
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-8">
        <form action="{{route('tregister.store') }}" method="POST" enctype="multipart/form-data">
          @csrf 
                      <div class="form-row">
                         <div class="col-md-12">
                          <label class="small mb-1" for="inputEmailAddress">Date Of Birth</label>
                           <input class="form-control py-4 @error('phone') is-invalid @enderror" name="dob" value="{{-- {{ old('phone') }} --}}" id="dob" type="date" />
                            @error('dob')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                    
                     <div class="form-row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label class="small mb-1" for="inputPhone"> Porfolio </label>
                            <input class="form-control-file py-4 @error('porfolio') is-invalid @enderror input_photo" name="porfolio" value="{{-- {{ old('photo') }} --}}" id="porfolio" type="text" placeholder="Enter Your Porfoilo Link" />

                            @error('porfolio')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label class="small mb-1" for="inputPhone"> CV Form </label>
                            <input class="form-control-file py-4 @error('cv') is-invalid @enderror" name="cv" value="{{-- {{ old('photo') }} --}}" id="inputcv" type="file" placeholder="CV" />

                            @error('cv')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                           <img src="" class="img-fluid show_photo d-inline-block" >
                        </div>
                      </div>
                          
                    
                    </div>

                   {{-- <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="inputPassword">Experience Year</label>
                              <input class="form-control py-4 @error('experience') is-invalid @enderror" name="experience" id="experience" type="number"  />
                              <font id="error" color="red"></font>

                              @error('experience')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                    </div> --}}
                    
              
              <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                
                <button type="submit" class="btn btn-secondary mainfullbtncolor btn-block"> Create Account </button>
              </div>
          </form>

          <div class=" mt-3 text-center ">
            <a href="#" class="loginLink text-decoration-none">Have an account? Go to login</a>
          </div>
      </div>
    </div>

  </div>
@endsection

