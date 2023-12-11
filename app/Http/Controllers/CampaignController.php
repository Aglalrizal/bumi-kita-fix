<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\User;
use App\Models\Campaign;
use App\Models\Provinsi;
use Nette\Utils\DateTime;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index(){
        $title = '';
        if(request('kota')){
            $kota = Kota::firstWhere('slug', request('kota'));
            $title = ' di '. $kota->name;
        }
        if(request('organized')){
            $organized = User::firstWhere('username', request('organized'));
            $title = ' oleh '. $organized->name;
        }
        if(request('provinsi')){
            $provinsi = Provinsi::firstWhere('slug', request('provinsi'));
            $title = ' di '. $provinsi->name;
        }
        $campaigns = Campaign::selectRaw('*, DATEDIFF(hari_pelaksanaan, NOW()) AS daysDiff')
        ->orderByRaw('CASE WHEN DATEDIFF(hari_pelaksanaan, NOW()) > 0 THEN daysDiff ELSE 999999 END ASC')
        ->filter(request(['search', 'organized', 'kota', 'provinsi']))
        ->paginate(7)
        ->withQueryString();
        // $campaigns = Campaign::latest()->filter(request(['search', 'organized']))->paginate(7)->withQueryString();
        foreach ($campaigns as $key => $campaign) {
            $existingDateTime = new DateTime($campaign->hari_pelaksanaan);
            $today = new DateTime();
            $interval = $today->diff($existingDateTime);
            $daysDiff = $interval->format('%r%a');
            $campaigns[$key]['daysDiff'] = $daysDiff;
        }
        return view('campaigns', [
            'title'=>'Semua Kampanye'.$title,
            'campaigns'=> $campaigns
            // "campaigns"=> Campaign::latest()->paginate(7)->withQueryString(),
        ]);
    }
    public function show(Campaign $campaign){
        $existingDateTime = new DateTime($campaign->hari_pelaksanaan);
        $today = new DateTime();
        $interval = $today->diff($existingDateTime);
        $daysDiff = $interval->format('%r%a');
        $campaign['daysDiff'] = $daysDiff;
        $userId = auth()->user()->id;
        $user = User::find($userId);
        $registered = $user->volunteers()->where('campaign_id', $campaign->id)->exists();
        $users = $campaign->volunteers()->latest()->paginate(10);
        return view('campaign', [
            'title' => $campaign->title,
            'campaign' => $campaign,
            'registered' => $registered,
            'users' => $users
        ]);
    }
}
