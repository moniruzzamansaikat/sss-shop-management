<x-layout title="Orders">
  <div class="page_actions">
    <a href="{{route('orders.create')}}" class="btn btn-primary">
      <ion-icon name="add-outline"></ion-icon>
      <span>Add Order</span>
    </a>
  </div>

  @include('partials.alerts')

  <!-- list of orders -->
  <div class="table-responsive mt-3">
    <table class="table table-bordered" id="myTable">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Product</th>
          <th scope="col">Customer</th>
          <th scope="col">Quantity</th>
          <th scope="col">Total Amount</th>
          <th scope="col">Payment Method</th>
          <th scope="col">Status</th>
          <th scope="col">Invoice</th>
          <th scope="col" style="width: 90px">Handle</th>
        </tr>
      </thead>
      <tbody>
        @foreach($orders as $order)
          <tr>
            <td>{{$loop -> index + 1}}</td>
            <td>{{$order -> product -> name}}</td>
            <td>{{$order -> customer -> name()}}</td>
            <td>{{$order -> quantity}}</td>
            <td>${{$order -> total_amount}}</td>
            <td>{{$order -> payment_method}}</td>
            <td>
              @php 
                $completed = $order -> status === 'completed' ? true : false;
              @endphp
              <span class="order_status {{ $completed ? 'completed' : ''}}">{{$order -> status}}</span>
            </td>
            <td>
              @if($order -> status === 'completed')
                <a href="{{route('orders.invoice', $order)}}" class="btn btn-sm btn-secondary">
                  show
                </a>
              @endif
            </td>
            <td>
              <a href="{{route('orders.edit', $order -> id)}}" class="btn btn-info btn-sm">
                <ion-icon name="create-outline"></ion-icon>
              </a>
              <form action="{{route('orders.destroy', $order)}}" method="POST" class="d-inline">
                @csrf 
                @method('DELETE')
                <button class="btn btn-danger btn-sm confirm_button" data-title="Delete Order ?" type="submit">
                  <ion-icon name="trash-outline"></ion-icon>
                </button>
              </form>
              @if(!$completed)
                <a href="{{route('orders.complete', $order)}}" class="btn btn-primary btn-sm" style="background-color: #00ffab;">
                  <ion-icon style="color: black;" name="checkmark-outline"></ion-icon>
                </a>
              @endif
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- end list of orders -->

</x-layout>