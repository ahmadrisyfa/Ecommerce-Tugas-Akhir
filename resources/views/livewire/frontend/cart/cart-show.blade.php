<div class="shopping-cart page">

    <main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
					<li class="item-link"><span>Cart</span></li>
				</ul>
			</div>
			<div class=" main-content-area">

				<div class="wrap-iten-in-cart">
					<h3 class="box-title">Products Name</h3>
					<ul class="products-cart">
                        @forelse ($cart as $cartItem)
                             @if($cartItem->product)
                        <li class="pr-cart-item">
                            <div class="product-image">
                                @if ($cartItem->product->productImages)
                                <a href="{{ url('/collections/'.$cartItem->product->category->slug.'/'.$cartItem->product->slug) }}"><figure><img src="{{ asset($cartItem->product->productImages[0]->image) }}" alt=""></figure></a>
                                @else
                                <h4>Not Image</h4>
                                @endif  
                            </div>
                            <div class="product-name">
                                <a style="text-transform: capitalize" class="link-to-product" href="{{ url('/collections/'.$cartItem->product->category->slug.'/'.$cartItem->product->slug) }}">{{ $cartItem->product->name }}
                                    @if ($cartItem->productColor)
                                        @if ($cartItem->productColor->color)
                                   -<span style="color:#FF2832"> With Color: {{ $cartItem->productColor->color->name }}</span>
                                        @endif  
                                    @endif
                                </a> 
                            </div>                        

                            <div class="price-field produtc-price"><p class="price">@currency($cartItem->product->selling_price)</p></div>
                            <div class="quantity">
                                <div class="quantity-input">
                                    <input type="text" name="product-quatity" value="{{ $cartItem->quantity }}" data-max="120" pattern="[0-9]*" >									
                                    <button type="button" class="btn btn-increase" wire:loading.attr="disabled" wire:click="incrementQuantity({{ $cartItem->id }})"></button>
                                    <button type="button" class="btn btn-reduce" wire:loading.attr="disabled" wire:click="decrementQuantity({{ $cartItem->id }})"></button>
                                </div>
                            </div>
                            <div class="price-field sub-total"><p class="price">@currency($cartItem->product->selling_price * $cartItem->quantity)</p>
                                @php
                                    $totalPrice += $cartItem->product->selling_price * $cartItem->quantity
                                @endphp
                            </div>
                            <div class="quantity checkout-info">
								<button type="button"  wire:loading.attr="disabled" wire:click="removeCartItem({{$cartItem->id }})" class="btn btn-checkout" style="color: white" title="Delete {{$cartItem->product->name }}">
									<span wire:loading.remove wire:target="removeCartItem({{$cartItem->id }})">
										<i class="fa fa-trash" aria-hidden="true" style="margin-right: 3px"></i>Remove
									</span>
									<span wire:loading wire:target="removeCartItem({{$cartItem->id }})">
										<i class="fa fa-trash" aria-hidden="true" style="margin-right: 3px"></i>Removing
									</span>
								</button>
							</div>
                        </li>
                            @endif
                        @empty
						<div class="text-center">
							<h4>Tidak Ada Item Dalam Keranjang</h4>
							<a href="{{ url('collections') }}" class="btn" style="background-color:#FF2832;color:white;font-weight:bold">Berbelanja Sekarang</a>
						</div>
                            {{-- <div>No Cart items Available</div> --}}
                        @endforelse

					</ul>
				</div>

				<div class="summary">
					<div class="order-summary">
						<h4 class="title-box">Order Summary</h4>
						<p class="summary-info"><span class="title">Subtotal</span><b class="index">@currency($totalPrice)</b></p>
						{{-- <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p> --}}
						<p class="summary-info total-info "><span class="title">Total</span><b class="index">@currency($totalPrice)</b></p>
					</div>
					<div class="checkout-info">
						{{-- <label class="checkbox-field">
							<input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I have promo code</span>
						</label> --}}
						<a class="btn btn-checkout" href="{{ url('/checkout') }}">Check out</a>
						<a class="link-to-shop" href="{{ url('/collections') }}">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
					</div>				
				</div>

				<div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wrap-show-advance-info-box style-1 box-in-site">
						<h3 class="title-box">Product Yang Mungkin anda Suka</h3>
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
