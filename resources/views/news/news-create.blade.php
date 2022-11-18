@extends('Layouts.app')

@section('content')
<h1>Create New News Article</h1><br>
{!! Form::open(['action' => 'App\Http\Controllers\NewsController@store']) !!}
    <div class="form-group">
        <b>{{Form::label('title', 'News Subject')}}</b>
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>

    <div class="form-group">
        <b>{{Form::label('type', 'News Type')}}</b>
        <select class="form-control" name="type_id" id="type_id">
            @foreach($newstype as $newstype)
            <option value="{{$newstype->id}}">{{$newstype->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <b>{{Form::label('content', 'Content')}}</b>
        <textarea name="content">
            Content for Article.
         </textarea>
    </div>
    
    <!-- Hidden Details to Pass to Page -->
    <div class="form-group">
        <input type="hidden" name="author_id" id="author_id" value="{{Auth()->user()->id}}">
    </div>
    
    {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection