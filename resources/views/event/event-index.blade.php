@extends('Layouts.app')

@section('content')
@foreach($itteration as $itteration)
<?php $events = $event[$loop->index] ?>
<a href="/event/{{$events['event_url']}}">{{$events['name']}}</a><br>
@endforeach
@endsection