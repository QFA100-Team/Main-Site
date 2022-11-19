<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventDetails;
use App\Models\EventSchedule;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = EventDetails::orderBy('id', 'desc')->simplePaginate(4);

        $itteration = $event;
        //return EventSchedule::with('assigned_pilot')->get();
        return view('event.event-index')->with('event', $event)->with('itteration', $itteration);;
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
        $event = EventDetails::all()->where('event_url', $id)->flatten();
        $itteration = $event[0]->roster_schedule;
        //return $itteration;

        //return if event doesnt exist;
        if (count($event) == 0) return redirect('/event')->with('error', 'Event could not be found. Please try again.');
        
        //remove array constraint
        $event = $event[0];
        return view('event.event-show')->with('event', $event)->with('itteration', $itteration);
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

    //Schedule Add for Events Rostering
    public function schedule_add(Request $request)
    {
        $schedule = EventSchedule::find($_GET['id']);
        $schedule->pilot_id = $request->input('pilot_id');
        $schedule->save();
        
        //return redirect("{{$_GET['url']}}")->with('success', 'News Article Updated');
    }
}
