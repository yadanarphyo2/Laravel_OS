@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Brand Create (Form)</h2>
	<div class="row">
        		<div class="offset-md-2 col-md-8">

        			<form method="POST" action="{{route('brands.store')}}" enctype="multipart/form-data">
        				@csrf
        				<div class="form-group">
        					<label for="name">Name</label>
        					<input type="text" id="name" name="brand_name" class="form-control">
             @if($errors->has('brand_name'))
               <p class="text-danger">
               <i class="fas fa-exclamation-triangle"></i>Name is require!!!</p> 
             @endif
        				</div>
        				
        				<div class="form-group">
        					<label for="photo">Photo</label>
        					<input type="file" id="photo" name="brand_photo" class="form-control-file">
               @if($errors->has('brand_photo'))
               <p class="text-danger">
               <i class="fas fa-exclamation-triangle"></i>Photo is require!!!</p> 
             @endif            
        				</div>
        				
        				<input type="submit" value="+ Add" class="btn btn-outline-primary">
        			</form>
        		</div>
        	</div>
</div>
@endsection