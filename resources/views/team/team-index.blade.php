@extends('Layouts.app')

<style>
    /* Three columns side by side */
    .column {
      float: left;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;
    }
    
    /* Display the columns below each other instead of side by side on small screens */
    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }
    
    /* Add some shadows to create a card effect */
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    
    /* Some left and right padding inside the container */
    .container {
      padding: 0 16px;
    }
    
    /* Clear floats */
    .container::after, .row::after {
      content: "";
      clear: both;
      display: table;
    }
    
    .title {
      color: grey;
    }
    
    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
    }
    
    .button:hover {
      background-color: #555;
    }
    </style>
@section('content')
<h1>Meet the Team</h1>
<p>The QFA100 Team is made up of a vast number of team members, of which all provide differering staffing capacity within the QFA100 Team profile. Every member of QFA100 is a vital, and important member of the team, and we would not be where we are right now without their time and dedication.
    <br>
</p><br>

<!-- Staff Section -->
<h1>Staff</h1>
<p>Below shows the vast number of members, whom dedicate their time to make this team the best it can be!</p>
<div class="row" style="text-align: center;">
  @foreach($staff as $staff)
  @if ($staff->staff_pos == "1") <?php $position = "Marketing Team"; $style = "color: #2072f5"; ?> @endif
  @if ($staff->staff_pos == "2") <?php $position = "Operations Team"; $style = "color: #2072f5";?> @endif
  @if ($staff->staff_pos == "3") <?php $position = "Founder"; $style = "color: #25c059";?> @endif
  @if ($staff->staff_pos == "4") <?php $position = "Technology Team"; $style = "color: #2072f5";?> @endif
  @if ($staff->staff_pos == "5") <?php $position = "Managing Director"; $style = "color: #7c20f5";?> @endif
  <div class="col-sm-4 py-2">
    <div class="card card-body h-100">
      <h2>{{$staff->display_name}}</h2>
      <p class="title">{{Str::upper($staff->u_callsign)}} - <x style="{{$style}}">{{$position}}</x></p>
      <p>{{$staff->staff_desc}}</p>
      <a href="our-team/{{$staff->u_callsign}}"><button class="button">View Profile</button></a>
    </div>
  </div>
  @endforeach
</div><br><br>

<!-- List of Pilots Section -->
  <h1>Pilots</h1>
  <p>Complete list of Pilots who are apart of this team.</p>
<div class="row" style="text-align: center;">
  @foreach($pilot as $pilot)
  <div class="col-sm-3 py-2">
    <div class="card card-body h-100">
      <h3>{{$pilot->display_name}}</h3>
      <p class="title">{{Str::upper($pilot->u_callsign)}}</p>
      <a href="our-team/{{$pilot->u_callsign}}"><button class="button">View Profile</button></a>
    </div>
  </div>
  @endforeach
</div>
       

      

@endsection