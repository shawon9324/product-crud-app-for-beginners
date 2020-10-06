@extends('product.layout')
@section('content')
    <br><br><br>
    <div class="row ">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="card border-secondary">
                <div class="card-header bg-secondary text-white ">
                    <h2> Add Product Information
                        <a class="btn btn-primary float-right border" href="{{ route('product.index') }}">Back</a></h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">@csrf
                        <div class="form-group">
                            <label for="Product Name">Product Name:</label><br>
                            <input required class="form-control" type="text" name="product_name" id="product_name" value=""
                                placeholder="Enter Product Name">
                        </div>
                        <div class="form-group">
                            <label for="Product Name">Product Code:</label><br>
                            <input required class="form-control" type="text" name="product_code" id="product_code" value=""
                                placeholder="Enter Product Code">
                        </div>
                        <div class="form-group">
                            <label for="Product Name">Product Details:</label><br>
                            <textarea required class="form-control" rows="4" type="" name="details" id="details" value=""
                                placeholder="Enter Product Details"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Product Name">Product Logo:</label><br>
                            <input class="form-control" type="file" name="logo" id="logo" value="">
                        </div>
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>







@endsection
