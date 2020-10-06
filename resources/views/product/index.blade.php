@extends('product.layout')
@section('content')
    <br><br><br>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p> {{ $message }} </p>
                </div>
            @endif
            <div class="card-header bg-secondary text-white">
                <h2> All Product List
                    <a class="btn btn-info float-right border " href="{{ route('product.create') }}">Create New Product</a>
                </h2>
            </div>
            <table class="table table-bordered">
                <thead class="bg-secondary text-white">
                    <tr>
                        <th>Product Name</th>
                        <th>Product Code</th>
                        <th>Details</th>
                        <th>Product Logo</th>
                        <th style="width: 200px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product['product_name'] }}</td>
                            <td>{{ $product['product_code'] }}</td>
                            <td>{{ $product['details'] }}</td>
                            <td>
                                @if (isset($product['logo']) && !empty($product['logo']))
                                    <img src="{{ $product['logo'] }}" height="80px" width="80px" alt="">
                                @else
                                    <img src="https://us.123rf.com/450wm/pavelstasevich/pavelstasevich1811/pavelstasevich181101065/112815953-stock-vector-no-image-available-icon-flat-vector.jpg?ver=6"
                                        height="80px" width="80px" alt="">
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('show/product/' . $product['id']) }}"> <i
                                        class="fa fa-eye" aria-hidden="true"></i></a>&nbsp;
                                <a class="btn btn-secondary" href="{{ url('edit/product/' . $product['id']) }}"> <i
                                        class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;
                                <a class="btn btn-danger" href="{{ url('delete/product/' . $product['id']) }}"
                                    onclick="return confirm('Are you sure want to delete?')"><i class="fa fa-trash"
                                        aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $products->links() }}

        </div>
    </div>

@endsection
