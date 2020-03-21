<?php

namespace App\Http\Controllers;

use App\SubsModel;
use Illuminate\Http\Request;

class SubsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $subs = SubsModel::all();
        return view ('pages/Billings/billings', compact('subs'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(SubsModel $subsModel)
    {
        //
    }


    public function edit(SubsModel $subsModel)
    {
        //
    }


    public function update(Request $request, SubsModel $subsModel)
    {
        //
    }


    public function destroy(SubsModel $subsModel)
    {
        //
    }
}
