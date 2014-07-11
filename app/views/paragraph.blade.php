@extends('_master')


@section('title')
Project 3: Random Paragraph Generator
@stop



@section('content')

	{{ Form::open(array('url' => 'paragraph')) }}
		{{ Form::label('num_paragraph', 'How many paragraphs do you want?')}}
		{{ Form::text('num_paragraph') }}

		{{ Form::submit('Submit') }}
		
	{{ Form:: close() }}

	<br>
	<a href='{{ url("/") }}' alt = 'return to homepage'>Return to Homepage</a>

@stop

