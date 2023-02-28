@extends('layouts.app')
@section('title','Profile')
@section('content')
<div class="checkout page">
    <!--main area-->
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
                <li class="item-link"><span>Profile</span></li>
            </ul>
        </div>
        @if (session('message'))        
            <p class="alert alert-success text-center">{{ session('message') }}</p>
        @endif
        {{-- @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li class="text-danger" style="margin-left: 10px">{{ $error }}</li>
                @endforeach
            </ul>
        @endif --}}
        <a href="{{ url('ganti-password') }}" class="btn btn-warning" style="float: right;background-color: #FF2832;">Ganti Password?</a>
        <div class=" main-content-area">
            <div class="wrap-address-billing">
                <h3 class="box-title">Profile Anda</h3>
                <form action="{{ url('profile') }}"method="POST" name="frm-billing">
                    @csrf
                    <p class="row-in-form">
                        <label for="fname">Nama Lengkap:<span>*</span></label>
                        <input id="fname" name="name" type="text" value="{{ auth()->user()->name }}" placeholder="Nama Lengkap Anda">
                        @error('fullname')<small class="text-danger" style="font-size: 14px">{{ $message }}</small>@enderror
                    </p>						
                    <p class="row-in-form">
                        <label for="email">Email:<span>*</span></label>
                        <input id="email" name="email" type="email" value="{{ auth()->user()->email }}" readonly placeholder="Type your email">
                        @error('email')<small class="text-danger" style="font-size: 14px">{{ $message }}</small>@enderror

                    </p>
                    <p class="row-in-form">
                        <label for="phone">No Telepon<span>*</span></label>
                        <input id="phone" name="phone" type="number" value="{{ Auth::user()->userDetail->phone ?? '' }}" placeholder="10 digits format">
                        @error('phone')<small class="text-danger" style="font-size: 14px">{{ $message }}</small>@enderror

                    </p>												
                    <p class="row-in-form">
                        <label for="zip-code">Pin-Code / ZIP-Code:<span>*</span></label>
                        <input id="zip-code" name="pincode" type="number" value="{{ Auth::user()->userDetail->pincode ?? '' }}" placeholder="Your postal code">
                        @error('pincode')<small class="text-danger" style="font-size: 14px">{{ $message }}</small>@enderror

                    </p>
                    <p class="row-in-form" style="width: 100%">
                        <label for="add">Alamat Lengkap:<span>*</span></label>
                        <textarea id="add" name="address"  type="text" value="" rows="4" style="width: 100%;border-color:#E6E6E6;padding:10px" placeholder="">{{ Auth::user()->userDetail->address ?? '' }}</textarea>
                        @error('address')<small class="text-danger" style="font-size: 14px">{{ $message }}</small>@enderror

                    </p>						
                    <p class="row-in-form fill-wife">
                        <label class="checkbox-field">
                            <button class="btn" style="background-color: #FF2832;color:white">Simpan Data</button>
                        </label>
                    
                    </p>
                </form>
            </div>
          

            <div class="wrap-show-advance-info-box style-1 box-in-site">
                <h3 class="title-box">Most Viewed Products</h3>
                <div class="wrap-products" wire:ignore>
                    <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('template_website') }}/images/products/digital_04.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">new</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('template_website') }}/images/products/digital_17.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('template_website') }}/images/products/digital_15.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">new</span>
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('template_website') }}/images/products/digital_01.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item bestseller-label">Bestseller</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('template_website') }}/images/products/digital_21.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('template_website') }}/images/products/digital_03.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('template_website') }}/images/products/digital_04.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">new</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('template_website') }}/images/products/digital_05.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item bestseller-label">Bestseller</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>
                    </div>
                </div><!--End wrap-products-->
            </div>

        </div>

    </div><!--end container-->

</main>
<!--main area-->
</div>

@endsection