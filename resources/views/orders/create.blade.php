<x-layout title="Create Order">
  <div class="page_actions">
    <a href="{{route('orders.index')}}" class="btn btn-primary">
      <ion-icon name="add-outline"></ion-icon>
      <span>Orders</span>
    </a>
  </div>

  @include('partials.alerts')

  <div class="page_content">
    <div class="card">
      <div class="card-header">
        <h3>Create Order</h3>
      </div>
      <div class="card-body">
        <form action="{{route('orders.store')}}" method="POST">
          @csrf
          <div class="form-group mb-2">
            <label for="customer_id">Customer</label>
            <select name="customer_id" id="customer_id" class="form-control mt-2">
              <option value="" selected>Select Customer</option>
              @foreach($customers as $customer)
                <option value="{{$customer -> id}}">{{$customer -> name()}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group mb-2">
            <table class="table table-bordered bg-white mt-3" >
              <tbody>
                <tr>
                  <td colspan="3">
                    <span class="text-dark">Select Products</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <select name="product_id[]" id="product_id" class="form-control mt-2">
                      <option value="" selected>Select Product</option>
                      @foreach($products as $product)
                        <option value="{{$product -> id}}">{{$product -> name}}</option>
                      @endforeach
                    </select>
                  </td>
                  <td>
                    <input type="number" name="quantity[]" id="quantity" placeholder="Quantity" class="form-control mt-2">
                  </td>
                  <td>
                    <button type="button" class="btn btn-primary btn-block w-100 mt-2" id="product_add_row_button">+</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group mb-2">
                <label for="payment_method">Payment Method</label>
                <select name="payment_method" id="payment_method" class="form-control mt-2">
                  <option value="" selected>Select Payment Method</option>
                  <option value="cash">Cash</option>
                  <option value="credit_card">Credit Card</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group mb-2">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control mt-2">
                  <option value="" selected>Select Status</option>
                  <option value="pending">Pending</option>
                  <option value="completed">Completed</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">
              <ion-icon name="add-outline" class="text-dark"></ion-icon>
              <span class="text-dark">Create Order</span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    // add or remove new rows
    const product_add_row_button = document.querySelector('#product_add_row_button')
    
    product_add_row_button.addEventListener('click',function(){
      const row = this.parentElement.parentElement;
      const clonedRow = row.cloneNode(true);

      // remove the option has been selected
      clonedRow.querySelector('#product_id').remove(clonedRow.querySelector('#product_id').selectedIndex); 

      row.parentElement.appendChild(clonedRow);
      clonedRow.querySelector('button').innerHTML = '-';
      clonedRow.querySelector('button').className = 'btn btn-danger mt-2 w-100';
      clonedRow.querySelector('button').addEventListener('click', function(){
        this.parentElement.parentElement.remove();
      })
    })
  </script>
  
</x-layout>


