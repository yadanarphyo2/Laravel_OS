@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Create (Form)</h2>
	<div class="row">
        		<div class="offset-md-2 col-md-8">

        			<form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
        				@csrf
        				<div class="form-group">
        					<label for="name">Name</label>
        					<input type="text" id="name" name="category_name" class="form-control">
        				</div>
        				
        				<div class="form-group">
        					<label for="photo">Photo</label>
        					<input type="file" id="photo" name="category_photo" class="form-control-file">
                           
        				</div>
        				
        				<input type="submit" value="+ Add" class="btn btn-outline-primary">
        			</form>
        		</div>
        	</div>
</div>
@endsection