<x-layout title="Add new user">
  <div class="card">
    <div class="card-body">
      <h3 class="mb-3">Add new user</h3>
      
      <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group mb-2">
          <label for="name">Name</label>
          <input type="text" class="form-control mt-2" id="name" name="name" placeholder="Enter name" value="{{old('name')}}">
          @error('name')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group mb-2">
          <label for="email">Email</label>
          <input type="email" class="form-control mt-2" id="email" name="email" placeholder="Enter email" value="{{old('email')}}">
          @error('email')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group mb-2">
          <label for="role">Role</label>
          <select name="role" id="role" class="form-control mt-2">
            <option value="admin">Admin</option>
            <option value="user">User</option>
          </select>
          @error('role')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group mb-2">
          <label for="password">Password</label>
          <input type="password" class="form-control mt-2" id="password" name="password" placeholder="Enter password">
          @error('password')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group mb-2">
          <label for="password_confirmation">Confirm Password</label>
          <input type="password" class="form-control mt-2" id="password_confirmation" name="password_confirmation" placeholder="Confirm password">
          @error('password_confirmation')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</x-layout>