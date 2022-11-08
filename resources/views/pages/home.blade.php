@extends('Layouts.app')

@section('content')

{{URL::current()}} <br>
{{config('app.url')}}/home <br>

@if(Request::is('/*')) YES @endif <br>

Home Page for {{$var}}!!!
@endsection