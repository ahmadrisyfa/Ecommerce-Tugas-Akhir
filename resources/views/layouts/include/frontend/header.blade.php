<header id="header" class="header header-style-1">
	<div class="container-fluid">
		<div class="row">
			<div class="topbar-menu-area">
				<div class="container">
					<div class="topbar-menu left-menu">
						<ul>
							<li class="menu-item" >
								<a title="No Telepon: 085 867 770 343" href="#" ><span class="icon label-before fa fa-mobile"></span>No Telepon: 085 867 770 343</a>
							</li>
						</ul>
					</div>
					<div class="topbar-menu right-menu">
						<ul>
							@guest
                            @if (Route::has('login'))
                                <li class="menu-item">
                                    <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
							@if (Route::has('register'))
								<li class="menu-item">
									<a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
								</li>
							@endif													
							<li class="menu-item lang-menu menu-item-has-children parent">
								<a title="English" href="#"><span class="img label-before"><img src="{{ asset('template_website') }}/images/lang-en.png" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="submenu lang" >
									<li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="{{ asset('template_website') }}/images/lang-hun.png" alt="lang-hun"></span>Hungary</a></li>
									<li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="{{ asset('template_website') }}/images/lang-ger.png" alt="lang-ger" ></span>German</a></li>
									<li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="{{ asset('template_website') }}/images/lang-fra.png" alt="lang-fre"></span>French</a></li>
									<li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="{{ asset('template_website') }}/images/lang-can.png" alt="lang-can"></span>Canada</a></li>
								</ul>
							</li>
							<li class="menu-item menu-item-has-children parent" >
								<a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="submenu curency" >
									<li class="menu-item" >
										<a title="Pound (GBP)" href="#">Pound (GBP)</a>
									</li>
									<li class="menu-item" >
										<a title="Euro (EUR)" href="#">Euro (EUR)</a>
									</li>
									<li class="menu-item" >
										<a title="Dollar (USD)" href="#">Dollar (USD)</a>
									</li>
								</ul>
							</li>	
							@else
							<li class="menu-item lang-menu menu-item-has-children parent">
								<a title="English" href="#"><span class="img label-before"><img src="{{ asset('template_website') }}/images/lang-en.png" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="submenu lang" >
									<li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="{{ asset('template_website') }}/images/lang-hun.png" alt="lang-hun"></span>Hungary</a></li>
									<li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="{{ asset('template_website') }}/images/lang-ger.png" alt="lang-ger" ></span>German</a></li>
									<li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="{{ asset('template_website') }}/images/lang-fra.png" alt="lang-fre"></span>French</a></li>
									<li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="{{ asset('template_website') }}/images/lang-can.png" alt="lang-can"></span>Canada</a></li>
								</ul>
							</li>
							<li class="menu-item menu-item-has-children parent" >
								<a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="submenu curency" >
									<li class="menu-item" >
										<a title="Pound (GBP)" href="#">Pound (GBP)</a>
									</li>
									<li class="menu-item" >
										<a title="Euro (EUR)" href="#">Euro (EUR)</a>
									</li>
									<li class="menu-item" >
										<a title="Dollar (USD)" href="#">Dollar (USD)</a>
									</li>
								</ul>
							</li>
							<li class="menu-item lang-menu menu-item-has-children parent" >
								<a title="{{ auth()->user()->name }}" href="#" style="font-weight: bold;text-transform:capitalize"><i class="fa fa-user" style="margin-right: 2px"></i> {{ auth()->user()->name }}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="submenu lang" >
									@if (auth()->user()->role_as == 1)										
									<li class="menu-item">
										<a href="{{ url('admin/dashboard') }}">Go To Dashboard</a>
									</li>	
									@endif
									<li class="menu-item">
										<a href="{{ url('profile') }}">Profile</a>
									</li>	
									<li class="menu-item" >
										<a title="Logout" href="{{ route('logout') }}"onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
							   				Logout</a>
									</li>									
								</ul>
							</li>						
					<form id="logout-form" action="{{ route('logout') }}" method="POST">
					 @csrf
				 </form>
				</ul>
				@endguest
					</div>
				</div>
			</div>

			<div class="container">
				<div class="mid-section main-info-area">

					<div class="wrap-logo-top left-section">
						<a href="{{ url('/') }}" class="link-to-home"><img width="80px" src="{{ asset('/logo.png') }}" alt="mercado"></a>

					</div>

					<div class="wrap-search center-section">
						<div class="wrap-search-form">
							<form action="{{ url('search') }}" method="GET" id="form-search-top" name="form-search-top">
								<input type="text" name="search" value="{{ Request::get('search') }}" style="font-weight: bold;color:black" placeholder="Silahkan Cari Sesuatu...">
								<button form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>							
							</form>
						</div>
					</div>

					<div class="wrap-icon right-section">
						<div class="wrap-icon-section wishlist">
							<a href="{{ url('wishlist') }}" class="link-direction">
								<i class="fa fa-heart" aria-hidden="true"></i>
								<div class="left-info">
									<span class="index"><livewire:frontend.wishlist-count/> items</span>
									<span class="title">Wishlist</span>
								</div>
							</a>
						</div>
						<div class="wrap-icon-section minicart">
							<a href="{{ url('cart') }}" class="link-direction">
								<i class="fa fa-shopping-basket" aria-hidden="true"></i>
								<div class="left-info">
									<span class="index"><livewire:frontend.cart.cart-count/> items</span>
									<span class="title">CART</span>
								</div>
							</a>
						</div>
						<div class="wrap-icon-section show-up-after-1024">
							<a href="#" class="mobile-navigation">
								<span></span>
								<span></span>
								<span></span>
							</a>
						</div>
					</div>

				</div>
			</div>

			<div class="nav-section header-sticky">
				<div class="header-nav-section">
					<div class="container">
						<ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
							<li class="menu-item"><a href="#" class="link-term">UNGGULAN MINGGUAN</a><span class="nav-label hot-label">Viral</span></li>
							<li class="menu-item"><a href="#" class="link-term">ITEM PENJUALAN PANAS</a><span class="nav-label hot-label">Viral</span></li>
							<li class="menu-item"><a href="#" class="link-term">ITEM BARU TERATAS</a><span class="nav-label hot-label">Viral</span></li>
							<li class="menu-item"><a href="#" class="link-term">TERLARIS</a><span class="nav-label hot-label">Viral</span></li>
							{{-- <li class="menu-item"><a href="#" class="link-term">ITEM BERPERINGKAT TERATAS</a><span class="nav-label hot-label">hot</span></li> --}}
						</ul>
					</div>
				</div>
				<div class="primary-nav-section">
					<div class="container">
						<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
							<li class="menu-item home-icon">
								<a href="{{ url('/') }}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
							</li>
							<li class="menu-item">
								<a href="{{ url('/collections') }}" class="link-term mercado-item-title">All Category</a>
							</li>
							<li class="menu-item">
								<a href="{{ url('/product-terbaru') }}" class="link-term mercado-item-title">Product Terbaru</a>
							</li>
							<li class="menu-item">
								<a href="cart.html" class="link-term mercado-item-title">Cart</a>
							</li>
							<li class="menu-item">
								<a href="checkout.html" class="link-term mercado-item-title">Checkout</a>
							</li>
							<li class="menu-item">
								<a href="contact-us.html" class="link-term mercado-item-title">Contact Us</a>
							</li>																	
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>