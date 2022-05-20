<x-layout title="Users">
  <div class="page_actions">
    <a href="{{route('users.create')}}" class="btn btn-primary">
      <ion-icon name="add-outline"></ion-icon>
      <span>Add New User</span>
    </a>
  </div>

  <div class="table-responsive mt-3">
      <table class="table table-bordered" id="myTable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
            <tr>
              <td>{{$loop -> index + 1}}</td>
              <td>{{$user -> name}}</td>
              <td>{{$user -> email}}</td>
              <td>{{$user -> role}}</td>
              <td>
                <a href="{{route('users.edit', $user)}}" class="btn btn-info btn-sm">
                  <ion-icon name="create-outline"></ion-icon>
                </a>
                <form action="{{route('users.destroy', $user)}}" method="POST" class="d-inline">
                  @csrf 
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm confirm_button" data-title="Delete Category ?" type="submit">
                    <ion-icon name="trash-outline"></ion-icon>
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {{$users -> links()}}
    </div>
</x-layout>
