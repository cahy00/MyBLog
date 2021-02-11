<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oleez :: Blog Standard</title>
    <link rel="stylesheet" href="./assets/vendors/animate.css/animate.min.css">
    <link rel="stylesheet" href="./assets/vendors/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <script src="assets/js/loader.js"></script>
</head>

<body>
    <div class="oleez-loader"></div>
    <header class="oleez-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html">
							{{-- <img src="assets/images/Logo_2.svg" alt="Oleez"> --}}
							<h3>My Blog</h3>
						</a>
            <ul class="nav nav-actions d-lg-none ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#!" data-toggle="searchModal">
                        <img src="assets/images/search.svg" alt="search">
                    </a>
                </li>
                <li class="nav-item nav-item-cart">
                    <a class="nav-link" href="#!">
                        <span class="cart-item-count">0</span>
                        <img src="assets/images/shopping-cart.svg" alt="cart">
                    </a>
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a class="nav-link dropdown-toggle" href="#!" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ENG</a>
                    <div class="dropdown-menu" aria-labelledby="languageDropdown">
                        <a class="dropdown-item" href="#!">ARB</a>
                        <a class="dropdown-item" href="#!">FRE</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!" data-toggle="offCanvasMenu">
                        <img src="assets/images/social icon@2x.svg" alt="social-nav-toggle">
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#oleezMainNav" aria-controls="oleezMainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="oleezMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-none d-lg-flex">
                    <li class="nav-item active">
                        <a class="nav-link nav-link-btn" href="#!" data-toggle="searchModal">
                            <img src="assets/images/search.svg" alt="search">
                        </a>
                    </li>
                    <li class="nav-item ml-5">
                        <a class="nav-link pr-0 nav-link-btn" href="#!" data-toggle="offCanvasMenu">
                            <img src="assets/images/social icon@2x.svg" alt="social-nav-toggle">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="blog-standard">
        <div class="container">
            <h1 class="oleez-page-title wow fadeInUp">Blog Standard</h1>
            <div class="row">
                    <div class="col-md-8">
                        <article class="blog-post wow fadeInUp">
                            <img src="assets/images/Standard_list_blog/Standard_1@2x.jpg" alt="blog post" class="post-thumbnail">
                            <p class="post-date">January 29, 2020</p>
                            <h4 class="post-title">Why you must experience design at least once</h4>
                            <p class="post-excerpt">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
                            <a href="#!" class="post-permalink">READ MORE</a>
                        </article>
                        <article class="blog-post wow fadeInUp">
                            <img src="assets/images/Standard_list_blog/Standard_2@2x.jpg" alt="blog post" class="post-thumbnail">
                            <p class="post-date">January 29, 2020</p>
                            <h4 class="post-title">Why you must experience design at least once</h4>
                            <p class="post-excerpt">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
                            <a href="#!" class="post-permalink">READ MORE</a>
                        </article>
                        <article class="blog-post wow fadeInUp">
                            <img src="assets/images/Standard_list_blog/Standard_3@2x.jpg" alt="blog post" class="post-thumbnail">
                            <p class="post-date">January 29, 2020</p>
                            <h4 class="post-title">Why you must experience design at least once</h4>
                            <p class="post-excerpt">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
                            <a href="#!" class="post-permalink">READ MORE</a>
                        </article>
                        <nav class="oleez-pagination wow fadeInUp">
                            <a href="#!" class="active">01</a>
                            <a href="#!">02</a>
                            <a href="#!">03</a>
                            <a href="#!" class="next">&rarr;</a>
                        </nav>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar-widget wow fadeInUp">
                            <h5 class="widget-title">Tags</h5>
                            <div class="widget-content">
                                <a href="#!" class="post-tag">Design Studio</a>
                                <a href="#!" class="post-tag">Creative Design</a>
                                <a href="#!" class="post-tag">Marketing</a>
                                <a href="#!" class="post-tag">Typography</a>
                                <a href="#!" class="post-tag">Team</a>
                                <a href="#!" class="post-tag">Project</a>
                            </div>
                        </div>
                        <div class="sidebar-widget wow fadeInUp">
                            <h5 class="widget-title">Share</h5>
                            <div class="widget-content">
                                <nav class="social-links">
                                    <a href="#!">Fb</a>
                                    <a href="#!">Tw</a>
                                    <a href="#!">In</a>
                                    <a href="#!">Be</a>
                                </nav>
                            </div>
                        </div>
                        <div class="sidebar-widget wow fadeInUp">
                            <h5 class="widget-title">Gallery</h5>
                            <div class="widget-content">
                                <div class="gallery">
                                    <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                        <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                    </a>
                                    <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                        <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                    </a>
                                    <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                        <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                    </a>
                                    <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                        <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                    </a>
                                    <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                        <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                    </a>
                                    <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                        <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                    </a>
                                    <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                        <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                    </a>
                                    <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                        <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                    </a>
                                    <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                        <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                    </a>
                                    <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                        <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                    </a>
                                    <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                        <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                    </a>
                                    <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                        <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget wow fadeInUp">
                            <h5 class="widget-title">Categories</h5>
                            <div class="widget-content">
                                <ul class="category-list">
                                    <li><a href="#!">Animation</a></li>
                                    <li><a href="#!">Branding</a></li>
                                    <li><a href="#!">Graphic Design</a></li>
                                    <li><a href="#!">Photography</a></li>
                                    <li><a href="#!">Web Developing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </main>
    
    <footer class="oleez-footer">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <div class="col-md-6">
                        <img src="assets/images/Logo_1.svg" alt="oleez" class="footer-logo">
                        <p class="footer-intro-text">Don't be shy, get in touch with us and create the world again!</p>
                        <nav class="footer-social-links">
                            <a href="#!">Fb</a>
                            <a href="#!">Tw</a>
                            <a href="#!">In</a>
                            <a href="#!">Be</a>
                        </nav>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 footer-widget-text">
                                <h6 class="widget-title">PHONE</h6>
                                <p class="widget-content">+80 (0)5 12 34 95 89</p>
                            </div>
                            <div class="col-md-6 footer-widget-text">
                                <h6 class="widget-title">ENQUIRUES</h6>
                                <p class="widget-content">info@oleez.site</p>
                            </div>
                            <div class="col-md-6 footer-widget-text">
                                <h6 class="widget-title">ADDRESS</h6>
                                <p class="widget-content">33 rue Burdeau 69089 <br> Paris France</p>
                            </div>
                            <div class="col-md-6 footer-widget-text">
                                <h6 class="widget-title">WORK HOURS</h6>
                                <p class="widget-content">Weekdays: 09:00 - 18:00 <br> Weekends: 11:00 - 17:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-text">
                <p class="mb-md-0">©  2020, oleez Theme. Made with passion by <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer" class="text-reset">BootstrapDash</a>.</p>
                <p class="mb-0">All right reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Modals -->
    <!-- Off canvas social menu -->
    <nav id="offCanvasMenu" class="off-canvas-menu">
        <button type="button" class="close" aria-label="Close" data-dismiss="offCanvasMenu">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul class="oleez-social-menu">
            <li>
                <a href="#!" class="oleez-social-menu-link">Facebook</a>
            </li>
            <li>
                <a href="#!" class="oleez-social-menu-link">Instagram</a>
            </li>
            <li>
                <a href="#!" class="oleez-social-menu-link">Behance</a>
            </li>
            <li>
                <a href="#!" class="oleez-social-menu-link">Dribbble</a>
            </li>
            <li>
                <a href="#!" class="oleez-social-menu-link">Email</a>
            </li>
        </ul>
    </nav>
    <!-- Full screen search box -->
    <div id="searchModal" class="search-modal">
        <button type="button" class="close" aria-label="Close" data-dismiss="searchModal">
            <span aria-hidden="true">&times;</span>
        </button>
        <form action="index.html" method="get" class="oleez-overlay-search-form">
            <label for="search" class="sr-only">Search</label>
            <input type="search" class="oleez-overlay-search-input" id="search" name="search" placeholder="Search here">
        </form>
    </div>
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