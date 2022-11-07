@extends('Layouts.app')

@section('content')
QFA100 News Page

<div class="row">
    <div class="col-12">
        <h1>{{config('app.name')}} News</h1>
        <p style="padding-bottom: 50px;">This page is for any and all updates to the QFA100 Team. Please check here regulary if you would like to remain updated!</p>
    </div>
</div>

<div class="row">
    <div class="col-md-9">
        @if(count($news) > 0)
            @foreach ($news as $post)
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{$post->title}}</h2>
                        <h6 class="card-subtitle">{{$post->author}} - {{$post->created_at}}</h6>
                        <p class="card-text">{{$post->content}}</p>
                    </div>
                </div> 
            @endforeach
            {{$news->links()}}
        @else
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">No News</h2>
                <h6 class="card-subtitle">Check Back Soon!</h6>
            </div>
        </div> 
        @endif
    </div>

    <div class="col-md-3">
        <p>This will be where admin actions can happen.</p>
    </div>
</div>


@endsection