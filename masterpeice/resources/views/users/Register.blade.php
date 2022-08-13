@extends('layout.main')
@section('title')
    Register Page
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
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right"
                        style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Sign up now</h2>
                            <form action="{{route('register.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ $message }}
                                </div>
                            @elseif ($message = Session::get('status'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @endif
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                           <label class="form-label" for="form3Example1">First name</label> 
                                           <input type="text" id="form3Example1" class="form-control" name="fname" />
                                           @error('fname')
                                           <div class="alert alert-danger mt-1 mb-1" style="color:crimson">{{ $message }}</div>
                                       @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example2">Last name</label>
                                            <input type="text" id="form3Example2" class="form-control" name="lname"  />
                                            @error('lname')
                        <div class="alert alert-danger mt-1 mb-1" style="color:crimson">{{ $message }}</div>
                    @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                           <label class="form-label" for="form3Example3">Phone Number</label> 
                                           <input type="text" id="form3Example3" class="form-control" name="phone"  />
                                           @error('phone')
                                           <div class="alert alert-danger mt-1 mb-1" style="color:crimson">{{ $message }}</div>
                                       @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                         <label class="form-label" for="form3Example4">Address</label> 
                                           <input type="text" id="form3Example4" class="form-control" name="address" />
                                           @error('address')
                                           <div class="alert alert-danger mt-1 mb-1" style="color:crimson">{{ $message }}</div>
                                       @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- Email input -->
                                <div class="form-outline mb-4 ">
                                  <label class="form-label" for="form3Example5">Email address</label> 
                                   <input type="email" id="form3Example5" class="form-control" name="email" />
                                   @error('email')
                                   <div class="alert alert-danger mt-1 mb-1" style="color:crimson">{{ $message }}</div>
                               @enderror
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-6">
                                    <label class="form-label" for="form3Example6">Password</label>
                                    <input type="password" id="form3Example6" class="form-control" name="password" />
                                    @error('paswword')
                        <div class="alert alert-danger mt-1 mb-1" style="color:crimson">{{ $message }}</div>
                    @enderror
                                </div>
                                <!-- Password input -->
                                <div class="form-outline mb-6">
                                    <label class="form-label" for="form3Example7"> Repeat Password</label>
                                    <input type="password" id="form3Example7" class="form-control" name="password_confirmation" />
                             
                                    @error('password_confirmation')
                                    <div class="alert alert-danger mt-1 mb-1" style="color:crimson">{{ $message }}</div>
                                @enderror
                                </div>
                                 <br><br>
                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-center mb-4">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33"
                                        checked >
                                    <label class="form-check-label" for="form2Example33">
                                        Subscribe to our newsletter
                                    </label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                    Sign up
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="https://stylecurator.com.au/wp-content/uploads/2014/10/Timber-beads-on-coffee-table.jpg" class="w-100 rounded-4 shadow-4"
                        alt="" />
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    
    <!-- Section: Design Block -->
@endsection
