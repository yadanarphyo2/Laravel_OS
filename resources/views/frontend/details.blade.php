@extends('frondendtemplate')
@section('content')
<div class="offset-2 col-lg-8">
	<h2 class="mt-5 text-center">Items Detail</h2>
	<div class="container my-5">
		<div class="row">
			<div class="col-md-5">
				<img src="{{asset($item->photo)}}" class="w-75 h-100">
			</div>
			<div class="col-lg-7">
				<div class="row">
					<div class="col-md-6 mt-2">
						<h5>NAME:</h5>
					</div>
					<div class="col-md-6 mt-2">
						<p>{{$item->name}}</p>
					</div>
					
					<div class="col-md-6 mt-2">
						<h5>CODE NO:</h5>
					</div>
					<div class="col-md-6 mt-2">
						<h5>{{$item->codeno}}</h5>
					</div>
					
					<div class="col-md-6 mt-2">
						<h5>PRICE:</h5>
					</div>
					<div class="col-md-6 mt-2">
						<h5>{{$item->price}}</h5>
					</div>
					
					<div class="col-md-6 mt-2">
						<h5>DESCRIPTION:</h5>
					</div>
					<div class="col-md-6 mt-2">
						<h5>{{$item->description}}</h5>
					</div>
					<button class="btn valbtn addtocart btn-outline-secondary" data-id="{{$item->id}}" data-name=" {{$item->name}}" data-photo="{{$item->photo}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}" data-brand="{{$item->brand_id}}" data-subcategory="{{$item->subcategory_id}}" data-description="{{$item->descriptin}}"><i class="fas fa-shopping-cart"></i><span class="qtycheck"></span></button>
					
					<a href="{{route('checkout')}}" class="btn valbtn btn-outline-secondary mx-3">buy now</a>
					
					</div>
					
				</div>
				
			</div>
			

		</div>
	</div>
</div>
@endsection
@section('script')
<script src="{{asset('frontend/js/script.js')}}"></script>
@endsection