<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['about','news','contact','cotation']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getAboutPage()
    {
        return view('about');
    }
    public function getNewsPage()
    {
        return view('news');
    }
    public function getContactPage()
    {
        return view('contact');
    }
    public function getCotationPage()
    {
        return view('cotation');
    }
}
