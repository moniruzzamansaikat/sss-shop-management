<button class="btn btn-primary" id="sidebar_toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  <ion-icon name="menu-outline"></ion-icon>
</button>

<div class="offcanvas offcanvas-start sidebar-offcanvas" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-body p-0">
    <aside class="main_sidebar">
      <ul class="list-group">
        <li class="list-group-item {{request() -> is('/') ? 'active': ''}}">
          <a href="{{route('index')}}"><span><ion-icon name="home-outline"></ion-icon> <span>Home</span></span></a>
        </li>

        <!-- users -->
        @can('create', auth() -> user())
        <li class="list-group-item">
          <a data-bs-toggle="collapse" href="#userCollapse" role="button" aria-expanded="false" aria-controls="userCollapse">
            <span><ion-icon name="person-outline"></ion-icon> <span>Users</span></span>
            <ion-icon class="right-icon" name="chevron-down-outline"></ion-icon>
          </a>
        </li>
        
        <div class="collapse ps-4 {{request()->is('users*') ? 'show' : ''}}" id="userCollapse">
          <li class="list-group-item {{request() -> is('users') ? 'active': ''}}">
            <a href="{{route('users.index')}}"><span><ion-icon name="person-outline"></ion-icon> <span>Users</span></span></a>
          </li>    
          <li class="list-group-item {{request() -> is('users/create') ? 'active': ''}}">
            <a href="{{route('users.create')}}"><span><ion-icon name="add-outline"></ion-icon> <span>Add User</span></span></a>
          </li>        
        </div>
        @endcan
        <!-- end of users -->

        <!-- products -->
        <li class="list-group-item">
          <a data-bs-toggle="collapse" href="#productsCollapse" role="button" aria-expanded="false" aria-controls="productsCollapse">
            <span><ion-icon name="library-outline"></ion-icon> <span>Products</span></span>
            <ion-icon class="right-icon" name="chevron-down-outline"></ion-icon>
          </a>
        </li>
        <div class="collapse ps-4 {{request()->is('products*') ? 'show' : ''}}" id="productsCollapse">
          <li class="list-group-item {{request() -> is('products') ? 'active': ''}}">
            <a href="{{route('products.index')}}"><span><ion-icon name="library-outline"></ion-icon> <span>Products</span></span></a>
          </li>    
          <li class="list-group-item {{request() -> is('products/create') ? 'active': ''}}">
            <a href="{{route('products.create')}}"><span><ion-icon name="add-outline"></ion-icon> <span>Add Product</span></span></a>
          </li>        
        </div>
        <!-- end of products -->

        <!-- customers -->
        <li class="list-group-item">
          <a data-bs-toggle="collapse" href="#customerCollapse" role="button" aria-expanded="false" aria-controls="customerCollapse">
            <span><ion-icon name="people-outline"></ion-icon> <span>Customers</span></span>
            <ion-icon class="right-icon" name="chevron-down-outline"></ion-icon>
          </a>
        </li>
        <div class="collapse ps-4 {{request()->is('customers*') ? 'show' : ''}}" id="customerCollapse">
          <li class="list-group-item {{request() -> is('customers') ? 'active': ''}}">
            <a href="{{route('customers.index')}}"><span><ion-icon name="people-outline"></ion-icon> <span>Customers</span></span></a>
          </li>    
          <li class="list-group-item {{request() -> is('customers/create') ? 'active': ''}}">
            <a href="{{route('customers.create')}}"><span><ion-icon name="add-outline"></ion-icon> <span>Add Customer</span></span></a>
          </li>        
        </div>
        <!-- end of customers -->


        <li class="list-group-item {{request() -> is('categories') ? 'active': ''}}">
          <a href="{{route('categories.index')}}"><span><ion-icon name="grid-outline"></ion-icon> <span>Categories</span></span></a>
        </li>    

        <!-- orders -->
        <li class="list-group-item">
          <a data-bs-toggle="collapse" href="#ordersCollapse" role="button" aria-expanded="false" aria-controls="ordersCollapse">
            <span><ion-icon name="cash-outline"></ion-icon> <span>Orders</span></span>
            <ion-icon class="right-icon" name="chevron-down-outline"></ion-icon>
          </a>
        </li>
        <div class="collapse ps-4 {{request()->is('orders*') ? 'show' : ''}}" id="ordersCollapse">
          <li class="list-group-item {{request() -> is('orders') ? 'active': ''}}">
            <a href="{{route('orders.index')}}"><span><ion-icon name="cash-outline"></ion-icon> <span>Orders</span></span></a>
          </li>
          <li class="list-group-item {{request() -> is('orders/create') ? 'active': ''}}">
            <a href="{{route('orders.create')}}"><span><ion-icon name="add-outline"></ion-icon> <span>Add Order</span></span></a>
          </li>
        </div>
        <!-- end of customers -->

        @can('create', auth() -> user())
        <li class="list-group-item {{request() -> is('setting*') ? 'active': ''}}">
          <a href="{{route('setting.index')}}"><span><ion-icon name="cog-outline"></ion-icon> <span>Setting</span></span></a>
        </li>
        @endcan
      </ul>

      <div class="soft_provider">
        <!-- <img src="/img/sss_logo.png" alt="" class="img-fluid"> -->
        <h4>Provided by SSS</h4>
      </div>
    </aside> 
  </div>
</div>
