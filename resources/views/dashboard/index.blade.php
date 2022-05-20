<x-layout>
  <div data-aos="fade-in" data-aos-dalay="2000">
    <h2 class="text-white mb-3">Best Selling Products </h2>
  </div>
  <div class="row">
      @foreach($best_selling_products as $product) 
      <div class="col-md-3" data-aos="fade-up" data-aos-delay="{{$loop -> index * 200}}" data-aos-duration="1000">
        <div class="card card-body dashboard-card _{{$loop -> index + 1}}">
          <h4>{{$product -> name}}</h4>
          <p>Total Sell: {{$product -> sold}}</p>
        </div>
      </div>
    @endforeach
  </div>
  
  <div data-aos="fade-in" data-aos-dalay="2000"> 
    <h2 class="text-white mt-4 mb-3">Manage Data</h2>
  </div>
  <div class="row dashboard-cards">
    @foreach($items as $item) 
      <div class="col-md-3" data-aos="fade-up" data-aos-delay="{{$loop -> index * 200}}" data-aos-duration="1000">
        <a href="/{{$item}}">
          <div class="card card-body dashboard-card _{{$loop -> index + 1}}">
            <h1>{{$item}}</h1>
            <p>view all <strong>{{$item}}</strong></p>
          </div>
        </a>
      </div>
    @endforeach
      <!-- <div class="col-md-3" data-aos="fade-up" data-aos-delay="1100" data-aos-duration="1000">
        <a href="/">
          <div class="card card-body dashboard-card _6">
            <h1>Daily</h1>
            <p>view daily <strong>expenses</strong></p>
          </div>
        </a>
      </div> -->
  </div>

</x-layout>