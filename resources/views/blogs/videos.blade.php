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
  <link rel="stylesheet" href="cssfolder/statuscss.css">
  <link rel="stylesheet" href="cssfolder/calculatorcss.css">
  <link rel="stylesheet" href="cssfolder/sidebar.css">

  <link rel="icon" href="{{asset('logotitle3.jpg')}}">
  <title>Videos</title>
</head>

<body>
  <div class="container px-1" id="statusid">
    <div class="alert status  " role="alert">
      <div class="status-content">
        <img src="{{asset('images/investomate.png')}}" class="investomate" alt="investomate">
        <a href="#" class="fw-bold">Investomate</a>

        <img src="{{asset('images/asanhisab.png')}}" class="asanhisab" alt="asanhisab">
        <a href="#" class="fw-bold">AsaanHisab</a>
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
  <hr class="hr4" id="hr4">
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
          <img src="{{asset('images/hoverimages/bloghover.png')}}" onmouseleave="bloghoveronmouseleave()" onmouseenter="bloghoveronmouseenter()" class="blogimage mx-0" id="blogimage" alt="blog">
          <p><b>Blogs</b></p>
        </a>
      </li>
    </ul>


  </div>

  <hr class="hr2" id="hr2" style="display: none;">

  <!-- container start -->
  <div class="container container-bottom ">

    <!-- row start -->
    <!-- videos start -->
    <div class="row ps-md-0 ps-lg-0 ps-xl-0 first-row-videos">

      <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xl-3 mt-5">
        <div class="card video-page-card">
          
          <iframe class="iframe" class="video-progress-bar" width="100%" height="100%" src="https://www.youtube.com/embed/cVvT8KFF2Ms?si=Nu2mpjg-WBBKk9_D" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          <div class="card-body video-page-card-body">
            <p class="video-page-card-title">Tax Filing, NTN Registration, Business Registration with Getfiler</p>
            <p class="video-page-card-description">Getfiler is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xl-3 mt-5">
        <div class="card video-page-card">
          <iframe class="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/nKggbgm-tyU?si=B3WzcdgUA-QgZAmq" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          <div class="card-body video-page-card-body">
            <p class="video-page-card-title">Tax Filing, NTN Registration, Business Registration with Getfiler</p>
            <p class="video-page-card-description">Getfiler is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xl-3 mt-5">
        <div class="card video-page-card">
          <iframe class="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/sX7cs8WqMzU?si=f0eFLWrdJacK2kBJ" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          <div class="card-body video-page-card-body">
            <p class="video-page-card-title">Tax Filing, NTN Registration, Business Registration with Getfiler</p>
            <p class="video-page-card-description">Getfiler is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
          </div>
        </div>
      </div>


      <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xl-3 mt-5">
        <div class="card video-page-card">
          <iframe class="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/qCfGsQYINKc?si=hTvK3QjbDvyhKCah" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          <div class="card-body video-page-card-body">
            <p class="video-page-card-title">Tax Filing, NTN Registration, Business Registration with Getfiler</p>
            <p class="video-page-card-description">Getfiler is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
          </div>
        </div>
      </div>



    </div> <!-- row end -->

    <!-- video-page-main-content start here -->
    <div class="video-page-main-content  ">


      <div class="row">
        <div class="col-lg-3 col-6 col-md-6 col-sm-6">
          <h5 class="popular-heading">Popular Videos</h5>
        </div>

        <div class="col-lg-5  d-none d-lg-block">
          <span>Recent</span>
          <span class="mx-2">TAX FILING</span>
          <span>NTN REGISTRATION</span>
        </div>

        <div class="col-lg-4 col-6 col-md-6 col-sm-6 ">
         <div class="input-group">
         <input type="text" class="form-control" placeholder="Search Videos" style="height: 30px;">
          <input type="submit" value="Search" class=" btn-danger">
         </div>
        </div>
      </div>


      <div class="progress " style="height: 5px;">
        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 15%; height: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      </div>


      <!-- row stat -->
      <div class="row ps-md-0 ps-lg-0 ps-xl-0">

        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xl-4 mt-4">
          <div class="card video-page-card ">
            
          <iframe class="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/cVvT8KFF2Ms?si=Nu2mpjg-WBBKk9_D" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body video-page-card-body">
              <p class="video-page-card-title">Tax Filing, NTN Registration, Business Registration with Getfiler</p>
              <p class="video-page-card-description">Getfiler is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
            </div>

           
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xl-4 mt-4">
          <div class="card video-page-card">
            <iframe class="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/nKggbgm-tyU?si=B3WzcdgUA-QgZAmq" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body video-page-card-body">
              <p class="video-page-card-title">Tax Filing, NTN Registration, Business Registration with Getfiler</p>
              <p class="video-page-card-description">Getfiler is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xl -4 mt-4">
          <div class="card video-page-card">
            <iframe class="iframe " width="100%"  height="100%" src="https://www.youtube.com/embed/sX7cs8WqMzU?si=f0eFLWrdJacK2kBJ" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="display: none;" id="iframenone"></iframe>              
              <img src="{{asset('images/maincontentimages/calculator4.jpg')}}" class="img-fluid girlimag " id="imagenone" style="height: 150px;">

            <div class="card-body video-page-card-body">
              <p class="video-page-card-title">Tax Filing, NTN Registration, Business Registration with Getfiler</p>
              <p class="video-page-card-description">Getfiler is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
            </div>
          </div>
        </div>




        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xl-4 mt-4">
          <div class="card video-page-card">
            <iframe class="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/cVvT8KFF2Ms?si=Nu2mpjg-WBBKk9_D" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body video-page-card-body">
              <p class="video-page-card-title">Tax Filing, NTN Registration, Business Registration with Getfiler</p>
              <p class="video-page-card-description">Getfiler is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xl-4 mt-4">
          <div class="card video-page-card">
            <iframe class="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/nKggbgm-tyU?si=B3WzcdgUA-QgZAmq" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body video-page-card-body">
              <p class="video-page-card-title">Tax Filing, NTN Registration, Business Registration with Getfiler</p>
              <p class="video-page-card-description">Getfiler is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xl-4 mt-4">
          <div class="card video-page-card">
            <iframe class="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/sX7cs8WqMzU?si=f0eFLWrdJacK2kBJ" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body video-page-card-body">
              <p class="video-page-card-title">Tax Filing, NTN Registration, Business Registration with Getfiler</p>
              <p class="video-page-card-description">Getfiler is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
            </div>
          </div>
        </div>



        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xl-4 mt-4">
          <div class="card video-page-card">
            <iframe class="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/cVvT8KFF2Ms?si=Nu2mpjg-WBBKk9_D" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body video-page-card-body">
              <p class="video-page-card-title">Tax Filing, NTN Registration, Business Registration with Getfiler</p>
              <p class="video-page-card-description">Getfiler is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xl-4 mt-4">
          <div class="card video-page-card">
            <iframe class="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/nKggbgm-tyU?si=B3WzcdgUA-QgZAmq" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body video-page-card-body">
              <p class="video-page-card-title">Tax Filing, NTN Registration, Business Registration with Getfiler</p>
              <p class="video-page-card-description">Getfiler is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xl-4 mt-4">
          <div class="card video-page-card">
            <iframe class="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/nKggbgm-tyU?si=B3WzcdgUA-QgZAmq" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body video-page-card-body">
              <p class="video-page-card-title">Tax Filing, NTN Registration, Business Registration with Getfiler</p>
              <p class="video-page-card-description">Getfiler is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xl-4 mt-4">
          <div class="card video-page-card">
            <iframe class="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/nKggbgm-tyU?si=B3WzcdgUA-QgZAmq" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body video-page-card-body">
              <p class="video-page-card-title">Tax Filing, NTN Registration, Business Registration with Getfiler</p>
              <p class="video-page-card-description">Getfiler is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xl-4 mt-4">
          <div class="card video-page-card">
            <iframe class="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/nKggbgm-tyU?si=B3WzcdgUA-QgZAmq" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body video-page-card-body">
              <p class="video-page-card-title">Tax Filing, NTN Registration, Business Registration with Getfiler</p>
              <p class="video-page-card-description">Getfiler is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
            </div>
          </div>
        </div>



        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xl-4 mt-4">
          <div class="card video-page-card">
            <iframe class="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/sX7cs8WqMzU?si=f0eFLWrdJacK2kBJ" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body video-page-card-body">
              <p class="video-page-card-title">Tax Filing, NTN Registration, Business Registration with Getfiler</p>
              <p class="video-page-card-description">Getfiler is Pakistan's only online tax solution which all the wealth reconciliation realtime for your easy and provide instant support</p>
            </div>
          </div>
        </div>


      </div> <!-- row end -->

    </div><!-- video page main content end here   -->






    <!-- order-sm-2 order-md-1
order-sm-2 order-md-1 -->
    <!-- top trending start here -->
    <div class="top-trending" >
      <h5 class="top-trending-title">Top Trending</h5>

      <div class="progress " style="height: 5px;">
        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 35%; height: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
        </div>
      </div>

      <!-- top trending videos start here -->
      <div class="top-trending-videos ">
        <!-- row start   -->
        <div class="row mt-3">

        <div class="col-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-2">
            <div class="card" style="height:5rem">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ouk6kW--fA4?si=JuuxM9i9Gxp1uSyD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>


          <div class="col-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-2">
            <p class="top-trending-card-title">A Step-wise Guide to Preparing A Step-wise Guide to Preparing</p>
            <p class="top-trending-card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, debitis, possimus quam qui ipsum obcaecati totam fuga blanditiis, aliquid ullam recusandae dignissimos reprehenderit nemo vitae accusantium veritatis a ducimus tempora.</p>
          </div>

          

          <div class="col-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-2">
            <div class="card" style="height:5rem">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ouk6kW--fA4?si=JuuxM9i9Gxp1uSyD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>



          <div class="col-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-2">
            <p class="top-trending-card-title">A Step-wise Guide to Preparing A Step-wise Guide to Preparing</p>
            <p class="top-trending-card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, debitis, possimus quam qui ipsum obcaecati totam fuga blanditiis, aliquid ullam recusandae dignissimos reprehenderit nemo vitae accusantium veritatis a ducimus tempora.</p>
          </div>

          <div class="col-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-2">
            <div class="card" style="height:5rem">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ouk6kW--fA4?si=JuuxM9i9Gxp1uSyD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>



          <div class="col-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-2">
            <p class="top-trending-card-title">A Step-wise Guide to Preparing A Step-wise Guide to Preparing</p>
            <p class="top-trending-card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, debitis, possimus quam qui ipsum obcaecati totam fuga blanditiis, aliquid ullam recusandae dignissimos reprehenderit nemo vitae accusantium veritatis a ducimus tempora.</p>
          </div>


          <div class="col-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-2">
            <div class="card" style="height:5rem">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ouk6kW--fA4?si=JuuxM9i9Gxp1uSyD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>


          <div class="col-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-2">
            <p class="top-trending-card-title">A Step-wise Guide to Preparing A Step-wise Guide to Preparing</p>
            <p class="top-trending-card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, debitis, possimus quam qui ipsum obcaecati totam fuga blanditiis, aliquid ullam recusandae dignissimos reprehenderit nemo vitae accusantium veritatis a ducimus tempora.</p>
          </div>


          <div class="col-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-2">
            <div class="card" style="height:5rem">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ouk6kW--fA4?si=JuuxM9i9Gxp1uSyD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>



          <div class="col-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-2">
            <p class="top-trending-card-title">A Step-wise Guide to Preparing A Step-wise Guide to Preparing</p>
            <p class="top-trending-card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, debitis, possimus quam qui ipsum obcaecati totam fuga blanditiis, aliquid ullam recusandae dignissimos reprehenderit nemo vitae accusantium veritatis a ducimus tempora.</p>
          </div>



        </div> <!-- row end here -->
        <h4 class="videos-page-category-title mt-5">Videos Category</h4>
        <div class="progress " style="height: 5px;">
        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 15%; height: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
<div class="video-category-btn-area ">

<button class="btn  mx-1 my-2  border video-category-btn rounded-pill">How To ?</button>
<button class="btn  mx-1 my-2  border video-category-btn-fbr rounded-pill">FBR</button>
<button class="btn  mx-1 my-2  border video-category-btn rounded-pill">Tax filing</button>
<button class="btn  mx-1 my-2  border video-category-btn rounded-pill">User Reviews</button>
<button class="btn  mx-1 my-2  border video-category-btn rounded-pill">NTN Registration</button>



</div>
<script>
  // <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" width="560" height="315" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  //   iframe {
  // pointer-events: none;
// }

  var iframes = document.querySelectorAll('iframe');
for (var i = 0; i < iframes.length; i++) {
  iframes[i].style.pointerEvents = 'none';
}
</script>


      </div> <!-- top trending end here -->
      
    </div> <!-- top trending videos end here -->


  </div> <!-- container end here -->



  <footer>
    @include('footer') <!-- Include the footer -->
  </footer>

  <script>
    let loadMoreBtn = document.querySelector('#load-more');
    let blogPostsContainer = document.querySelector('#blog-posts-container');
    let blogPosts = [...document.querySelectorAll('.load-more-posts')];
    let currentItem = 4;

    // Initially, hide all blog posts except the first three
    for (let i = currentItem; i < blogPosts.length; i++) {
      blogPosts[i].style.display = 'none';
    }

    loadMoreBtn.addEventListener('click', () => {
      for (let i = currentItem; i < currentItem + 3 && i < blogPosts.length; i++) {
        blogPosts[i].style.display = 'block';
      }
      currentItem += 3;

      // Hide the "Load More" button when all posts are displayed
      if (currentItem >= blogPosts.length) {
        loadMoreBtn.style.display = 'none';
      }
    });
  </script>




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













  <script>
    // toggle

    // var togg = document.getElementById("togg");
    // var header = document.getElementsByClassName("header")[0];
    // var navItems = document.getElementsByClassName("navbar-nav")[0].getElementsByTagName("li");

    // var isMenuVisible = false; // Track the state of the menu visibility

    // togg.addEventListener("click", function () {
    //     if (isMenuVisible) {
    //         // If the menu is visible, remove the marginTop and reset the state
    //         header.style.marginTop = "0";
    //         isMenuVisible = false;
    //     } else {
    //         // If the menu is not visible, calculate marginTop and set the state
    //         for (var i = 0; i < navItems.length; i++) {
    //             navItems[i].style.cssText = "background-color: white; float: left;";
    //         }
    //         var marginTopValue = 100 + navItems.length * 40; // Adjust this value as needed
    //         header.style.marginTop = marginTopValue + "px";
    //         isMenuVisible = true;
    //     }
    // });

    var togg = document.getElementById("togg");
    var header = document.getElementsByClassName("container-bottom")[0];
    var navItems = document.getElementsByClassName("navbar-nav")[0].getElementsByTagName("li");

    var isMenuVisible = false; // Track the state of the menu visibility

    function toggleMenu() {
      if (isMenuVisible) {
        header.style.marginTop = "0";
        isMenuVisible = false;
      } else {
        for (var i = 0; i < navItems.length; i++) {
          navItems[i].style.cssText = "background-color: white; float: left;";
        }
        var marginTopValue = 100 + navItems.length * 40;
        header.style.marginTop = marginTopValue + "px";
        isMenuVisible = true;
      }
    }

    togg.addEventListener("click", toggleMenu);

    function resetMarginOnResize() {
      if (!isMenuVisible) {
        return; // Do nothing if the menu is not visible
      }

      // Check if the window width is equal to the screen width (maximized)
      if (window.innerWidth === screen.width) {
        header.style.marginTop = "0"; // Remove margin-top when maximized
      } else {
        var marginTopValue = 100 + navItems.length * 40;
        header.style.marginTop = marginTopValue + "px";
      }
    }

    // Listen for window resize events and call the resetMarginOnResize function
    window.addEventListener("resize", resetMarginOnResize);






    var resourcesid = document.getElementById("resourcesid");
    var alertid = document.getElementById("alertid");
    var hr2 = document.getElementById("hr2");
    var salestaxid = document.getElementById("salestaxid");
    var usaservicesid = document.getElementById("usaservicesid");
    var taxttoolsid = document.getElementById("taxttoolsid");
    var taxttoolsalert = document.getElementById("taxttoolsalert");
    var businessid = document.getElementById("businessid");
    var hr3 = document.getElementById("hr3");
    resourcesid.addEventListener("mouseenter", function() {
      if (alertid.style.display = "none" && hr2.style.display === "none") {
        alertid.style.display = "block";
        hr2.style.display = "block";
        taxttoolsalert.style.display = "none";
        hr3.style.display = "none";
      }
    });


    alertid.addEventListener("mouseleave", function() {
      if (alertid.style.display = "block") {
        alertid.style.display = "none";
      }
    });

    alertid.addEventListener("mouseleave", function() {
      if (hr2.style.display = "block") {
        hr2.style.display = "none";
      }
    });


    alertid.addEventListener("mouseenter", function() {
      if (hr2.style.display = "none") {
        hr2.style.display = "block";
      }

    });



    resourcesid.addEventListener("mouseleave", function() {
      if (alertid.style.display = "block") {
        hr2.style.display = "none"; // Hide hr2 on mouseleave
        alertid.style.display = "block";
      }
    });

    salestaxid.addEventListener("mouseenter", function() {
      if (alertid.style.display = "block") {
        alertid.style.display = "none";
      }
    });

    usaservicesid.addEventListener("mouseenter", function() {
      if (alertid.style.display = "block") {
        alertid.style.display = "none";
      }
    });
    businessid.addEventListener("mouseenter", function() {
      if (alertid.style.display = "block") {
        alertid.style.display = "none";
        hr2.style.display = "none";
      }
    });
  </script>
















  <!-- <script src="resource.js"></script> -->

  <script>
    var taxttoolsid = document.getElementById("taxttoolsid");
    var resourcesid = document.getElementById("resourcesid");
    var taxttoolsalert = document.getElementById("taxttoolsalert");
    var hr3 = document.getElementById("hr3");
    var alertid = document.getElementById("alertid");
    var statusid = document.getElementById("statusid");
    statusid.addEventListener("mouseenter", function() {
      if (taxttoolsalert.style.display = "block") {
        taxttoolsalert.style.display = "none";
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


<script>
  var iframenone=document.getElementById("iframenone");
  var imagenone=document.getElementById("imagenone");
imagenone.addEventListener("click",function(){
if(iframenone.style.display="none"){
  iframenone.style.display="block";
  imagenone.style.display="none";
}
});



</script>