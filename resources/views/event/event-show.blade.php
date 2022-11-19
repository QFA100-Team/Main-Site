@extends('Layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12" style="text-align: center">
        <div class="card">
            <h5 class="card-header h5"><b>{{$event->name}}</b> - {{config('app.name')}}</h5>
            <div class="card-body">
                <b><u>Event Description</u></b><br>
                {!!$event->description!!}
            </div>
        </div>
    </div>
</div><br>

@if($event->event_type->has_roster == 1)
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header h5">Flight Schedule</h5>
            <div class="card-body">
                See all available schedules for this event below!<br><br>
                <table class="table" style="text-align: center; font-size: 12px;">
                    <thead>
                      <tr>
                        <th width="5%">#</th>
                        <th width="5%">Origin</th>
                        <th width="5%">Destination</th>
                        <th width="15%">Dep Time</th>
                        <th width="15%">Arr Time</th>
                        <th width="10%">Captain</th>
                        <th width="35%">Route</th>
                        <th width="10%">Distance</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($itteration as $itteration)
                        <?php $roster = $event->roster_schedule[$loop->index]?>
                      <tr>
                          <td>{{$roster->flight_id}}</td>
                          <td>{{$roster->origin}}</td>
                          <td>{{$roster->destination}}</td>
                          <td>{{$roster->dep_time}}</td>
                          <td>{{$roster->arr_time}}</td>
                            <td>
                                <!-- Pilot Assigned Information -->
                                @if(is_null($roster->pilot_id))
                                @if(Auth()->user())
                                <!-- Slot is Available, and user is signed in -->
                                <form action="/admin/updates/schedule-add" method="GET">
                                    <input type="hidden" name="pilot_id" value="{{auth()->user()->id}}">
                                    <input type="hidden" name="id" value="{{$roster->id}}">
                                    <input type="hidden" name="url" value="{{$event->event_url}}">
                                    <input type="submit" value="Submit">
                                </form>
                                <a href="#/pick-up-slot">Pick Up Slot</a>
                                @else
                                <!-- Slot is Available, and user not signed in -->
                                Available
                                @endif
                                @else
                                <!-- Slot is assigned -->
                                {{$roster->assigned_pilot->display_name}}
                                
                                @if(Auth()->user())
                                @if(auth()->user()->id == $roster->pilot_id)
                                <a style="color:red; text-decoration: none;" href="#/user-remove"><i class="fa fa-times"></i></a>
                                @else
                                @if(auth()->user()->staff_details->power > 2)
                                <a style="color:rgb(100, 0, 0); text-decoration: none;" href="#/admin-remove-user"><i class="fa fa-times"></i></a>
                                @endif
                                @endif
                                @endif


                                @endif
                                
                            </td>
                          <td>{{$event->roster_schedule[0]->route}}</td>
                          <td>{{$event->roster_schedule[0]->distance}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endif

@endsection