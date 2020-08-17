@extends('backendtemplate')
@section('content')
<div class="container mb-5 text-center">
		<div class="row">
			<div class="col-md-12">
				<h3 class="pb-3 pt-5">CHECKOUT</h3>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Voucherno</th>
								<th>Oorder Date</th>
								<th>User</th>
								<th>Note</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							@php $i=1; @endphp
							@foreach($orders as $order)
								<tr>
									<td>{{$i++}}</td>
									<td>{{$order->voucherno}}</td>
									<td>{{$order->orderdate}}</td>
									<td>{{$order->user_id}}</td>
									<td>{{$order->note}}</td>
									<td>{{$order->total}}</td>

								</tr>
							@endforeach
							<tr></tr>
							
						</tbody>
					</table>
				</div>
			</div>
			
			
			
		</div>
	</div>
@endsection