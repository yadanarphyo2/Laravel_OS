@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Subcategory Create (Form)</h2>
	<div class="row">
        		<div class="offset-md-2 col-md-8">

        			<form method="POST" action="{{route('subcategories.store')}}" enctype="multipart/form-data">
        				@csrf
        				<div class="form-group">
        					<label for="name">Name</label>
        					<input type="text" id="name" name="subcategory_name" class="form-control">
        				</div>
        				
        				
        				<div class="form-group">
        					<label for="category"> Category</label>
        					
                            <select id="category" name="category_id" class="form-control">
                                <optgroup label="Choose categories">
                                	@foreach($categories as $category)
                                	<option value="{{$category->id}}">{{$category->name}}</option>
                                	@endforeach
                                </optgroup> 
                                        
                            </select>
        				</div>
        			
        				<input type="submit" value="+ Add" class="btn btn-outline-primary">
        			</form>
        		</div>
        	</div>
</div>
@endsection