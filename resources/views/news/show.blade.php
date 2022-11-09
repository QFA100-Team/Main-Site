@extends('Layouts.app')

<style>
    .rtn-btn {
  background-color: #343A40;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
    }
</style>

@section('content')

<!-- Change Collections to Objects -->
@foreach ($author as $author) @endforeach

<!-- Staff Position Code -->
@if ($author->staff_pos == "1") <?php $position = "Marketing Team"; $style = "color: #2072f5"; ?> @endif
@if ($author->staff_pos == "2") <?php $position = "Operations Team"; $style = "color: #2072f5";?> @endif
@if ($author->staff_pos == "3") <?php $position = "Founder"; $style = "color: #25c059";?> @endif
@if ($author->staff_pos == "4") <?php $position = "Technology Team"; $style = "color: #2072f5";?> @endif
@if ($author->staff_pos == "5") <?php $position = "Managing Director"; $style = "color: #7c20f5";?> @endif

<div class="row">
    <!-- Post Details -->
    <div class="col-md-8">
        <div class="card">
            <h5 class="card-header h5">{{$news->title}}</h5>
            <div class="card-body">
                <p class="card-text">{{nl2br($news->content)}}</p>
            </div>
        </div>
        <button class="rtn-btn" href="" style="margin-top: 30px;"><i class="fa fa-home"></i> Return to All News</button>
    </div>
    

    <!-- Author Details -->
    <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header h5">Post Details: </h5>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><b>Type:</b> <x>{{$news->news_type}}</li>
                      <li class="list-group-item"><b>Posted:</b> {{$news->created_at->format('d/m/Y')}}</li>
                      @empty($news->updated_at) @else <li class="list-group-item"><b>Last Updated:</b> {{$news->updated_at->format('d/m/Y')}}</li> @endempty
                    </ul>
                </div><br>

                <div class="card">
                    <h5 class="card-header h5">Author Details</h5>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><b>Name:</b> <a style="color:inherit; text-decoration: none;" target="_blank" href="{{config('app.url')}}/our-team/qfa{{$author->user_uid}}">{{$author->name}} - QFA{{$author->user_uid}}</a></li>
                      <li class="list-group-item"><b>Position:</b> <x style="{{$style}}">{{$position}}</x></li>
                    </ul>
                  </div>

    </div>  
    </div>
@endsection