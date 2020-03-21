<?php

namespace App\Http\Controllers;

use App\OutletModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OutletController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $outlet = OutletModel::all();
        //$outlet = Auth::user()->dataOutlet();
        return view ('pages.Outlets.outlets', compact('outlet'));
    }

    
    public function create()
    {
        $address = $this->indonesia();
        return view('pages.Outlets.CreateOutlets', [
            'indonesia' => json_encode($address['indonesia'], true)
        ]);
    }

   
    public function store(Request $request)
    {
       $validasi = $request->validate([
        'outlet_name' => 'required',
        'outlet_address' => 'required',
        'outlet_city' => 'required',
        'outlet_province' => 'required',
        'outlet_contact' => 'required',
        'outlet_user' => 'required',
       ]);
       $outlets = OutletModel::create($validasi);

       return redirect('basil/outlets')->with('success', 'selamat data berhasil ditambah!');
    }

   
    public function show(OutletModel $outletModel)
    {
        //
    }

    
    public function edit(OutletModel $outletModel)
    {
        $address = $this->indonesia();
        return view ('pages/Outlets/EditOutlets'
            , compact('outletModel'), [
            'indonesia' => json_encode($address['indonesia'], true)
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

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table pegawai sesuai pencarian data
        $outlets = DB::table('outlet')
        ->where('outlet_name','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data pegawai ke view index
        return view('pages.Outlets.outlets',['outlet' => $outlets]);
 
    }

    private function indonesia () {
        $getData = json_decode(file_get_contents('http://128.199.145.173:8668/api/indonesia'), true);
        $address = [];
        
        if ($getData) {
            if (!empty($getData['data'])) {
                $all_indonesia = $getData['data'];
                $address['indonesia'] = $all_indonesia;
            }
        } 

        return $address;
    }
}
