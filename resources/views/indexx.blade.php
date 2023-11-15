<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--============== booot5 =============-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- font awesom -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


  <!-- _____ Slick Slider _____ -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">

  <!-- boot -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- css -->
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="horizontalslider.css">

  <style>
    .scroll-container {
      width: auto;
      /* height: 200px; */
      overflow-y: hidden;
      /* Hide the vertical scrollbar initially */
      overflow-x: hidden;
      /* This hides the horizontal scrollbar */
      position: relative;
      /* Add position relative for absolute button positioning */
      /* display: grid; */
      max-height: 18.5rem;
      gap: 1rem;

    }

    ul {
      list-style: none;
      padding: 0;
      transition: transform 0.3s ease;
      /* Add smooth transition for li elements */
    }


    .clickbutton {
      opacity: .8;
      height: 32px;
      width: 32px;
      padding: 2px;
      background: linear-gradient(0deg, #e41e26 0%, #f26e55 100%);
      border: 1px solid transparent;
      border-radius: 50%;
      box-shadow: 0 1px 1px 0 #000;
      color: #b00e0e;
      position: relative !important;
    }

    .clickbutton:hover {

      background: linear-gradient(0deg, #e73232, #ad4336);
      color: white;
      height: 32px;
      width: 32px;
      padding: 2px;
    }
  </style>
<link rel="icon" href="{{asset('logotitle3.jpg')}}" >
  <title>786tax - Income Tax Filing | NTN Registration | Tax Services</title>
</head>

<body>
  <div class="container px-1" id="statusid">
    <div class="alert status  " role="alert">
      <div class="status-content">
        <!-- <img src="{{asset('images/investomate.png')}}" class="investomate" alt="investomate">
        <a href="#" class="fw-bold">Investomate</a> -->
        <!-- <img src="{{asset('images/asanhisab.png')}}" class="asanhisab" alt="asanhisab">
        <a href="#" class="fw-bold">AsaanHisab</a> -->
        <img src="{{asset('logotitle.jpeg')}}" alt="" height="55" width="150">
      </div>

    </div>
  </div>
  
  <hr class="hr1">
  <!-- navbar start -->
<div class="container">
  <nav class="navbar navbar-expand-lg py-4">

    <a class="navbar-brand " href="#"><img src="{{asset('images/logo.jpeg')}}" class="logo" alt="logo" style="margin-left: 70px;"></a>
    <button class="navbar-toggler " style="box-shadow: none;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon " id="togg"><i class="fa-solid fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" style="margin-top:-10px; margin-left:-42px">
      <ul class="navbar-nav  offset-1" style="margin-top: 15px;">
        <li class="nav-item" id="taxttoolsid">
          <a class="fw-bold nav-link  px-0 px-md-3 active" aria-current="page" href="#">TAX TOOLS</a>
        </li>
        <li class="nav-item">
          <a class="fw-bold nav-link main__menu px-0 px-md-3 resourcesid" id="resourcesid" href="#">RESOURCES</a>
        </li>




        <li class="nav-item" id="businessid">
          <a class="fw-bold nav-link main__menu px-0 px-md-3" href="#">BUSINESS SERVICESS</a>
        </li>
        <li class="nav-item">
          <a class="fw-bold nav-link main__menu px-0 px-md-3" href="#" id="salestaxid">SALES TAX</a>
        </li>

        <li class="nav-item" id="usaservicesid">
          <a class="fw-bold nav-link main__menu px-0 px-md-3 " href="#"><img src="{{asset('images/usa-flag1.png')}}" class="usa-flag" alt="logo"> <span class="usa">USA SERVICESS</span></a>
        </li>



        <li class="nav-item px-0 px-md-3">
          <button class="btn  w-100 sign-up">Sign up</button>

          <button class="btn  signin px-0 w-100"> <i class=" fa-solid fa-lock"></i> Sign in</button>
        </li>
      </ul>

    </div>
  </nav>
  </div>

  <!-- navbar end  -->

  <hr class="hr3" id="hr3" style="display: none;">
  
  <div class="alert al3  text-center" id="taxttoolsalert" role="alert">
    <ul class="d-flex justify-content-center mx-5" style="list-style-type: none;">
      <li class=" px-0 px-md-0">
        <a href="calculator" class="hoverimageslink">
          <img src="{{asset('images/hoverimages/calculator.png')}}" onmouseleave="calculatorhoveronmouseleave()" onmouseenter="calculatorhoveronmouseenter()" class="playimage mx-5" id="calculator" alt="calculator">
          <p><b>Calculator</b></p>
        </a>
      </li>

      <li class=" px-0 px-md-4">
        <a href="ntnstatus" class="hoverimageslink">
          <img src="{{asset('images/hoverimages/ntn.png')}}" onmouseleave="ntnhoveronmouseleave()" onmouseenter="ntnhoveronmouseenter()" class="blogimage mx-1 " id="ntn" alt="ntn">
          <p><b>NTN Status</b></p>
        </a>
      </li>

      <li class=" px-0 px-md-4">
        <a href="atlstatus" class="hoverimageslink">
          <img src="{{asset('images/hoverimages/atl.png')}}" onmouseleave="atlhoveronmouseleave()" onmouseenter="atlhoveronmouseenter()" class="blogimage mx-1" id="atl" alt="ntn">
          <p><b class="">ATL Status</b></p>
        </a>
      </li>

      <li class=" px-0 px-md-4">
        <a href="faqstatus" class="hoverimageslink">
          <img src="{{asset('images/hoverimages/faq.png')}}" onmouseleave="faqhoveronmouseleave()" onmouseenter="faqhoveronmouseenter()" class="blogimage mx-1" id="faq" alt="ntn">
          <p><b>FAQ</b></p>
        </a>
      </li>


      <li class=" px-0 px-md-4">
        <a href="contactstatus" class="hoverimageslink">
          <img src="{{asset('images/hoverimages/contact.png')}}" onmouseleave="conacthoveronmouseleave()" onmouseenter="conacthoveronmouseenter()" class="blogimage mx-1" id="contact" alt="contact">
          <p><b>Conatct Us</b></p>
        </a>
      </li>
    </ul>
  </div>

  <!-- resources data here -->

  <hr class="hr2">

  <div class="alert al " id="alertid" role="alert">

    <ul class="d-flex justify-content-center mx-5" style="list-style-type: none;">
      <li class="">
        <a href="videos" class="hoverimageslink">
          <img src="{{asset('images/hoverimages/play.png')}}" onmouseleave="playhoveronmouseleave()" onmouseenter="playhoveronmouseenter()" class="playimage mx-1" id="playimage" alt="play">
          <p><b>Videos</b></p>
        </a>
      </li>

      <li class="mx-4">
      <a href="blogs" class="hoverimageslink">
          <img src="{{asset('images/hoverimages/blog.png')}}" onmouseleave="bloghoveronmouseleave()" onmouseenter="bloghoveronmouseenter()" class="blogimage mx-0" id="blogimage" alt="blog">
          <p><b>Blogs</b></p>
        </a>
      </li>
    </ul>


  </div>

  <hr class="hr2" id="hr2" style="display: none;">


  <!-- header star -->

  <div class="alert  header " role="alert">
<div class="container ">
    <div class="row ">

      <div class="col-12 col-sm-12 col-md-12 px-0 col-lg-8  col-xl-8">
        
        <div class="header-content mt-md-5  mx-md-3 px-1   my-sm-5 ">
          <p class="header-title ">Your Tax and Legal Partner, 786tax</p>
          <div class="header-description ">Going beyond NTN and Income Tax Filing</div>
          <p class="header-text">786tax now provides 360 solutions to all your Business needs, including Business Incorporation and Trademark Registration in Pakistan and USA.</p>

          <button class="btn welcome-btn   mt-3">
          CLICK TO START SERVICES
          </button>

        </div>
      </div>

      <div class="col-12  col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">
        
        <img src="{{asset('images/maincontentimages/calculator4.jpg')}}" class="img-fluid girlimage ">
      </div>
    </div>
  </div>
  </div>
  <!-- content start here -->

  <div class="container main-content">
    <div class="row">
      <div class="col-md-3 col-6 col-sm-6">
        <div class="card mt-4 content-card border-0">
          <img src="{{asset('images/maincontentimages/startup.png')}}" class="card-img-top mx-auto d-block star" alt="...">
          <div class="card-body content-card-body text-center">
            <h6 class="card-title content-card-title fw-bold">Won 2021 Startup</h6>
            <p class="card-text content-card-text">of the year award, from PDA Pakistan Digital Awards</p>

          </div>
        </div>
      </div>

      <div class="col-md-3 col-6 col-sm-6">
        <div class="card mt-4 content-card border-0">
          <img src="{{asset('images/maincontentimages/star.png')}}" class="card-img-top mx-auto d-block star" alt="...">
          <div class="card-body content-card-body text-center">
            <h6 class="card-title content-card-title fw-bold">Rated 4.6 Stars</h6>
            <p class="card-text content-card-text">12,000+ reviews by satisfied customers</p>

          </div>
        </div>
      </div>

      <div class="col-md-3 col-6 col-sm-6">
        <div class="card mt-4 content-card border-0">
          <img src="{{asset('images/maincontentimages/provider.png')}}" class="card-img-top mx-auto d-block star" alt="...">
          <div class="card-body content-card-body text-center">
            <h6 class="card-title content-card-title fw-bold">Online E-file Provider</h6>
            <p class="card-text content-card-text">who has completed sandbox testing with FBR-IRIS</p>

          </div>
        </div>
      </div>

      <div class="col-md-3 col-6 col-sm-6">
        <div class="card mt-4 content-card border-0">
          <img src="{{asset('images/maincontentimages/secure.png')}}" class="card-img-top mx-auto d-block star" alt="...">
          <div class="card-body content-card-body text-center">
            <h6 class="card-title content-card-title fw-bold">Safe & Secure</h6>
            <p class="card-text content-card-text">your information is private and secure on our site</p>

          </div>
        </div>
      </div>
    </div>

    <!-- app icons heading start -->
    <div class="row mt-5">
      <div class="col-md-12">
        <h2 class="text-center app-title">Our Partners & Collaborators</h2>
      </div>
    </div>

    <!-- app icons start -->
    <div class="row mt-5 mx-2 mx-md-0 mx-lg-0 mx-xl-0 mx-sm-0">
      <div class="col">
        <img src="{{asset('images/maincontentimages/engro.png')}}" class="appicons appiconssetting" />
      </div>

      <div class="col">
        <img src="{{asset('images/maincontentimages/moon.png')}}" class="appicons appiconssetting" />
      </div>

      <div class="col">
        <img src="{{asset('images/maincontentimages/ubl.png')}}" class="appicons appiconssetting" />
      </div>

      <div class="col">
        <img src="{{asset('images/maincontentimages/kcci.png')}}" class="appicons appiconssetting" />
      </div>

      <div class="col">
        <img src="{{asset('images/maincontentimages/peb.png')}}" class="appicons appiconssetting" />
      </div>

      <div class="col">
        <img src="{{asset('images/maincontentimages/telenor.png')}}" class="appicons appiconssetting" />
      </div>

      <div class="col">
        <img src="{{asset('images/maincontentimages/js.png')}}" class="appicons appiconssetting" />
      </div>
    </div>


    <!-- 2nd icons row start -->
    <div class="row mt-md-5  mx-2 mx-md-0 mx-lg-0 mx-xl-0 mx-sm-0 mb-5">
      <div class="col">
        <img src="{{asset('images/maincontentimages/acca.png')}}" class="appicons appiconssetting " />
      </div>

      <div class="col">
        <img src="{{asset('images/maincontentimages/meezan.png')}}" class="appicons appiconssetting" />
      </div>

      <div class="col">
        <img src="{{asset('images/maincontentimages/secp.png')}}" class="appicons appiconssetting" />
      </div>

      <div class="col">
        <img src="{{asset('images/maincontentimages/pasha.png')}}" class="appicons appiconssetting" />
      </div>

      <div class="col">
        <img src="{{asset('images/maincontentimages/ncc.png')}}" class="appicons appiconssetting" />
      </div>

      <div class="col">
        <img src="{{asset('images/maincontentimages/hbl.png')}}" class="appicons appiconssetting" />
      </div>

      <div class="col">
        <img src="{{asset('images/maincontentimages/aws.png')}}" class="appicons appiconssetting" />
      </div>
    </div>
  </div>
  <!-- app-content start -->
  <div class="container-fluid app-content">
    <div class="container">

      <!-- <div class="row ">

        <div class="col-lg-4 ">
          <img src="{{asset('images/maincontentimages/mobile.png')}}" class="app-content-image mt-4" />
        </div>

        <div class="col-lg-8 col-md-12">
          <div class="mobile-text">
            Say hello to the app that made everything even more convenient
            <p><span class="one">1</span> <span class="mobile-description">million app downloads by Pakistani's</span></p>
            <li style="list-style-type: none;"><img src="{{asset('images/maincontentimages/googleplay.png')}}" class="googleplay  mt-4" />
              <img src="{{asset('images/maincontentimages/appstore.png')}}" class="appstore  mt-4" />
            </li>
          </div>
        </div>

      </div> -->
    </div>
  </div>
  <!-- app-content end -->
  <div class="container ">
    <p class="horizontal-slider-title">Popular Products</p>

    <!-- horizontal slider start here -->
    <div class="slider horizontal-slider">

      <div class="card horizontal-slider-card">
        <div class="card-body horizontal-slider-card-body">
          <h5 class="card-title horizontal-slider-card-title">Individual NTN Registration</h5>
          <p class="card-text horizontal-slider-card-description">
            Just register your Individual NTN in 3 simple steps. Register, Upload, Pay.
          </p>
          <a href="#" class="btn horizontal-slider-card-btn">Click here to start now</a>
        </div>
      </div>

      <div class="card horizontal-slider-card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title horizontal-slider-card-title">Tax Filing</h5>
          <p class="card-text horizontal-slider-card-description">
            No appointments, no documents, File your taxes within minutes.
          </p>
          <a href="#" class="btn horizontal-slider-card-btn">Click here to start now</a>
        </div>
      </div>

      <div class="card horizontal-slider-card" style="width: 18rem;">
        <div class="card-body horizontal-slider-card-body">
          <h5 class="card-title horizontal-slider-card-title">Business NTN Registration</h5>
          <p class="card-text horizontal-slider-card-description">
            The simplest and quickest way to start your business in pakistan.
          </p>
          <a href="#" class="btn horizontal-slider-card-btn">Click here to start now</a>
        </div>
      </div>


      <div class="card horizontal-slider-card" style="width: 18rem;">
        <div class="card-body horizontal-slider-card-body">
          <h5 class="card-title horizontal-slider-card-title">Sales Tax Registration</h5>
          <p class="card-text horizontal-slider-card-description">
            GST Registration was never this easy, Register your sales tax with 786tax Now.
          </p>
          <a href="#" class="btn horizontal-slider-card-btn">Click here to start now</a>
        </div>
      </div>





      <div class="card horizontal-slider-card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title horizontal-slider-card-title">Business Tax Filing</h5>
          <p class="card-text horizontal-slider-card-description">
            Stop worrying about your taxes, 786tax team of experts got you covered.
          </p>
          <a href="#" class="btn horizontal-slider-card-btn">Click here to start now</a>
        </div>
      </div>





    </div>
    <!-- horizontal slider end here -->
  </div>






  <div class="container-fluid mt-4  vertical-slider">
    <div class="container">

      <!-- row start -->
      <div class="row">
        <div class="col-12 ">
          <p class="vertical-slider-title text-center">What people has to say about us</p>
        </div>
      </div>
      <!-- rown end -->

      <!-- row start -->
      <div class="row ">

        <div class="col-12 col-lg-6">
          <!-- <img src="{{asset('images/maincontentimages/laptop.png')}}" class=" laptop-image" /> -->
          <img src="{{asset('images/maincontentimages/calculator4.jpg')}}" class="laptop-image " style="border-radius: 50px;">
        </div>

        <div class="col-12 col-sm-12  col-md-12 col-lg-6 px-md-5 verticalbuttons">
          <div class="verticalbuttontop text-center">
            <button id="nextButton" class="clickbutton"><i class="fa-sharp fa-solid fa-chevron-up"></i></button>
          </div>
          <div class="scroll-container">

            <ul>
              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>


              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>

              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>

              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>

              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>

              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>

              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>

              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>

              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>

              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>

              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>
            </ul>
          </div>

          <div class="verticalbuttonbottom text-center">
            <button id="prevButton" class=" clickbutton"><i class="fa-sharp fa-solid fa-chevron-down"></i></button>
          </div>

        </div>
      </div>
      <!-- row end -->
      <!-- vertical slider end -->

    </div>
  </div>
  <!-- slider fluid end -->


  <div class="container-fluid">
    <div class="container">
      <!-- row start -->
      <div class="row team mt-5">
        <div class="col-12 ">
          <p class="team-title text-center">Team of more than 100 talented and qualified is available for your support</p>
        </div>
      </div>
      <!-- row end -->

      <!-- row start -->
      <div class="row ">
        <div class="col-12">
          <img src="{{asset('images/maincontentimages/teamimage.png')}}" class="img-fluid team-image ">
        </div>
      </div>
      <!-- row end -->

      <!-- row start -->
      <div class="row featured-videos mt-4">
        <div class="col-12">
          <p class="feature-videos-title">Featured Videos</p>
        </div>
      </div>
      <!-- row end -->

      <!-- row start -->




      <!-- videos start -->
      <div class="row ps-md-0 ps-lg-0 ps-xl-0 featured-videos">

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card video-card">
            <iframe class="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/sX7cs8WqMzU?si=f0eFLWrdJacK2kBJ" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body video-card-body">
              <p class="video-card-title">Tax Filing, NTN Registration, Business Registration with 786tax</p>
              <p class="video-card-description">786tax is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card video-card">
            <iframe class="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/sX7cs8WqMzU?si=f0eFLWrdJacK2kBJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body video-card-body">
              <p class="video-card-title">Tax Filing, NTN Registration, Business Registration with 786tax</p>
              <p class="video-card-description">786tax is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card video-card">
            <iframe class="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/sX7cs8WqMzU?si=f0eFLWrdJacK2kBJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body video-card-body">
              <p class="video-card-title">Tax Filing, NTN Registration, Business Registration with 786tax</p>
              <p class="video-card-description">786tax is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
            </div>
          </div>
        </div>


        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card video-card">
            <iframe class="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/sX7cs8WqMzU?si=f0eFLWrdJacK2kBJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body video-card-body">
              <p class="video-card-title">Tax Filing, NTN Registration, Business Registration with 786tax</p>
              <p class="video-card-description">786tax is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>


  <div class="container-fluid">
    <div class="container">
      <!-- rescent blogs start -->

      <div class="row recentblogs">
        <div class="col-12">
          <p class="recent-blog-title">Recent Blogs</p>
        </div>
      </div>


      <div class="row">

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card recentblogs-card">
            <a href="" class="text-decoration-none text-dark" target="_blank">
              <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-image " height="100%" width="100%">
              <div class="card-body recentblogs-card-body">
                <p class="recentblogs-card-title">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</p>
                <p class="card-text recentblogs-card-description">
                  Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory. As indicated by the Pakistan Bureau of Statistics (PBS), Pakistan’s exports of leather and […]
                </p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card recentblogs-card">
            <img src="{{asset('images/recentblogimages/blogimage2.jpg')}}" class="recentblog-image " height="100%" width="100%">
            <div class="card-body recentblogs-card-body">
              <p class="recentblogs-card-title">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</p>
              <p class="card-text recentblogs-card-description">
                Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory. As indicated by the Pakistan Bureau of Statistics (PBS), Pakistan’s exports of leather and […]
              </p>
            </div>
          </div>
        </div>


        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card recentblogs-card">
            <img src="{{asset('images/recentblogimages/blogimage3.jpg')}}" class="recentblog-image " height="100%" width="100%">
            <div class="card-body recentblogs-card-body">
              <p class="recentblogs-card-title">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</p>
              <p class="card-text recentblogs-card-description">
                Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory. As indicated by the Pakistan Bureau of Statistics (PBS), Pakistan’s exports of leather and […]
              </p>
            </div>
          </div>
        </div>


        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card recentblogs-card">
            <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-image " height="100%" width="100%">
            <div class="card-body recentblogs-card-body">
              <p class="recentblogs-card-title">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</p>
              <p class="card-text recentblogs-card-description">
                Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory. As indicated by the Pakistan Bureau of Statistics (PBS), Pakistan’s exports of leather and […]
              </p>
            </div>
          </div>
        </div>


        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card recentblogs-card">
            <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-image " height="100%" width="100%">
            <div class="card-body recentblogs-card-body">
              <p class="recentblogs-card-title">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</p>
              <p class="card-text recentblogs-card-description">
                Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory. As indicated by the Pakistan Bureau of Statistics (PBS), Pakistan’s exports of leather and […]
              </p>
            </div>
          </div>
        </div>


        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card recentblogs-card">
            <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-image " height="100%" width="100%">
            <div class="card-body recentblogs-card-body">
              <p class="recentblogs-card-title">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</p>
              <p class="card-text recentblogs-card-description">
                Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory. As indicated by the Pakistan Bureau of Statistics (PBS), Pakistan’s exports of leather and […]
              </p>
            </div>
          </div>
        </div>


        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card recentblogs-card">
            <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-image " height="100%" width="100%">
            <div class="card-body recentblogs-card-body">
              <p class="recentblogs-card-title">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</p>
              <p class="card-text recentblogs-card-description">
                Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory. As indicated by the Pakistan Bureau of Statistics (PBS), Pakistan’s exports of leather and […]
              </p>
            </div>
          </div>
        </div>


        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card recentblogs-card">
            <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-image " height="100%" width="100%">
            <div class="card-body recentblogs-card-body">
              <p class="recentblogs-card-title">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</p>
              <p class="card-text recentblogs-card-description">
                Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory. As indicated by the Pakistan Bureau of Statistics (PBS), Pakistan’s exports of leather and […]
              </p>
            </div>
          </div>
        </div>

      </div>



    </div>
  </div>
  <!--  fluid end -->

  
  <footer>
        @include('footer') <!-- Include the footer -->
    </footer>



    <script>
      const container = document.querySelector('.scroll-container');
      const prevButton = document.getElementById('prevButton');
      const nextButton = document.getElementById('nextButton');
      const liElements = container.querySelectorAll('li');
      let currentIndex = 0;
      const itemsPerClick = 3;

      // Add click event listeners for the buttons
      prevButton.addEventListener('click', () => {
        currentIndex = Math.max(currentIndex - itemsPerClick, 0);
        updateVisibleItems();
      });

      nextButton.addEventListener('click', () => {
        currentIndex = Math.min(currentIndex + itemsPerClick, liElements.length - itemsPerClick);
        updateVisibleItems();
      });

      // Function to update the visible items
      function updateVisibleItems() {
        const translateY = -currentIndex * liElements[0].offsetHeight;
        container.querySelector('ul').style.transform = `translateY(${translateY}px)`;
      }
    </script>


    <!-- ___________ Slick Slider ______________ -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script>
      $('.slider').slick({
        centerMode: false,
        dots: true,
        // autoplay: true,
        infinite: false,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [{
          breakpoint: 768,
          settings: {
            arrows: true,

            
            centerPadding: '40px',

            slidesToShow: 1
          },
        }]


      });
    </script>





    <script src="resource.js"></script>

    <script>
      var taxttoolsid = document.getElementById("taxttoolsid");
      var resourcesid = document.getElementById("resourcesid");
      var taxttoolsalert = document.getElementById("taxttoolsalert");
      var hr3 = document.getElementById("hr3");
      var alertid = document.getElementById("alertid");
      var statusid = document.getElementById("statusid");
      statusid.addEventListener("mouseenter", function() {
      if (taxttoolsalert.style.display = "block") {
          taxttoolsalert.style.display="none";
        hr3.style.display = "none";
        alertid.style.display = "none";
        hr2.style.display = "none";
      }
    });

      taxttoolsid.addEventListener("mouseenter", function() {
        if (taxttoolsalert.style.display = "none") {
          taxttoolsalert.style.display = "block";
          hr3.style.display = "block";
          alertid.style.display = "none";
        }
      });

      taxttoolsid.addEventListener("mouseleave", function() {
        if (taxttoolsalert.style.display = "block") {
          taxttoolsalert.style.display = "block";
          hr3.style.display = "block";
          alertid.style.display = "none";
        }
      });

      taxttoolsalert.addEventListener("mouseleave", function() {
        if (taxttoolsalert.style.display = "block") {
          taxttoolsalert.style.display = "none";
          hr3.style.display = "none";
        }
      });
    </script>



    <script>
      function calculatorhoveronmouseenter() {
        var calculator = document.getElementById("calculator");
        calculator.src = "{{ asset('images/hoverimages/calculatorhover.png') }}";
      }

      function calculatorhoveronmouseleave() {
        var calculator = document.getElementById("calculator");
        calculator.src = "{{ asset('images/hoverimages/calculator.png') }}";
      }

      function ntnhoveronmouseenter() {
        var ntn = document.getElementById("ntn");
        ntn.src = "{{ asset('images/hoverimages/ntnhover.png') }}";
      }

      function ntnhoveronmouseleave() {
        var ntn = document.getElementById("ntn");
        ntn.src = "{{ asset('images/hoverimages/ntn.png') }}";
      }

      function atlhoveronmouseenter() {
        var atl = document.getElementById("atl");
        atl.src = "{{ asset('images/hoverimages/atlhover.png') }}";
      }

      function atlhoveronmouseleave() {
        var atl = document.getElementById("atl");
        atl.src = "{{ asset('images/hoverimages/atl.png') }}";
      }


      function faqhoveronmouseenter() {
        var faq = document.getElementById("faq");
        faq.src = "{{ asset('images/hoverimages/faqhover.png') }}";
      }

      function faqlhoveronmouseleave() {
        var faq = document.getElementById("atl");
        faq.src = "{{ asset('images/hoverimages/faq.png') }}";
      }

      function conacthoveronmouseenter() {
        var conact = document.getElementById("contact");
        contact.src = "{{ asset('images/hoverimages/contacthover.png') }}";
      }

      function conacthoveronmouseleave() {
        var contact = document.getElementById("contact");
        contact.src = "{{ asset('images/hoverimages/contact.png') }}";
      }
    </script>
    <!-- reosurce event -->
    <script>
      function bloghoveronmouseenter() {
        var blogimage = document.getElementById("blogimage");
        var playimage = document.getElementById("playimage");
        blogimage.src = "{{ asset('images/hoverimages/bloghover.png') }}";
      }

      function bloghoveronmouseleave() {
        var blogimage = document.getElementById("blogimage");
        blogimage.src = "{{ asset('images/hoverimages/blog.png') }}";
      }


      function playhoveronmouseenter() {
        var playimage = document.getElementById("playimage");
        playimage.src = "{{ asset('images/hoverimages/playhover.png') }}";
      }

      function playhoveronmouseleave() {
        var playimage = document.getElementById("playimage");
        playimage.src = "{{ asset('images/hoverimages/play.png') }}";
      }
    </script>