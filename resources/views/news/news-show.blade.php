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

<div class="row">
    <!-- Post Details -->
    <div class="col-md-8">
        <div class="card">
            <h5 class="card-header h5">{{$news->title}}</h5>
            <div class="card-body">
                <p class="card-text">{!!$news->content!!}</p>
            </div>
        </div>

        <div style="margin-top: 30px;">
          <!-- Return to All News Button -->
          <button class="btn btn-secondary"><a href="{{config('app.url')}}/news" style="color:inherit; text-decoration: none;">Return to All News</a></button>

          @if(auth()->user()) @if(auth()->user()->staff_details->power > 1)
          <!-- Delete Button -->
          <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#exampleModal" style="margin-left: 10px;"> Delete </button>
          <!-- Delete Modal w/ Code -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Delete Article</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Are you sure you wish to delete this news article? <br><br><b>THIS ACTION CAN NOT BE UNDONE.</b>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  {!!Form::open(['action' => ['App\Http\Controllers\NewsController@destroy', $news->id], 'class' => 'pull-right' ])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                  {!!Form::close()!!}
                </div>
              </div>
            </div>
          </div>

          <!-- Edit Button -->
          <button class="btn btn-primary pull-right"><a href="{{$news->id}}/edit" style="color:inherit; text-decoration: none;">Edit</a></button> @endif @endif
        </div>
        
    </div>
    

    <!-- Author Details -->
    <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header h5">Post Details: </h5>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><b>Type:</b> <x style="color: #{{$news->news_type->color}}">{{$news->news_type->name}}</li>
                      <li class="list-group-item"><b>Posted:</b> {{$news->created_at->format('d/m/Y')}}</li>
                      @empty($news->updated_at) @else <li class="list-group-item"><b>Last Updated:</b> {{$news->updated_at->format('d/m/Y')}}</li> @endempty
                    </ul>
                </div><br>

                <div class="card">
                    <h5 class="card-header h5">Author Details</h5>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><b>Name:</b> <a style="color:inherit; text-decoration: none;" target="_blank" href="{{config('app.url')}}/our-team/{{$news->author->id}}">{{$news->author->display_name}} - {{Str::upper($news->author->u_callsign)}}</a></li>
                      <li class="list-group-item"><b>Position:</b> <x style="color: #{{$news->author_roles->title_color}}">{{$news->author_roles->title}}</x></li>
                    </ul>
                  </div>

    </div>  
    </div>
@endsection