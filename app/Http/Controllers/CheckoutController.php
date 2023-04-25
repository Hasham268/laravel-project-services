<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\WebServices;

class CheckoutController extends Controller
{

    
    public function index($id){
        $services = WebServices::find($id);
        return view ('checkout')->with(['services' => $services]);
        
    }

    
}
