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
<title>Getfiler - Income Tax Filing | NTN Registration | Tax Services</title>
</head>

<body>
@include('navbar')

<hr class="hr3" id="hr3" style="display: none;">
<hr class="hr4" id="hr4" >
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
<div class="container blog-container">
<!-- sidebar-section start here -->
<div class="sidebar-section">
  <input type="text" name="search" class="form-control blogs-search" id="" placeholder="search">

  <div class="card sidebar">
    <div class="card-body">
      <h5 class="category-title">Categories</h5>
      <p class="categories-name">Befiler Revolutionizing the Tax Industry</p> <hr class="categories-name-hr">
      <p class="categories-name">Business Registration guide</p> <hr class="categories-name-hr">
      <p class="categories-name">Learn Sales Tax</p> <hr class="categories-name-hr">
      <p class="categories-name">Pakistan's Tax Affairs</p> <hr class="categories-name-hr">
      <p class="categories-name">Tax Deduction and Credit in Pakistan</p> <hr class="categories-name-hr">
      <p class="categories-name">Tax News and Social Trends</p> <hr class="categories-name-hr">
      <p class="categories-name">Tax Planning in Pakistan</p> <hr class="categories-name-hr">
      <p class="categories-name">Uncategorized</p> <hr class="categories-name-hr">
    </div>
  </div>


  <div class="card sidebar">
    <div class="card-body">
      <h5 class="suggested-post-title">Suggested Blog Posts</h5>
      
      <p class="suggested-post-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</p> <hr class="suggested-post-name-hr">
      <p class="suggested-post-name">Why Should You Form an LLC for Your Amazon or Drop-shipping Business?</p> <hr class="suggested-post-name-hr">
      <p class="suggested-post-name">PSEB Registration: Benefits for Freelancers and Software Houses in Pakistan</p> <hr class="suggested-post-name-hr">
      <p class="suggested-post-name">Befiler Wins Award At PDA 2023</p> <hr class="suggested-post-name-hr">
      <p class="suggested-post-name">Key Highlights From Pakistan’s Annual Federal Budget 2023-2024</p> <hr class="suggested-post-name-hr">
      <p class="suggested-post-name">A Simple Guide to Claiming Income Tax Refunds</p>
        <hr class="suggested-post-name-hr">
      <p class="suggested-post-name">Sindh Sales Tax on Services (Amendment) Act 2021: Key Changes and Impact on Businesses</p> <hr class="suggested-post-name-hr">

      <p class="suggested-post-name">FBR introduces requirements for Companies / AOPs to furnish Ownership Data</p> <hr class="suggested-post-name-hr">
    
        <p class="suggested-post-name">FBR introduces requirements for Companies / AOPs to furnish Ownership Data</p> <hr class="suggested-post-name-hr">
    
    
      <p class="suggested-post-name">LLP vs PLC: Which Business Structure is Right for You in Pakistan?</p>
        <hr class="suggested-post-name-hr">
    
    
      <p class="suggested-post-name">Understanding Implications of Section 7E – Deemed Income on Capital Assets</p> <hr class="suggested-post-name-hr">
    
    </div>
  </div>


</div>
<!-- sidebar-section end her -->

<h2 class="blog-title">Blog Posts</h2>



<!-- load-more-posts start -->
<div id="blog-posts-container">

  <div class="load-more-posts">
    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->



  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->




  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->

  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->



  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->

  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->

  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->
  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->
  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->

  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->

  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->

  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->


  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->


  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->


  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->


  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->


  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->


  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->


  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->



  <!-- load-more-posts start -->
  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->



  <!-- load-more-posts start -->
  <div class="load-more-posts">

    <!-- row start -->
    <div class="row blog-name   blog-content">
      <div class="col-12">
        <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2>
        <p class="posted-date">August 23, 2023 / Gefiler</p>
      </div>
    </div>
    <!-- row end -->


    <!-- row start -->
    <div class="row blog-content2">
      <div class="col-md-5">
        <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae " height="100%" width="100%">
      </div>

      <div class="col-md-7">
        <p class="blog-description">
          Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory.Exports of leather and goods are experiencing a significant surge in the international market, holding promising implications for the people of Pakistan. This upswing presents numerous potential benefits, and we’d like to outline how you can capitalize on this positive trajectory
        </p>
        <p><a href="" class="read-more">Read more</a></p>
      </div>

    </div>

    <!-- row end -->

  </div>
  <!-- load more-post end -->
</div>





<button class="bg-info btn load-btn form-control" id="load-more">Load More Posts</button>


</div>
<!-- contain end here -->




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





<!-- reources file data here -->
<script>

var togg = document.getElementById("togg");
var header = document.getElementsByClassName("blog-title")[0];
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
    var marginTopValue = 30 + navItems.length * 40;
    header.style.marginTop = marginTopValue + "px";
// navItems.style.display="none";
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
var usaservicesid=document.getElementById("usaservicesid");
var taxttoolsid=document.getElementById("taxttoolsid");
var taxttoolsalert = document.getElementById("taxttoolsalert");
var businessid=document.getElementById("businessid");
var hr3 = document.getElementById("hr3");
resourcesid.addEventListener("mouseenter", function() {
if (alertid.style.display = "none" && hr2.style.display === "none") {
    alertid.style.display = "block";
    hr2.style.display = "block";
    taxttoolsalert.style.display="none";
    hr3.style.display="none";
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
if(alertid.style.display = "block"){
  hr2.style.display = "none"; // Hide hr2 on mouseleave
  alertid.style.display = "block";
}
});

salestaxid.addEventListener("mouseenter", function() {
if(alertid.style.display = "block"){
    alertid.style.display = "none";
}
});

usaservicesid.addEventListener("mouseenter", function() {
if(alertid.style.display = "block"){
    alertid.style.display = "none";
}
});
businessid.addEventListener("mouseenter", function() {
    if(alertid.style.display = "block"){
        alertid.style.display = "none";
        hr2.style.display = "none";
    }
});
</script>


<!-- resources file data end here -->

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