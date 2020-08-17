@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Item list</h2>
	<a href="{{route('subcategories.create')}}" class="btn btn-success float-right">Add subcategory</a>
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No.</th>
					<th>Name</th>
					<th>Categories</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1; @endphp
					@foreach($subcategories as $subcategory)
					<tr>
					<td>{{$i++}}</td>
					<td>{{$subcategory->name}}</td>
					<td>{{$subcategory->category->name}}</td>
					
					
					<td>
						<a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-warning">edit</a>
						<form method="post" action="{{route('subcategories.destroy',$subcategory->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
							@csrf
							@method('DELETE')
							<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
						</form>
					</td>

				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection