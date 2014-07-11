@extends('_master')


@section('title')
Project 3: Random Paragraph Generator
@stop



@section('content')

	{{ Form::open(array('url' => 'paragraph')) }}
		{{ Form::label('num_paragraph', 'How many paragraphs do you want?')}}
		{{ Form::text('num_paragraph') }}
		<br>
		
		{{ Form::submit('Submit') }}
	{{ Form:: close() }}
@stop

