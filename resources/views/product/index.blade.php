@extends('layouts.admin_dash')
@include('layouts.header')

@section('content')

    <div class="admin-card">
        <h3>Products</h3>
        <br>
        <a href="{{ url('/product/create') }}" class="btn btn-success" title="Add New Student">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New Product
        </a>
        <br><br>
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Product Qty</th>
                    <th>Product Price</th>
                    <th>Product Status</th>
                    <th>Product Add Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->product_price }}</td>
                        {{-- <td>{{ $item->product_status }}</td> --}}
                        <td>
                            @php
                                if($item->product_status == 1){
                                    echo "<h4 class='badge bg-success'>In Stock</h4>";
                                }elseif ($item->product_status == 0) {
                                    echo "<h4 class='badge bg-danger'>Out of Stock</h4>";
                                }
                            @endphp
                        </td>
                        <td>{{ $item->created_at }}</td>

                        <td>
                            <a href="{{ url('/product/' . $item->id) }}" title="View Products"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('/product/' . $item->id . '/edit') }}" title="Edit Products"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                            <form method="POST" action="{{ url('/product' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Products" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
        </table>
    </div>

@endsection

