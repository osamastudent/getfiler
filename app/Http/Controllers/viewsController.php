<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewsController extends Controller
{
      // home
      public function Home()
      {
          return view('index');
      }
  
  
      // Calculator
      public function Calculator()
      {
          return view('status.calculator');
      }
  
  
  // ntnStatus start
  public function ntnStatus(){
      return view('status.ntnstatus');
  }
  
  
  
  // atlStatus start
  public function atlStatus(){
      return view('status.atlstatus');
  }
  
  
  // faqStatus start
  public function faqStatus(){
      return view('status.faqstatus');
  }
      
  
  // contactStatus start
  public function contactStatus(){
      return view('status.contactstatus');
  }
  
  
  }