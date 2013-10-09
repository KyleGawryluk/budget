@extends('backend/layouts/default')


{{-- Page title --}}
@section('title')
Budget
@stop

{{-- Account page content --}}
@section('content')

<div class="row-fluid">
	<div class="span12">

		{{ Form::open(array('url' => 'accounts')) }}

		<div class="row-fluid">
			<div class="span12 thumbnail padded shadow">
				<p class="table-heading border-bottom">Create Account</p>

				<table class="table table-bordered">
					<tr>
						<td class="table-title">Name:</td>
						<td class="narrow_td">
							{{ Form::text('name',NULL,array('class'=>'input-block-level')) }}
							{{ $errors->first('name', '<span class="help-inline error">:message</span>') }}
						</td>
					</tr>
					<tr>
						<td class="table-title">Website:</td>
						<td class="narrow_td">
							{{ Form::text('website',NULL,array('class'=>'input-block-level')) }}
							{{ $errors->first('website', '<span class="help-inline error">:message</span>') }}
						</td>
					</tr>
					<tr>
						<td class="table-title">Balance:</td>
						<td class="narrow_td">
							{{ Form::text('balance',NULL,array('class'=>'input-block-level')) }}
							{{ $errors->first('balance', '<span class="help-inline error">:message</span>') }}
						</td>
					</tr>
					<tr>
						<td class="table-title">Amount Due:</td>
						<td class="narrow_td">
							{{ Form::text('amount_due',NULL,array('class'=>'input-block-level')) }}
							{{ $errors->first('amount_due', '<span class="help-inline error">:message</span>') }}
						</td>
					</tr>
					
				</table>

			</div>
		</div>
		<br>
		{{ Form::submit('Save',array('class'=>'btn')); }}

		<a href="{{ URL::to('accounts') }}" class="btn">Cancel</i></a>

		{{ Form::close() }}
	</div>
</div>

@stop