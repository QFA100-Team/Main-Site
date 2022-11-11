@extends('Layouts.app')

<script>
    a.custom-card, a.custom-card:hover {
        color: inherit;
    }
</script>
@section('content')

<div class="row">
    <div class="col-12" style="padding-bottom: 50px;">
        <h1>{{config('app.name')}} News</h1>
        <p>This page is for any and all updates to the QFA100 Team. Please check here regulary if you would like to remain updated!<br>
        Options to remain updated include the following:
        <ul>
            <li>Subscribing to {{config('app.name')}} via the button on the right, to be emailed when we publish news.</li>
            <li>Checking this page.</li>
        </ul>
        Looking forward to keeping you all updated!<br><b><br>
        Regards<br>
        Joshua Micallef<br>
        Managing Director, {{config('app.name')}}</b></p>
    </div>
</div>

<div class="row">
    <div class="col-md-9">
        <!-- News Panel -->
            @if(count($news) > 0)
                @foreach ($news as $post)

                    <a class="custom-card" href="/news/{{$post->id}}" style="color:inherit; text-decoration: none;">
                    <div class="card" style="margin-bottom: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-subtitle"><b>Catagory: </b>{{$post->news_type}}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Posted By {{$post->author->display_name}} on the {{$post->created_at}}</small>
                    </div>
                    </div>
                    </a>
                @endforeach
            {{$news->links()}}
        @endif        
    </div>

    <div class="col-md-3">
            <div class="card">
                <h5 class="card-header h5">News Options</h5>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><b><a style="color:inherit; text-decoration: none; disabled" href="#/subscribe">Email Notify</a></b> </li>
                </ul>
            </div><br>        
    </div>
</div>


@endsection