<!DOCTYPE html>
<html class="no-js" lang="en_AU" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Hello new ecommerce</title>
    <meta name="description" content="" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />

    <meta name="HandheldFriendly" content="True" />
    <meta name="pinterest" content="nopin" />

    <meta property="og:locale" content="en_AU" />
    <meta property="og:type" content="website" />
    <meta property="fb:admins" content="" />
    <meta property="fb:app_id" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="" />
    <meta property="og:image:height" content="" />
    <meta property="og:image:alt" content="" />

    <meta name="twitter:title" content="" />
    <meta name="twitter:site" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:image:alt" content="" />
    <meta name="twitter:card" content="summary_large_image" />

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/ion.rangeSlider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/ion.rangeSlider.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/video-js.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom.css') }}" />


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/plugins/toastr/toastr.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&family=Raleway:ital,wght@0,400;0,600;0,800;1,200&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@300;400;700;900&display=swap"
        rel="stylesheet">
    <!-- Fav Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="#" />
    @yield('extra-css')
</head>

<body data-instant-intensity="mousedown">

    <div class="bg-light top-header">
        <div class="container">
            <div class="row align-items-center py-3 d-none d-lg-flex justify-content-between">
                <div class="col-lg-4 logo">
                    <a href="{{route('front.index')}}" class="text-decoration-none">
                       <img src="{{asset('frontend/images/logo.png')}}" class="logo-img" alt="">
                    </a>
                </div>
                <div class="col-lg-6 col-6 text-left  d-flex justify-content-end align-items-center">
                  <span class=""> <i class="fas fa-phone "></i> 0174000000</span>
                    <form action="{{route('front.search.product')}}" method="get">
                        <div class="search-product-sec d-flex">
                            <div class="input-group ml-3">
                                <input type="text" name="name" placeholder="Search For Products" class="form-control"
                                    aria-label="Amount (to the nearest dollar)">
                                
                            </div>
                          <div>
                            <button type="submit" class="btn btn-primary btn-sm search-product-btn">
                                <span class="input-group-text custom-input-group-text">
                                    <i class="fa fa-search"></i>
                                </span>
                           </button>
                          </div>
                         </div>
                    </form>
                 
                </div>
            </div>
        </div>
    </div>

    <header class="bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-xl" id="navbar">
                <a href="index.php" class="text-decoration-none mobile-logo">
                    <span class="h2 text-uppercase text-primary bg-dark">Online</span>
                    <span class="h2 text-uppercase text-white px-2">SHOP</span>
                </a>
                <button class="navbar-toggler menu-btn" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon icon-menu"></span> -->
                    <i class="navbar-toggler-icon fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="{{route('front.index')}}" title="Products">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('front.all.product')}}" title="Products"> Products</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('front.about.us')}}" title="About us">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('front.services')}}" title="About us">Services</a>
                     </li>

                        <li class="nav-item dropdown d-none">
                            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Products
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item nav-link" href="#">Mobile</a></li>
                                <li><a class="dropdown-item nav-link" href="#">Tablets</a></li>
                                <li><a class="dropdown-item nav-link" href="#">Laptops</a></li>
                                <li><a class="dropdown-item nav-link" href="#">Speakers</a></li>
                                <li><a class="dropdown-item nav-link" href="#">Watches</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown d-none">
                            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Men's Fashion
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">Shirts</a></li>
                                <li><a class="dropdown-item" href="#">Jeans</a></li>
                                <li><a class="dropdown-item" href="#">Shoes</a></li>
                                <li><a class="dropdown-item" href="#">Watches</a></li>
                                <li><a class="dropdown-item" href="#">Perfumes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown d-none">
                            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Women's Fashion
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">T-Shirts</a></li>
                                <li><a class="dropdown-item" href="#">Tops</a></li>
                                <li><a class="dropdown-item" href="#">Jeans</a></li>
                                <li><a class="dropdown-item" href="#">Shoes</a></li>
                                <li><a class="dropdown-item" href="#">Watches</a></li>
                                <li><a class="dropdown-item" href="#">Perfumes</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown d-none">
                            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Appliances
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">TV</a></li>
                                <li><a class="dropdown-item" href="#">Washing Machines</a></li>
                                <li><a class="dropdown-item" href="#">Air Conditioners</a></li>
                                <li><a class="dropdown-item" href="#">Vacuum Cleaner</a></li>
                                <li><a class="dropdown-item" href="#">Fans</a></li>
                                <li><a class="dropdown-item" href="#">Air Coolers</a></li>
                            </ul>
                        </li>


                    </ul>
                </div>
                <div class="right-nav py-0">
                    <a href="{{ route('front.cart') }}" class="ml-3 d-flex pt-2">
						@php

						$total_item = 0;
					
						if (session()->has('cart')) {
					
							// Key exists, proceed to get the value
					
							$carts = session()->get('cart');
					
							if (isset($carts) && $carts) {
					
								foreach ($carts as $key => $cart) {
					
									$total_item = $total_item + $cart['quantity'];
					
								}
					
							}
					
						}
					
					@endphp
                        <i class="fas fa-shopping-cart text-primary">{{ isset($total_item) ? $total_item : 0 }}</i>
                    </a>
                </div>
            </nav>
        </div>
    </header>


    <main>
        @yield('main-content')
    </main>
    <footer class="bg-dark mt-5">
        <div class="container pb-5 pt-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-card">
                        <h3>Contact Info</h3>
                        <p>সেখেরচক, বোয়ালিয়া রাজশাহী।</p>
                        <p>+8801737492682</p>
                        <p>contact@aribascare.com</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card">
                        <h3>Important Links</h3>
                        <ul>
                            <li><a href="about-us.php" title="About">About</a></li>
                            <li><a href="contact-us.php" title="Contact Us">Contact Us</a></li>
                            <li><a href="#" title="Privacy">Privacy</a></li>
                            <li><a href="#" title="Privacy">Terms & Conditions</a></li>
                            <li><a href="#" title="Privacy">Refund Policy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card">
                        <h3>My Account</h3>
                        <ul>
                            <li><a href="#" title="Sell">Login</a></li>
                            <li><a href="#" title="Advertise">Register</a></li>
                            <li><a href="#" title="Contact Us">My Orders</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="copy-right text-center">
                            <p>© Copyright 2023 Aribas Care. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- <script src="{{asset('frontend/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.bundle.5.1.3.min.js')}}"></script> --}}
    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/instantpages.5.1.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/lazyload.17.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <script src="{{ asset('frontend/js/ion.rangeSlider.js') }}"></script>
    <script src="{{ asset('frontend/js/ion.rangeSlider.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('backend/plugins/toastr/toastr.min.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Toastr -->

    @php $allErrors=''; @endphp

    @if (isset($errors) && count($errors) > 0)
        @foreach ($errors->all() as $error)
            @php$allErrors .= $error . '<br/>';
            @endphp
        @endforeach
        @php
            $errors = strip_tags($allErrors);
        @endphp
        <script>
            $(function() {
                toastr.error('{{ $errors }}', 'Failed', {
                    timeOut: 5000
                });
            });
        </script>
    @endif
    @if (session()->has('success'))
        <script>
            $(function() {
                toastr.success('{{ session()->get('success') }}', 'Success', {
                    positionClass: "toast-top-right",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "2000",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                });
            });
        </script>
    @endif
    <script>
        window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
    <script type="text/javascript">
        function addToCart(id) {
            $.ajax({
                type: "POST",
                url: '{{ route('front.add.to.cart') }}',
                data: {
                    product_id: id,
                    "_token": "{{ csrf_token() }}"
                },
                dataType: 'json',
                success: function(res) {
                    console.log(res.data);
                    if (res.status == 'true') {
                        console.log('p ok p ok');
                        window.location.reload();
                    } else {
                        console.log('error');
                    }
                }
            });
        }
    </script>
    @yield('extra-js')
</body>

</html>
