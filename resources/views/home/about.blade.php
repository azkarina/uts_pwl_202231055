<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="{{ asset('assets/css/maicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logo (2).png') }}" type="image/webp">
</head>
<body>
    @include('home.header')

    <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.webp);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">About Us</h1>
      </div> 
    </div> 
  </div>

  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 ">
          <h1 class="text-center mb-5">Welcome to Your Mental Care</h1>
          <div class="text-lg ">
            <p>Mental health is an important aspect of life that is often overlooked. Mental Care exists as a platform that connects individuals with mental health professionals, providing easy access to consultation and therapy to support everyone's wellbeing.</p>
            <p>Through this website, we want to create a safe, comfortable, and supportive space for anyone who needs help. We believe that everyone deserves the understanding and assistance that they need, so that they can live a calmer and happier life.</p>
            <p>This website was created as part of the project for the Advanced Web Programming course, as well as one of the realizations of Sustainable Development Goal (SDG) 3: Good Health and Well-being, which is to ensure healthy lives and well-being for all people at all ages. By providing easier access to mental health services, we contribute to improving people's quality of life, reducing the stigma associated with mental health, and ensuring individuals get the support they need.</p>
            <p>With Mental Care, you are not alone.</p>
        
        
        </div>
        </div>
        
      </div>
    </div>
  </div>

  @include('home.footer')
</body>