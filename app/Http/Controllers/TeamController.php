<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Staff;
use App\Models\EventAttendance;
use App\Models\EventDetails;
use App\Models\VATSIMUsers;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = User::all()->where('is_staff', 1);
        $pilot = User::all()->where('is_pilot', 1)->where('is_staff', 0);
        //return User::with('event_attendance')->with('event_details')->get();
        return view('team.team-index')->with('staff', $staff)->with('pilot', $pilot);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $user = User::find($id);
        if (is_null($user)) return redirect('/our-team')->with('error', 'Team Member could not be found. Please try again.');
        $event = EventDetails::all();
        
        $itteration = $user->event_attendance;
        $newsitteration = $user->news_articles;
        //return $itteration;
        //return $newsitteration;
        //return User::with('news_articles')->get();
        
        return view ('team.team-show')->with('user', $user)->with('event', $event)->with('itteration', $itteration)->with('newsitteration', $newsitteration);
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
