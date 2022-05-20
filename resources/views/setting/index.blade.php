<x-layout title="Settings">
    @include('partials.alerts')
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h3>Update shop information</h3>
                    
                    <!-- shop update data form -->
                    <form action="{{route('setting.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label for="shop_logo">Shop Logo</label>
                            <input type="file" class="form-control mt-2" name="shop_logo" id="shop_logo">
                            <small class="help-text">Image must be <kbd>.png</kbd> and <kbd>100*100</kbd></small>
                        </div>                        
                        <div class="form-group mb-2">
                            <label for="shop_name">Shop Name</label>
                            <input type="text" class="form-control mt-2" name="shop_name" id="shop_name" value="{{$shop->shop_name}}">
                            @error('shop_name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="shop_keeper">Shop Keeper</label>
                            <input type="text" class="form-control mt-2" name="shop_keeper" id="shop_keeper" value="{{$shop->shop_keeper}}">
                            @error('shop_keeper')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="shop_email">Shop Email</label>
                            <input type="email" class="form-control mt-2" name="shop_email" id="shop_email" value="{{$shop -> shop_email}}">
                            @error('shop_email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="shop_phone">Shop Phone</label>
                            <input type="text" class="form-control mt-2" name="shop_phone" id="shop_phone" value="{{$shop -> shop_phone}}">
                            @error('shop_phone')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="shop_address">Shop Address</label>
                            <input type="text" class="form-control mt-2" name="shop_address" id="shop_address" value="{{$shop -> shop_address}}">
                            @error('shop_address')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{('storage/shop/shop_logo.png')}}" alt="" class="img-fluid mb-3" style="width: 100px;">
                    </div>
                    
                    <table class="table table-bordered">
                        <tr>
                            <td>Shop Name</td>
                            <td>{{$shop -> shop_name}}</td>
                        </tr>
                        <tr>
                            <td>Shop Kepper</td>
                            <td>{{$shop -> shop_keeper}}</td>
                        </tr>
                        <tr>
                            <td>Shop Email</td>
                            <td>{{$shop -> shop_email}}</td>
                        </tr>
                        <tr>
                            <td>Shop Phone</td>
                            <td>{{$shop -> shop_phone}}</td>
                        </tr>
                        <tr>
                            <td>Shop Address</td>
                            <td>{{$shop -> shop_address}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>