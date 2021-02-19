<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cahyo Diary's</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/fancybox/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		{{-- summernote --}}
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>

<body>
    <header class="oleez-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html">
							<h3 class="page-title wow fadeInUp">Be Different</h3>
						</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#oleezMainNav" aria-controls="oleezMainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="oleezMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-none d-lg-flex">
										<li class="nav-item active">
												<a class="nav-link nav-link-btn" href="#!" data-toggle="searchModal">
														<img src="{{asset('images/search.svg')}}" alt="search">
												</a>
										</li>
                    <li class="nav-item ml-5">
                        <a class="nav-link pr-0 nav-link-btn" href="#!" data-toggle="offCanvasMenu">
                            <img src="{{asset('images/social icon@2x.svg')}}" alt="social-nav-toggle">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')
    
    <footer class="oleez-footer">
        <div class="container">
            <div class="footer-text">
                <p class="mb-md-0">©  2020, oleez Theme. Made with passion by <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer" class="text-reset">BootstrapDash</a>.</p>
                <p class="mb-0">All right reserved.</p>
            </div>
        </div>
    </footer>


		@stack('script')
    <script src="{{asset('assets/vendors/popper.js/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendors/wowjs/wow.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendors/fancybox/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script>
        new WOW().init();
    </script>
</body>


</html>