<?php

namespace App\Http\Controllers;
use App\Models\WebServices;
use App\Models\SeoServices;
use App\Models\DigitalServices;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function webdevelopment(){
        $webservices = WebServices::all();
        return view ('Development')->with(['webservices' => $webservices]);
    }

    public function seoPage(){
        $seoservices = SeoServices::all();
        return view ('Seo')->with(['seoservices' => $seoservices]);
        
    }

    public function digitalPage(){
        $digitalservices = DigitalServices::all();
        return view ('Digital')->with(['digitalservices' => $digitalservices]);
      
    }

    public function loginPage(){
        return view ('login');
    }

    public function signUpPage(){
        return view ('signUp');
    }
}
