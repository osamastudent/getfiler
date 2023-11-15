<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- font awesom -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!-- custom css -->
 <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="horizontalslider.css">
    <link rel="stylesheet" href="cssfolder/statuscss.css">
    <link rel="stylesheet" href="cssfolder/calculatorcss.css">
<link rel="icon" href="{{asset('images/logoicon.jpeg')}}" width="10">
  <title>NTN Status</title>
 
 
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

<hr class="hr1-cal" id="hr3">
  <div class="container  calculatorntnalertcontainer" id="myslide" >
    <div class="alert  calculatorntnalert text-center" id="taxttoolsalert" role="alert">
      <ul class="d-flex calculatorul " style="list-style-type: none;">
        <li class=" spacebetweenli spacebetweenli1">
          <a href="calculator" class="hoverimageslink calculatorhoverlink">
            <img src="{{asset('images/hoverimages/calculator.png')}}" onmouseleave="calculatorhoveronmouseleave()" onmouseenter="calculatorhoveronmouseenter()" class="calculatorstatusimage  " id="calculator" alt="calculator">
            <p class="status-subheading-cal"><b>Calculator</b></p>
          </a>
        </li>

        <li class=" spacebetweenli">
          <a href="ntnstatus" class="hoverimageslink">
            <img src="{{asset('images/hoverimages/ntnhover.png')}}" onmouseleave="ntnhoveronmouseleave()" onmouseenter="ntnhoveronmouseenter()" class="calculatorstatusimage   " id="ntn" alt="ntn">
            <p class="status-subheading-ntn"><b>NTN <b class="ntndisplaysmall">Status</b></b></p>
          </a>
        </li>

        <li class=" spacebetweenli">
          <a href="atlstatus" class="hoverimageslink">
            <img src="{{asset('images/hoverimages/atl.png')}}" onmouseleave="atlhoveronmouseleave()" onmouseenter="atlhoveronmouseenter()" class="calculatorstatusimage  " id="atl" alt="ntn">
            <p class="status-subheading-atl"><b class="">ATL <b class="ntndisplaysmall">Status</b></b></p>
          </a>
        </li>

        <li class="  spacebetweenli">
          <a href="faqstatus" class="hoverimageslink">
            <img src="{{asset('images/hoverimages/faq.png')}}" onmouseleave="faqhoveronmouseleave()" onmouseenter="faqhoveronmouseenter()" class="calculatorstatusimage " id="faq" alt="ntn">
            <p class="status-subheading-faq"><b>FAQ</b></p>
          </a>
        </li>


        <li class=" spacebetweenli">
          <a href="contactstatus" class="hoverimageslink">
            <img src="{{asset('images/hoverimages/contact.png')}}" onmouseleave="conacthoveronmouseleave()" onmouseenter="conacthoveronmouseenter()" class="calculatorstatusimage  " id="contact" alt="contact">
            <p class="status-subheading-contact"><b>Conatct <b class="ntndisplaysmall">Us</b></b></p>
          </a>
        </li>
      </ul>
    </div>
    <!-- resources data here -->
  </div>
  <!-- container end here -->
  <hr class="hrvideo">

  <div class="alert blogsplaysalert " id="alertid" role="alert">

    <div class="container">
      <ul class="d-flex blogsplaysalert-content  mx-5" style="list-style-type: none;">
        <li class="">
        <a href="videos" class="hoverimageslink">
            <img src="{{asset('images/hoverimages/play.png')}}" onmouseleave="playhoveronmouseleave()" onmouseenter="playhoveronmouseenter()" class="blogplaystatusimage " id="playimage" alt="play">
            <p class="status-heading"><b>Videos</b></p>
          </a>
        </li>

        <li class="mx-5">
        <a href="blogs" class="hoverimageslink">
            <img src="{{asset('images/hoverimages/blog.png')}}" onmouseleave="bloghoveronmouseleave()" onmouseenter="bloghoveronmouseenter()" class="blogplaystatusimage " id="blogimage" alt="blog">
            <p class="status-heading"><b>Blogs</b></p>

          </a>
        </li>
      </ul>
    </div>


  </div>
  <hr class="hr2" id="hr2" style="display: none;">

<div class="container">
<div class="row">
<div class="col-12">
  
<div class="float-setting  mt-5 ">

<form action="">
<label for="" class="form-label">NTN STATUS FINDER</label>
  <ul class="d-block  d-md-flex-search d-lg-flex finder-search">
  <input type="text " class="form-control  input-width mx-0 mx-lg-4" placeholder="0000-0000000-0">
  <button type="submit" class="btn  btn-lg search-btn mt-2 mt-lg-0">Search</button>
  </ul>
  <div class="form-text" id="errorResponse"> Enter Your National Identity Card <span class="text-danger">NIC</span> Number </div>
</form>
</div>
</div>
</div>


<!-- row start -->
<div class="row mt-2 benifits-row-small">
  <div class="col-12">
<h1 ><span class="benifits">Benefits of having</span> <span class="ntn-dark-heading">NTN</span></h1>


<div class="ntn-description mt-4">
<span class="highlight-text">Tax Saving</span> Get maximum tax saving like claiming tax credits for investments and adjustment of taxes paid on utilities, vehicle, property transactions, and cash withdrawals etc <span class="highlight-text">Lower Rate of Withholding Tax </span> Non-Filers are subject to higher rate of taxes on various transactions e.g. withholding tax is applicable on cash withdrawals and banking transfers exceeding Rs. 50,000 <span class="highlight-text">Avoid Penalities</span>. Be a responsible citizen and avoid penalties and/or prosecutions from the FBR for not filing return <span class="highlight-text">Compliance Check </span> government related organizations and banks now check your FBR tax filer status before acceding to your requests, like registration of company, purchase of property and loan processing etc.
</div>

</div>
</div>
<!-- row end -->







<videomaster>
    @include('../blogs/videomaster')
    </videomaster>
</div>
<!-- container end here -->


<footer>
  @include('../footer')
</footer>


<script>

var statusid=document.getElementById("statusid");
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


// alertid.addEventListener("mouseleave", function() {
//     if (alertid.style.display = "block") {
//         alertid.style.display = "none";
//     }
// });

// alertid.addEventListener("mouseleave", function() {
//     if (hr2.style.display = "block") {
//         hr2.style.display = "none";
//     }
// });


alertid.addEventListener("mouseenter", function() {
    if (hr2.style.display = "none") {
        hr2.style.display = "block";
    }
   
});



resourcesid.addEventListener("mouseleave", function() {
    if(alertid.style.display = "block"){
     hr2.style.display = "block"; 
     alertid.style.display = "block";
    }
 });

 statusid.addEventListener("mouseenter",function(){
if(taxttoolsalert.style.display="block"){
//   taxttoolsalert.style.display="none";
  hr3.style.display="block";
alertid.style.display="none";
hr2.style.display="none";
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
            alertid.style.display="none";
hr2.style.display="none";
        }
 });
</script>




<!-- <script src="resource.js"></script> -->

<script>
    var taxttoolsid=document.getElementById("taxttoolsid");
    var resourcesid = document.getElementById("resourcesid");
var taxttoolsalert = document.getElementById("taxttoolsalert");
var hr3 = document.getElementById("hr3");
var alertid = document.getElementById("alertid");
var salestaxid=document.getElementById("salestaxid");
var businessid=document.getElementById("businessid");
taxttoolsid.addEventListener("mouseenter",function(){
if(taxttoolsalert.style.display="none" ){
    taxttoolsalert.style.display="block";
     hr3.style.display = "block";
     
hr2.style.display="none";
     alertid.style.display="none";
}
});

window.addEventListener("load",function(){
if(taxttoolsalert.style.display="none" ){
    taxttoolsalert.style.display="block";
     hr3.style.display = "block";
     alertid.style.display="none";
}
// var ntn = document.getElementById("ntn");
// ntn.src = "{{ asset('images/hoverimages/ntnhover.png') }}";
});


businessid.addEventListener("mouseenter",function(){
    if(taxttoolsalert.style.display="none" ){
    taxttoolsalert.style.display="block";
     hr3.style.display = "block";
     alertid.style.display="none";
}
});

salestaxid.addEventListener("mouseenter",function(){
    if(taxttoolsalert.style.display="none" ){
    taxttoolsalert.style.display="block";
     hr3.style.display = "block";
     alertid.style.display="none";
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

function ntnhoveronmouseenter(){
    var ntn = document.getElementById("ntn");
   ntn.src = "{{ asset('images/hoverimages/ntnhover.png') }}";
}

// function ntnhoveronmouseleave(){
//     var ntn = document.getElementById("ntn");
//    ntn.src = "{{ asset('images/hoverimages/ntn.png') }}";
// }

function atlhoveronmouseenter(){
    var atl = document.getElementById("atl");
    atl.src = "{{ asset('images/hoverimages/atlhover.png') }}";
}

function atlhoveronmouseleave(){
    var atl = document.getElementById("atl");
    atl.src = "{{ asset('images/hoverimages/atl.png') }}";
}


function faqhoveronmouseenter(){
    var faq = document.getElementById("faq");
    faq.src = "{{ asset('images/hoverimages/faqhover.png') }}";
}

function faqhoveronmouseleave(){
    var faq = document.getElementById("faq");
    faq.src = "{{ asset('images/hoverimages/faq.png') }}";
}

function conacthoveronmouseenter(){
    var conact = document.getElementById("contact");
    contact.src = "{{ asset('images/hoverimages/contacthover.png') }}";
}

function conacthoveronmouseleave(){
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

function bloghoveronmouseleave(){
    var blogimage = document.getElementById("blogimage");
  blogimage.src = "{{ asset('images/hoverimages/blog.png') }}";
}


function playhoveronmouseenter() {
  var playimage = document.getElementById("playimage");
  playimage.src = "{{ asset('images/hoverimages/playhover.png') }}";
}

function playhoveronmouseleave(){
    var playimage = document.getElementById("playimage");
    playimage.src = "{{ asset('images/hoverimages/play.png') }}";
}
</script>

  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

</body>
</html>
