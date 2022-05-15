<x-layout title="Categories">
  <div class="page_actions">
    <a href="{{route('categories.index')}}" class="btn btn-primary">
      <ion-icon name="grid-outline"></ion-icon>
      <span>Categories</span>
    </a>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCategoryModal">
      <ion-icon name="add-outline"></ion-icon>
      <span>Add Category</span>
    </button>
  </div>

  @if(Session::has('success'))
    <x-success-alert>{{Session::get("success")}}</x-success-alert>
  @endif

  <!-- list of categires -->
  <div class="table-responsive mt-3">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Product Count</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $category)
          <tr>
            <td>{{$loop -> index + 1}}</td>
            <td>{{$category -> name}}</td>
            <td>{{$category -> product_count}}</td>
            <td>
              <a href="{{route('categories.edit', $category -> id)}}" class="btn btn-info btn-sm">
                <ion-icon name="create-outline"></ion-icon>
                <span>Edit</span>
              </a>
              <form action="{{route('categories.destroy', $category)}}" method="POST" class="d-inline">
                @csrf 
                @method('DELETE')
                <button class="btn btn-danger btn-sm" type="submit">
                  <ion-icon name="trash-outline"></ion-icon>
                  <span>Delete</span>
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- create category modal -->
  <div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createdCategory" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createdCategory">Create Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <form action="{{route('categories.store')}}" method="post">
                @csrf
                <div class="row">
                  <div class="col-md-9">
                    <div class="form-group mb-3">
                      <input type="text" class="form-control mt-2" name="name" placeholder="Name" tabindex="1" required>
                    </div>
                    <div class="form-group mb-3">
                      <input type="text" class="form-control mt-2" name="description" placeholder="Description" tabindex="2" required>
                    </div>
                    <div class="form-group mb-3">
                      <input type="file" class="form-control mt-2" name="image">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <img src="{{asset('img/image.png')}}" class="img-fluid category_add_img" alt="">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</x-layout>


<script>
  document.querySelector('input[type="file"]').addEventListener('change', function(e) {
    var file = e.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
      document.querySelector('.category_add_img').src = e.target.result;
    };
    reader.readAsDataURL(file);
  });  

  

</script>