@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Brand list</h2>
	<a href="{{route('brands.create')}}" class="btn btn-success float-right">Add brand</a>
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
				<tr>
					<td>1</td>
					<td>Gucci<a href="{{route('brands.show',1)}}"><span class="badge badge-primary badge-pill">Detail</span></a></td>
					<td>image</td>
					
					<td>
						<a href="{{route('brands.edit',1)}}" class="btn btn-warning">edit</a>
						<a href="" class="btn btn-danger">Delelte</a>


					</td>

				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection