<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function provinsi(){
        $data = Provinsi::where('name', 'LIKE', '%'.request('q').'%')->paginate(10);

        return response()->json($data);
    }

    public function kota($id){
        $data = Kota::where('provinsi_id', $id)->where('name', 'LIKE', '%'.request('q').'%')->paginate(10);

        return response()->json($data);
    }
}
