
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cahyo Diary's</title>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

		<link rel="icon" href="{{asset('assets/icons/fp.png')}}" type="image/x-icon">
		<link rel="stylesheet" href="{{asset('assets/select2/css/select2.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/fancybox/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		
</head>

<body>
		@section('header')
		<header class="oleez-header">
			<nav class="navbar navbar-expand-lg navbar-light">
					<a class="navbar-brand" href="/post">
						<h3 class="page-title wow fadeInUp">BE DIFFERENT</h3>
					</a>
					<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#oleezMainNav" aria-controls="oleezMainNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="oleezMainNav">
							<ul class="navbar-nav mx-auto mt-2 mt-lg-0">
									<li class="nav-item active">
											<a class="nav-link" href="/post">Home <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item">
											<a class="nav-link" href="#!">Profile</a>
									</li>
									<li class="nav-item">
											<a class="nav-link" href="#!">Contact</a>
									</li>
							</ul>
							<ul class="navbar-nav d-none d-lg-flex">
									<li class="nav-item active">
											<a class="nav-link nav-link-btn" href="#!" data-toggle="searchModal">
													<img src="{{asset('images/search.svg')}}" alt="search">
											</a>
									</li>
									<li class="nav-item ml-5">
											<a class="nav-link pr-0 nav-link-btn" href="/input-post" data-toggle="offCanvasMenu">
													<img src="{{asset('images/social icon@2x.svg')}}" alt="social-nav-toggle">
											</a>
									</li>
							</ul>
					</div>
			</nav>
		</header>
		@show

    @yield('content')

		<br/>

		<div id="searchModal" class="search-modal">
			<button type="button" class="close" aria-label="Close" data-dismiss="searchModal">
					<span aria-hidden="true">&times;</span>
			</button>
			<form action="/post" method="get" class="oleez-overlay-search-form">
					<label for="search" class="sr-only">Search</label>
					<input type="search" class="oleez-overlay-search-input" id="search" name="search" placeholder="Search here" autocomplete="off" autofocus="on">
			</form>
		</div>
    
    @section('footer')
		<footer class="oleez-footer">
			<div class="container">
					<div class="footer-text">
							<p class="mb-md-0">©  2020, oleez Theme. Made with passion by <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer" class="text-reset">BootstrapDash</a>.</p>
							<p class="mb-0">All right reserved.</p>
					</div>
			</div>
		</footer>
		@show
		{{-- @include('sweetalert::alert') --}}

		@stack('script')
		<script src="{{asset('assets/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/vendors/popper.js/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendors/wowjs/wow.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendors/fancybox/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script>
        new WOW().init();
    </script>
		{{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}

		{{-- @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"]) --}}

</body>


</html>