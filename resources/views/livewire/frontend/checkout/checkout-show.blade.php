<div class="checkout page">
    	<!--main area-->
    <main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
					<li class="item-link"><span>Checkout</span></li>
				</ul>
			</div>
            @if ($this->totalProductAmount != '0')
                
			<div class=" main-content-area">
				<div class="wrap-address-billing">
					<h3 class="box-title">Billing Address</h3>
					{{-- <form action="#" method="get" name="frm-billing"> --}}
						<p class="row-in-form">
							<label for="fname">Nama Lengkap:<span>*</span></label>
							<input id="fname" type="text" wire:model.defer="fullname" value="" placeholder="Nama Lengkap Anda">
                            @error('fullname')<small class="text-danger" style="font-size: 14px">{{ $message }}</small>@enderror
						</p>						
						<p class="row-in-form">
							<label for="email">Email:<span>*</span></label>
							<input id="email" type="email" wire:model.defer="email" value="" placeholder="Type your email">
                            @error('email')<small class="text-danger" style="font-size: 14px">{{ $message }}</small>@enderror

						</p>
						<p class="row-in-form">
							<label for="phone">No Telepon<span>*</span></label>
							<input id="phone" type="number" wire:model.defer="phone" placeholder="10 digits format">
                            @error('phone')<small class="text-danger" style="font-size: 14px">{{ $message }}</small>@enderror

						</p>												
						<p class="row-in-form" style="opacity:0">
							<label for="zip-code">Pin-Code / ZIP-Code:<span>*</span></label>
							<input id="zip-code" type="number" wire:model.defer="pincode" value="" placeholder="Your postal code">
                            @error('pincode')<small class="text-danger" style="font-size: 14px">{{ $message }}</small>@enderror

						</p>
                        <p class="row-in-form" style="width: 100%">
							<label for="add">Alamat Lengkap:<span>*</span></label>
							<textarea id="add"  type="text" wire:model.defer="address" value="" rows="4" style="width: 100%;border-color:#E6E6E6;padding:10px" placeholder=""></textarea>
                            @error('address')<small class="text-danger" style="font-size: 14px">{{ $message }}</small>@enderror

						</p>						
						<p class="row-in-form fill-wife">
							<label class="checkbox-field">
								{{-- <input name="create-account" id="create-account" value="forever" type="checkbox"> --}}
								<span style="opacity: 0">Create an account?</span>
							</label>
						
						</p>
					{{-- </form> --}}
				</div>
				<div class="summary summary-checkout">
					<div class="summary-item payment-method">
						<h4 class="title-box">Payment Method</h4>
						<p class="summary-info"><span class="title">Check / Money order</span></p>
						<p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
						<div class="choose-payment-methods">
							<label class="payment-method">
								<input name="payment-method" id="payment-method-bank" value="bank" type="radio"  wire:loading.attr="disabled" >
								<span>Cash On Delivery</span>
								<span class="payment-desc">
                                   <button type="submit" class="btn btn-small" wire:loading.attr="disabled" wire:click="codOrder">
								<span wire:loading.remove wire:target="codOrder">Pesan Sekarang (COD)</span>	
								<span wire:loading wire:target="codOrder">Sedang Memesan</span>	

								</button> 
                                </span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-visa" value="visa" type="radio">
								<span>Pembayaran Rekening</span>
								<span class="payment-desc">Maaf Fitur Ini belum tersedia</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
								<span>Paypal</span>
								<span class="payment-desc">Maaf Fitur Ini belum tersedia</span>
							</label>
						</div>
						<p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">@currency($this->totalProductAmount)</span></p>
                       
						{{-- <a href="thankyou.html" class="btn btn-medium">Place order now</a> --}}
					</div>
					{{-- <div class="summary-item shipping-method" style="opacity: 0">
						<h4 class="title-box f-title" >Shipping method</h4>
						<p class="summary-info"><span class="title">Flat Rate</span></p>
						<p class="summary-info"><span class="title">Fixed $50.00</span></p>
						<h4 class="title-box">Discount Codes</h4>
						<p class="row-in-form">
							<label for="coupon-code">Enter Your Coupon code:</label>
							<input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">	
						</p>
						<a href="#" class="btn btn-small">Apply</a>
					</div> --}}
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

			</div>
            @else
                <div class="text-center">
                    <h4>Tidak Ada Item Dalam Keranjang Untuk Di Checkout</h4>
                    <a href="{{ url('collections') }}" class="btn" style="background-color:#FF2832;color:white;font-weight:bold">Berbelanja Sekarang</a>
                </div>
            @endif

		</div><!--end container-->

	</main>
	<!--main area-->
</div>
