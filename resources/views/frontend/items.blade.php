@extends('frondendtemplate')
@section('content')
<div class="col-lg-9">
	<h2 class="my-4 text-center"> Products</h2>
        <div class="row">

          @foreach($items as $item)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset($item->photo)}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{$item->name}}</a>
                </h4>
                <h5>{{$item->price}}MMK</h5>
                <p class="card-text">{{$item->description}}</p>
              </div>
              <div class="card-footer">
                <button class="btn valbtn addtocart btn-outline-secondary" data-id="{{$item->id}}" data-name=" {{$item->name}}" data-photo="{{$item->photo}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}" data-brand="{{$item->brand_id}}" data-subcategory="{{$item->subcategory_id}}" data-description="{{$item->descriptin}}"><i class="fas fa-shopping-cart"></i><span class="qtycheck"></span></button>
                <a href="{{route('itemdetail',$item->id)}}" class="btn btn-outline-primary">Detail</a>
              </div>
            </div>
          </div>

          @endforeach

        </div>
        <!-- /.row -->

      </div>
@endsection
@section('script')
<script src="{{asset('frontend/js/script.js')}}"></script>
@endsection