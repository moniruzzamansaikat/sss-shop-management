<x-layout title="Edit Category">
  <!-- create category modal -->
  <div class="modal fade " id="editCategoryModal" tabindex="-1" aria-labelledby="createdCategory" aria-hidden="true" >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createdCategory">Edit Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <form action="{{route('categories.update', $category)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-md-9">
                    <div class="form-group mb-3">
                      <input type="text" class="form-control mt-2" name="name" placeholder="Name" tabindex="1" value="{{$category -> name}}" required>
                    </div>
                    <div class="form-group mb-3">
                      <input type="text" class="form-control mt-2" name="description" placeholder="Description" tabindex="2" value="{{$category -> description}}" required>
                    </div>
                    <div class="form-group mb-3">
                      <input type="file" class="form-control mt-2" name="image">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <img src="{{asset('img/image.png')}}" class="img-fluid category_add_img" alt="">
                  </div>
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
  var myModal = new bootstrap.Modal(document.getElementById('editCategoryModal'), {
    keyboard: false
  })
  myModal.show()
  var myModalEl = document.getElementById('editCategoryModal')
  myModalEl.addEventListener('hidden.bs.modal', function (event) {
      window.location.href = "{{route('categories.index')}}"
  })


</script>