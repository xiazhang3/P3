@extends('_master')


@section('title')
Project 3: Random User Generator
@stop

<script type="text/javascript">
$(document).ready(function(){
	console.log("ready!");
	$("#userForm").validate();
});
</script>

@section('content')
	{{ Form::open(array('url' => 'user', 'id' => 'userForm')) }}
		{{ Form::label('num_user', 'How many users do you want? ')}}
		{{ Form::text('num_user', '', array('class' => 'required', 'placeholder'=> 'put a number: 1 - 9')) }}
		<br>
		
		{{ Form::label('add_email', 'Add email address') }}
		{{ Form::checkbox('add_email') }}
		<br>

		{{ Form::label('add_address', 'Add address') }}
		{{ Form::checkbox('add_address') }}
		<br>

		{{ Form::submit('Submit') }}

	{{ Form:: close() }}

@stop