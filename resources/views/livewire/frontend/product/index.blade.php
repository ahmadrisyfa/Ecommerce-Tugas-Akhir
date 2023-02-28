@section('css')
<style>
	/* The container  */
	.checkbox-kirun {
	  display: block;
	  position: relative;
	  padding-left: 35px;
	  margin-bottom: 12px;
	  cursor: pointer;
	  font-size: 10px;
	  -webkit-user-select: none;
	  -moz-user-select: none;
	  -ms-user-select: none;
	  user-select: none;
	}
	
	/* Hide the browser's default checkbox */
	.checkbox-kirun input {
	  position: absolute;
	  opacity: 0;
	  cursor: pointer;
	  height: 0;
	  width: 0;
	}
	
	/* Create a custom checkbox */
	.centang-kirun {
	  position: absolute;
	  top: 0;
	  left: 0;
	  height: 20px;
	  width: 20px;
	  background-color: #eee;
	}
	.checkbox-kirun:hover{
		color: #FF2732;

	}
	/* On mouse-over, add a grey background color */
	.checkbox-kirun:hover input ~ .centang-kirun {
  background-color: #ccc;
}
	
	/* When the checkbox is checked, add a blue background */
	.checkbox-kirun input:checked ~ .centang-kirun {
	  background-color: #FF2732;
	}
	
	/* Create the centang-kirun/indicator (hidden when not checked) */
	.centang-kirun:after {
	  content: "";
	  position: absolute;
	  display: none;
	}
	
	/* Show the centang-kirun when checked  */
	.checkbox-kirun input:checked ~ .centang-kirun:after {
	  display: block;
	}
	
	/* Style the centang-kirun/indicator*/
	.checkbox-kirun .centang-kirun:after {
	  left: 8px;
	  top: 5px;
	  width: 5px;
	  height: 10px;
	  border: solid white;
	  border-width: 0 3px 3px 0;
	  -webkit-transform: rotate(45deg);
	  -ms-transform: rotate(45deg);
	  transform: rotate(45deg);
	} 


	.radio-kirun {
  display: block;
  position: relative;
  padding-left: 35px;
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

.radio-kirun:hover{
	color: #FF2732;

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
	</style>
	@endsection
<div>
    <main id="main" class="main-site left-sidebar">

		<div class="container">
		
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
								

					<div class="row">

						<ul class="product-list grid-products equal-container">

                            @forelse ($products as $productItem)
        
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
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
                                <div class="col-md-12">
                                    <div class="p-2 text-center">
                                        <h5>Tidak Ada Product Di Category {{ $category->name }}</h5>
                                    </div>
                                </div>
                            @endforelse						

						</ul>

					</div>

				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					{{-- <div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">All Categories</h2>
						<div class="widget-content">
							<ul class="list-category">
								<li class="category-item has-child-cate">
									<a href="#" class="cate-link">Fashion & Accessories</a>
									<span class="toggle-control">+</span>
									<ul class="sub-cate">
										<li class="category-item"><a href="#" class="cate-link">Batteries (22)</a></li>
										<li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>
										<li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>
									</ul>
								</li>
								<li class="category-item has-child-cate">
									<a href="#" class="cate-link">Furnitures & Home Decors</a>
									<span class="toggle-control">+</span>
									<ul class="sub-cate">
										<li class="category-item"><a href="#" class="cate-link">Batteries (22)</a></li>
										<li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>
										<li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>
									</ul>
								</li>
								<li class="category-item has-child-cate">
									<a href="#" class="cate-link">Digital & Electronics</a>
									<span class="toggle-control">+</span>
									<ul class="sub-cate">
										<li class="category-item"><a href="#" class="cate-link">Batteries (22)</a></li>
										<li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>
										<li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>
									</ul>
								</li>
								<li class="category-item">
									<a href="#" class="cate-link">Tools & Equipments</a>
								</li>
								<li class="category-item">
									<a href="#" class="cate-link">Kid’s Toys</a>
								</li>
								<li class="category-item">
									<a href="#" class="cate-link">Organics & Spa</a>
								</li>
							</ul>
						</div>
					</div><!-- Categories widget--> --}}

					<div class="widget mercado-widget filter-widget brand-widget">
						<h2 class="widget-title">Brands</h2>
						<div class="widget-content">
							<ul class="list-style vertical-list list-limited" data-show="">
                                @foreach ($category->brands as $brandItem)          
								<label class="checkbox-kirun"><span style="text-transform:capitalize;font-size:15px">{{ $brandItem->name }}</span>
									<input wire:model="brandInputs" value="{{ $brandItem->name }}" type="checkbox">
									<span class="centang-kirun"></span>
								  </label>                          
                                @endforeach
							</ul>
						</div>
					</div><!-- brand widget-->
                    <div class="widget mercado-widget filter-widget price-widget">
						<h2 class="widget-title">Price</h2>
						<div class="widget-content">
							<ul class="list-style vertical-list list-limited" data-show="">
								<label class="radio-kirun"><span style="text-transform:capitalize;font-size:15px">Tinggi Ke Rendah</span>
									<input type="radio" value="tinggi-ke-rendah"  wire:model="priceInput"  name="priceSort">
									<span class="radio-centang-kirun"></span>
								  </label>
								  <label class="radio-kirun"><span style="text-transform:capitalize;font-size:15px;font-style:none">Rendah Ke Tinggi</span>
									<input type="radio"  value="rendah-ke-tinggi" wire:model="priceInput" name="priceSort">
									<span class="radio-centang-kirun"></span>
								  </label>
								{{-- <li class="list-item"><input wire:model="priceInput" type="radio" style="width: 15px;height:15px  name="priceSort" value="tinggi-ke-rendah">&nbsp; &nbsp;<span style="bold;text-transform:capitalize;font-size:15px">Tinggi Ke Rendah</span></li> --}}
								{{-- <li class="list-item"><input wire:model="priceInput" type="radio" style="width: 15px;height:15px  name="priceSort" value="rendah-ke-tinggi">&nbsp; &nbsp;<span style="bold;text-transform:capitalize;font-size:15px">Rendah Ke Tinggi</span></li> --}}
							</ul>
						</div>
					</div>
					{{-- <div class="widget mercado-widget filter-widget price-filter">
						<h2 class="widget-title">Price</h2>
						<div class="widget-content">
							<div id="slider-range"></div>
							<p>
								<label for="amount">Price:</label>
								<input type="text" id="amount" readonly>
								<button class="filter-submit">Filter</button>
							</p>
						</div>
					</div><!-- Price--> --}}

					{{-- <div class="widget mercado-widget filter-widget">
						<h2 class="widget-title">Color</h2>
						<div class="widget-content">
							<ul class="list-style vertical-list has-count-index">
								<li class="list-item"><a class="filter-link " href="#">Red <span>(217)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Yellow <span>(179)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Black <span>(79)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Blue <span>(283)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Grey <span>(116)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Pink <span>(29)</span></a></li>
							</ul>
						</div>
					</div><!-- Color --> --}}

					{{-- <div class="widget mercado-widget filter-widget">
						<h2 class="widget-title">Size</h2>
						<div class="widget-content">
							<ul class="list-style inline-round ">
								<li class="list-item"><a class="filter-link active" href="#">s</a></li>
								<li class="list-item"><a class="filter-link " href="#">M</a></li>
								<li class="list-item"><a class="filter-link " href="#">l</a></li>
								<li class="list-item"><a class="filter-link " href="#">xl</a></li>
							</ul>
							<div class="widget-banner">
								<figure><img src="assets/images/size-banner-widget.jpg" width="270" height="331" alt=""></figure>
							</div>
						</div>
					</div><!-- Size --> --}}

					{{-- <div class="widget mercado-widget widget-product">
						<h2 class="widget-title">Popular Products</h2>
						<div class="widget-content">
							<ul class="products">
								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="assets/images/products/digital_01.jpg" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="assets/images/products/digital_17.jpg" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="assets/images/products/digital_18.jpg" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="assets/images/products/digital_20.jpg" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

							</ul>
						</div>
					</div><!-- brand widget--> --}}

				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->

   

</div>
