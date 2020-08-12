@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Item list</h2>
	<a href="{{route('items.create')}}" class="btn btn-success float-right">Add item</a>
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No.</th>
					<th>Codeno</th>
					<th>Name</th>
					<th>Price</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>0001<a href="{{route('items.show',1)}}"><span class="badge badge-primary badge-pill">Detail</span></a></td>
					<td>item1</td>
					<td>5500 MMK</td>
					<td>
						<a href="{{route('items.edit',1)}}" class="btn btn-warning">edit</a>
						<a href="" class="btn btn-danger">Delelte</a>


					</td>

				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection