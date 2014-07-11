@extends('_master')


@section('title')
Project 3: Random User Generator
@stop



@section('content')
	{{ Form::open(array('url' => 'user')) }}
		{{ Form::label('num_user', 'How many users do you want? ')}}
		{{ Form::text('num_user') }}
		<br>
		
		{{ Form::label('add_email', 'Add email address') }}
		{{ Form::checkbox('add_email') }}
		<br>

		{{ Form::label('add_address', 'Add address') }}
		{{ Form::checkbox('add_address') }}
		<br>

		{{ Form::submit('Submit') }}

	{{ Form:: close() }}

	<br>
	<a href='{{ url("/") }}' alt = 'return to homepage'>Return to Homepage</a>

@stop