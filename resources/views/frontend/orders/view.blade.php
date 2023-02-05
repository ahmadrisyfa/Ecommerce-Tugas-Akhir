@extends('layouts.app')
@section('title','My Orders Detail')
@section('content')
<div class="row">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
            <li class="item-link"><a href="{{ url('/orders') }}">My Orders</a></li>
            <li class="item-link"><span>Detail</span></li>

        </ul>
    </div>
    <div class=" main-content-area">
        <div class="wrap-login-item ">						
            <div class="login-form form-item form-stl">	
    <div class="col-md-12">

        <div class="col-md-6">
            <h3>Detail Pesanan</h3>
            <hr>
                <h5 style="font-size: 17px">Id Pesanan: {{ $order->id }}</h5>
                <h5 style="font-size: 17px">No Pesanan: {{ $order->tracking_no }} </h5>
                <h5 style="font-size: 17px">Di Pesan Tanggal: {{ $order->created_at->format('d-m-Y h:i A') }} </h5>
                <h5 style="font-size: 17px">Metode Pembayaran: {{ $order->payment_mode }} </h5> 
                <h5 style="font-size: 17px;border:1px solid rgb(5, 227, 5);padding:5px;color:rgb(5, 227, 5);">Status Pesanan: <span style="text-transform:uppercase">{{ $order->status_message }}</span></h5> 
        </div>
            
        <div class="col-md-6">
            <h3>Detail User</h3>
            <hr>
            <h5 style="font-size: 17px">Nama Lengkap: {{ $order->fullname }}</h5>
            <h5 style="font-size: 17px">Email: {{ $order->email }}</h5>
            <h5 style="font-size: 17px">No Telepon: {{ $order->phone }}</h5>
            <h5 style="font-size: 17px">Alamat Lengkap: {{ $order->address }}</h5>
            <h5 style="font-size: 17px">Pin Code: {{ $order->pincode }}</h5>
            <span style="opacity: 0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam sequi sunt culpa incidunt, aliquid reprehenderit sit impedit nobis dolores quasi at veritatis, voluptates, veniam ipsum minus ex aliquam quia. Error.</span>
        </div>
    </div>
        <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                <th>Item Id</th>
                <th>Gambar</th>
                <th>Product</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </thead>
            <tbody>
                @php
                    $totalsemuanya = 0;
                @endphp
                @foreach ($order->OrderItem as $value)
                    <tr>
                        <td width="10%">{{ $value->id }}</td>
                        <td width="10%"> 
                            @if ($value->product->productImages)
                                <img src="{{ asset($value->product->productImages[0]->image) }}" style="width: 50px;height:50px" alt="">
                            @else
                            <h4>Not Image</h4>
                            @endif                                 
                        </td>
                        <td>
                            {{ $value->product->name }}
                            @if ($value->productColor)
                                @if ($value->productColor->color)
                                    -<span style="color:#FF2832"> With Color: {{ $value->productColor->color->name }}</span>
                                @endif  
                            @endif
                        </td>
                        <td width="10%">@currency($value->price)</td>
                        <td width="10%">{{ $value->quantity }}</td>
                        <td width="10%"style="font-weight: bold">@currency($value->quantity * $value->price)</td>
                        @php
                        $totalsemuanya += $value->quantity * $value->price;
                    @endphp
                    </tr>                      
                @endforeach
                <tr>
                    <td colspan="5" style="font-weight: bold">Total Semuanya</td>
                    <td colspan="1" style="font-weight: bold">@currency($totalsemuanya)</td>
                    			
                </tr>                
                
            </tbody>
        </table>              
        <a href="{{ url('orders') }}" class="btn btn-info">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection