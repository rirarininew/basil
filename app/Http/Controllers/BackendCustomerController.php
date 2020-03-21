<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\outlet_model;

class BackendCustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
	public function index(){
    	return view('indexcustomer');
    }

    public function dashboard(){
    	return view('pages/Dashboard/dashboard');
    }

    public function outlets(){
    	return view('pages/Outlets/outlets');
    }

    public function billings(){
    	return view('pages/Billings/billings');
    }

    public function account(){
    	return view('pages/Account/account');
    }

    public function EditAccount(){
    	return view('pages/Account/editAccount');
    }

    public function EditPassword(){
    	return view('pages/Account/editPassword');
    }

    public function contactUs(){
    	return view('pages/ContactUs/contactUs');
    }

    //public function login(){
      //  return view('pages/login');
    //}

    public function store(Request $request)
    {
       $validasi = $request->validate([
        'user_email' => 'required',
        'user_password' => 'required',
        'role' => 'required',
       ]);
       $user = UserModel::create($validasi);

       return redirect('basil/dashboard');
    }
}


