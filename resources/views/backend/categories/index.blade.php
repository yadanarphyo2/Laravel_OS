@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Category list</h2>
	<a href="{{route('categories.create')}}" class="btn btn-success float-right">Add category</a>
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No.</th>
					<th>Name</th>
					<th>photo</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
					@php $i=1; @endphp
					@foreach($categories as $category)
					<tr>
					<td>{{$i++}}</td>
					<td>{{$category->name}}</td>
					<td>
						<img src="{{asset($category->photo)}}" width="75px;">
					</td>
					
					<td>
						<a href="{{route('categories.edit',1)}}" class="btn btn-warning">edit</a>
						<form method="post" action="{{route('categories.destroy',$category->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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