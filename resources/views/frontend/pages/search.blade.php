@extends('layouts.app')

@section('title','Pencarian')
 {{-- 
@section('meta_keyword')
{{ $category->meta_keyword }}
@endsection

@section('meta_description')
{{ $category->meta_description }}
@endsection --}}
@section('content')
<div>
    <main id="main" class="main-site left-sidebar">

	<div class="container">
		
			<div class="row">
                <div class="wrap-breadcrumb">
                    <ul>
                        <li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
                        {{-- <li class="item-link"><span><a href="{{ url('/collections') }}">Category</a></span></li>
                        <li class="item-link"><span>Product</span></li> --}}
                        <li class="item-link"><span>Pencarian</span></li>

                    </ul>
                </div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content-area">
								

					<div class="row">

						<ul class="product-list grid-products equal-container">

                            
                            @forelse ($searchProduct as $productItem)
        
                            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
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
                                    {{-- @if (session('message')) --}}
                                        <div class="alert alert-warning text-center">Tidak Ada Product Yang Anda Cari</div>
                                    {{-- @endif --}}
                            @endforelse					
                          
						</ul>
					</div>
                    
                    <div style="margin-top:10px">
                        {{ $searchProduct->appends(Request()->input())->links() }}
                      </div>
				</div><!--end main products area-->			

			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->

   

</div>

@endsection