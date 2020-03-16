<?php

namespace App\Http\Controllers;

use App\UserModel;
use App\OutletModel;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $user = UserModel::all();
        return view ('pages/Account/account', compact('user'));
    }


    public function create()
    {
        $outlets = OutletModel::all();
        return view ('pages.Outlets.CreateUserInOutlet', compact('outlets'));
    }


    public function store(Request $request)
    {
        //
    }


    public function show(UserModel $userModel)
    {
        //
    }


    public function edit(UserModel $userModel)
    {
        //
    }

    public function update(Request $request, UserModel $userModel)
    {
        //
    }

    public function destroy(UserModel $userModel)
    {
        //
    }
}
