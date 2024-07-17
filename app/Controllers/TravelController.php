<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TravelController extends BaseController
{
    public function index()
    {
        return view('Travel/home');
    }
    public function about()
    {
       return view('Travel/about');
  
    }

    public function book()
    {
       return view('Travel/book');
  
    }
    public function package()
    {
       return view('Travel/package');
  
    }
    public function help()
    {
       return view('Travel/help');
  
    }
    public function login()
    {
       return view('Travel/login');
  
    }
    public function services()
    {
       return view('Travel/services');
  
    }
     
}