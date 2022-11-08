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
<div class="row" style="text-align: center;">
  <div class="col-sm-4 py-2">
    <div class="card card-body h-100">
      <h2>Joshua Micallef</h2>
      <p class="title">QFA1 - Managing Director</p>
      <p>Managing Director of the QFA100 Team. Responsible for the operation, and organisation of the team.</p>
      <a href="our-team/qfa1"><button class="button">View Profile</button></a>
    </div>
  </div>

  <div class="col-sm-4 py-2">
    <div class="card card-body d-flex flex-column h-100">
      <h2>Linn Money</h2>
      <p class="title">QFA2 - Founder</p>
      <p>Founder of the QFA100 Team in 2019 - Take a look at <a href="{{config('app.url')}}/about-us">About Us</a> for more!</p>
      <a href="our-team/qfa2"><button class="button">View Profile</button></a>
    </div>
  </div>

  <div class="col-sm-4 py-2">
    <div class="card card-body h-100">
      <h2>Chris Gardiner</h2>
      <p class="title">QFA3 - Web Developer</p>
      <p>Chris is a vital member of the Web Development Team, and has been responsible for a large number of projects.</p>
      <a href="our-team/qfa1"><button class="button">View Profile</button></a>
    </div>
  </div>
</div><br><br>

<!-- List of Pilots Section -->
  <h1>Pilots</h1>
  <p>Complete List of Pilots for QFA100 Team!</p>
<div class="row" style="text-align: center;">
  <div class="col-sm-3 py-2">
    <div class="card card-body h-100">
      <h3>Joshua Micallef</h3>
      <p class="title">QFA1</p>
      <a href="our-team/qfa1"><button class="button">View Profile</button></a>
    </div>
  </div>
  <div class="col-sm-3 py-2">
    <div class="card card-body h-100">
      <h3>Linn Money</h3>
      <p class="title">QFA2</p>
      <a href="our-team/qfa2"><button class="button">View Profile</button></a>
    </div>
  </div>
  <div class="col-sm-3 py-2">
    <div class="card card-body h-100">
      <h3>Chris Gardiner</h3>
      <p class="title">QFA3</p>
      <a href="our-team/qfa3"><button class="button">View Profile</button></a>
    </div>
  </div>
  <div class="col-sm-3 py-2">
    <div class="card card-body h-100">
      <h3>Alex DS</h3>
      <p class="title">QFA4</p>
      <a href="our-team/qfa4"><button class="button">View Profile</button></a>
    </div>
  </div>
  <div class="col-sm-3 py-2">
    <div class="card card-body h-100">
      <h3>Jack Donegan</h3>
      <p class="title">QFA5</p>
      <a href="our-team/qfa5"><button class="button">View Profile</button></a>
    </div>
  </div>
  <div class="col-sm-3 py-2">
    <div class="card card-body h-100">
      <h3>Luke Maynard</h3>
      <p class="title">QFA6</p>
      <a href="our-team/qfa6"><button class="button">View Profile</button></a>
    </div>
  </div>
</div>
       

      

@endsection