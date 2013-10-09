@extends('backend/layouts/default')


{{-- Page title --}}
@section('title')
Budget
@stop

{{-- Account page content --}}
@section('content')

<div class="span12 thumbnail">
	{{ Form::open() }}
	Form
{{ Form::close() }}
</div>

@stop