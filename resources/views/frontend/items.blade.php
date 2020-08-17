@extends('frondendtemplate')
@section('sidebar')
@include('frontend.sidebar')
@endsection
@section('content')
<div class="col-lg-9">
	<h2 class="itemtitle text-center m-4"></h2>
    <div id="myItems" class="row">
    	
    </div>   

</div>
@endsection
@section('script')
<script src="{{asset('frontend/js/script.js')}}"></script>
<script type="text/javascript">

	$(document).ready(function(){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		showItems(0);
		function showItems(id){

			$.post("{{route('getItem')}}",{sid:id},function(res){
			var html='';
			$.each(res,function(i,v){
				var url='/itemdetail/'+v.id;
				html+=`

				<div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="${v.photo}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">${v.name}</a>
                </h4>
                <h5>${v.price}MMK</h5>
                <p class="card-text">${v.descriptin}</p>
              </div>
              <div class="card-footer">
                <button class="btn valbtn addtocart btn-outline-secondary" data-id="${v.id}" data-name=" ${v.name}" data-photo="${v.photo}" data-price="${v.price}" data-discount="${v.discount}" data-brand="${v.brand}" data-subcategory="${v.subcategory}" data-description="${v.descriptin}"><i class="fas fa-shopping-cart"></i><span class="qtycheck"></span></button>
                
                <a href="${url}" class="btn btn-outline-primary">Detail</a>
              </div>
            </div>
          </div>`
			})
			$('#myItems').html(html);
				
		})
		}

		$('.filter').click(function(){
			var id=$(this).data('id');
			var name=$(this).data('name');
			$('.itemtitle').text(name);
			showItems(id);
		})
		
	})
</script>
@endsection

