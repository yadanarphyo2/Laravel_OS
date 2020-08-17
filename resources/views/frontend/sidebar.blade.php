

<div class="col-lg-3">

        <h5 class="my-4">Valentino bags & shoes</h5>
        <div class="list-group">
        	@foreach($sub as $subcategory)
          <a href="#" class="list-group-item filter" data-id="{{$subcategory->id}}" data-name="{{$subcategory->name}}">{{$subcategory->name}}</a>
          @endforeach
        </div>

      </div>