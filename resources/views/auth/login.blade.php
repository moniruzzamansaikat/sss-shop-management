<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login </title>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href="{{asset('css/auth.css')}}" rel="stylesheet" />

</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-4 mt-5">
        <div class="card login_card">
          <div class="card-body">
            <h3 class="card-title text-center mb-3">Admin Login</h5>

            @if(Session::has('error'))
              <x-danger-alert>{{Session::get('error')}}</x-danger-alert>
            @endif

            <form action="{{route('login.store')}}" method="POST">
              @csrf
              <div class="form-group mb-2">
                <label for="email">Email address</label>
                <input type="email" class="form-control mt-2" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="admin@gmail.com">
              </div>
              <div class="form-group mb-2">
                <label for="password">Password</label>
                <input type="password" class="form-control mt-2" id="password" name="password" placeholder="Password" value="saikat">
              </div>
              <div class="form-group form-check mb-2">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>  
  </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>