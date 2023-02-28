@extends('layouts.app')
@section('title','Product Terbaru')
@section('content')
<div class="row">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
            <li class="item-link"><span>Category</span></li>
        </ul>
    </div>

    <ul class="product-list grid-products equal-container">
            
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content-area">
								

            <div class="row">

                <ul class="product-list grid-products equal-container">

                    @forelse ($productTerbaru as $productItem)

                    <li class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}" title="{{ $productItem->name }}">
                                    @if ($productItem->productImages->count() > 0)
                                    <figure><img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}"></figure>                            
                                    @endif
                                    <div class="group-flash">
                                        @if ($productItem->quantity > 0)
                                        <span class="flash-item bg-success" style="font-weight:bold">Ready</span>    
                                        @else
                                        <span class="flash-item sale-label" style="width: 90px">Habis</span>
                                        @endif
                                        <span class="flash-item sale-label" style="font-weight:bold">Baru</span>    
                                    </div>                                   
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}" class="product-name" style="font-weight: 500;text-transform:capitalize"><span>{{ $productItem->name }}</span></a>
                                <div class="wrap-price"><ins><p class="product-price">@currency($productItem->selling_price)</p></ins> <del><p class="product-price">@currency($productItem->original_price)</p></del></div>
                                <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}" class="btn add-to-cart">Detail</a>
                            </div>
                        </div>
                    </li>
                    @empty
                        <div class="col-md-12">
                            <div class="p-2 text-center">
                                <h5>Tidak Ada Product Terbaru</h5>
                            </div>
                        </div>
                    @endforelse						

                </ul>

            </div>

        </div>

        {{-- <li class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
            <div class="product product-style-3 equal-elem ">
                <div class="product-thumnail">
                    <a href="{{ url('/collections/'.$category->slug )}}" title="{{ $category->name }}">
                        <figure><img src="{{ asset("$category->image") }}" alt="{{ $category->name }}"></figure>
                    </a>
                </div> 
                <div class="product-info">
                    <a href="{{ url('/collections/'.$category->slug )}}" class="product-name"><span style="text-transform: capitalize;font-weight:bold;text-align:center">{{ $category->name }}</span></a>
                    {{-- <div class="wrap-price"><span class="product-price">$250.00</span></div> --}}
                    {{-- <a href="#" class="btn add-to-cart">Add To Cart</a> --}}
                </div>
            </div>
        {{-- </li>    --}}
        {{-- @empty
            <div class="col-md-12">
                <div class="p-2 text-center">
                    <h5>No Product Terbaru</h5>
                </div>
            </div>
        @endforelse --}}
    </ul>
</div>
@endsection