@extends('Layouts.app')

@section('content')
<h1>Edit News Article</h1><br>
{!! Form::open(['action' => ['App\Http\Controllers\NewsController@update', $news->id]]) !!}
    <div class="form-group">
        <b>{{Form::label('title', 'News Subject')}}</b>
        {{Form::text('title', $news->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>

    <div class="form-group">
        <b>{{Form::label('type', 'News Type')}}</b>
        <select class="form-control" name="type_id" id="type_id">
            <option value="{{$news->type_id}}">{{$news->news_type->name}}</option>
            <option disabled value="">- - - Select Below if Changing News Type - - -</option>
            @foreach($newstype as $newstype)
            <option value="{{$newstype->id}}">{{$newstype->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <b>{{Form::label('content', 'Content')}}</b>
        <textarea name="content">
            {!!$news->content!!}
         </textarea>
    </div>
    
    <!-- Hidden Details to Pass to Page -->
    <div class="form-group">
        <input type="hidden" name="updated_at" id="updated_at" value="{{now()}}">
    </div>
    
    {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
    {{Form::hidden('_method', 'PUT')}}
    {!! Form::close() !!}
@endsection