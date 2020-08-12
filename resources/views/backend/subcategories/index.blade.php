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
				<tr>
					<td>1</td>
					<td>red<a href="{{route('subcategories.show',1)}}"><span class="badge badge-primary badge-pill">Detail</span></a></td>
					<td>bag</td>
					
					<td>
						<a href="{{route('subcategories.edit',1)}}" class="btn btn-warning">edit</a>
						<a href="" class="btn btn-danger">Delelte</a>


					</td>

				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection