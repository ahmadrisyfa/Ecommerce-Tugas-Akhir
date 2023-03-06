@extends('layouts.app')
@section('title','Tentang kami')
@section('content')
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
                <li class="item-link"><span>Tentang Kami</span></li>
            </ul>
        </div>
    </div>
    
    <div class="container">
        <!-- <div class="main-content-area"> -->
            <div class="aboutus-info style-center">
                <b class="box-title">Fakta Menarik</b>
                <p class="txt-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
            </div>

            <div class="row equal-container">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-box-score equal-elem ">
                        <b class="box-score-title">10000</b>
                        <span class="sub-title">Barang Di Toko</span>
                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s...</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-box-score equal-elem ">
                        <b class="box-score-title">90%</b>
                        <span class="sub-title">Pelangan Kami Kembali</span>
                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s...</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-box-score equal-elem ">
                        <b class="box-score-title">2 million</b>
                        <span class="sub-title">Pengguna Situs</span>
                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s...</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">Apa yang Sebenarnya Kita Lakukan?</b>
                        <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,</p>
                    </div>
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">Sejarah Perusahaan</b>
                        <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">Versi Kami</b>
                        <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,</p>
                    </div>
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">Bekerja sama Dengan Banyak Perusahaan</b>
                        <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">Bekerja Sama Dengan Kami</b>
                        <div class="list-showups">
                            <label>
                                <input type="radio" class="hidden" name="showup" id="shoup1" value="shoup1" checked="checked">
                                <span class="check-box"></span>
                                <span class='function-name'>Dukungan 24/7</span>
                                <span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
                            </label>
                            <label>
                                <input type="radio" class="hidden" name="showup" id="shoup2" value="shoup2">
                                <span class="check-box"></span>
                                <span class='function-name'>Kualitas Terbaik</span>
                                <span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
                            </label>
                            <label>
                                <input type="radio" class="hidden" name="showup" id="shoup3" value="shoup3">
                                <span class="check-box"></span>
                                <span class='function-name'>Pengiriman Tercepat</span>
                                <span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
                            </label>
                            <label>
                                <input type="radio" class="hidden" name="showup" id="shoup4" value="shoup4">
                                <span class="check-box"></span>
                                <span class='function-name'>Layanan Pelanggan</span>
                                <span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="our-team-info">
                <h4 class="title-box">Tim kami</h4>
                <div class="our-staff">
                    <div 
                        class="slide-carousel owl-carousel style-nav-1 equal-container" 
                        data-items="5" 
                        data-loop="false" 
                        data-nav="true" 
                        data-dots="false"
                        data-margin="30"
                        data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                        @foreach ($data as $value)
                            
                        <div class="team-member equal-elem">
                            <div class="media">
                                <a href="#" title="{{ $value->nama }}">
                                    <figure><img src="{{ asset('storage/'.$value->image) }}" style="max-height:350px;overflow:hidden" alt="{{ $value->nama }}"></figure>
                                </a>
                            </div>
                            <div class="info">
                                <b class="name">{{ $value->nama }}</b>
                                <span class="title">{{ $value->position }}</span>
                                <p class="desc">{{Illuminate\Support\Str::of($value->description)->words(10)}}</p>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>

            </div>
        <!-- </div> -->
        

    </div><!--end container-->

</main>
@endsection