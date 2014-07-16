@extends('_master')


@section('title')
Project 3: Random User Generator
@stop

@section('script')

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	var validation = $("#userForm").validate({
		rules: {
			num_user: { required: true, number: true, min: 1, max: 100}
		}
	});
});
</script>
@stop

@section('content')
	{{ Form::open(array('url' => 'user', 'id' => 'userForm')) }}
		{{ Form::label('num_user', 'How many users do you want? ')}}
		{{ Form::text('num_user', '', array('id' => 'num_user', 'placeholder'=> 'put a number: 1 - 100')) }}
		<ul class = 'errors'>
			@foreach ($errors->get('num_user') as $message)
				<li> {{ $message }} </li>
			@endforeach
		</ul> 

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