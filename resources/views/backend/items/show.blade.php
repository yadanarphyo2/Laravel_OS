@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Detail (Your UI)</h2>
	<div class="container">
		<div class="row">
			<div class="col-md-5">

				<img src="{{asset($item->photo)}}" class="w-75 h-100" > 
			</div>
			<div class="col-md-7">
				<div>NAME<span class="float-right">:{{$item->name}}<span></div>
				<hr>
				@if($item->discount)
				<h2><p>PRICE:<del>{{$item->price}}</del> {{$item->discount}}</p></h2>
				
				@else
				<h2><p>PRICE: {{$item->price}}</p></h2>
				@endif
				<h2><p>CODENO: {{$item->codeno}}</p></h2>
				<h2><p>DESCRIPTION: {{$item->description}}</p></h2>
				<div><span>BRAND NAME: </span>{{$item->brand->name}}</div>
				<hr>
				<div>SUBCATEGORY NAME<span class="float-right">:{{$item->subcategory->name
				}}</span></div>
				<hr>
				
			</div>

		</div>
	</div>
</div>
@endsection