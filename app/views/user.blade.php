@extends('_master')


@section('title')
Project 3: Random User Generator
@stop



@section('content')
	{{ Form::open(array('url' => 'user')) }}
		{{ Form::label('num_user', 'How many users do you want? ')}}
		{{ Form::text('num_user') }}

		{{ Form::submit('Submit') }}

	{{ Form:: close() }}

@stop