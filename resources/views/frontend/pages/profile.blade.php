@extends('layouts.app')
@section('title','Profile')
@section('content')
<div class="checkout page">
    <!--main area-->
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
                <li class="item-link"><span>Profile</span></li>
            </ul>
        </div>
        @if (session('message'))        
            <p class="alert alert-success text-center">{{ session('message') }}</p>
        @endif

        {{-- @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li class="text-danger" style="margin-left: 10px">{{ $error }}</li>
                @endforeach
            </ul>
        @endif --}}

        <a href="{{ url('ganti-password') }}" class="btn" style="float: right;background-color: #FF2832;color:white;margin-left:5px">Ganti Password?</a>
        <a href="#" style="float: right;background-color: #FF2832;color:white" class="btn" onclick="event.preventDefault();document.getElementById('changeAuthorPictureFile').click();">
            <i style="margin-right: 3px" class="fa fa-image"></i> Ganti foto Profil</a>
            <input  type="file" name="file" id="changeAuthorPictureFile" style="opacity: 0" onchange="this.dispatchEvent(new InputEvent('input'))">

        <div class=" main-content-area">
            <div class="wrap-address-billing">
                <h3 class="box-title">Profile Anda</h3>
                <p >
                    <label for="fname">Foto Profil:</label>
                    <img style="width: 200px;" class="img-responsive" src="{{ auth()->user()->picture }}" alt="{{ auth()->user()->name }}" title="{{ auth()->user()->name }}">
                </p>

                <form action="{{ url('profile') }}"method="POST" name="frm-billing">
                    @csrf
                    <p class="row-in-form">
                        <label for="fname">Nama Lengkap:<span>*</span></label>
                        <input id="fname" name="name" type="text" value="{{ auth()->user()->name }}" placeholder="Nama Lengkap Anda">
                        @error('fullname')<small class="text-danger" style="font-size: 14px">{{ $message }}</small>@enderror
                    </p>						
                    <p class="row-in-form">
                        <label for="email">Email:<span>*</span></label>
                        <input id="email" name="email" type="email" value="{{ auth()->user()->email }}" readonly placeholder="Type your email">
                        @error('email')<small class="text-danger" style="font-size: 14px">{{ $message }}</small>@enderror

                    </p>
                    <p class="row-in-form">
                        <label for="phone">No Telepon<span>*</span></label>
                        <input id="phone" name="phone" type="number" value="{{ Auth::user()->userDetail->phone ?? '' }}" placeholder="10 digits format">
                        @error('phone')<small class="text-danger" style="font-size: 14px">{{ $message }}</small>@enderror

                    </p>												
                    <p class="row-in-form">
                        <label for="zip-code">Pin-Code / ZIP-Code:<span>*</span></label>
                        <input id="zip-code" name="pincode" type="number" value="{{ Auth::user()->userDetail->pincode ?? '' }}" placeholder="Your postal code">
                        @error('pincode')<small class="text-danger" style="font-size: 14px">{{ $message }}</small>@enderror

                    </p>
                    <p class="row-in-form" style="width: 100%">
                        <label for="add">Alamat Lengkap:<span>*</span></label>
                        <textarea id="add" name="address"  type="text" value="" rows="4" style="width: 100%;border-color:#E6E6E6;padding:10px" placeholder="">{{ Auth::user()->userDetail->address ?? '' }}</textarea>
                        @error('address')<small class="text-danger" style="font-size: 14px">{{ $message }}</small>@enderror

                    </p>						
                    <p class="row-in-form fill-wife">
                        <label class="checkbox-field">
                            <button class="btn" style="background-color: #FF2832;color:white">Simpan Data</button>
                        </label>
                    
                    </p>
                </form>
            </div>
          

            <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">PRODUCT YANG MUGKIN ANDA SUKA</h3>
                    <div class="wrap-products" wire:ignore>
                        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

                            @foreach ($product as $value)
                                
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

    </div><!--end container-->

</main>
<!--main area-->
</div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('IjaboCropTool/ijaboCropTool.min.css') }}">
@endsection
@section('script')
<script src="{{ asset('IjaboCropTool/ijaboCropTool.min.js') }}"></script>
<script>

  $('#changeAuthorPictureFile').ijaboCropTool({
          preview : '',
          setRatio:1,
          allowedExtensions: ['jpg', 'jpeg','png'],
          buttonsText:['Simpan','Batal'],
          buttonsColor:['#30bf7d','#ee5155', -15],
          processUrl:'{{ route("change-profile-picture") }}',
          withCSRF:['_token','{{ csrf_token() }}'],
          onSuccess:function(message, element, status){
             alert(message);
             location.reload();
            // .Livewire.emit('updateAuthorProfileHeader');
            // .Livewire.emit('updateTopHeader');
          },
          onError:function(message, element, status){
            alert(message);
          }
  });
</script>
@endsection