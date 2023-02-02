@extends('layouts.app')

@section('title')
{{ $category->meta_title }}
@endsection
 
@section('meta_keyword')
{{ $category->meta_keyword }}
@endsection

@section('meta_description')
{{ $category->meta_description }}
@endsection
@section('content')
<div class="row">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
            <li class="item-link"><span><a href="{{ url('/collections') }}">Category</a></span></li>
            <li class="item-link"><span>Product</span></li>
        </ul>
    </div>

    <ul class="product-list grid-products equal-container">

       <livewire:frontend.product.index :category="$category"/>
    </ul>
</div>
@endsection