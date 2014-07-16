@extends('_master')


@section('title')
Project 3: Random Paragraph Generator
@stop

@section('script')

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	console.log("ready");
	var validation = $("#paraForm").validate({
		rules: {
			num_paragraph: { required: true, number: true, min: 1, max: 20}
		}
	});
});
</script>
@stop

@section('content')

	{{ Form::open(array('url' => 'paragraph', 'id' => 'paraForm')) }}
		{{ Form::label('num_paragraph', 'How many paragraphs do you want?')}}
		{{ Form::text('num_paragraph', '', array('placeholder'=> 'put a number: 1 - 20', 'id' => 'num_paragraph')) }}

		<ul class = 'errors'>
			@foreach ($errors->get('num_paragraph') as $message)
				<li> {{ $message }} </li>
			@endforeach
		</ul> 
		<br>
		{{ Form::submit('Submit') }}
		
	{{ Form:: close() }}

@stop




