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
        </div>
        @if (session('message'))        
        <p class="alert alert-success text-center">{{ session('message') }}</p>
        @endif 
        <div class="main-content-area">

            <div class="wrap-iten-in-cart">
                <h3 class="box-title">Order History</h3>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th>No</th>
                            <th>Tracking No</th>
                            <th>Full Name</th>
                            <th>Payment Mode</th>
                            <th>Orderes Date</th>
                            <th>Status Message</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        @forelse ($data as $value)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $value->tracking_no }}</td>
                                <td>{{ $value->fullname }}</td>
                                <td>{{ $value->payment_mode }}</td>
                                <td>{{ $value->created_at->format('d-m-Y') }}</td>
                                <td>{{ $value->status_message }}</td>
                                <td><a href="{{ url('riwayat-pesanan/'.$value->tracking_no) }}" class="btn btn-primary" style="font-weight: bold;color:white"><span class="fa fa-eye"></span> View</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak Ada Pesanan</td>
                            </tr>
                        @endforelse
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