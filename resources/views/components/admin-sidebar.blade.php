<button class="main_sidebar_toggler d-md-none">
  <ion-icon name="menu-outline"></ion-icon>
</button>
<aside class="main_sidebar">
  <ul class="list-group">
    <li class="list-group-item {{request() -> is('/') ? 'active': ''}}">
      <a href="{{route('index')}}"><ion-icon name="home-outline"></ion-icon> <span>Home</span></a>
      </li>
    <li class="list-group-item {{request() -> is('users/*') ? 'active': ''}}">
      <a href="{{route('users.index')}}"><ion-icon name="person-outline"></ion-icon> <span>Users</span></a>
    </li>
    <li class="list-group-item {{request() -> is('customers/*') ? 'active': ''}}">
      <a href="{{route('customers.index')}}"><ion-icon name="people-outline"></ion-icon> <span>Customers</span></a>
    </li>
    <li class="list-group-item {{request() -> is('products/*') ? 'active': ''}}">
      <a href="{{route('products.index')}}"><ion-icon name="library-outline"></ion-icon> <span>Products</span></a>
    </li>
    <li class="list-group-item {{request() -> is('categories/*') ? 'active': ''}}">
      <a href="{{route('categories.index')}}"><ion-icon name="grid-outline"></ion-icon> <span>Categories</span></a>
    </li>
    <li class="list-group-item {{request() -> is('orders/*') ? 'active': ''}}">
      <a href="{{route('orders.index')}}"><ion-icon name="cash-outline"></ion-icon> <span>Orders</span></a>
    </li>
    <li class="list-group-item">
      <a href="#"><ion-icon name="cog-outline"></ion-icon> <span>Setting</span></a>
    </li>
  </ul>
</aside>