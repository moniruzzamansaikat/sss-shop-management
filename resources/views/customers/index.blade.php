<x-layout title="Customers">
  <div class="page_actions">
    <a href="{{route('customers.create')}}" class="btn btn-primary">
      <ion-icon name="add-outline"></ion-icon>
      <span>Add Customer</span>
    </a>
  </div>

  <!-- list of customers -->
  <div class="table-responsive mt-3">
    <table class="table table-bordered" id="myTable">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
          <th scope="col">Image</th>
          <th scope="col">Added</th>
          <th scope="col" style="width: 85px;">Handle</th>
        </tr>
      </thead>
      <tbody>
        @foreach($customers as $customer)
          <tr>
            <td>{{$loop -> index + 1}}</td>
            <td>{{$customer -> name()}}</td>
            <td>{{$customer -> phone}}</td>
            <td>{{$customer -> email}}</td>
            <td><img src="{{$customer -> image ? asset('storage/'. $customer->image) : '/img/image.png'}}" alt="" width="60" /></td>
            <td>{{ $customer -> created_at -> diffForHumans() }}</td>
            <td>
              <a href="{{route('customers.edit', $customer)}}" class="btn btn-info btn-sm" title="Edit user">
                <ion-icon name="create-outline"></ion-icon>
              </a>
              <a href="{{route('customers.show', $customer)}}" class="btn btn-info btn-sm" title="View user">
                <ion-icon name="eye-outline"></ion-icon>
              </a>
              <form action="{{route('customers.destroy', $customer)}}" method="POST" class="d-inline" title="Delete user">
                @csrf 
                @method('DELETE')
                <button class="btn btn-danger btn-sm confirm_button" data-title="Delete customer ?" type="submit">
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