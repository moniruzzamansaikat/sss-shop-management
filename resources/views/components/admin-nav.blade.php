<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand ms-auto" href="{{route('index')}}" >
      <img src="{{asset('storage/shop/shop_logo.png')}}" alt="" style="width: 60px;">
      <span>{{$shop -> shop_name}}</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <ion-icon name="menu-outline"></ion-icon>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-link">
          <form action="{{route('login.destroy')}}"  class="d-inline">
            <button class="btn btn-danger" type="submit">Logout</button>
          </form>
        </li>      
      </ul>
    </div>
  </div>
</nav>

<style>
  @media (max-width: 991px) {
    .navbar-brand {
      transform: translateX(-50%);
    }
  }
</style>