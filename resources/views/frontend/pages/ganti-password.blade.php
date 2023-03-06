@extends('layouts.app')
@section('title','Ganti Password')
@section('content')
<div class="checkout page">
    <!--main area-->
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
                <li class="item-link"><span>Ganti Password</span></li>
            </ul>
        </div>
        @if (session('message'))        
            <p class="alert alert-success text-center">{{ session('message') }}</p>
        @endif      
         @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li class="text-danger" style="margin-left: 10px">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div class=" main-content-area">
                <div class="wrap-address-billing">
                    <h3 class="box-title">Profile Anda</h3>
                    <form action="{{ url('ganti-password') }}" method="POST" name="frm-billing">
                        @csrf                      
                        <p class="row-in-form" style="width: 100%;">
                            <label for="password_lama">Old Password:<span>*</span></label>
                            <input id="password_lama" name="password_lama"  type="text">
                            @error('password_lama')<small class="text-danger" style="font-size: 14px">{{ $message }}</small>@enderror
                        </p>
                        <p class="row-in-form" style="width: 100%;">
                            <label for="password">New Password:<span>*</span></label>
                            <input id="password" name="password"  type="text">
                            @error('password')<small class="text-danger" style="font-size: 14px">{{ $message }}</small>@enderror
                        </p> 
                        <p class="row-in-form" style="width: 100%;">
                            <label for="password_confirmation">Confirm Password:<span>*</span></label>
                            <input id="password_confirmation" name="password_confirmation"  type="text">
                            @error('password_confirmation')<small class="text-danger" style="font-size: 14px">{{ $message }}</small>@enderror
                        </p>
                            <input id="disbled" disabled name="disbled" type="number" style="opacity: 0">
                            <input id="disabled" disabled name="disabled" type="number" style="opacity: 0">
                            <input id="disabled" disabled name="disabled" type="number" style="opacity: 0">                						
                        <p class="row-in-form fill-wife">
                            <label class="checkbox-field">
                                <button class="btn" style="background-color: #FF2832;color:white">Simpan Data</button>
                            </label>
                        
                        </p>
                    </form>
                </div>
            {{-- <div class="wrap-address-billing">
                <div class="col-md-12">
                <h3 class="box-title">Ganti Password Anda</h3>
                <form action="{{ url('ganti-password') }}" method="POST" name="frm-billing">
                    @csrf
                  
                    <div class="col-md-12">
                        <label for="">Password</label>
                        <input type="text" name="password_lama" style="width: 100%" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="">New Password</label>
                        <input type="text" style="width: 100%" name="password" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="">Confirm Password</label>
                        <input type="text" style="width: 100%" name="password_confirmation" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn" style="background-color: #FF2832;color:white;margin-top:10px;float: right;">Simpan Data</button>
                    </div>            
                </form>
                </div>
            </div> --}}
          

            <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">PRODUCT YANG MUGKIN ANDA SUKA</h3>
                    <div class="wrap-products" wire:ignore>
                        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

                            @foreach ($product as $value)
                                
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

        </div>

    </div><!--end container-->

</main>
<!--main area-->
</div>

@endsection