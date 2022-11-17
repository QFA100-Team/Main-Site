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
        <textarea name="content">
            Content for Article.
         </textarea>
    </div>

    <input class="id" name="author_id"></input>
    {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection