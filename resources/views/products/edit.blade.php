<x-layout title="Edit Product">

  @if(Session::has('success'))
    <x-success-alert>
      {{Session::get('success')}}      
    </x-success-alert>
  @endif
  
  <div class="card card-body">
    <h3 class="mb-4">Edit Product</h3>
    
    <form action="{{route('products.update', $product)}}" method="POST" enctype="multipart/form-data">
      @csrf 
      @method('PUT')
      
      <div class="row">
        <div class="col-md-4 mb-2">
          <input type="text" class="form-control" placeholder="Product Name" name="name" value="{{$product->name}}">
          @error('name')
            <small class="text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="col-md-4 mb-2">
          <input type="number" class="form-control" placeholder="Product Price" name="price" value="{{$product->value}}">
          @error('price')
            <small class="text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="col-md-4 mb-2">
          <input type="number" class="form-control" placeholder="Product Quantity" name="quantity" value="{{$product->quantity}}">
          @error('quantity')
            <small class="text-danger">{{$message}}</small>
          @enderror
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-md-8">
          <div class="row mt-2">
            <div class="col-md-6 mb-2">
              <select name="category" class="form-control">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>
              @error('category')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="col-md-6 mb-2">
              <input type="file" name="image" class="form-control" id="input_add_p_image">
              @error('image')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="col-12 mt-2">
              <!-- editor -->
              <textarea name="description" id="editor">!{!!$product->description!!}</textarea>
              @error('description')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <img src="{{asset('img/image.png')}}" alt="" class="img-fluid mt-2" id="show_add_p_image">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Update Product</button>
        </div>
      </div>
    </form>
  </div>
</x-layout>

<script>
    document.getElementById('input_add_p_image')?.addEventListener('change', function(e) {
      var file = e.target.files[0];
     
      var reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById('show_add_p_image').src = e.target.result;
      };
      reader.readAsDataURL(file);
    });  
</script>