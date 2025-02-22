<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}front-end-assets/assets/images/favicon.svg" />
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/assets/css/main.css" />
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/css/style.css" type="text/css">
    <!-- Css Styles -->
{{--    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/assets/css/bootstrap.min.css" />--}}
{{--    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/assets/css/LineIcons.3.0.css" />--}}
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/assets/css/glightbox.min.css" />

</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="{{route('home')}}"><img src="{{asset('/')}}front-end-assets/img/logo.png" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">item: <span>{{$subcategoryCount}}</span></div>
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="{{asset('/')}}front-end-assets/img/language.png" alt="">
            <div>English</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">Spanis</a></li>
                <li><a href="#">English</a></li>
            </ul>
        </div>
        <div class="header__top__right__auth">
            <a href="#"><i class="fa fa-user"></i> Login</a>
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="./index.html">Home</a></li>
            <li><a href="./shop-grid.html">Shop</a></li>
            <li><a href="#">Dasshboard</a>
                <ul class="header__menu__dropdown">
                    <li><a href="./shop-details.html">Shop Details</a></li>
                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                    <li><a href="./checkout.html">Check Out</a></li>
                    <li><a href="./blog-details.html">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="{{route('customer.login')}}">Login</a></li>
            <li><a href="{{route('customer.register')}}">Register</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
            <li>Free Shipping for all Order of $99</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
{{--    <div class="header__top">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 col-md-6">--}}
{{--                    <div class="header__top__left">--}}
{{--                        <ul>--}}
{{--                            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>--}}
{{--                            <li>Free Shipping for all Order of $99</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-6">--}}
{{--                    <div class="header__top__right">--}}
{{--                        <div class="header__top__right__social">--}}
{{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-linkedin"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-pinterest-p"></i></a>--}}
{{--                        </div>--}}
{{--                        <div class="header__top__right__language">--}}
{{--                            <img src="{{asset('/')}}front-end-assets/img/language.png" alt="">--}}
{{--                            <div>English</div>--}}
{{--                            <span class="arrow_carrot-down"></span>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">Spanis</a></li>--}}
{{--                                <li><a href="#">English</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="header__top__right__auth">--}}
{{--                            <a href="#"><i class="fa fa-user"></i> Login</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{route('home')}}"><img src="{{asset('/')}}front-end-assets/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="./index.html">Home</a></li>
                        <li><a href="{{route('customer.logout')}}">Logout</a></li>

                        <li><a href="{{route('customer.dashboard')}}">Dashboard</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="./shop-details.html">Shop Details</a></li>
                                <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                <li><a href="./checkout.html">Check Out</a></li>
                                <li><a href="./blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('customer.login')}}">Login</a></li>
                        <li><a href="{{route('customer.register')}}">Register</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>{{$subcategoryCount}}{{$brandCount}}</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->



@yield('body')
<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="{{asset('/')}}front-end-assets/img/logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li>Address: 60-49 Road 11378 New York</li>
                        <li>Phone: +65 11.188.888</li>
                        <li>Email: hello@colorlib.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About Our Shop</a></li>
                        <li><a href="#">Secure Shopping</a></li>
                        <li><a href="#">Delivery infomation</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Our Sitemap</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Who We Are</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Innovation</a></li>
                        <li><a href="#">Testimonials</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Join Our Newsletter Now</h6>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    <div class="footer__copyright__payment"><img src="{{asset('/')}}front-end-assets/img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="{{asset('/')}}front-end-assets/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
<script src="{{asset('/')}}front-end-assets/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}front-end-assets/js/jquery.nice-select.min.js"></script>
<script src="{{asset('/')}}front-end-assets/js/jquery-ui.min.js"></script>
<script src="{{asset('/')}}front-end-assets/js/jquery.slicknav.js"></script>
<script src="{{asset('/')}}front-end-assets/js/mixitup.min.js"></script>
<script src="{{asset('/')}}front-end-assets/js/owl.carousel.min.js"></script>
<script src="{{asset('/')}}front-end-assets/js/main.js"></script>
<script src="{{asset('/')}}front-end-assets/assets/js/tiny-slider.js"></script>
<script src="{{asset('/')}}front-end-assets/assets/js/glightbox.min.js"></script>
<script src="https://kit.fontawesome.com/e1ea402ddb.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.11.2/dist/echo.iife.js"></script>
<script>
    const token = '{{ csrf_token() }}';
    console.log('token',  token);
    console.log(productId);
    document.getElementById('btn-chat').addEventListener('click', sendMessage);
    document.getElementById('btn-input').addEventListener('keyup', function(event) {
        if (event.key === 'Enter') {
            sendMessage();
        }
    });

    // window.Echo.private('chat')
    //     .listen('MessageSent', (e) => {
    //         this.messages.push({
    //             message: e.message.message,
    //             user: e.user
    //         });
    //     });


    function sendMessage() {
        const input = document.getElementById('btn-input');
        const message = input.value;
        console.log(message);
        const data = {
            _token: token,
            message: message,
            Product_id:productId,
        };
        const url = `http://127.0.0.1:8000/product-detail/${productId}?_token=${token}&message=${encodeURIComponent(message)}`
        $.ajax({
            url: '/send-messages',
            type: 'POST',
            data: data,
            success: function(response) {
                window.location.href = url;
             console.log(response);
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    }
</script>

</body>

</html>
