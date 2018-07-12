<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    //
    public function create(){

        return view('registrations.create');

    }
	
	public function store(){

        //validacija
		$this->validate(request(), [
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|confirmed'
		]);
		
		//kreiranje
		$user = User::create(request(['name', 'email', 'password']));
		
		//prijava
		auth()->login($user);
		
		//redirekcija na home
		return redirect()->home();

    }
}
