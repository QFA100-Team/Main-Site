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

{{$news}}
<br><br>
{{$author}}
<br><br>

<!-- Change Collections to Objects -->
@foreach ($author as $author) @endforeach


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
                      <li class="list-group-item"><b>Type:</b> {{$news->news_type}}</li>
                      <li class="list-group-item"><b>Posted:</b> {{$news->created_at}}</li>
                    </ul>
                </div><br>

                <div class="card">
                    <h5 class="card-header h5">Author Details</h5>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><b>Name:</b> <a style="color:inherit; text-decoration: none;" target="_blank" href="{{config('app.url')}}/our-team/qfa{{$author->user_uid}}">{{$author->name}} - QFA{{$author->user_uid}}</a></li>
                      <li class="list-group-item"><b>Staff Position: </b> {{$author->staff_pos}} </li>
                    </ul>
                  </div>

    </div>  
    </div>
@endsection