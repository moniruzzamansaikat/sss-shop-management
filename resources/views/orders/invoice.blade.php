<x-layout title="Invoice">
  <button class="btn btn-primary mb-3" id="invoice_printer">Print Invoice</button>
  
  <!-- invoice -->
  <div class="invoice bg-white p-5" size="A4" id="printable">
    <div class="invoice_header">
      <div>
        <div class="invoice_logo">
          <img src="{{asset('storage/shop/shop_logo.png')}}" alt="" style="width: 80px;">
        </div>
        <div class="invoice_info">
          <h1>{{$shop -> shop_name}}</h1>
          <p>
            <span>Invoice #:</span>
            <span>{{$order -> id}}</span>
          </p>
          <p>
            <span>Date:</span>
            <span>{{$order -> created_at -> format('M d, Y')}}</span>
          </p>
        </div>
      </div>
      <div>
        <div class="invoice_info">
          <h2>Invoice To</h2>
          <p>
            <span>Name:</span>
            <span>{{$order -> customer -> name()}}</span>
          </p>
          <p>
            <span>Email:</span>
            <span>{{$order -> customer -> email}}</span>
          </p>
          <p>
            <span>Phone:</span>
            <span>{{$order -> customer -> phone}}</span>
          </p>
        </div>
      </div>
    </div>
    <div class="invoice_body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total Amount</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>{{$order -> product -> name}}</td>
            <td>{{$order -> product -> quantity}}</td>
            <td>${{$order -> total_amount}}</td>
          </tr>
      </table>

      
      <div class="signature">
        <p>Signature</p>
      </div>
    </div>
  </div>
</x-layout>