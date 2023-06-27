@extends('layouts.admin_dash')
@include('layouts.header')

@section('content')
    <div class="admin-card">
        <a href="{{ url('/product') }}" class="btn btn-primary" title="Back">
            Back
        </a><br><br>
        <div class="row">
            <div class="col-lg-3">
                <h4>Product Name</h4>
            </div>
            <div class="col-lg-9">
                {{ $product->product_name  }}
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-3">
                <h4>Product Description</h4>
            </div>
            <div class="col-lg-9">
                {{ $product->product_description  }}
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-3">
                <h4>Product Qty</h4>
            </div>
            <div class="col-lg-9">
                {{ $product->qty  }}
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-3">
                <h4>Product Price</h4>
            </div>
            <div class="col-lg-9">
                {{ $product->product_price  }}
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-3">
                <h4>Product Status</h4>
            </div>
            <div class="col-lg-9">
                @php
                    if( $product->product_status == 1){
                        echo "<h4 class='badge bg-success'>In Stock</h4>";
                    }
                    elseif( $product->product_status == 0){
                        echo "<h4 class='badge bg-danger'>Out of Stock</h4>";
                    }
                @endphp
            </div>
        </div>
        
    </div>
@endsection