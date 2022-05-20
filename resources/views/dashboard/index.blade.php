<x-layout>
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