<?php

namespace App\Http\Controllers;

use App\User;
use App\OutletModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //public function __construct()
    //{
    //    $this->middleware('guest');
    //}
    
    public function index()
    {
        $user = UserModel::all();
        return view ('pages/Account/account', compact('user'));
    }


    public function create()
    {
        $outlets = OutletModel::all();
        return view ('pages.Account.CreateUserInOutlet', compact('outlets'));
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    protected function store(Request $data)
    {
        $userss = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect('basil/account');
    }


    public function show(UserModel $userModel)
    {
        //
    }


    public function edit(User $userModel)
    {
        return view ('pages/Accounts/editAccount', compact('UserModel'));
    }

    public function update(Request $request, $userModel)
    {

        $validasi = $request->validate([    
        // 'id' => 'required',
        'name' => 'required',
        'email' => 'required',
       ]);

         $test = User::where('id', $userModel)->update($validasi);

         return redirect('basil/account')->with('Success', 'data berhasil diupdate');
    }

    public function updatepassword(Request $request, $userModel)
    {
        $validasi = Hash::make($request['password']);
        // dd($validasi);
        // $validasi = $request->validate([
        //     'password': ''
        // ])
        User::where('id', $userModel)->update(['password' => $validasi]);
        return redirect('basil/account');
    }

    public function destroy(UserModel $userModel)
    {
        //
    }
}
