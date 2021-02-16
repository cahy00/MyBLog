<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cahyo Diary's</title>
    <link rel="stylesheet" href="./assets/vendors/animate.css/animate.min.css">
    <link rel="stylesheet" href="./assets/vendors/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
														<img src="images/search.svg" alt="search">
												</a>
										</li>
                    <li class="nav-item ml-5">
                        <a class="nav-link pr-0 nav-link-btn" href="#!" data-toggle="offCanvasMenu">
                            <img src="images/social icon@2x.svg" alt="social-nav-toggle">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="blog-standard">
        <div class="container">
            <div class="row">
							<div class="col-md-8">
								@yield('content-md-8')
							</div>

							<div class="col-md-4">
								@yield('content-md-4')
							</div>
						</div>
        </div>
    </main>
    
    <footer class="oleez-footer">
        <div class="container">
            <div class="footer-text">
                <p class="mb-md-0">©  2020, oleez Theme. Made with passion by <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer" class="text-reset">BootstrapDash</a>.</p>
                <p class="mb-0">All right reserved.</p>
            </div>
        </div>
    </footer>

    <script src="assets/vendors/popper.js/popper.min.js"></script>
    <script src="assets/vendors/wowjs/wow.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/vendors/fancybox/jquery.fancybox.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        new WOW().init();
    </script>
</body>


</html>