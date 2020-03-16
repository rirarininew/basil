<?php

namespace App\Http\Controllers;

use App\OutletModel;
use Illuminate\Http\Request;
use App\Province;
use App\City;

class OutletController extends Controller
{
    
    public function index()
    {
        $outlets = OutletModel::all();
        return view ('pages.Outlets.outlets', compact('outlets'));
    }

    
    public function create()
    {
        $indonesia_provinces = Province::pluck('name', 'id');
        $indonesia_cities = City::pluck('name', 'province_id', 'id');
        return view('pages.Outlets.CreateOutlets', [
            'indonesia_provinces' => $indonesia_provinces,
            'indonesia_cities' => $indonesia_cities,
        ]);
    }

   
    public function store(Request $request)
    {
       $cities = City::where('province_id', $request->get('id'))->pluck('name', 'id');
       $validasi = $request->validate([
        'outlet_name' => 'required',
        'outlet_address' => 'required',
        'outlet_city' => 'required',
        'outlet_province' => 'required',
        'outlet_contact' => 'required',
        'outlet_user' => 'required',
       ]);
       $outlets = OutletModel::create($validasi);

       return response()->json($cities);
       return redirect('basil/outlets')->with('success', 'selamat data berhasil ditambah!');
    }

   
    public function show(OutletModel $outletModel)
    {
        //
         // return view ('pages/Outlets/EditOutlets', compact('outletModel'));
    }

    
    public function edit(OutletModel $outletModel)
    {
        $indonesia_cities = City::pluck('name', 'province_id', 'id');
        $indonesia_provinces = Province::pluck('name', 'id');
        return view ('pages/Outlets/EditOutlets'
            , compact('outletModel'),
            ['indonesia_cities' => $indonesia_cities,
            'indonesia_provinces' => $indonesia_provinces,
        ]);
    }

    
    public function update(Request $request, $outletModel)
    {
         $validasi = $request->validate([    
        'outlet_name' => 'required',
        'outlet_address' => 'required',
        'outlet_city' => 'required',
        'outlet_province' => 'required',
        'outlet_contact' => 'required',
        'outlet_status' => 'required',
       ]);


         OutletModel::where('outlet_id', $outletModel)->update($validasi);
         return redirect('basil/outlets')->with('Success', 'data berhasil diupdate');
    }

    public function destroy(OutletModel $outletModel)
    {
        //
    }
}
