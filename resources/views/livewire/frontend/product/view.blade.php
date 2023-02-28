@section('css')
	<style>
		.radio-kirun {
  /* display: block; */
  position: relative;
  padding-left: 25px;
  padding-right: 10px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 10px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.radio-kirun input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.radio-centang-kirun {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.radio-kirun:hover input ~ .radio-centang-kirun {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.radio-kirun input:checked ~ .radio-centang-kirun {
  background-color: #FF2732;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.radio-centang-kirun:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.radio-kirun input:checked ~ .radio-centang-kirun:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.radio-kirun .radio-centang-kirun:after {
 	top: 6px;
	left: 6px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
.krn{
	color: #FF2732
}
	</style>
@endsection
<div class="detail page">
    <main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>

					<li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
					<li class="item-link"><a href="{{ url('/collections/'.$product->category->slug)}}" class="link">{{ $product->category->name }}</a></li>
					
					<li class="item-link"><span>{{ $product->name }}</span></li>
				</ul>
			</div>
			{{-- @if (session()->has('message'))
			<div class="alert alert-success">
			   {{ session('message') }}
			</div>				
			@endif --}}
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">
						<div class="detail-media">
							<div class="product-gallery" wire:ignore>
							  <ul class="slides">
								  @if ($product->productImages)  
								 	 @foreach ($product->productImages as $value)								
										<li data-thumb="{{ asset($value->image)}}">
											<img src="{{ asset($value->image)}}" alt="{{ $value->name }}" />
										</li>
									@endforeach
                                @else
                                No Image added
                                @endif
							   

							  </ul>
						 	</div>
						</div>
						<div class="detail-info">
							{{-- <div class="product-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <a href="#" class="count-review">(05 review)</a>
                            </div> --}}
                            <h2 class="product-name" style="text-transform: capitalize">{{ $product->name }}</h2>
                            <div class="short-desc">
                                <ul>
                                    <li>{{ $product->small_description }}</li>
									
                                    {{-- <li>Dual-core A7 with quad-core graphics</li>
                                    <li>FaceTime HD Camera 7.0 MP Photos</li> --}}
                                </ul>
                            </div>
                            <div class="wrap-social">
                            	<a class="link-socail" href="#"><img src="{{ asset('template_website') }}/images/social-list.png" alt=""></a>
                            </div>

                            <div class="wrap-social">
							@if ($product->productColors->count() > 0)									
								@if ($product->productColors)
								<span style="font-weight: bold;font-size:15px;">Pilih Warna</span>
								<br>
								@foreach ($product->productColors as $colorItem)	
								{{-- <label class="radio-kirun" style="margin-top:7px"> --}}
									{{-- <input type="radio" value="{{ $colorItem->id }}"  name="colorSelection"> --}}
									<label class="colorSelectionLabel" style="text-transform:capitalize;font-size:15px;background-color:{{ $colorItem->color->code }};padding-right:10px;padding-left:10px;padding-top:5px;padding-bottom:5px;border-radius:5px;color:white"  wire:click="colorSelected({{ $colorItem->id }})">
								{{ $colorItem->color->name }}</label>
									{{-- <span class="radio-centang-kirun"></span> --}}
								{{-- </label>									   --}}
								@endforeach
									@endif
									@if ($this->prodColorSelectedQuantity == 'outOfStock')
									<p class="availability">Availability: <b style="color:#FF2832">Habis</b></p> 									
									@elseif($this->prodColorSelectedQuantity > 0)
									<p class="availability">Availability: <b style="color:#0bd34e">Ready</b></p>
										
									@endif
							@else
							<div class="stock-info in-stock">
                                @if ($product->quantity)
                                <p class="availability">Availability: <b style="color:#0bd34e">Ready</b></p>
                                @else
                                <p class="availability">Availability: <b style="color:#FF2832">Habis</b></p>
                                @endif
                            </div>
							@endif
							</div>

                            <div class="wrap-price"><ins><p class="product-price">@currency($product->selling_price)</p></ins> <del><p class="product-price">@currency($product->original_price)</p></del></div>

                           

                            <div class="quantity">
                            	<span>Quantity:</span>
								<div class="quantity-input">
									<input type="text" name="product-quatity" wire:model="quantityCount" readonly value="{{ $this->quantityCount }}" data-max="120" pattern="[0-9]*" >									
									<button wire:click="decrementQuantity" class="btn btn-reduce"></button>
									<button wire:click="incrementQuantity" class="btn btn-increase"></button>
								</div>
							</div>
							<div class="wrap-butons">
								<button type="button" wire:click="addToCart({{ $product->id }})" class="btn-submit add-to-cart"style="width:100%">
									<i class="fa fa-shopping-basket"  style="margin-right: 5px" aria-hidden="true"></i>Add to Cart
								</button>
                                <div class="wrap-btn">
                                    {{-- <a href="#" class="btn btn-compare">Add Compare</a>									 --}}
                                    <button type="button" wire:click="addToWishlists({{ $product->id }})" class="btn-submit add-to-cart" style="margin-top:7px;margin-left:30%;border-radius:7px">
										<span wire:loading.remove>
											<i class="fa fa-heart" style="margin-right: 5px;" aria-hidden="true"></i>Add Wishlist
										</span>		
										<span wire:loading wire:target="addToWishlists">Adding Wishlist....</span>							
									</button>

                                </div>
							</div>
						</div>
						<div class="advance-info">
							<div class="tab-control normal">
								<a href="#description" class="tab-control-item active">description</a>
								<a href="#add_infomation" class="tab-control-item">Addtional Infomation</a>
								<a href="#review" class="tab-control-item">Reviews</a>
							</div>
							<div class="tab-contents">
								<div class="tab-content-item active" id="description">
									<p>{{ $product->description }}</p>
								</div>
								<div class="tab-content-item " id="add_infomation">
									<table class="shop_attributes">
										<tbody>
											<tr>
												<th>Category</th><td class="product_weight">{{ $product->category->name }}</td>
											</tr>
											<tr>
												<th>Brand</th><td class="product_weight">{{ $product->brand }}</td>
											</tr>
											<tr>
												<th width="20%">Deskripsi Singkat</th><td class="product_dimensions">{{ $product->small_description }}</td>
											</tr>
											@if ($product->productColors->count() > 0)	
													<tr>
														<th>Color</th>
														<td>
															<p>
													@foreach ($product->productColors as $colorItem)	
														<label class="colorSelectionLabel" style="text-transform:capitalize;font-size:15px;background-color:{{ $colorItem->color->code }};padding-right:10px;padding-left:10px;padding-top:5px;padding-bottom:5px;border-radius:5px;color:white"  wire:click="colorSelected({{ $colorItem->id }})">
															{{ $colorItem->color->name }}
														</label>
															{{-- <span class="radio-centang-kirun"></span> --}}
													@endforeach
															</p>
														</td>
													</tr>
													@else											
											@endif

										</tbody>
									</table>
								</div>
								<div class="tab-content-item " id="review">
									
									<div class="wrap-review-form">
										
										<div id="comments">
											<h2 class="woocommerce-Reviews-title">01 review for <span>Radiant-360 R6 Chainsaw Omnidirectional [Orage]</span></h2>
											<ol class="commentlist">
												<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
													<div id="comment-20" class="comment_container"> 
														<img alt="" src="{{ asset('template_website') }}/images/author-avata.jpg" height="80" width="80">
														<div class="comment-text">
															<div class="star-rating">
																<span class="width-80-percent">Rated <strong class="rating">5</strong> out of 5</span>
															</div>
															<p class="meta"> 
																<strong class="woocommerce-review__author">admin</strong> 
																<span class="woocommerce-review__dash">–</span>
																<time class="woocommerce-review__published-date" datetime="2008-02-14 20:00" >Tue, Aug 15,  2017</time>
															</p>
															<div class="description">
																<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
															</div>
														</div>
													</div>
												</li>
											</ol>
										</div><!-- #comments -->

										<div id="review_form_wrapper">
											<div id="review_form">
												<div id="respond" class="comment-respond"> 

													<form action="#" method="post" id="commentform" class="comment-form" novalidate="">
														<p class="comment-notes">
															<span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
														</p>
														<div class="comment-form-rating">
															<span>Your rating</span>
															<p class="stars">
																
																<label for="rated-1"></label>
																<input type="radio" id="rated-1" name="rating" value="1">
																<label for="rated-2"></label>
																<input type="radio" id="rated-2" name="rating" value="2">
																<label for="rated-3"></label>
																<input type="radio" id="rated-3" name="rating" value="3">
																<label for="rated-4"></label>
																<input type="radio" id="rated-4" name="rating" value="4">
																<label for="rated-5"></label>
																<input type="radio" id="rated-5" name="rating" value="5" checked="checked">
															</p>
														</div>
														<p class="comment-form-author">
															<label for="author">Name <span class="required">*</span></label> 
															<input id="author" name="author" type="text" value="">
														</p>
														<p class="comment-form-email">
															<label for="email">Email <span class="required">*</span></label> 
															<input id="email" name="email" type="email" value="" >
														</p>
														<p class="comment-form-comment">
															<label for="comment">Your review <span class="required">*</span>
															</label>
															<textarea id="comment" name="comment" cols="45" rows="8"></textarea>
														</p>
														<p class="form-submit">
															<input name="submit" type="submit" id="submit" class="submit" value="Submit">
														</p>
													</form>

												</div><!-- .comment-respond-->
											</div><!-- #review_form -->
										</div><!-- #review_form_wrapper -->

									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget widget-our-services ">
						<div class="widget-content">
							<ul class="our-services">

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-truck" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Bebas Biaya Kirim</b>
											<span class="subtitle">Gratis Ongkir Lebih Dari Rp. 30.000</span>
											<p class="desc">Dapatkan Bebas Biaya Kirim Tanpa Minimum Belanja...</p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-gift" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Penawaran Istimewa</b>
											<span class="subtitle">Dapatkan Hadiah!</span>
											<p class="desc">Dapatkan Penawaran terbaik Dan Hadiah Spesial...</p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-reply" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Pengembalian pesanan</b>
											<span class="subtitle">Kembali Dalam 7 hari</span>
											<p class="desc">Jika Barang Yang Di Pesan Tidak sesuai Bisa Di Kembalikan...</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div><!-- Categories widget-->

					<div class="widget mercado-widget widget-product">
						<h2 class="widget-title">Popular Products</h2>
						<div class="widget-content">
							<ul class="products">

								@foreach ($productspopular as $value)									
								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="{{ url('/collections/'.$value->category->slug.'/'.$value->slug) }}" title="{{ $value->name }}">
												<figure><img src="{{ asset($value->productImages[0]->image) }}" alt="{{ $value->name }}"></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="{{ url('/collections/'.$value->category->slug.'/'.$value->slug) }}" class="product-name"><span>{{ $value->name }}</span></a>
											<div class="wrap-price"><ins><p class="product-price">@currency($value->selling_price)</p></ins> <del><p class="product-price">@currency($value->original_price)</p></del></div>

										</div>
									</div>
								</li>							
								@endforeach

							</ul>
						</div>
					</div>

				</div><!--end sitebar-->

				<div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wrap-show-advance-info-box style-1 box-in-site">
						<h3 class="title-box">Product Terkait</h3>
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

			</div><!--end row-->

		</div>
    </main>
</div>