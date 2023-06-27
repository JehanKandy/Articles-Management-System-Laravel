@extends('layouts.admin_dash')
@include('layouts.header')

@section('content')
<div class="admin-card">
    <h4><i class="fas fa-cart-plus"></i> Update Product</h4><br>
    
    <a href="{{ url('/product') }}" class="btn btn-primary" title="Back">
        Back
    </a><br><br>

    <hr>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error</strong> Following Input Errors are Found
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="{{ url('product/' .$product->id) }}" method="POST">
    @csrf
    @method("PATCH")
    
    <input type="hidden" name="id" value="{{ $product->id }}">
        <div class="form-group">
            <label for="product name">Update Product Name : </label>
            <input type="text" name="product_name" id=""  class="form-control" value="{{ $product->product_name }}" placeholder="Product Name"><br>
        </div>
        <div class="form-group">
            <label for="product desc">Update Product Description : </label>
            <textarea name="product_description" id="" cols="20" rows="10" class="form-control" style="resize: none;"  placeholder="Product Description">{{ $product->product_description }}</textarea><br>
        </div>
        <div class="form-group">
            <label for="product qty">Update Product Qty : </label>
            <input type="number" name="qty" id="" class="form-control" placeholder="Product Qty" value="{{ $product->qty }}"><br>
        </div>
        <div class="form-group">
            <label for="product Price">Update Product Price : </label>
            <input type="number" name="product_price" class="form-control" min="0.00" max="10000.00" step="0.5" placeholder="Product Price" value="{{ $product->product_price }}"><br>
        </div>
        <div class="form-group">
            <label for="product Price">Update Product Status : </label><br>
            @php
                if($product->product_status == 1){
                    echo "<h4 class='badge bg-success'>In Stock</h4>";
                }
                elseif ($product->product_status == 0) {
                    echo "<h4 class='badge bg-danger'>Out of Stock</h4>";
                }
            @endphp
            <h6>
                <input type="radio" name="product_status" id="" value="1"> In Stock <br>
                <input type="radio" name="product_status" id="" value="0"> Out Of Stock <br><br>
            </h6>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-lg-12">
                    <input type="submit" value="Update Product" class="btn btn-success" style="width:100%;">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection