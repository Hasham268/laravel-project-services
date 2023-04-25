<?php

namespace App\Http\Controllers;
use App\Mail\Testmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class mailController extends Controller
{
    //

    public function mailform(){
        return view('mail/contact');
    }
    public function sendmail(Request $req)
    {

        
        $details =[
        
            'subject' => $req->get('subject'),
            'email' => $req->get('email'),
            'firstName' => $req->get('firstName'),
            'lastname' => $req->get('lastnam'),
            'body' => $req->get('message')
        ];
        
        Mail::to('ahmadhasham2001@gmail.com')->send(new TestMail($details));
        return redirect("/")->with('status', 'Email sent Successfully!'); 

}
}
