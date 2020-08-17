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
								<th>Action</th>
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
									<td><a href="{{route('orders.show',$order->id)}}" class="btn btn-info">Detail</a>
										<form method="post" action="{{route('orders.destroy',$order->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
											@csrf
											@method('DELETE')
											<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
										</form>
								</td>
								</tr>

							@endforeach
							
						</tbody>

					</table>
					{{-- @foreach ($order->items as $order)
						<h1>{{$order->pivot->item_id}}</h1>
						<h1>{{$order->pivot->order_id}}</h1>
					@endforeach --}}
				</div>
			</div>
			
			
			
		</div>
	</div>
@endsection