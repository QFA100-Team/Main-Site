@extends('Layouts.app')

@section('content')
<h1>Create New News Article</h1><br>
{!! Form::open(['action' => 'App\Http\Controllers\NewsController@store']) !!}
    <div class="form-group">
        {{Form::label('title', 'News Subject')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('content', 'Content')}}
        {{Form::text('content', '', ['id' => 'detailededitor', 'class' => 'form-control', 'placeholder' => 'News Content'])}}
    </div>

    <form method="post">
        <textarea id="myeditorinstance">Hello, World!</textarea>
      </form>

    {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection