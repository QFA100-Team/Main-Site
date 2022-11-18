@extends('Layouts.app')

@section('content')

<div class="row">
    <!-- Post Details -->
    <div class="col-md-8">
        <div class="card">
            <h5 class="card-header h5">Events Attended</h5>
            <div class="card-body">
                <p class="card-text">
                    
                </p>

                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th width="35%">Name</th>
                          <th width="25%">Start Time</th>
                          <th width="25%">End Time</th>
                          <th width="15%">Link</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($itteration as $itteration)
                        <?php $event_details = $user->event_attendance[$loop->index]->event_details?>
                        <tr>
                            <td>{{$event_details->name}}</td>
                            <td>{{date('d/m/Y', strtotime($event_details->start_date))}}</td>
                            <td>{{date('d/m/Y', strtotime($event_details->end_date))}}</td>
                            <td><a href="/event/{{$event_details->event_url}}" class="badge badge-primary">Link</a></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>

            </div>
        </div><br>

        @empty($user->staff_details->position) @else 
        <div class="card">
            <h5 class="card-header h5">News Posts</h5>
            <div class="card-body">
              @foreach($newsitteration as $newsitteration)
              <?php $newsposted = $user->news_articles[$loop->index]?>
              <a class="custom-card" href="/news/{{$newsposted->id}}" style="color:inherit; text-decoration: none;">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <h5 class="card-title">{{$newsposted->title}}</h5>
                      <small class="float-right text-muted">Posted on the {{$newsposted->created_at->format('d/m/Y')}}</small>  
                      <p class="card-subtitle"><b>Catagory: </b><x style="color: #{{$newsposted->news_type->color}}">{{$newsposted->news_type->name}}</x></p>
                    </li>
                  </ul>
                </a>
              @endforeach
            </div>
            
        </div>
        @endempty
              
             

        <br>
    </div>    

    <!-- Author Details -->
        <div class="col-md-4">
            <!-- User is a Staff Member -->
                @empty($user->staff_details->position) @else 
                <div class="card"  style="text-align: center;">
                    <h5 class="card-header h5">Staff Details </h5>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <x style="color: #{{$user->staff_details->title_color}}">{{$user->staff_details->title}}</x></li>
                    @empty($user->staff_details->tech_dep) @else <li class="list-group-item" style="20px;text-align: center;"><span class="badge badge-pill badge-primary">Technology</span></li> @endempty
                    @empty($user->staff_details->ops_dep) @else <li class="list-group-item" style="20px;text-align: center;"><span class="badge badge-pill badge-primary">Operations</span></li> @endempty
                    @empty($user->staff_details->marketing_dep) @else <li class="list-group-item" style="20px;text-align: center;"><span class="badge badge-pill badge-primary">Marketing</span></li> @endempty
                    </ul>
                </div><br>
                @endempty
                
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
                </div>
            <br>
        </div>  
</div>

@endsection