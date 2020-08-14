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
				@php $i=1; @endphp
				@foreach($items as $item)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$item->codeno}}<a href="{{route('items.show',$item->id)}}"><span class="badge badge-primary badge-pill">Detail</span></a>
						<a href="#" class="box"  data-name="{{$item->name}}" data-photo="{{asset($item->photo)}}" data-price="{{$item->price}}" data-desc="{{$item->description}}"><span class=" badge badge-primary badge-pill">Modal</span></a>
					</td>
					<td>{{$item->name}}</td>
					<td>{{$item->price}}MMK</td>
					<td>
						<a href="{{route('items.edit',$item->id)}}" class="btn btn-warning">edit</a>
						<form method="post" action="{{route('items.destroy',$item->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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
<div class="modal fade" id="mymodal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="container">

                  <div class="row">
                      <div class="col-md-6">
                        <img src="" id="photo" class="w-50 h-100 img-fluid d-block mx-auto">
                      </div>
                      <div class="col-md-6">
                        <h3>PRODUCT INFORMATION</h3>
                        <p>Name:<strong id="name"></strong></p>
                        <p>Price:<strong id="price"></strong></p>
                        <p>Description:<strong id="desc"></strong></p>
                      </div>
                      

                  </div>
                </div>
                
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               
              </div>
            </div>
          </div>
        </div>
@endsection
@section('script')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.box').click(function(){
				var name = $(this).data('name');
				var photo = $(this).data('photo');
				var price = $(this).data('price');
				var desc = $(this).data('desc');

				$('#photo').attr('src',photo);
				$("#name").text(name);
				$("#price").text(price);
				$("#desc").text(desc);
				$('#mymodal').modal('show');
			})
		})
	</script>
@endsection