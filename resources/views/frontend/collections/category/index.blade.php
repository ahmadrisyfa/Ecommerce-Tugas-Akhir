@extends('layouts.app')
@section('title','All Categories')
@section('content')
<div class="row">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
            <li class="item-link"><span>Category</span></li>
        </ul>
    </div>

    <ul class="product-list grid-products equal-container">
        @forelse ($categories as $category)
            
        <li class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
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
        </li>   
        @empty
            <div class="col-md-12">
                <div class="p-2 text-center">
                    <h5>No Categories Avaliable</h5>
                </div>
            </div>
        @endforelse
    </ul>
</div>
@endsection