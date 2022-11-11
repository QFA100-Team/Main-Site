@extends('Layouts.app')

@section('content')

@foreach($user as $user)@endforeach
{{$user->display_name}}


@endsection