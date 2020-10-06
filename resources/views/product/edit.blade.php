@extends('product.layout')
@section('content')
    <br><br><br>
    <div class="row ">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="card border-secondary">
                <div class="card-header bg-secondary text-white ">
                    <h2> Edit Product Information
                        <a class="btn btn-primary float-right border" href="{{ route('product.index') }}">Back</a></h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('update/product/' . $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="Product Name">Product Name:</label><br>
                            <input required class="form-control" type="text" name="product_name" id="product_name"
                                value="{{ $product['product_name'] }}">
                        </div>
                        <div class="form-group">
                            <label for="Product Name">Product Code:</label><br>
                            <input required class="form-control" type="text" name="product_code" id="product_code"
                                value="{{ $product['product_code'] }}">
                        </div>
                        <div class="form-group">
                            <label for="Product Name">Product Details:</label><br>
                            <textarea required class="form-control" rows="4" type="" name="details" id="details">
                            {{ $product['details'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="Product Name">Product Logo:</label><br>
                            <input class="form-control" type="file" name="logo" id="logo">

                            <div class="card-body">
                                @if (isset($product['logo']) && !empty($product['logo']))
                                    <img src="{{ url($product->logo) }}" height="80px" width="80px" alt="">
                                    <input type="hidden" name="old_logo" value="{{ $product->logo }}">
                                @else
                                    <input type="hidden" name="old_logo" value="{{ $product->logo }}">
                                    <img src="https://us.123rf.com/450wm/pavelstasevich/pavelstasevich1811/pavelstasevich181101065/112815953-stock-vector-no-image-available-icon-flat-vector.jpg?ver=6"
                                        height="80px" width="80px" alt="">
                                @endif
                            </div>

                        </div>
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>







@endsection
