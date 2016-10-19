<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Html;

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
}
