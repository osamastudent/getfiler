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
  <link rel="stylesheet" href="allcss/horizontalverticalslider.css">
  <link rel="stylesheet" href="allcss/business-servicess.css">

<link rel="icon" href="{{asset('logotitle3.jpg')}}" >
    <title>Business Services</title>
</head>
<body>
@include('navbar')
<hr>
<!-- container start -->
<div class="container  mt-5 " >
<!-- <span><a href="">Home</a> / <a href=""> Business Services</a></span> -->
<nav aria-label="breadcrumb ">
<span><a href="" class="text-decoration-none text-dark home" style="font-weight:5contr00">Home</a> / <a href="" class="text-decoration-none text-dark"> Business Services</a></span>
</nav>

<h3 class="business-services-title mt-4">Our business services</h3>
<p class="mt-3">Registering a business can be a quite stressful. Worry not! Get expert assistance on how and which business structure to select and start your entrepreneurial journey with a bang!
</p>


<div class="d-flex justify-content-center">
  <input type="search" class="form-control w-25 rounded-pill" placeholder="Seacrh...">
</div>
<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item mt-3" role="presentation">
    <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
  </li>



  <li class="nav-item mt-3" role="presentation">
    <button class="nav-link" id="incometaxt-tab" data-bs-toggle="tab" data-bs-target="#incometaxt" type="button" role="tab" aria-controls="incometaxt" aria-selected="false">Income Tax Return</button>
  </li>

  <li class="nav-item mt-3" role="presentation">
    <button class="nav-link" id="salestax-tab" data-bs-toggle="tab" data-bs-target="#salestax" type="button" role="tab" aria-controls="salestax" aria-selected="false">Sales Tax Registration</button>
  </li>
  <li class="nav-item mt-3" role="presentation">
    <button class="nav-link" id="company-tab" data-bs-toggle="tab" data-bs-target="#company" type="button" role="tab" aria-controls="company" aria-selected="false">Company's Registration</button>
  </li>
  <li class="nav-item mt-3" role="presentation">
    <button class="nav-link" id="intellectual-tab" data-bs-toggle="tab" data-bs-target="#intellectual" type="button" role="tab" aria-controls="intellectual" aria-selected="false">intellectual Property</button>
  </li>

  <li class="nav-item mt-3" role="presentation">
    <button class="nav-link" id="LLC-tab" data-bs-toggle="tab" data-bs-target="#LLC" type="button" role="tab" aria-controls="LLC" aria-selected="false">USA LLC & Tax Filling</button>
  </li>
</ul>


<!-- start here -->
<div class="content">
<div class="business-services-content">
<div class="tab-content mt-4" id="myTabContent">
  <div class="tab-pane fade show active bg-info" id="all" role="tabpanel" aria-labelledby="all-tab" >
    <p>all</p>
  </div>


  <!-- income tax registration end here -->
  <div class="tab-pane fade" id="incometaxt" role="tabpanel" aria-labelledby="incometaxt-tab">
        
  <div class="card mt-5 p-4 checkmark-li-list">
          <div class="card-text ">
            <div class="d-flex bd-highlight ">
  <div class="width-setting w-75   bd-highlight ">
  <h5>NTN Registration – Salaried</h5>
    
  </div>
  <div class=" flex-shrink-1 bd-highlight   ">
    <p class=" ntn-tab-right-content justify-content-end"><b>Rs. 400</b></p> 
  </div>
</div>



<div class="d-flex bd-highlight ">
  <div class="width-setting w-75 bd-highlight justify-content-end">
  <p>Completion Time:</p>
      </div>
  
      <div class=" flex-shrink-1 bd-highlight">
    <p>1 - 2 Working Days</p>
  </div>
</div>
    </div>


    <p>Requirements :</p>
      <ul>    
      <li>Color copy of CNIC</li>
<li>Latest paid electricity bill</li>
<li>Phone Number </li>
<li>Email address</li>
      </ul>

      <div class=" bd-highlight ">
  <div class="p-2 width-setting w-75 bd-highlight"></div>
  <div class="d-flex flex-shrink-1 bd-highlight justify-content-end">
    <button class="btn btn-primary request-for-call">Request For Call</button>
    <button class="btn whatsapp-icon-btn py-1 mx-2"><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
  </div>
</div>
    </div>




    <div class="card mt-5 p-4 checkmark-li-list">
          <div class="card-text ">
            <div class="d-flex bd-highlight ">
  <div class="width-setting w-75   bd-highlight ">
  <h5>NTN Registration – Salaried</h5>
    
  </div>
  <div class=" flex-shrink-1 bd-highlight   ">
    <p class=" ntn-tab-right-content justify-content-end"><b>Rs. 400</b></p> 
  </div>
</div>



<div class="d-flex bd-highlight ">
  <div class="width-setting w-75 bd-highlight justify-content-end">
  <p>Completion Time:</p>
      </div>
  
      <div class=" flex-shrink-1 bd-highlight">
    <p>1 - 2 Working Days</p>
  </div>
</div>
    </div>


    <p>Requirements:</p>
      <ul>    
      <li>Color copy of CNIC</li>
<li>Latest paid electricity bill</li>
<li>Phone Number </li>
<li>Email address</li>
      </ul>

      <div class=" bd-highlight ">
  <div class="p-2 width-setting w-75 bd-highlight"></div>
  <div class="d-flex flex-shrink-1 bd-highlight justify-content-end">
    <button class="btn btn-primary request-for-call">Request For Call</button>
    <button class="btn whatsapp-icon-btn py-1 mx-2 "><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
  </div>
</div>
    </div>





    <div class="card mt-5 p-4 checkmark-li-list">
          <div class="card-text ">
            <div class="d-flex bd-highlight ">
  <div class="width-setting w-75   bd-highlight ">
  <h5>NTN Registration – Salaried</h5>
    
  </div>
  <div class=" flex-shrink-1 bd-highlight   ">
    <p class=" ntn-tab-right-content justify-content-end"><b>Rs. 400</b></p> 
  </div>
</div>



<div class="d-flex bd-highlight ">
  <div class="width-setting w-75 bd-highlight justify-content-end">
  <p>Completion Time:</p>
      </div>
  
      <div class=" flex-shrink-1 bd-highlight">
    <p>1 - 2 Working Days</p>
  </div>
</div>
    </div>


    <p>Requirements:</p>
      <ul>    
      <li>Color copy of CNIC</li>
<li>Latest paid electricity bill</li>
<li>Phone Number </li>
<li>Email address</li>
      </ul>

      <div class=" bd-highlight ">
  <div class="p-2 width-setting w-75 bd-highlight"></div>
  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
    <button class="btn btn-primary request-for-call">Request For Call</button>
    <button class="btn whatsapp-icon-btn py-1 mx-2"><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
  </div>
</div>
    </div>


    <div class="card mt-5 p-4 checkmark-li-list">
          <div class="card-text ">
            <div class="d-flex bd-highlight ">
  <div class="width-setting w-75   bd-highlight ">
  <h5>NTN Registration – Salaried</h5>
    
  </div>
  <div class=" flex-shrink-1 bd-highlight   ">
    <p class=" ntn-tab-right-content justify-content-end"><b>Rs. 400</b></p> 
  </div>
</div>



<div class="d-flex bd-highlight ">
  <div class="width-setting w-75 bd-highlight justify-content-end">
  <p>Completion Time:</p>
      </div>
  
      <div class=" flex-shrink-1 bd-highlight">
    <p>1 - 2 Working Days</p>
  </div>
</div>
    </div>


    <p>Requirements:</p>
      <ul>    
      <li>Color copy of CNIC</li>
<li>Latest paid electricity bill</li>
<li>Phone Number </li>
<li>Email address</li>
      </ul>

      <div class=" bd-highlight ">
  <div class="p-2 width-setting w-75 bd-highlight"></div>
  <div class="d-flex flex-shrink-1 bd-highlight justify-content-end">
    <button class="btn btn-primary request-for-call">Request For Call</button>
    <button class="btn whatsapp-icon-btn py-1 mx-2"><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
  </div>
</div>
    </div>



    <div class="card mt-5 p-4 checkmark-li-list">
          <div class="card-text ">
            <div class="d-flex bd-highlight ">
  <div class="width-setting w-75   bd-highlight ">
  <h5>NTN Registration – Salaried</h5>
    
  </div>
  <div class=" flex-shrink-1 bd-highlight   ">
    <p class=" ntn-tab-right-content justify-content-end"><b>Rs. 400</b></p> 
  </div>
</div>



<div class="d-flex bd-highlight ">
  <div class="width-setting w-75 bd-highlight justify-content-end">
  <p>Completion Time:</p>
      </div>
  
      <div class=" flex-shrink-1 bd-highlight">
    <p>1 - 2 Working Days</p>
  </div>
</div>
    </div>


    <p>Requirements:</p>
      <ul>    
      <li>Color copy of CNIC</li>
<li>Latest paid electricity bill</li>
<li>Phone Number </li>
<li>Email address</li>
      </ul>

      <div class=" bd-highlight ">
  <div class="p-2 width-setting w-75 bd-highlight"></div>
  <div class="d-flex flex-shrink-1 bd-highlight justify-content-end">
    <button class="btn btn-primary request-for-call">Request For Call</button>
    <button class="btn whatsapp-icon-btn py-1 mx-2 "><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
  </div>
</div>
    </div>


  </div>
<!-- income tax registration end here -->

  <!-- sales tax registration start here -->
  
  <div class="tab-pane fade" id="salestax" role="tabpanel" aria-labelledby="salestax-tab">

  <div class="card mt-5 p-4 checkmark-li-list">
          <div class="card-text ">
            <div class="d-flex bd-highlight ">
  <div class="width-setting w-75   bd-highlight ">
  <h5>GST Registration</h5>
    
  </div>
  <div class=" flex-shrink-1 bd-highlight   ">
  <p class="d-inline ntn-tab-right-content justify-content-end"><b>Manufacturer: Rs. 18,000</b></p> 
    <p class=" ntn-tab-right-content justify-content-end"><b>Other than Manufacturer: Rs. 15,000 </b></p> 
  </div>
</div>



<div class="d-flex bd-highlight ">
  <div class="width-setting w-75 bd-highlight justify-content-end">
  <p>Completion Time:</p>
      </div>
  
      <div class=" flex-shrink-1 bd-highlight">
    <p>1 - 2 Working Days</p>
  </div>
</div>
    </div>


    <p>Requirements:</p>
      <ul>    
      <li>Color copy of CNIC</li>
<li>Latest paid electricity bill</li>
<li>Phone Number </li>
<li>Email address</li>
      </ul>

      <div class=" bd-highlight ">
  <div class=" width-setting 50 bd-highlight"></div>
  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
    <button class="btn btn-primary request-for-call">Request For Call</button>
    <button class="btn whatsapp-icon-btn py-1 mx-2 "><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
  </div>
</div>
    </div>
    

</div>

<!-- sales tax registration end here -->


<!-- company registration start here -->
  <div class="tab-pane fade" id="company" role="tabpanel" aria-labelledby="company-tab">
    
  <div class="card mt-5 p-4 checkmark-li-list">
          <div class="card-text ">
            <div class="d-flex bd-highlight ">
  <div class="width-setting w-75   bd-highlight ">
  <h5 class="d-inline">Private Limited Company Registration</h5>
  <p  style="color: #a6a6a6; font-size:13px">(Other than Licensed entity)</p>
    
  </div>
  <div class=" flex-shrink-1 bd-highlight   ">
  <p class="d-inline ntn-tab-right-content justify-content-end"><b>Manufacturer: Rs. 12,000</b></p> 
    
  </div>
</div>



<div class="d-flex bd-highlight ">
  <div class="width-setting w-75 bd-highlight justify-content-end">
  <p>Completion Time:</p>
      </div>
  
      <div class=" flex-shrink-1 bd-highlight">
    <p>1 - 2 Working Days</p>
  </div>
</div>
    </div>


    <p>Requirements:</p>
      <ul>    
      <li>Three Names of the proposed company</li>
<li>Neat and Clear Scanned copies of CNIC's of all the proposed Directors / subscribers</li>
<li>Registered address / correspondence address of the proposed Company</li>
<li>The principal business of the proposed company</li>
<li>Nature of the business activity</li>
<li>Authorized Capital</li>  
<li>Paid up Capital</li>    
<li>Value per share e.g.Rs. 10, Rs. 50 or Rs. 100 etc</li>
<li>Combination of Shares agreed to be subscribed by each director / subscriber</li>
<li>Name of the Chief Executive of the Proposed Company</li>
<li>Authorization from other subscribers. (For Offline only)</li>
<li>Telephone numbers and email ID of all the proposed directors</li>
<li>Telephone numbers and email ID of all the proposed directors of the Company</li>
<li>Name of declarant person</li>
<li>SECP login details of the proposed directors / subscribers(if any)</li>
</ul>

      <div class=" bd-highlight ">
  <div class=" width-setting bd-highlight"></div>
  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
    <button class="btn btn-primary request-for-call">Request For Call</button>
    <button class="btn whatsapp-icon-btn py-1 mx-2 "><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
  </div>
</div>
    </div>
    

</div>

<!-- company registration end here -->




  <!-- intellectual Property start here -->
  <div class="tab-pane fade" id="intellectual" role="tabpanel" aria-labelledby="intellectual-tab">


    
    <div class="card mt-5 p-4 checkmark-li-list">
            <div class="card-text ">
              <div class="d-flex bd-highlight ">
    <div class="width-setting w-75   bd-highlight ">
    <h5 class="d-inline">Trademark Registration</h5>
    <p  style="color: #a6a6a6; font-size:13px">(Other than Licensed entity)</p>
      
    </div>
    <div class=" flex-shrink-1 bd-highlight   ">
    <p class="d-inline ntn-tab-right-content justify-content-end"><b>Rs. 6,000</b></p> 
      
    </div>
  </div>
  
  
  
  <div class="d-flex bd-highlight ">
    <div class="width-setting w-75 bd-highlight justify-content-end">
    <p>Completion Time:</p>
        </div>
    
        <div class=" flex-shrink-1 bd-highlight">
      <p>1 - 2 Working Days</p>
    </div>
  </div>
      </div>
  
  
      <p>Requirements:</p>
        <ul>    
        <li>Three Names of the proposed company</li>
  
  <li>Registered address / correspondence address of the proposed Company</li>
  <li>The principal business of the proposed company</li>
  <li>Nature of the business activity</li>
  <li>Authorized Capital</li>  
  <li>Paid up Capital</li>    
  <li>Value per share e.g.Rs. 10, Rs. 50 or Rs. 100 etc</li>
  
  </ul>
  
        <div class=" bd-highlight ">
    <div class=" width-setting bd-highlight"></div>
    <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
      <button class="btn btn-primary request-for-call">Request For Call</button>
      <button class="btn whatsapp-icon-btn py-1 mx-2 "><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
    </div>
  </div>
      </div>
      
  
  </div>
  
  <!-- intellectual Property end here -->
  




    <!-- usa LLc & tax fillig start here -->
  <div class="tab-pane fade" id="LLC" role="tabpanel" aria-labelledby="LLC-tab">
     
    <div class="card mt-5 p-4 checkmark-li-list">
            <div class="card-text ">
              <div class="d-flex bd-highlight ">
    <div class="width-setting w-75   bd-highlight ">
    <h5 class="d-inline">Company Formation in USA - LLC / Inc. (C Corp)</h5>
    
      
    </div>
    <div class=" flex-shrink-1 bd-highlight   ">
    <p class="d-inline ntn-tab-right-content justify-content-end"><b>State fee $  @php echo number_format(120) @endphp</b></p> 
      
    </div>
  </div>
  
  
  
  <div class="d-flex bd-highlight ">
    <div class="width-setting w-75 bd-highlight justify-content-end">
    <p>Completion Time:</p>
        </div>
    
        <div class=" flex-shrink-1 bd-highlight">
      <p>1 - 2 Working Days</p>
    </div>
  </div>
      </div>
  
  
      <p>Requirements:</p>
        <ul>    
        <li>2 Suggested Names of the Company</li>
  <li>
CNIC (English Only) / Passport of Director(s)</li>
  </ul>
  
        <div class=" bd-highlight ">
    <div class=" width-setting bd-highlight"></div>
    <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
      <button class="btn btn-primary request-for-call">Request For Call</button>
      <button class="btn whatsapp-icon-btn py-1 mx-2 "><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
    </div>
  </div>
      </div>
      
  
  </div>
  
  <!-- usa llc & tax filling end here -->

</div>





</div><!-- business-services-content end here -->

<!-- top picks start here -->
<div class="row top-pickss">
  <div class="col-12 top-picks ">

  <div class="card " >
  <div class="card-title mt-5 pt-3">
  <img  class="d-flex mx-auto " src="{{asset('images/newimages/whatsapp.png')}}" alt="">
  <h5 class="text-center mt-5">USA LLC</h5>
  </div>
  <ul class="list-group text-center mt-3  list-group-flush">
    
    <li class="list-group-item">Company Formation</li>
    <li class="list-group-item">USA Bank Account</li>
    <li class="list-group-item">Tax Fillig</li>
  </ul>
</div>
  


<div class="card mt-3" >
  <div class="card-title mt-5 pt-3">
  <img  class="d-flex mx-auto " src="{{asset('images/newimages/whatsapp.png')}}" alt="">
  <h5 class="text-center mt-5">USA LLC</h5>
  </div>
  <ul class="list-group text-center mt-3  list-group-flush">
    
    <li class="list-group-item">Company Formation</li>
    <li class="list-group-item">USA Bank Account</li>
    <li class="list-group-item">Tax Fillig</li>
  </ul>
</div>


</div> 

</div>

<!-- top picks end here here -->

</div>

</div><!-- container end here -->





  
<footer>
        @include('footer') <!-- Include the footer -->
    </footer>
</body>
</html>