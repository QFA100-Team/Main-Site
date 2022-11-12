@extends('Layouts.app')

@section('content')



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
            <h5 class="card-header h5"></h5>
            <div class="card-body">
                <p class="card-text">
                    
                </p>
            </div>
        </div><br>
    </div>
    

    <!-- Author Details -->
    <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header h5">VATSIM Stats </h5>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><b>CID: </b><span class="badge badge-pill badge-info">{{$user->vatsim_details->cid}}</span></li>
                      <li class="list-group-item"><b>Controller Rating: </b><span class="badge badge-pill badge-secondary">{{$user->vatsim_details->atc_rating}}</li>
                      <li class="list-group-item"><b>Pilot Rating: </b><span class="badge badge-pill badge-secondary">{{$user->vatsim_details->pilot_rating}}</li>
                      <li class="list-group-item"><b>Region: </b><span class="badge badge-pill badge-secondary">{{$user->vatsim_details->region}}</li>
                      <li class="list-group-item"><b>Division: </b><span class="badge badge-pill badge-secondary">{{$user->vatsim_details->division}}</li>
                        @empty($user->vatsim_details->subdivision) @else <li class="list-group-item"><b>vACC: </b><span class="badge badge-pill badge-secondary">{{$user->vatsim_details->subdivision}}</li> @endempty
                    </ul>
                </div><br>

                <!-- User is a Staff Member -->
                @empty($user->staff_details->position) @else 
                <div class="card">
                    <h5 class="card-header h5">Staff Details </h5>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><b>Position:</b> <x></li>
                      <li class="list-group-item"><b>Posted:</b> </li>
                    </ul>
                </div><br>
                @endempty
    </div>  

</div>

@endsection