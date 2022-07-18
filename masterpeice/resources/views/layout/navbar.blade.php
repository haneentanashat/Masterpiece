<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/icons/furniture.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    @yield('style')  <meta charset="utf-8">
   
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
   <!-- Navbar Start -->
   <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn"
   data-wow-delay="0.1s">
   <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
       <h1 class="text-primary m-0" style="text-transform:uppercase;">élégant</h1>
   </a>
  
   <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
       <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarCollapse">
       <div class="navbar-nav ms-auto p-4 p-lg-0">
           <a href="index.html" class="nav-item nav-link active">Home</a>
           <a href="about.html" class="nav-item nav-link">About</a>
           <a href="service.html" class="nav-item nav-link">Services</a>
           <a href="/contact" class="nav-item nav-link">Contact</a>
           <div class="nav-item dropdown">
               <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
               <div class="dropdown-menu border-0 m-0">
                   <a href="register.html" class="dropdown-item">Register</a>
                   <a href="login.html" class="dropdown-item">Login</a>
                  
         
 


                {{-- ---------login _register_Profile_logout------

                @if (!Session::has('user_email'))
                    {{-- <a href="{{route('doner')}}" class="nav-item nav-link">Login</a> --}}


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Register</a>
                        <div class="dropdown-menu bg-light m-0">
                            {{-- <a href="{{route('doneredit')}}" class="dropdown-item">Account</a> --}}
                            <a href="{{ route('doner.create') }}" class="dropdown-item">Donor Register</a>
                            <a href="{{ route('patient.create') }}" class="dropdown-item">Patient Register</a>
                        </div>
                    </div>
                    <a href="/login" class="nav-item nav-link ">Login</a>
                @else
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profile</a>
                        <div class="dropdown-menu bg-light m-0">
                            {{-- <a href="{{route('doneredit')}}" class="dropdown-item">Account</a> --}}


                            <div class="nav-item dropdown">

                                <div class="dropdown-menu bg-light m-0 ">
                                    {{-- <a href="{{route('doneredit')}}" class="dropdown-item">Account</a> --}}
                                    <a href="{{ route('login.index') }}" class="dropdown-item">Account</a>
                                    <a href="{{ route('login.create') }}" class="dropdown-item">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif --}}
             

            </div>
        </div>
        {{-- end ---------login _register_Profile_logout------ --}}




        {{-- </div>
            <a href="/login" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get Started<i class="fa fa-arrow-right ms-3"></i></a>
        </div> --}}
    </nav>
    <!-- Navbar End -->
