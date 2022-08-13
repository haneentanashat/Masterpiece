@extends('layout.main')
@section('title')
Login page
@endsection
@section('content')
<!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }
  
      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>
  
    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-5 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5">Sign in now</h2>
              <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                
  
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email" id="form3Example3" class="form-control" name="email" />
                  
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                 <label class="form-label" for="form3Example4">Password</label> 
                 <input type="password" id="form3Example4" class="form-control" name="password" />
                </div>
  
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Sign in
                </button>
              </form>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="https://stylecurator.com.au/wp-content/uploads/2014/10/Timber-beads-on-coffee-table.jpg" class="w-100 rounded-4 shadow-4"
            alt="" style="height: 500px"/>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->
  @endsection
