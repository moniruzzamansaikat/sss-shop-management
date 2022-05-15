<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href="{{asset('css/admin.css')}}" rel="stylesheet">

</head>
<body>
  <x-admin-nav />
  <div>
    <x-admin-sidebar />

    <main class="main_content">
      <div class="page_actions">
        <button class="btn btn-primary">
          <ion-icon name="add-outline"></ion-icon>
          <span>All Products</span>
        </button>
        <button class="btn btn-primary">
          <ion-icon name="add-outline"></ion-icon>
          <span>Add Product</span>
        </button>
      </div>

      {{$slot}}
    </main>
  </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script src="{{asset('js/admin.js')}}"></script>
</body>
</html>