<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response;

class formController extends Controller
{
    public function index()
    {
        return view("index");
    }    

    public function store(Request $request)
    {  
        $validated = $request->validate([
			     'fullname' => 'required|min:4|max:25',
    			'email' => 'required|email',
    			'mobile' => 'required|numeric',
    			'password' => 'required|min:3|max:20',
    			
    		]);
   	
   		dd('Form submitted successfully.');
    }
}
