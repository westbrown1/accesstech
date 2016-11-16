<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests;
use Html;
use Session;

class WelcomeController extends Controller
{
    public function index()
    {
    	return view('welcome.index');
    }
    public function about()
    {
    	return view('welcome.about');
    }
    public function contact()
    {
    	return view('welcome.contact');
    }
    public function pricing()
    {
    	return view('welcome.pricing');
    }
    public function solution()
    {
    	return view('welcome.solution');
    }
    public function what()
    {
    	return view('welcome.what');
    }
    public function dribble()
    {
        return view('welcome.dribbble');
    }
    public function price_table()
    {
        return view('welcome.pricing-table');
    }
    public function buttons()
    {
        return view('welcome.buttons');
    }
    public function parallax()
    {
        return view('welcome.parallax');
    }
   public function postContact(Request $request)
    {   
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:5',
            'body' => 'min:10'
            ]);     

        $data = [
            'email' => $request->email,
            'subject' => $request->subject,
            'body' => $request->body
        ];

        Mail::send('emails.contact', $data, function($m) use ($data) {
            $m->from($data['email']);
            $m->to('lawsonsdad@gmail.com');
            $m->subject($data['subject']);
        });

        Session::flash('success', 'Your message was sent!');
        return view('welcome.contact');
    }

}
