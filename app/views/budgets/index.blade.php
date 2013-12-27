@extends('backend/layouts/default')


{{-- Page title --}}
@section('title')
Budget
@stop

{{-- Account page content --}}
@section('content')

<div class="row-fluid">
	<div class="span12">
		<div class="row-fluid">
			<div class="span12 thumbnail padded">
				<p class="table-heading border-bottom">Budget Information</p>
				<table class="table table-bordered">
					{{Form::open()}}
					<tr>
						<td class="table-title">Current Balance</td>
						<td>
							{{Form::text('balance', null, ['class'=>'input-block-level'])}}
						</td>
					</tr>
					<tr>
						<td class="table-title">Budget Start Date</td>
						<td>
							{{Form::text('start_date', null, ['class'=>'input-block-level'])}}
						</td>
					</tr>
										<tr>
						<td class="table-title">Pay Periods</td>
						<td>
							{{Form::text('pay_periods', null, ['class'=>'input-block-level'])}}
						</td>
					</tr>
					<tr>
						<td colspan="2">
							{{Form::submit('Save', ['class'=>'btn btn-success'])}}
						</td>
					</tr>

				</table>
			</div>
		</div>
		<br>
		<div class="row-fluid">
			@for ($i=1; $i < 17; $i++)

			<div class="span6 thumbnail padded" id="{{$i}}">
				<table class="table table-bordered">
					<tr>
						<td class="table-title-larger">Beginning Balance</td>
						<td id="begin_bal{{$i}}">85312</td>
					</tr>
					<tr>
						<td class="table-title-larger">Pay Date</td>
						<td>{{ date('m-d-y', strtotime(($i*2).' Week'))}}</td>
					</tr>
					<tr>
						<td class="table-title-larger">Pay Amount</td>
						<td>1038</td>
					</tr>
				</table>

				<table class="table table-bordered">
					<th>Account</th>
					<th>Amount Due</th>
					<th>Amount Paid</th>
					<th>Action</th>
					@foreach ($accounts->accounts as $account)
					<tr>
						{{Form::open()}}
						<td>{{$account->name}}</td>
						<td id="{{$account->name}}{{$i}}">{{$account->amount_due}}</td>
						<td></td>
						<td><button id="pay{{$i}}" class="btn btn-success">Pay</button></td>
						{{Form::close()}}
					</tr>
					@endforeach
					<tr>
						<td>Cash</td>
						<td colspan="2"><input type="text" class="input-block-level" id="cash{{$i}}"></td>
						<td><button class="btn">Add</button></td>
					</tr>
					<tr>
						<td>Savings</td>
						<td colspan="2"><input type="text" class="input-block-level" id="cash{{$i}}"></td>
						<td><button class="btn">Add</button></td>
					</tr>
				</table>
				<table class="table table-bordered">
					<tr>
						<td class="table-title-larger">Ending Balance</td>
						<td id="end_bal{{$i}}">85312</td>
					</tr>

				</table>
			</div>
			@if ($i %2 == 0)
		</div>
		<br>
		<div class="row-fluid">
			@endif
			@endfor
		</div>

	</div>
</div>

@stop