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
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function getIndex()
    {
        return view('index');
    }
	
	public function getPricing()
    {
        return view('pricing');
    }
	
	public function getHome()
    {
        return view('home');
    }
	
	 public function getBlank()
    {
        return view('blank');
    }
	
	 public function getForm()
    {
        return view('form');
    }
	
	public function getTable()
    {
        return view('table');
    }
	
	public function getTables()
    {
        return view('tables');
    }
	
}
