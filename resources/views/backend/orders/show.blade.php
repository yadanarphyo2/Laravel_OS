@extends('backendtemplate')
@section('content')
<div class="container mb-5 text-center">
	 <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Order Detail</h1>
            <a href="{{route('orders.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i> back</a>
          </div>

        </div>
        <div class="container ">
        	<div class="row">
        		<div class="offset-md-2 col-md-8">
        			<div class="table-responsive">
        				<table class="table table-bordered bg-white shadow">
        					
        					<tr>
        						<td colspan="4" class="text-center pt-4"><h3>VALENTINO SHOP</h3><h5>Via Yurati,16/18, Milan,Italy</h5></td>
        					</tr>
        					
        					<tr>
        						
        						<td colspan="4">
        							<div class="row">
        								
        								<div class="col-md-3">Chasher<br><br>Voucher</div>

        								
        								<div class="col-md-3">
        									:&nbsp;
        									{{Auth::user()->name}}
        									<br>
                          					<br>
        									: 
        									{{$order->voucherno}}	
        									
        								</div>
        								<div class="col-md-3">Date<br><br>Order Time</div>
        								
        								<div class="col-md-3">
        									: <?php $d=date('Y-m-d');
        									echo $d; ?>
        								<br>
        								<br>
        								:
        								{{$order->created_at}}
        								</div>

        							
        							</div>
        						</td>

        					</tr>
        					
        					
        					<tr>
        						<th>Items Name</th>
        						<th>Price</th>
        						<th>QTY</th>
        						<th>Amount</th>
        					</tr>
        					@foreach ($order->items as $order1)
        					<tr>
        						<td><b style="color: #3e4975;">{{$order1->name}}</b></td>
        						<td>{{$order1->price}}</td>
        						<td>{{$order1->pivot->qty}}</td>
        						<td>{{$order1->pivot->qty*$order1->price}}</td>
        					<tr>
        						@endforeach
        						<td colspan="4">
        							<div class="row">
        							<div class="col-md-8">Total Amount</div>
        							<div class="col-md-2">:</div>
        							<div class="col-md-2">{{$order->total}}</div>
        						</div>
        						</td>
        					</tr>
        					
        				</table>
        			</div>
        		</div>
        	</div>
        </div>
	</div>
@endsection