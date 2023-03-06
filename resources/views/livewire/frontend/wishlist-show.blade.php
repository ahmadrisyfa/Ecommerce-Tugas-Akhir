<div class="shopping-cart page">
    	<!--main area-->
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
				<li class="item-link"><span>Wishlist</span></li>
				</ul>
			</div>
			<div class=" main-content-area">

				<div class="wrap-iten-in-cart">
					<h3 class="box-title">Products Name</h3>
					<ul class="products-cart">
						@forelse ($wishlist as $wishlistItem)
							@if ($wishlistItem->product)							
						<li class="pr-cart-item">
							<div class="product-image">
							<a href="{{ url('/collections/'.$wishlistItem->product->category->slug.'/'.$wishlistItem->product->slug) }}"><figure><img src="{{ $wishlistItem->product->productImages[0]->image }}" alt=""></figure></a>
							</div>
							<div class="product-name">
								<a class="link-to-product" href="{{ url('/collections/'.$wishlistItem->product->category->slug.'/'.$wishlistItem->product->slug) }}">{{ $wishlistItem->product->name }}</a>
							</div>
							<div class="price-field produtc-price"><p class="price">@currency($wishlistItem->product->selling_price)</p></div>
							{{-- <div class="quantity">
								<div class="quantity-input">
									<input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >									
									<a class="btn btn-increase" href="#"></a>
									<a class="btn btn-reduce" href="#"></a>
								</div>
							</div>
							<div class="price-field sub-total"><p class="price">$256.00</p></div> --}}
							<div class="quantity checkout-info">
								<button type="button" wire:click="removeWishlistItem({{ $wishlistItem->id }})" class="btn btn-checkout" style="color: white" title="Delete Wishlist {{ $wishlistItem->product->name }}">
									<span wire:loading.remove wire:target="removeWishlistItem({{ $wishlistItem->id }})">
										<i class="fa fa-trash" aria-hidden="true" style="margin-right: 3px"></i>Remove To Wishlist
									</span>
									<span wire:loading wire:target="removeWishlistItem({{ $wishlistItem->id }})">
										<i class="fa fa-trash" aria-hidden="true" style="margin-right: 3px"></i>Removing
									</span>
								</button>
							</div>
						</li>							
							@endif
						@empty
							<h4 class="text-center">No Wishlist Added</h4>
						@endforelse

					</ul>
				</div>

				{{-- <div class="summary">
					<div class="order-summary">
						<h4 class="title-box">Order Summary</h4>
						<p class="summary-info"><span class="title">Subtotal</span><b class="index">$512.00</b></p>
						<p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
						<p class="summary-info total-info "><span class="title">Total</span><b class="index">$512.00</b></p>
					</div>
					<div class="checkout-info">
						<label class="checkbox-field">
							<input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I have promo code</span>
						</label>
						<a class="btn btn-checkout" href="checkout.html">Check out</a>
						<a class="link-to-shop" href="shop.html">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
					</div>
					<div class="update-clear">
						<a class="btn btn-clear" href="#">Clear Shopping Cart</a>
						<a class="btn btn-update" href="#">Update Shopping Cart</a>
					</div>
				</div> --}}

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
 