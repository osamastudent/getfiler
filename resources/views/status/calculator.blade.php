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
 <style>
  .calculatorntnalertcontainer {
    position: sticky;
    top: 0px;
    padding-top: 5px;
    background-color: white; 
    z-index: 100; /* Adjust the z-index value as needed */
}

.hrvideo {
    position: sticky;
    top: 110px;
    /* background-color: white; */
    z-index: 1000;
}


 </style>
 <script>
  // JavaScript code to add or remove a class when scrolling
// var scrollingContainer = document.getElementById('scrolling-container');
// var calculatorntnalertcontainer = document.getElementById('hr2-video');

// window.addEventListener('scroll', function () {
//     var scrollTop = window.scrollY || document.documentElement.scrollTop;

//     if (scrollTop >= /* the desired scroll position where you want it to be fixed */) {
//         calculatorntnalertcontainer.classList.add('fixed');
//     } else {
//         calculatorntnalertcontainer.classList.remove('fixed');
//     }
// });

 </script>

  <title>Calculator</title>
</head>

<body>
@include('navbar')


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
  <hr class="hrvvideo">

  <div class="alert blogsplaysalert " id="alertid" role="alert">

    <div class="container" >
      <ul class="d-flex blogsplaysalert-content  mx-5"  style="list-style-type: none;">
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

  <!--container ss start -->

  <div class="container containerrr mt-5">
    <!-- row start -->
    <div class="row">
    <div class="col-12 col-sm-12 col-md-12  col-lg-4">
        <h1 class="fw-bold">
          <p class="calculatorp-blur-text">Salary Tax</p>
          <p class="calculatorp-title">Calculator</p>
        </h1>

        <p class="calculatorp-description ">Apart from compliance, signing up with our online tax return portal allows you to access an easy to use tax return calculator that lays out all figures for you, in a comprehensible manner. Our salary tax calculator is constantly updated with the latest regulations and tax rates in Pakistan.</p>
      </div>

      <div class="col-12 col-sm-12 col-lg-8">


        <div class="card py-5 px-1 mt-md-4 mt-lg-0">
          <div class="card-body card-body-form">

            <form action="">
              <ul class="d-block  d-md-flex mt-2 ">


                <select class="form-select w-md-50 mt-3 mt-lg-0  w-100" id="select-tax-year" name="year">
                  <option class="fst-italic" disabled="disabled">Select salary tax year</option>
                  <option value="">2024</option>
                  <option value="">2023</option>
                  <option value="">2025</option>
                  <option value="">2026</option>
                  <option value="">2027</option>
                  <option value="">2028</option>
                </select>

                <input type="text" name="salary" class="form-control w-md-50 w-100 mt-3 mt-lg-0 mx-md-4" placeholder="Enter your monthly salary" onkeyup="this.value=transform(this.value)" id="formattedInput" oninput="formatInput(this)">

                <button type="submit" onclick="salary_submit(this.form)" class="btn  mt-3 mt-lg-0 btn-lg calculate-btn">Calculate</button>
              </ul>

              <table class="table border-0 mt-5 tax-table mx-lg-auto mx-5" style="width:88%">
                <tr class="cal-border-bottom">
                  <td class="cal-border-right">
                    <p class="tax-heading">Monthly Salary</p>
                    <h2 class="amount-heading">0</h2>
                  </td>

                  <td class="cal-border-right">
                    <p class="tax-heading">Monthly Tax</p>
                    <h2 class="amount-heading">0</h2>
                  </td>
                  <td>
                    <p class="tax-heading">Salary After Tax</p>
                    <h2 class="amount-heading">0</h2>
                  </td>
                </tr>



                <tr class="border-remove">
                  <td class="cal-border-right">
                    <p class="tax-heading">Yearly Salary</p>
                    <h2 class="amount-heading">0</h2>
                  </td>

                  <td class="cal-border-right">
                    <p class="tax-heading">Yearly Tax</p>
                    <h2 class="amount-heading">0</h2>
                  </td class="cal-border-right">
                  <td>
                    <p class="tax-heading">Salary After Tax</p>
                    <h2 class="amount-heading">0</h2>
                  </td>
                </tr>

              </table>
            </form>
          </div>
        </div>
        <!-- card end -->
      </div>

    </div>
    <!-- row end -->
    <videomaster>
    @include('../blogs/videomaster')
    </videomaster>
  </div>
  <!-- container end here -->


  <!-- footer here -->

  <footer>
    @include('../footer') <!-- Include the footer -->
  </footer>


<!-- calculator script -->

<script>

function salary_submit(form){
  var salary=form.salary.value;
var p=5;
var total=salary;
alert(total);  

}
</script>

<script>
        function formatInput(input) {
            // Remove any non-numeric characters
            const numericValue = input.value.replace(/[^0-9]/g, '');

            // Format the numeric value with commas
            const formattedValue = numberWithCommas(numericValue);

            // Update the input field with the formatted value
            input.value = formattedValue;
        }

        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    </script>
<!-- calculator script end-->


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
    var logoo=document.getElementById("logoo");
    resourcesid.addEventListener("mouseenter", function() {
      if (alertid.style.display = "none" && hr2.style.display === "none") {
        alertid.style.display = "block";
        hr2.style.display = "block";
        taxttoolsalert.style.display = "none";
        hr3.style.display = "none";
        logoo.style.cssText="margin-bottom:4px";
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
      var calculator = document.getElementById("calculator");
      calculator.src = "{{ asset('images/hoverimages/calculatorhover.png') }}";
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

    // function calculatorhoveronmouseleave() {
    //   var calculator = document.getElementById("calculator");
    //     calculator.src = "{{ asset('images/hoverimages/calculator.png') }}";
    // }

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

    function faqhoveronmouseleave() {
      var faq = document.getElementById("faq");
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
    var togg = document.getElementById("togg");
    var myslide = document.getElementsByClassName("calculatorntnalertcontainer")[0];
    var navItems = document.getElementsByClassName("navbar-nav")[0].getElementsByTagName("li");

    var isMenuVisible = false; // Track the state of the menu visibility

    function toggleMenu() {
      if (isMenuVisible) {
        myslide.style.marginTop = "0";
        isMenuVisible = false;
      } else {
        for (var i = 0; i < navItems.length; i++) {
          navItems[i].style.cssText = "background-color: white; float: left;";
        }
        var marginTopValue = 100 + navItems.length * 40;
        myslide.style.marginTop = marginTopValue + "px";
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
        myslide.style.marginTop = "0"; // Remove margin-top when maximized
      } else {
        var marginTopValue = 100 + navItems.length * 40;
        myslide.style.marginTop = marginTopValue + "px";
      }
    }

    // Listen for window resize events and call the resetMarginOnResize function
    window.addEventListener("resize", resetMarginOnResize);
  </script>


<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

</body>
</html>