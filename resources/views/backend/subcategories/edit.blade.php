@extends('backendtemplate')
@section('content')
<div class="container-fluid">
    <h2>Subcategory Edit (Form)</h2>
    <div class="row">
        <div class="offset-md-2 col-md-8">

        <form method="POST" action="{{route('subcategories.update',$subcategory->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="subcategory_name" value="{{$subcategory->name}}" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="subcategory">Sub Category</label>
                <select id="subcategory" name="category_id" class="form-control">
                <optgroup label="Choose categories">
                @foreach($categories as $category)
                <option value="{{$category->id}}"
                    @if($category->id == $subcategory->category_id)
                    {{'selected'}}
                    @endif
                    >{{$category->name}}</option>
                @endforeach
                </optgroup> 
                    
                </select>
            </div>
            <input type="submit" value="+ Update" class="btn btn-outline-primary">
        </form>
    </div>
</div>
</div>
@endsection