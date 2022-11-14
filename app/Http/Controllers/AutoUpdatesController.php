<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\VATSIMUser;
use App\Models\VATSIMOnline;

//All of these jobs are executed by cron-jobs.org to save on Website Resources. Access from Joshua Micallef.

class AutoUpdatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vatsim_user_update()
    {
        $user = User::all();
        ini_set('max_execution_time', 6000);
        foreach($user as $user){
            $id = $user->vatsim_cid;

            //return $vatsim_api;
            $vatsim_api = Http::get("api.vatsim.net/api/ratings/$id")->json();


            VATSIMUser::where('cid', $id)->update([
                'atc_rating' => $vatsim_api['rating'],
                'pilot_rating' => $vatsim_api['pilotrating'],
                'region' => $vatsim_api['region'],
                'division' => $vatsim_api['division'],
                'subdivision' => $vatsim_api['subdivision'],
                'last_rating_change' => $vatsim_api['lastratingchange'],
            ]);
        };
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function users_online()
    {
        /*$user = User::all();
        $i = -1;

        $online_data = Http::get("https://data.vatsim.net/v3/vatsim-data.json")->json();
        $online_pilot = $online_data['pilots'];
        $unique_users = $online_data['general']['unique_users'];
        

        foreach($online_pilot as $pilot){
            //Grab All
            $cid = $online_pilot;
            dd($cid);
        }*/
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
