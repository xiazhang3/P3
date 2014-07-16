@extends('_master')


@section('title')
Project 3: Random Paragraph Generator
@stop



@section('content')

	{{ Form::open(array('url' => 'paragraph', 'id' => 'paraForm')) }}
		{{ Form::label('num_paragraph', 'How many paragraphs do you want?')}}
		{{ Form::text('num_paragraph', '', array('placeholder'=> 'put a number: 1 - 9', 'class' => 'required')) }}

		{{ Form::submit('Submit') }}
		
	{{ Form:: close() }}

@stop

<script type="text/javascript">
$(document).ready(function(){
	$("#paraForm").validate();
});
</script>

