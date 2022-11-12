@extends('Layouts.app')

@section('content')

@if ($message = Session::get('error'))
      <div class="alert alert-danger alert-block">
	      <button type="button" class="close" data-dismiss="alert">×</button>	
	      <strong>{{$message}}</strong>
      </div>
    @endif

<div class="row">
    <!-- Post Details -->
    <div class="col-md-8">
        <div class="card">
            <h5 class="card-header h5"> User Details</h5>
            <div class="card-body">
                <p class="card-text">
                    User Details for {{$user->display_name}}
                </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>VATSIM CID:</b> {{$user->vatsim_cid}} </li>
            </ul>
        </div><br>

        <div class="card">
            <h5 class="card-header h5">Events Attended</h5>
            <div class="card-body">
                <p class="card-text">
                    
                </p>
            </div>
        </div><br>

        <div class="card">
            <h5 class="card-header h5">News Posts</h5>
            <div class="card-body">
                <p class="card-text">
                    
                </p>
            </div>
        </div><br>
    </div>
    

    <!-- Author Details -->
    <div class="col-md-4">
                <div class="card"  style="text-align: center;">
                    <h5 class="card-header h5">VATSIM Stats </h5>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">{{$user->display_name}} - {{$user->vatsim_details->cid}}</li>
                      <li class="list-group-item"><b>Controller Rating: </b><span class="badge badge-pill {{$user->vatsim_details->atc_ratings->atc_badge}}">{{$user->vatsim_details->atc_ratings->atc_name}}</li>
                      <li class="list-group-item"><b>Pilot Rating: </b><span class="badge badge-pill {{$user->vatsim_details->pilot_ratings->pilot_badge}}">{{$user->vatsim_details->pilot_ratings->pilot_name}}</li>
                      <li class="list-group-item"><b>Region: </b><span class="badge badge-pill badge-secondary">{{$user->vatsim_details->region}}</li>
                      <li class="list-group-item"><b>Division: </b><span class="badge badge-pill badge-secondary">{{$user->vatsim_details->division}}</li>
                        @empty($user->vatsim_details->subdivision) @else <li class="list-group-item"><b>vACC: </b><span class="badge badge-pill badge-secondary">{{$user->vatsim_details->subdivision}}</li> @endempty
                      <li class="list-group-item"><a style="color:inherit; text-decoration: none;" target="_blank" href="https://stats.vatsim.net/stats/{{$user->vatsim_cid}}"><i>View VATSIM Stats</i></li>   
                    </ul>
                    
                </div><br>

                <!-- User is a Staff Member -->
                @empty($user->staff_details->position) @else 
                <div class="card">
                    <h5 class="card-header h5">Staff Details </h5>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><b>Position: </b> <x style="color: #{{$user->staff_details->title_color}}">{{$user->staff_details->title}}</x> <x></li>
                      <li class="list-group-item" style="20px;text-align: center;">
                        <span class="badge badge-pill badge-secondary">{{$user->vatsim_details->pilot_ratings->pilot_name}} </span>
                        <span class="badge badge-pill badge-secondary">{{$user->vatsim_details->region}} </span>
                        <span class="badge badge-pill badge-secondary">{{$user->vatsim_details->region}} </span>
                      </li>
                    </ul>
                </div><br>
                @endempty
    </div>  

</div>

@endsection