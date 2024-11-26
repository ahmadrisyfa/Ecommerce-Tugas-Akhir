@extends('layouts.app')
@section('title','Hubungi Kami')
@section('content')
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
                <li class="item-link"><span>Hubungi Kami</span></li>
            </ul>
        </div>
        @if (session('message'))        
            <p class="alert alert-success text-center">{{ session('message') }}</p>
        @endif
        <div class="row">
            <div class=" main-content-area">
                <div class="wrap-contacts ">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="contact-box contact-form">
                            <h2 class="box-title">Silahkan Tinggalkan Pesan</h2>
                            <form action="{{ url('hubungi-kami') }}" method="post" name="frm-contact">
                                @csrf
                                <label for="name">Name<span>*</span></label>
                                <input type="text" disabled value="{{ Auth::user()->name ?? '' }}" id="name" name="name" >

                                <label for="email">Email<span>*</span></label>
                                <input type="text" disabled value="{{ Auth::user()->email ?? '' }}" id="email" name="email" >

                                <label for="phone">Number Phone</label>
                                <input type="text" value="{{ Auth::user()->userDetail->phone ?? '' }}" id="phone" name="phone" >

                                <label for="comment">Comment</label>
                                <textarea name="comment"  id="comment"></textarea>

                                <input type="submit" name="ok" value="Submit" >
                                
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="contact-box contact-info">
                            <div class="wrap-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.1951951309825!2d110.90247581477063!3d-6.496954395300298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e712f884ade49bd%3A0xd86405d4fab5f158!2sSMK%20Wikrama%201%20Jepara!5e0!3m2!1sid!2sid!4v1677930270735!5m2!1sid!2sid" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <h2 class="box-title">Contact Detail</h2>
                            <div class="wrap-icon-box">

                                <div class="icon-box-item">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>Email</b>
                                        <p>AhmadRisyfa123123@gmail.com</p>
                                    </div>
                                </div>

                                <div class="icon-box-item">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>Telepon</b>
                                        <p>085-867-770-343</p>
                                    </div>
                                </div>

                                <div class="icon-box-item">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>Alamat Kantor</b>
                                        <p>Jl. Kelet Ploso KM 36, Kelet, Keling, <br>  Karang Anyar,Kelet, Kec. Keling, <br>  Kabupaten Jepara, Jawa Tengah 59454s</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end main products area-->

        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area-->
@endsection