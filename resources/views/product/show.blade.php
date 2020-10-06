@extends('product.layout')
@section('content')
    <br><br><br>
    <div class="row ">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="card border-secondary">
                <div class="card-header bg-secondary text-white ">
                    <h2>Product Details
                        <a class="btn btn-primary float-right border" href="{{ route('product.index') }}">Back</a>
                    </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                @if (isset($productDetails['logo']) && !empty($productDetails['logo']))
                                    <img class="bd-placeholder-img card-img-top" src="{{ url($productDetails->logo) }}"
                                        width="100%" height="350">
                                @else
                                    <img class="bd-placeholder-img card-img-top"
                                        src="https://us.123rf.com/450wm/pavelstasevich/pavelstasevich1811/pavelstasevich181101065/112815953-stock-vector-no-image-available-icon-flat-vector.jpg?ver=6"
                                        width="100%" height="225">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-8 card">
                            <br>
                            <strong>Product Name :</strong>{{ $productDetails->product_name }}
                            <strong>Product Code :</strong>{{ $productDetails->product_name }}
                            <strong>Prouct Details :</strong>{{ $productDetails->details }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
