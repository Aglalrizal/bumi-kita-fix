<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Nette\Utils\DateTime;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index(){
        $campaigns = Campaign::latest()->paginate(7);
        foreach ($campaigns as $key => $campaign) {
            $existingDateTime = new DateTime($campaign->hari_pelaksanaan);
            $today = new DateTime();
            $interval = $today->diff($existingDateTime);
            $daysDiff = $interval->format('%r%a');
            $campaigns[$key]['daysDiff'] = $daysDiff;
        }
        $title = '';
        // if(request('category')){
        //     $category = Category::firstWhere('slug', request('category'));
        //     $title = ' in '. $category->name;
        // }
        // if(request('author')){
        //     $author = User::firstWhere('username', request('author'));
        //     $title = ' by. '. $author->name;
        // }
        return view('campaigns', [
            'title'=>'All Campaign'.$title,
            'campaigns'=> $campaigns,
            // "campaigns"=> Campaign::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
        ]);
    }
    public function show(Campaign $campaign){
        return view('campaign', [
            'title' => $campaign->title,
            'campaign' => $campaign,
        ]);
    }
}
