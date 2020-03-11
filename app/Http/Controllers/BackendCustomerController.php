<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\outlet_model;

class BackendCustomerController extends Controller
{
	public function index(){
    	return view('index');
    }

    public function dashboard(){
    	return view('pages/Dashboard/dashboard');
    }

    public function outlets(){
    	$dataOutlet=outlet_model::all();
    	return view('pages/Outlets/outlets',['outlet' => $dataOutlet]);
    }

    public function CreateOutlets(){
    	return view('pages/Outlets/CreateOutlets');
    }

    public function EditOutlets(){
    	return view('pages/Outlets/EditOutlets');
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
}
