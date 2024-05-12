@extends('layouts.app')
@section('title','Home')
@section('content')
<div class="wrap-main-slide">
    <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
        @foreach ($sliders as $key => $sliderItem)                    
        <div class="item-slide">
            @if($sliderItem->image)
            <img src="{{ asset("$sliderItem->image") }}" alt="" style="height:500px" class="img-slide">
            @endif
            <div class="slide-info slide-3"> 
                <h2 class="f-title" style="color: #FE4A53;font-weight:bold;font-family: 'Open Sans', sans-serif;">{!! $sliderItem->title !!}</h2>
                <span class="f-subtitle" style="text-transform:capitalize;font-weight:300">{!! $sliderItem->description !!}</span>
                <a href="{{url('/collections')}}" class="btn-link" style="margin-top:8px;margin-left:100px">Shop Now</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
{{-- Batas --}}
<div class="wrap-banner style-twin-default">
    @if ($banner_one)
    @foreach ($banner_one as $value)
    <div class="banner-item">
        <a href="{{url('collections')}}" class="link-banner banner-effect-1">
            <figure><img src="{{ asset('storage/'.$value->image_banner_one_1) }}" alt="" style="width:580px;height:190px;overlow:hidden"></figure>
        </a>
    </div>
    <div class="banner-item">
        <a href="{{url('collections')}}" class="link-banner banner-effect-1">
            <figure><img src="{{ asset('storage/'.$value->image_banner_one_2) }}" alt="" style="width:580px;height:190px;overlow:hidden"></figure>
        </a>
    </div>
    @endforeach
    @endif

</div>
{{-- Batas --}}
{{-- <div class="wrap-show-advance-info-box style-1 has-countdown">
    <h3 class="title-box">On Sale</h3>
    <div class="wrap-countdown mercado-countdown" data-expire="2020/12/12 12:34:56"></div>
    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
        @foreach ($ProductOnsale as $value)
            
        <div class="product product-style-2 equal-elem ">
            <div class="product-thumnail">
                    <a href="{{ url('/collections/'.$value->category->slug.'/'.$value->slug) }}" title="{{ $value->name }}">
                    @if ($value->productImages->count() > 0)
                    <figure><img src="{{ asset($value->productImages[0]->image) }}" width="800" height="800" alt="{{ $value->name }}"></figure>                            
                    @endif
                </a>
                <div class="group-flash">
                    <span class="flash-item sale-label">On Sale</span>
                </div>
                <div class="wrap-btn">
                    <a href="{{ url('/collections/'.$value->category->slug.'/'.$value->slug) }}" class="function-link">quick view</a>
                </div>
            </div>
            <div class="product-info">
                <a href="{{ url('/collections/'.$value->category->slug.'/'.$value->slug) }}" class="product-name" style="font-weight: 500;text-transform:capitalize"><span>{{ $value->name }}</span></a>

                <div class="wrap-price"><ins><p class="product-price">@currency($value->selling_price)</p></ins> <del><p class="product-price">@currency($value->original_price)</p></del></div>

            </div>
        </div>

        @endforeach
        
    </div>
</div> --}}
{{-- Batas category  --}}
<div class="wrap-show-advance-info-box style-1">
    <h3 class="title-box">Category</h3>
    <div class="wrap-top-banner">
        <a href="{{ url('collections') }}" class="link-banner banner-effect-2">
        @if ($banner_one)
            @foreach ($banner_two as $value)            
            <figure><img src="{{ asset('storage/'.$value->image_banner_two) }}"  style="width: 1170px;height:240px;" alt=""></figure>
            @endforeach
        @endif
        </a>
    </div> 

    @if ($category)
    <div class="wrap-products">
        <div class="wrap-product-tab tab-style-1">						
            <div class="tab-contents">
                <div class="tab-content-item active" id="digital_1a">
                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                        @foreach ($category as $value)
                            
                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                    <a href="{{ url('/collections/'.$value->slug) }}" title="{{ $value->name }}">
                                    @if ($value->image)
                                    <figure><img src="{{ asset($value->image) }}" width="800" height="800" alt="{{ $value->name }}"></figure>                            
                                    @endif
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item">Populer</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="{{ url('/collections/'.$value->slug) }}" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="{{ url('/collections/'.$value->slug) }}" class="product-name" style="font-weight: 500;text-transform:capitalize"><span style="font-w
                                bold">{{ $value->name }}</span></a>

                                {{-- <div class="wrap-price"><ins><p class="product-price">@currency($value->selling_price)</p></ins> <del><p class="product-price">@currency($value->original_price)</p></del></div> --}}

                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>							
            </div>
        </div>
    </div>
    @endif
</div>
{{-- Batas akhir category--}}

{{-- Batas terbaru Product --}}
<div class="wrap-show-advance-info-box style-1">
    <h3 class="title-box">Product Terbaru</h3>
    <div class="wrap-top-banner">
        <a href="{{ url('product-terbaru') }}" class="link-banner banner-effect-2">
            @if ($banner_three)            
                @foreach ($banner_three as $value)            
                <figure><img src="{{ asset('storage/'.$value->image_banner_three) }}" style="width:1170px;height:240px" alt=""></figure>
                @endforeach
            @endif
        </a>
    </div>

    @if ($productTerbaru)
    <div class="wrap-products">
        <div class="wrap-product-tab tab-style-1">						
            <div class="tab-contents">
                <div class="tab-content-item active" id="digital_1a">
                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                        @foreach ($productTerbaru as $value)
                            
                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                    <a href="{{ url('/collections/'.$value->category->slug.'/'.$value->slug) }}" title="{{ $value->name }}">
                                    @if ($value->productImages->count() > 0)
                                    <figure><img src="{{ asset($value->productImages[0]->image) }}" width="800" height="800" alt="{{ $value->name }}"></figure>                            
                                    @endif
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">new</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="{{ url('/collections/'.$value->category->slug.'/'.$value->slug) }}" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="{{ url('/collections/'.$value->category->slug.'/'.$value->slug) }}" class="product-name" style="font-weight: 500;text-transform:capitalize"><span>{{ $value->name }}</span></a>

                                <div class="wrap-price"><ins><p class="product-price">@currency($value->selling_price)</p></ins> <del><p class="product-price">@currency($value->original_price)</p></del></div>

                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>							
            </div>
        </div>
    </div>
    @endif
</div>
{{-- Batas akhir product terbaru --}}
<div class="wrap-show-advance-info-box style-1">
    <h3 class="title-box">Yang Mungkin Anda Suka</h3>
    <div class="wrap-top-banner">
        <a href="#" class="link-banner banner-effect-2">
            {{-- <figure><img src="{{ asset('template_website') }}/images/fashion-accesories-banner.jpg" width="1170" height="240" alt=""></figure> --}}
        </a>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content-area">
								

        {{-- <div class="row"> --}}

            <ul class="product-list grid-products equal-container">

                @forelse ($yang_mungkin_anda_suka as $productItem)
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
                                    @if ($productHariIni)                                        
                                        <span class="flash-item new-label" style="font-weight:bold">Baru</span>    
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
                            <h5>Tidak Ada Product</h5>
                        </div>
                    </div>
                @endforelse						

            </ul>

        {{-- </div> --}}

    </div>
 
</div>
{{-- Batas --}}
@endsection