
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title') | KirunStore </title>	
	<meta name="description" content="@yield('meta_description')">
	<meta name="keywords" content="@yield('meta_keyword')">
	<meta name="author" content="Ahmad Risyfa Khairun Niam">
	@yield('css')
	{{-- alert --}}
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
	{{-- alert --}}

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('logo.png')}}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('template_website') }}/css/animate.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('template_website') }}/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('template_website') }}/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('template_website') }}/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('template_website') }}/css/chosen.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('template_website') }}/css/style.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('template_website') }}/css/color-01.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('template_website') }}/css/flexslider.css">
    @livewireStyles
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
    @include('layouts.include.frontend.header')
	<!--header-->


	<main id="main">
		<div class="container">

			@yield('content')

			@yield('content_login')
			@yield('content_register')		

		</div>

	</main>

		    <!--Footer-->
            @include('layouts.include.frontend.footer')																
		    <!--Footer-->

	
	<script src="{{ asset('template_website') }}/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="{{ asset('template_website') }}/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="{{ asset('template_website') }}/js/bootstrap.min.js"></script>
	<script src="{{ asset('template_website') }}/js/jquery.flexslider.js"></script>
	<script src="{{ asset('template_website') }}/js/chosen.jquery.min.js"></script>
	<script src="{{ asset('template_website') }}/js/owl.carousel.min.js"></script>
	<script src="{{ asset('template_website') }}/js/jquery.countdown.min.js"></script>
	<script src="{{ asset('template_website') }}/js/jquery.sticky.js"></script>
	<script src="{{ asset('template_website') }}/js/functions.js"></script>
	@yield('script')

		{{-- alert --}}
	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
	<script>
		window.addEventListener('message',event => {
			alertify.set('notifier','position', 'top-right');
			 alertify.notify(event.detail.text, event.detail.type);
		});
	</script>
		{{-- alert --}}

    @livewireScripts
</body>
</html>