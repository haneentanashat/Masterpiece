<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/icons/ref2.png" rel="icon">

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
    <link href={{ asset("lib/animate/animate.min.css")}} rel="stylesheet">
    <link href={{ asset("lib/owlcarousel/assets/owl.carousel.min.css")}}  rel="stylesheet">
    <link href={{ asset("lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css")}}  rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href={{ asset("css/bootstrap.min.css")}}  rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href={{ asset("css/style.css")}}  rel="stylesheet">
    @yield('style')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status">
        </div>
        <img class="position-absolute top-50 start-50 translate-middle" src="img/icons/ref2.png" alt="Icon">
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="/index" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0" style="text-transform:uppercase;">élégant</h1>
        </a>
       
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/index" class="nav-item nav-link ">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/service" class="nav-item nav-link">Services</a>
                <a href="/contact" class="nav-item nav-link">Contact</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                    <div class="dropdown-menu border-0 m-0">
                        <a href="/register" class="dropdown-item">Register</a>
                        <a href="/login" class="dropdown-item">Login</a>
                       
                    </div>
                </div>
            </div>
           
        </div>
    </nav>
    <!-- Navbar End -->



