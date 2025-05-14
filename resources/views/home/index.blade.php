<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Mental health appointment system - Schedule with professional psychologists and psychiatrists">

  <link rel="icon" href="{{ asset('assets/img/logo (2).png') }}" type="image/webp">
  <title>Mental Care</title>
  <link rel="stylesheet" href="{{ asset('assets/css/maicons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  @include('home.header')

  @if (session()->has('message'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">X</button>
    {{ session()->get('message') }}
  </div>
    
  @endif

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.webp);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Take the First Step to </span>
        <h1 class="display-4">Mental Wellness</h1>
        <a href="#appointment" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-2 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <!-- Service 1: Schedule Consultation -->
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="far fa-calendar-check me-2"></span>
              </div>
              <p><span>Schedule</span> Your Consultation</p>
            </div>
          </div>

          <!-- Service 2: Mental Health Assessment -->
          <div class="col-md-2 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-success text-white">
                <span class="mai-clipboard-outline"></span>
              </div>
              <p><span>Mental Health</span> Self-Test</p>
            </div>
          </div>
          
        </div>
      </div>
    </div>
</div>


    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Your Mental <br> Center</h1>
            <p class="text-grey mb-2">Mental Care is a platform that connects individuals with mental health professionals. We provide easy access to consultations and therapies, helping everyone get the support they need for better mental well-being.</p>  
            <p class="text-grey mb-4">With Mental Care, you are not alone.</p>
            <a href="{{ route('about') }}" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight d-none d-lg-block" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="psikiatry" style="height: 420px; width: auto; object-fit: contain;">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

@include('home.news')
@include('home.appointment')
@include('home.footer')

<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/theme.js"></script>
  
</body>
</html>