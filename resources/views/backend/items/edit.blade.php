@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Edit (Form/Old Data)</h2>
	@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<div class="row">
        		<div class="offset-md-2 col-md-8">
        			<form method="POST" action="{{route('items.update',$item->id)}}" enctype="multipart/form-data">
        				@csrf
        				@method('PUT')
        				<div class="form-group">
        					<label for="name">Name</label>
        					<input type="text" value="{{ $item->name}}" id="name" name="item_name" class="form-control">
        				</div>
        				<div class="form-group">
        					<label for="codeno">Code No</label>
        					<input type="text" value="{{$item->codeno}}" id="codeno" name="item_code" class="form-control" readonly>
        				</div>
        				<div class="form-group">
        					<label for="photo">Photo</label>
        					<input type="file" id="photo" name="item_photo" class="form-control-file">
        					<img src="{{asset($item->photo)}}" class="w-25 h-50">
                           <input type="hidden" name="old_photo" value="{{$item->photo}}">
        				</div>

        				<ul class="nav nav-tabs" id="myTab" role="tablist">
        					<li class="nav-item" role="presentation">
        						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Unit Price</a>
        					</li>
        					<li class="nav-item" role="presentation">
        						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Discount Price</a>
        					</li>

        				</ul>
        				<div class="tab-content" id="myTabContent">
        					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        						<div class="form-group my-3">
        							<input type="number" name="item_price" value="{{ $item->price}}" class="form-control" placeholder="Unit Price">
        						</div>

        					</div>
        					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        						<div class="form-group my-3">
        							<input type="number" name="item_discount" value="{{ $item->discount}}" class="form-control" placeholder="Discount Price">
        						</div>
        					</div>
        					
        				</div>
        				<div class="form-group">
        					<label for="brand">Brand:</label>
        					<select class="form-control" name="item_brand" id="brand">
                                <optgroup label="Choose brand">
                                	
                                	@foreach($brands as $brand)
                                	<option value="{{$brand->id}}"
                                		@if($brand->id == $item->brand_id)
                                		{{'selected'}}
                                		@endif
                                		>{{$brand->name}}</option>
                                	@endforeach



                                </optgroup>        
                            </select>
        				</div>
        				<div class="form-group">
        					<label for="subcategory">Sub Category</label>
        					
                            <select id="subcategory" name="item_subcategory" class="form-control">
                                <optgroup label="Choose subcategories">
                                	@foreach($subcategories as $subcategory)
                                	<option value="{{$subcategory->id}}"
                                		@if($subcategory->id == $item->subcategory_id)
                                		{{'selected'}}
                                		@endif
                                		>{{$subcategory->name}}</option>
                                	@endforeach
                                </optgroup> 
                                        
                            </select>
        				</div>
        				<div class="form-group">
        					<label for="description">Description</label>
        					<textarea class="form-control" id="item_description" name="item_des">{{ $item->description}}</textarea>
        				</div>
        				<input type="submit" value="+ Update" class="btn btn-outline-primary">
        			</form>
        		</div>
        	</div>
</div>
@endsection