@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Create (Form)</h2>
    
	<div class="row">
        		<div class="offset-md-2 col-md-8">

        			<form method="POST" action="{{route('items.store')}}" enctype="multipart/form-data">
        				@csrf
        				    
              <div class="form-group">
              <label for="name" class="{{$errors->first('item_name')?'text-danger':''}}">Name</label>
              <input type="text" id="name" name="item_name" class="form-control {{$errors->first('item_name')?'border-danger':''}}">
              @if($errors->has('item_name'))
                     <p class="text-danger">
                     <i class="fas fa-exclamation-triangle"></i>name is require!!!</p>    
              @endif
    
            
        				</div>
        				<div class="form-group">
        					<label for="codeno">Code No</label>
        					<input type="text" id="codeno" name="item_code" class="form-control">
                            @if($errors->has('item_code'))
                                   <p class="text-danger">
                                   <i class="fas fa-exclamation-triangle"></i>Code No is require!!!</p> 
                                    
                                
                            @endif
        				</div>
        				<div class="form-group">
        					<label for="photo">Photo</label>
        					<input type="file" id="photo" name="item_photo" class="form-control-file">
                  @if($errors->has('item_photo'))
                                   <p class="text-danger">
                                   <i class="fas fa-exclamation-triangle"></i>discount is require!!!</p> 
                                   
                                
                            @endif
                           
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
        							<input type="number" name="item_price" class="form-control" placeholder="Unit Price">
                                    @if($errors->has('item_price'))
                                   <p class="text-danger">
                                   <i class="fas fa-exclamation-triangle"></i>Price is require!!!</p> 
                            @endif
        						</div>

        					</div>
        					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        						<div class="form-group my-3">
        							<input type="number" name="item_discount" class="form-control" placeholder="Discount Price">
                                    {{-- @if($errors->has('item_discount'))
                                   <p class="text-danger">
                                   <i class="fas fa-exclamation-triangle"></i>discount is require!!!</p> 
                                   
                                
                            @endif --}}

        						</div>
        					</div>
        					
        				</div>
        				<div class="form-group">
        					<label for="brand">Brand:</label>
        					<select class="form-control" name="item_brand" id="brand">
            <optgroup label="Choose brand">
            	
            	@foreach($brands as $brand)
            	<option value="{{$brand->id}}">{{$brand->name}}</option>
             @endforeach
            	

             </optgroup>
            </select>
          
            @if($errors->all('item_brand'))
                      <p class="text-danger">
                      <i class="fas fa-exclamation-triangle"></i>brand is require!!!</p> 
               @endif

            
        				</div>
        				<div class="form-group">
        					<label for="subcategory">Sub Category</label>
        					
                            <select id="subcategory" name="item_subcategory" class="form-control">
                                <optgroup label="Choose subcategories">
                                	@foreach($subcategories as $subcategory)
                                	<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                	@endforeach
                                </optgroup> 
                                        
                            </select>
                            @if($errors->all('item_subcategory'))
                      <p class="text-danger">
                      <i class="fas fa-exclamation-triangle"></i>subcategory is require!!!</p> 
                      
                   
               @endif
        				</div>
        				<div class="form-group">
        					<label for="description">Description</label>
        					<textarea class="form-control" id="item_description" name="item_des"></textarea>
             @if($errors->has('item_des'))
                      <p class="text-danger">
                      <i class="fas fa-exclamation-triangle"></i>description is require!!!</p> 
                       
                   
               @endif
        				</div>
        				<input type="submit" value="+ Add" class="btn btn-outline-primary">
        			</form>
        		</div>
        	</div>
</div>
@endsection