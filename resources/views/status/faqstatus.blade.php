<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- font awesom -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- custom css -->
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="horizontalslider.css">
  <link rel="stylesheet" href="cssfolder/statuscss.css">
  <link rel="stylesheet" href="cssfolder/calculatorcss.css">
  <title>Faq Status</title>
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
  <div class="container  calculatorntnalertcontainer" id="myslide">
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
            <img src="{{asset('images/hoverimages/ntn.png')}}" onmouseleave="ntnhoveronmouseleave()" onmouseenter="ntnhoveronmouseenter()" class="calculatorstatusimage   " id="ntn" alt="ntn">
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

    <!-- row start -->
    <div class="row mx-1">
      <div class="col-12">
        <h1 class="faq-heading">Frequently Ask Questions</h1>
        <p class="faq-description mt-3">We're here to help, from getting you started, to long after you file. Let us help you with all your tax filing needs.</p>
      </div>
    </div>

    <!-- row end -->

    <!-- row start -->
  <div class="row mx-1 mt-5">
    <div class="col-12">

      <p class="accordian-question    accordian-question-margin-top " id="accordian-question-id">1. type your question here? <i class="fa-solid fa-plus" id="accordian-plus"></i> </p>

      <div class="accordian-answer  p-4" id="accordian-answer-id">
        <p>BeFiler is a powerful tool with a user friendly interface that asks simple questions and makes the tax filing process in Pakistan easier. All you have to do is answer with a 'yes' or 'no' and provide basic information like your salary income, taxes paid and investments made etc. Based on your responses, our system works out everything and shows your final tax refund / obligation, as applicable, after adjustment of taxes already paid or withheld.</p>

        <p>We've developed checks and balances to ensure that we have gathered every piece of information required to submit your tax return and notify you if something doesn't add up.
        </p>

        <p>Once you've completed the process, you can simply sit back and relax. Our integrated system will proceed to file your return of income, under supervision of tax experts. You will be notified once the process is completed.</p>
      </div>

      <p class="accordian-question    accordian-question-margin-top " id="accordian-question-id">2. question? <i class="fa-solid fa-plus" id="accordian-plus"></i> </p>

      <div class="accordian-answer  p-4" id="accordian-answer-id">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia assumenda a dolores fuga maiores in temporibus, exercitationem nihil perferendis optio suscipit eius dignissimos doloribus accusantium odit non inventore quis aut.
        </p>
      </div>


      <p class="accordian-question    accordian-question-margin-top " id="accordian-question-id">1. How does Getfiler work? <i class="fa-solid fa-plus" id="accordian-plus"></i> </p>

      <div class="accordian-answer  p-4" id="accordian-answer-id">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi suscipit nam, animi sed reiciendis nesciunt itaque, at totam explicabo repellendus qui ab doloribus veniam incidunt nemo voluptate, nihil ex. Earum?
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo est tenetur nostrum incidunt quis, esse eos saepe in, officiis officia temporibus! Cumque molestiae delectus assumenda corporis dicta beatae quidem iste!
        </p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum aliquid, laborum ratione enim delectus, quis quaerat molestias repudiandae ea voluptatum voluptate corrupti tempora tempore nesciunt exercitationem. Exercitationem voluptatibus odit a.</p>
      </div>


      <p class="accordian-question    accordian-question-margin-top " id="accordian-question-id">1. How does Getfiler work? <i class="fa-solid fa-plus" id="accordian-plus"></i> </p>

      <div class="accordian-answer  p-4" id="accordian-answer-id">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi suscipit nam, animi sed reiciendis nesciunt itaque, at totam explicabo repellendus qui ab doloribus veniam incidunt nemo voluptate, nihil ex. Earum?
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo est tenetur nostrum incidunt quis, esse eos saepe in, officiis officia temporibus! Cumque molestiae delectus assumenda corporis dicta beatae quidem iste!
        </p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum aliquid, laborum ratione enim delectus, quis quaerat molestias repudiandae ea voluptatum voluptate corrupti tempora tempore nesciunt exercitationem. Exercitationem voluptatibus odit a.</p>
      </div>

      <p class="accordian-question    accordian-question-margin-top " id="accordian-question-id">1. How does Getfiler work? <i class="fa-solid fa-plus" id="accordian-plus"></i> </p>

      <div class="accordian-answer  p-4" id="accordian-answer-id">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi suscipit nam, animi sed reiciendis nesciunt itaque, at totam explicabo repellendus qui ab doloribus veniam incidunt nemo voluptate, nihil ex. Earum?
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo est tenetur nostrum incidunt quis, esse eos saepe in, officiis officia temporibus! Cumque molestiae delectus assumenda corporis dicta beatae quidem iste!
        </p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum aliquid, laborum ratione enim delectus, quis quaerat molestias repudiandae ea voluptatum voluptate corrupti tempora tempore nesciunt exercitationem. Exercitationem voluptatibus odit a.</p>
      </div>

      <p class="accordian-question    accordian-question-margin-top " id="accordian-question-id">1. How does Getfiler work? <i class="fa-solid fa-plus" id="accordian-plus"></i> </p>

      <div class="accordian-answer  p-4" id="accordian-answer-id">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi suscipit nam, animi sed reiciendis nesciunt itaque, at totam explicabo repellendus qui ab doloribus veniam incidunt nemo voluptate, nihil ex. Earum?
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo est tenetur nostrum incidunt quis, esse eos saepe in, officiis officia temporibus! Cumque molestiae delectus assumenda corporis dicta beatae quidem iste!
        </p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum aliquid, laborum ratione enim delectus, quis quaerat molestias repudiandae ea voluptatum voluptate corrupti tempora tempore nesciunt exercitationem. Exercitationem voluptatibus odit a.</p>
      </div>

      <p class="accordian-question    accordian-question-margin-top " id="accordian-question-id">1. How does Getfiler work? <i class="fa-solid fa-plus" id="accordian-plus"></i> </p>

      <div class="accordian-answer  p-4" id="accordian-answer-id">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi suscipit nam, animi sed reiciendis nesciunt itaque, at totam explicabo repellendus qui ab doloribus veniam incidunt nemo voluptate, nihil ex. Earum?
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo est tenetur nostrum incidunt quis, esse eos saepe in, officiis officia temporibus! Cumque molestiae delectus assumenda corporis dicta beatae quidem iste!
        </p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum aliquid, laborum ratione enim delectus, quis quaerat molestias repudiandae ea voluptatum voluptate corrupti tempora tempore nesciunt exercitationem. Exercitationem voluptatibus odit a.</p>
      </div>

      <p class="accordian-question    accordian-question-margin-top " id="accordian-question-id">1. How does Getfiler work? <i class="fa-solid fa-plus" id="accordian-plus"></i> </p>

      <div class="accordian-answer  p-4" id="accordian-answer-id">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi suscipit nam, animi sed reiciendis nesciunt itaque, at totam explicabo repellendus qui ab doloribus veniam incidunt nemo voluptate, nihil ex. Earum?
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo est tenetur nostrum incidunt quis, esse eos saepe in, officiis officia temporibus! Cumque molestiae delectus assumenda corporis dicta beatae quidem iste!
        </p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum aliquid, laborum ratione enim delectus, quis quaerat molestias repudiandae ea voluptatum voluptate corrupti tempora tempore nesciunt exercitationem. Exercitationem voluptatibus odit a.</p>
      </div>

      <p class="accordian-question    accordian-question-margin-top " id="accordian-question-id">1. How does Getfiler work? <i class="fa-solid fa-plus" id="accordian-plus"></i> </p>

      <div class="accordian-answer  p-4" id="accordian-answer-id">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi suscipit nam, animi sed reiciendis nesciunt itaque, at totam explicabo repellendus qui ab doloribus veniam incidunt nemo voluptate, nihil ex. Earum?
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo est tenetur nostrum incidunt quis, esse eos saepe in, officiis officia temporibus! Cumque molestiae delectus assumenda corporis dicta beatae quidem iste!
        </p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum aliquid, laborum ratione enim delectus, quis quaerat molestias repudiandae ea voluptatum voluptate corrupti tempora tempore nesciunt exercitationem. Exercitationem voluptatibus odit a.</p>
      </div>

      <p class="accordian-question    accordian-question-margin-top " id="accordian-question-id">1. How does Getfiler work? <i class="fa-solid fa-plus" id="accordian-plus"></i> </p>

      <div class="accordian-answer  p-4" id="accordian-answer-id">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi suscipit nam, animi sed reiciendis nesciunt itaque, at totam explicabo repellendus qui ab doloribus veniam incidunt nemo voluptate, nihil ex. Earum?
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo est tenetur nostrum incidunt quis, esse eos saepe in, officiis officia temporibus! Cumque molestiae delectus assumenda corporis dicta beatae quidem iste!
        </p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum aliquid, laborum ratione enim delectus, quis quaerat molestias repudiandae ea voluptatum voluptate corrupti tempora tempore nesciunt exercitationem. Exercitationem voluptatibus odit a.</p>
      </div>

      <p class="accordian-question    accordian-question-margin-top " id="accordian-question-id">1. How does Getfiler work? <i class="fa-solid fa-plus" id="accordian-plus"></i> </p>

      <div class="accordian-answer  p-4" id="accordian-answer-id">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi suscipit nam, animi sed reiciendis nesciunt itaque, at totam explicabo repellendus qui ab doloribus veniam incidunt nemo voluptate, nihil ex. Earum?
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo est tenetur nostrum incidunt quis, esse eos saepe in, officiis officia temporibus! Cumque molestiae delectus assumenda corporis dicta beatae quidem iste!
        </p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum aliquid, laborum ratione enim delectus, quis quaerat molestias repudiandae ea voluptatum voluptate corrupti tempora tempore nesciunt exercitationem. Exercitationem voluptatibus odit a.</p>
      </div>


      <p class="accordian-question    accordian-question-margin-top " id="accordian-question-id">1. How does Getfiler work? <i class="fa-solid fa-plus" id="accordian-plus"></i> </p>
      <div class="accordian-answer  p-4" id="accordian-answer-id">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, inventore? Quasi mollitia rerum, eaque nobis doloremque autem excepturi? Repudiandae quos explicabo enim fugiat quo earum libero repellat dolorum accusantium exercitationem.
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem magnam quisquam suscipit laudantium consectetur vel dolorum aut exercitationem. Tenetur aspernatur alias unde similique eveniet inventore minima commodi accusamus excepturi mollitia?
        </p>
      </div>


      <p class="accordian-question    accordian-question-margin-top " id="accordian-question-id">2. How does Getfiler work? <i class="fa-solid fa-plus" id="accordian-plus"></i> </p>
      <div class="accordian-answer  p-4" id="accordian-answer-id">
        <p>BeFiler is a powerful tool with a user friendly interface that asks simple questions and makes the tax filing process in Pakistan easier. All you have to do is answer with a 'yes' or 'no' and provide basic information like your salary income, taxes paid and investments made etc. Based on your responses, our system works out everything and shows your final tax refund / obligation, as applicable, after adjustment of taxes already paid or withheld.</p>

        <p>We've developed checks and balances to ensure that we have gathered every piece of information required to submit your tax return and notify you if something doesn't add up.
        </p>

        <p>Once you've completed the process, you can simply sit back and relax. Our integrated system will proceed to file your return of income, under supervision of tax experts. You will be notified once the process is completed.</p>

        <hr>
      </div>





      </div>
    </div>

    <!-- row end -->


    


    <videomaster>
      @include('../blogs/videomaster')
    </videomaster>
  </div>


  <footer>
    @include('../footer')
  </footer>

<script>
      var acc = document.getElementsByClassName("accordian-question");
      var accordian_answer_id = document.getElementById("accordian-answer-id");
      var accordian_active = document.getElementById("accordian-active");
      var accordian_plus = document.getElementById("accordian-plus");
      var a;
      for (var a = 0; a < acc.length; a++) {

        acc[a].addEventListener("click", function() {

          this.classList.toggle("accordian-active");
          var nextElementSibling = this.nextElementSibling;
          var accordian_plus=this.querySelector("#accordian-plus");
          // open one close other

          for (var j = 0; j < acc.length; j++) {
            if (acc[j] != this) {
              acc[j].classList.remove("accordian-active");
              acc[j].nextElementSibling.style.display = "none";
              acc[j].querySelector("#accordian-plus").classList.add("fa-plus");
            }
          }

          if (nextElementSibling.style.display === "block") {
            nextElementSibling.style.cssText = "display:none;border-bottom:none";

            accordian_plus.classList.remove("fa-minus");
            accordian_plus.classList.add("fa-plus");
          } else {
            nextElementSibling.style.cssText = "display:block;border-bottom:none";
            accordian_plus.classList.add("fa-minus");
            accordian_plus.classList.remove("fa-plus");
          }

        });

      }
    </script>



  <script>
    var statusid = document.getElementById("statusid");
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



    alertid.addEventListener("mouseenter", function() {
      if (hr2.style.display = "none") {
        hr2.style.display = "block";
      }

    });



    resourcesid.addEventListener("mouseleave", function() {
      if (alertid.style.display = "block") {
        hr2.style.display = "block";
        alertid.style.display = "block";
      }
    });

    statusid.addEventListener("mouseenter", function() {
      if (taxttoolsalert.style.display = "block") {
        //   taxttoolsalert.style.display="none";
        hr3.style.display = "block";
        alertid.style.display = "none";
        hr2.style.display = "none";
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
    var salestaxid = document.getElementById("salestaxid");
    var businessid = document.getElementById("businessid");
    taxttoolsid.addEventListener("mouseenter", function() {
      if (taxttoolsalert.style.display = "none") {
        taxttoolsalert.style.display = "block";
        hr3.style.display = "block";

        hr2.style.display = "none";
        alertid.style.display = "none";
      }
    });

    window.addEventListener("load", function() {
      if (taxttoolsalert.style.display = "none") {
        taxttoolsalert.style.display = "block";
        hr3.style.display = "block";
        alertid.style.display = "none";
      }

    });


    businessid.addEventListener("mouseenter", function() {
      if (taxttoolsalert.style.display = "none") {
        taxttoolsalert.style.display = "block";
        hr3.style.display = "block";
        alertid.style.display = "none";
      }
    });

    salestaxid.addEventListener("mouseenter", function() {
      if (taxttoolsalert.style.display = "none") {
        taxttoolsalert.style.display = "block";
        hr3.style.display = "block";
        alertid.style.display = "none";
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

    // function faqhoveronmouseleave(){
    //     var faq = document.getElementById("faq");
    //     faq.src = "{{ asset('images/hoverimages/faq.png') }}";
    // }

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
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

</body>

</html>