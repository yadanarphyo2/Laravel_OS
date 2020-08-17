@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Categories edit (Form)</h2>
	<div class="row">
        		<div class="offset-md-2 col-md-8">

        			<form method="POST" action="{{route('categories.update',$category->id)}}" enctype="multipart/form-data">
        				@csrf
                        @method('PUT')
        				<div class="form-group">
        					<label for="name">Name</label>
        					<input type="text" id="name" name="category_name" value="{{$category->name}}" class="form-control">
        				</div>
        				
        				<div class="form-group">
        					<label for="photo">Photo</label>
        					<input type="file" id="photo" name="category_photo" class="form-control-file">
                  <img src="{{asset($category->photo)}}" class="w-25 h-50">
                  <input type="hidden" name="old_photo" value="{{$category->photo}}">
                           
        				</div>
        				
        				<input type="submit" value="+ Update" class="btn btn-outline-primary">
        			</form>
        		</div>
        	</div>
</div>
@endsection