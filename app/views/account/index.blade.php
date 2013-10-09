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
			<div class="span12 thumbnail padded shadow">
				<p class="table-heading border-bottom">Accounts  <a href="{{URL::to('accounts/create')}}" class="pull-right"><small>Create Account</small></a></p>

				<table class="table table-bordered">
					<thead>
						<th>Name</th>
						<th>Website</th>
						<th>Amount Due</th>
						<th>Balance</th>
					</thead>
					@foreach ($accounts->accounts as $account)
					<tr>
						<td>{{$account->name}}</td>
						<td>{{$account->website}}</td>
						<td>{{$account->amount_due}}</td>
						<td>{{$account->balance}}</td>
					</tr>
					@endforeach				
				</table>
			</div>
		</div>
	</div>
</div>

@stop