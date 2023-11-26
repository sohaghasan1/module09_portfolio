<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class UserController extends Controller
{
    function index(){
    
        return view('pages.home');
    }
    
    function projects(){
    
        return view('pages.portfolio');
    }

    function about(){
    
        return view('pages.about');
    }
    function contact(){
    
        return view('pages.contact');
    }
   
}
