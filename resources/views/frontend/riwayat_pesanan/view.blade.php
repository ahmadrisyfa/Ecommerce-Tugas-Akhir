@extends('layouts.app')
@section('title','Order History')
@section('content')
<div class="shopping-cart page">
    <!--main area-->
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
            <li class="item-link"><span>Riwayat pesanan</span></li>
            </ul>
            <a href="{{ url('riwayat-pesanan') }}" class="btn btn-info" style="font-weight: bold;color:#F2F2F2;">Kembali</a>
        </div>
        <div class="main-content-area">

            <div class="row">
                <div class="col-md-6"  style="padding: 30px">
                    <h3>Detail Pesanan</h3>
                    <hr>
                        <h5>No Pesanan: {{ $pemesan->tracking_no }} </h5>
                        <h5>Di Pesan Tanggal: {{ $pemesan->created_at->format('d-m-Y h:i A') }} </h5>
                        <h5>Metode Pembayaran: {{ $pemesan->payment_mode }} </h5> 
                        <h5>Status Pesanan: <span style="text-transform:uppercase;background-color:rgb(77, 249, 38);padding:8px;border:1px solid rgb(119, 101, 101)">{{ $pemesan->status_message }}</span></h5> 
                </div>
                <div class="col-md-6"  style="padding: 30px">
                    <h3>Detail Pemesan</h3>
                    <hr>
                    <h5>Nama Lengkap: {{ $pemesan->fullname }}</h5>
                    <h5>Email: {{ $pemesan->email }}</h5>
                    <h5>No Telepon: {{ $pemesan->phone }}</h5>
                    <h5>Alamat Lengkap: {{ $pemesan->address }}</h5>
                </div>
            </div>
        
        {{-- <div class="card-body">
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
        </div> --}}
            <div class="wrap-iten-in-cart">
                <h3 class="box-title">Order History</h3>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th>No</th>
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
                                <td>{{ $loop->iteration }}</td>
                                <td> 
                                    @if ($value->product->productImages)
                                       <a href="{{ url('/collections/'.$value->product->category->slug.'/'.$value->product->slug) }}"><img src="{{ asset($value->product->productImages[0]->image) }}" style="width: 50px;height:50px" alt="{{ $value->product->name }}"></a> 
                                    @else
                                    <h4>Not Image</h4>
                                    @endif                                 
                                </td>
                                <td>
                                   <a style="color:black" href="{{ url('/collections/'.$value->product->category->slug.'/'.$value->product->slug) }}"> <span>{{ $value->product->name }}</span></a>
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
                        </tbody>
                    </table>
                </div>
            </div>

       

            <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">Product Yang Mugkin Anda Suka</h3>
                    <div class="wrap-products" wire:ignore>
                        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

                            @foreach ($ProductTerkait as $value)
                                
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="{{ url('/collections/'.$value->category->slug.'/'.$value->slug) }}" title="{{ $value->name }}">
                                        @if ($value->productImages->count() > 0)
                                        <figure><img src="{{ asset($value->productImages[0]->image) }}" alt="{{ $value->name }}"></figure>                            
                                        @endif
                                        <div class="group-flash">
                                            @if ($value->quantity > 0)
                                            <span class="flash-item bg-success" style="font-weight:bold">Ready</span>    
                                            @else
                                            <span class="flash-item sale-label" style="width: 90px">Habis</span>
                                            @endif
                                            {{-- @if ($TotalOrderHariIni)                                        
                                                <span class="flash-item new-label" style="font-weight:bold">Baru</span>    
                                            @endif --}}
                                        </div>                                   
                                        <div class="wrap-btn">
                                            <a href="{{ url('/collections/'.$value->category->slug.'/'.$value->slug) }}" class="function-link">quick view</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="{{ url('/collections/'.$value->category->slug.'/'.$value->slug) }}" class="product-name" style="font-weight: 500;text-transform:capitalize"><span>{{ $value->name }}</span></a>
                                    <div class="wrap-price"><ins><p class="product-price">@currency($value->selling_price)</p></ins> <del><p class="product-price">@currency($value->original_price)</p></del></div>
                                </div>
                            </div>
                            @endforeach
                            
                        

                        </div>
                    </div><!--End wrap-products-->
                </div>
            </div>

        </div><!--end main content area-->
    </div><!--end container-->

</main>
</div>


@endsection