@extends('frondendtemplate')
@section('content')
<div class="offset-2 col-lg-8,bk">

	<div id="checkout_body">
	<div class="container mb-5 text-center">
		<div class="row">
			<div class="col-md-12">
				<h3 class="pb-3 pt-5">CHECKOUT</h3>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Photo</th>
								<th>Item Name</th>
								<th>Price</th>

								<th>Qty</th>
								<th>Sub Total</th>
							</tr>
						</thead>
						<tbody id="tbody">
							
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-12 mt-3">
				<div class="form-group">
					<textarea class="form-control notes"  placeholder="Note here" ></textarea>
					
				</div>
			</div>
			<div class="offset-md-2 col-md-4 mt-3">
				<a href="{{route('home')}}" class="btn valbtn btn-outline-secondary"><<< Continue Shopping</a>

			</div>
			<div class="col-md-4 mt-3">
					@role('customer')
					<button class="btn valbtn btn-outline-secondary buy_now">buy now</button>
					@else
					<a href="{{route('login')}}" class="btn valbtn btn-outline-secondary buy_now">Login To Buy</a>
					@endrole
				
					{{-- echo "<a href='login.php' class='btn valbtn btn-outline-secondary'>Login To Buy</a>"; --}}
				
			
			</div>
		</div>
	</div>
</div>
</div>
@endsection
@section('script')
<script src="{{asset('frontend/js/script.js')}}"></script>
@endsection