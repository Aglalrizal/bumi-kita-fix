<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Campaign;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = auth()->user()->id;
        $campaignId = $request->campaign_id;
        $user = User::find($userId);
        $campaign = Campaign::find($campaignId);
    if ($user && $campaign) {
        if (!$user->volunteers()->where('campaign_id', $campaignId)->exists()) {
            $user->volunteers()->syncWithoutDetaching([$campaignId]);
                return back()->with('success', 'Berhasil bergabung!');
            } else {
                return back()->with('fail','Gagal bergabung!');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Volunteer $volunteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Volunteer $volunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Volunteer $volunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Volunteer $volunteer)
    {
        //
    }
}
