@extends('layouts.app')
@section('title','Thank You For Shoping')
@section('content')

	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
					<li class="item-link"><span>Thank You</span></li>
				</ul>
			</div>
		</div>
		
		<div class="container pb-60">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Terima kasih atas pesanan Anda</h2>
                    <p>Email konfirmasi telah dikirim.</p>
                    <a href="{{ url('/collections') }}" class="btn btn-submit btn-submitx">Lanjutkan Berbelanja</a>
				</div>
			</div>
		</div><!--end container-->

	</main>

@endsection