<x-layout title="Products">
  <div class="page_actions">
    <a href="{{route('products.create')}}" class="btn btn-primary">
      <ion-icon name="add-outline"></ion-icon>
      <span>Add Product</span>
    </a>
  </div>

  @include('partials.alerts')

  <!-- list of products -->
  <div class="table-responsive mt-3">
    <table class="table table-bordered" id="myTable">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Category</th>
          <th scope="col">Price</th>
          <th scope="col">Image</th>
          <th scope="col">Quantity</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        
        
        @foreach($products as $product)
          <tr>
            <td>{{$loop -> index + 1}}</td>
            <td>{{$product -> name}}</td>
            <td>{{$product -> category -> name}}</td>
            <td>${{$product -> price}}</td>
            <td><img src="{{$product -> image ? asset('storage/'. $product->image) : '/img/image.png'}}" alt="" width="100" /></td>
            <td>{{$product -> quantity}}</td>
            <td>
              <a href="{{route('products.edit', $product)}}" class="btn btn-info btn-sm">
                <ion-icon name="create-outline"></ion-icon>
              </a>
              <form action="{{route('products.destroy', $product)}}" method="POST" class="d-inline">
                @csrf 
                @method('DELETE')
                <button class="btn btn-danger btn-sm confirm_button" data-title="Delete Product ?" type="submit">
                  <ion-icon name="trash-outline"></ion-icon>
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</x-layout>
