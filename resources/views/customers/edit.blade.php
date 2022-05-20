<x-layout title="Edit Customer">

  @if(Session::has('success'))
    <x-success-alert>
      {{Session::get('success')}}      
    </x-success-alert>
  @endif
  
  <div class="card card-body">
    <h3 class="mb-4">Edit Customer</h3>
    
    <form action="{{route('customers.update', $customer)}}" method="POST" enctype="multipart/form-data">
      @csrf 
      @method('PUT')
      
      <div class="row">
        <div class="col-md-8">
          <div class="row mb-3">
            <div class="col-md-6 mb-2">
              <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{$customer -> first_name }}">
              @error('first_name')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="col-md-6 mb-2">
              <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{$customer -> last_name}}">
              @error('last_name')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div> 
          <div class="row mb-3">
            <div class="col-md-6 mb-2">
              <input type="email" class="form-control" placeholder="Email Address" name="email" value="{{$customer -> email}}">
              @error('email')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="col-md-6 mb-2">
              <input type="text" class="form-control" placeholder="Phone Number" name="phone" value="{{$customer -> phone}}">
              @error('phone')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6 mb-2">
              <input type="text" class="form-control" placeholder="Address" name="address" value="{{$customer -> address}}">
              @error('address')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="col-md-6 mb-2">
              <input type="text" class="form-control" placeholder="City" name="city" value="{{$customer -> city}}">
              @error('city')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div> 
          <div class="row mb-3">
            <div class="col-md-6 mb-2">
              <input type="text" class="form-control" placeholder="Company" name="company" value="{{$customer -> company}}">
              @error('company')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="col-md-6 mb-2">
              <input type="url" class="form-control" placeholder="Website" name="website" value="{{$customer -> website}}">
              @error('website')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div> 
          <div class="row mb-3">
            <div class="col-md-6">
              <input type="url" class="form-control" placeholder="Facebook" name="facebook" value="{{$customer -> facebook}}">
              @error('facebook')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="col-md-6">
              <input type="file" name="image" class="form-control" id="input_add_c_image">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <img src="/img/image.png" alt="" id="show_add_c_image" class="img-fluid">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>
  </div>
</x-layout>

<script>
    document.getElementById('input_add_c_image')?.addEventListener('change', function(e) {
      var file = e.target.files[0];
     
      var reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById('show_add_c_image').src = e.target.result;
      };
      reader.readAsDataURL(file);
    });  
</script>