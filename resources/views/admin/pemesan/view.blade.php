@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        @if (session('message'))        
        <p class="alert alert-success text-center">{{ session('message') }}</p>
        @endif 
        <div class="card">
            <div class="card-header">
                <h3>
                <a href="{{ url('admin/pemesan') }}" class="btn btn-info float-end">Kembali</a>
                <a href="{{ url('admin/invoice/'.$pemesan->id.'/generate') }}" class="btn btn-primary float-end mx-1">Download Invoice</a>
                <a href="{{ url('admin/invoice/'.$pemesan->id) }}" target="_blank" class="btn btn-warning float-end">View Invoice</a>
                <a href="{{ url('admin/invoice/'.$pemesan->id.'/email') }}" class="btn btn-info float-end mx-1">Send invoice Via Mail</a>
                </h3>
            </div>
   
            <div class="row">
                <div class="col-md-6"  style="padding: 30px">
                    <h3>Detail Pesanan</h3>
                    <hr>
                        <h5>Id Pesanan: {{ $pemesan->id }}</h5>
                        <h5>No Pesanan: {{ $pemesan->tracking_no }} </h5>
                        <h5>Di Pesan Tanggal: {{ showDateTime($pemesan->created_at, 'd F Y') }} </h5>
                        <h5>Metode Pembayaran: {{ $pemesan->payment_mode }} </h5> 
                        <h5 style="border: 2px solid rgb(0, 251, 0);padding:5px">Status Pesanan: <span style="text-transform:uppercase">{{ $pemesan->status_message }}</span></h5> 
                </div>
                <div class="col-md-6"  style="padding: 30px">
                    <h3>Detail User</h3>
                    <hr>
                    <h5>Nama Lengkap: {{ $pemesan->fullname }}</h5>
                    <h5>Email: {{ $pemesan->email }}</h5>
                    <h5>No Telepon: {{ $pemesan->phone }}</h5>
                    <h5>Alamat Lengkap: {{ $pemesan->address }}</h5>
                </div>
            </div>
        
        <div class="card-body">
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
                @foreach ($pemesan->OrderItem as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td> 
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
                        <td>@currency($value->price)</td>
                        <td>{{ $value->quantity }}</td>
                        <td style="font-weight: bold">@currency($value->quantity * $value->price)</td>
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
            </div>
            </div>
        </div>
        <div class="card border mt-3">
            <div class="card-body">
            <h4>Proses Pesanan (Update Status Pesanan )</h4>
            <hr>
                <div class="row">
                    <div class="col-md-5">
                        <form action="{{ url('admin/pemesan/'.$pemesan->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                        <div class="input-group">
                            <select name="order_status" class="form-select">
                                <option value="">Select Order Status</option>
                                <option value="In Progress" {{ Request::get('status') == 'In Progress' ? 'selected': ''}}>In Progress</option>
                                <option value="Completed" {{ Request::get('status') == 'Completed' ? 'selected': ''}}>Completed</option>
                                <option value="Pending" {{ Request::get('status') == 'Pending' ? 'selected': ''}}>Pending</option>
                                <option value="Canceled" {{ Request::get('status') == 'Canceled' ? 'selected': ''}}>Canceled</option>
                                <option value="Out-For-Delivery" {{ Request::get('status') == 'Out-For-Delivery' ? 'selected': ''}}>Out For Delivery</option>
                            </select>
                            <button type="submit" class="btn btn-primary text-white">Update</button>
                        </div>
                        </form>
                    </div>
                    <div class="col-md-7">
                        <h4 class="m-3">Curent order Status: <span class="text-uppercase">{{ $pemesan->status_message }}</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection