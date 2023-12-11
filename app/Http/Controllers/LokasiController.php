<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Campaign;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function index(){
        $lokasi = Provinsi::has('kampanyes')->paginate(12);
        return view('lokasi.index', [
            'title'=>'Lokasi Kampanye Berdasarkan Provinsi',
            'lokasi'=>$lokasi
            
    ]);
}
    public function Provinsi(Provinsi $provinsi){
        $kota = Kota::has('campaign')->where('provinsi_id', $provinsi->id)->paginate(12);
        return view('lokasi.provinsi', [
            'title' => "Kampanye berdasarkan $provinsi->name",
            'kota'=> $kota

        ]);
    }
    // ->kampanye->load('organized', 'provinsi'),
}
