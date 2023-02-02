@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Products
                    <a href="{{ url('admin/products/create') }}" class="btn btn-primary btn-sm float-end" style="font-weight: bold;color:#F2F2F2"><span class="mdi mdi-plus-circle"></span>Add Products</a>
                </h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>category</th>
                          <th>Product</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            @if ($product->category)                            
                            <td>{{ $product->category->name }}</td>
                            @else
                                No Category
                            @endif
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->selling_price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->status  == '1' ? 'hiddden' : 'Visible' }}</td>
                            <td>
                                <a href="{{ url('admin/products/'.$product->id.'/edit') }}" class="btn btn-sm btn-success" style="font-weight:bold;color:#2f2d2d"><span class="mdi mdi-lead-pencil"></span> Edit</a>
                                <a href="{{ url('admin/products/'.$product->id.'/delete') }}" style="font-weight:bold;color:#2f2d2d" onclick="return confirm('Yakin Ingin Menghapus Data Ini?')" class="btn btn-sm btn-danger"><span class="mdi mdi-delete-forever"></span> Delete</a>
                            </td>
                        </tr>
                        @empty
                                <tr>
                                    <td colspan="7" class="text-center">No Products Available</td>
                                </tr>                    
                        @endforelse 
                      </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


@endsection