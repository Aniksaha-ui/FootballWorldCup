<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

	public function index(){
		return view('fontEnd.master');
	}


	public function dashboard(){
		return view('fontEnd.showdata.teaminformation');
	}

	

}
