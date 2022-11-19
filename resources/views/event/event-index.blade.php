@extends('Layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card" style="text-align:center;">
            <h5 class="card-header h5">{{config('app.name')}} Events</h5>
            <div class="card-body">
                The {{config('app.name')}} hosts multiple events throughout each year, and these can be found below!<br><br>
                WorldFlight is {{config('app.name')}}'s major event, and these events involve a Flight Roster which is accessable from the individual events link.<br><br>
                <b>WorldFlight 2019-2022 Event Details are unavailable on this page.</b> These details will be populated at a later date with historical information.<br><br>
                Users can bid for flights on particular events. These can be found in the individual event pages.
            </div>
        </div>
    </div>
</div>

<div class="row" style="padding-top: 50px;">
    <table class="table">
        <thead>
          <tr>
            <th width="30%">Name</th>
            <th width="20%">Type</th>
            <th width="20%">Start Time</th>
            <th width="20%">End Time</th>
            <th width="10%">Link</th>
          </tr>
        </thead>
        <tbody>
            @foreach($itteration as $itteration)
            <?php $events = $event[$loop->index] ?>
          <tr>
              <td>{{$events->name}}</td>
              <td style="color: #{{$events->event_type->type_color}}">{{$events->event_type->type_name}}</td>
              <td>{{$events->start_date}}</td>
              <td>{{$events->end_date}}</td>
              <td><a href="/event/{{$events['event_url']}}" class="badge badge-primary">Link</a></td>
            </tr>
            @endforeach
        </tbody>
      </table>
      {{$event->links()}}
</div>
@endsection