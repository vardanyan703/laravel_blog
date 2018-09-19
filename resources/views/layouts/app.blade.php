<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stylish || Blog & Magazine html template</title>


    <!--bootstrap-->
    <link href="{{ asset('css/blog_css/bootstrap.min.css') }} " rel="stylesheet">
    <!-- fontawesome -->
    <link href="{{ asset('css/blog_css/font-awesome.min.css') }} " rel="stylesheet">
    <!-- material-icon -->
    <link href="{{ asset('css/blog_css/material-design-iconic-font.min.css') }} " rel="stylesheet">
    <!-- owl -->
    <link href="{{ asset('css/blog_css/owl.carousel.css') }} " rel="stylesheet">
    <!-- animate css -->
    <link href="{{ asset('css/blog_css/animate.css') }} " rel="stylesheet">
    <!-- owl.carousel -->
    <link rel="stylesheet" href="{{ asset('css/blog_css/owl.carousel.css') }} ">
    <!-- sweet.alert.css -->
    <link rel="stylesheet" href="{{ asset('css/blog_css/sweet.alert.css') }} ">
    <!-- slicknav.css -->
    <link rel="stylesheet" href="{{ asset('css/blog_css/slicknav.min.css') }} ">
    <!-- mfg.css -->
    <link rel="stylesheet" href="{{ asset('css/blog_css/magnific.pupup.css') }} ">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <!-- <link rel="stylesheet" href="{{ asset('rs-plugin/blog_css/settings.css') }} "> -->

    <!-- custom -->
    <link rel="stylesheet" href="{{ asset('css/blog_css/style.css') }} ">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700%7CNoto+Sans:400,700" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/blog_js/jquery.min.js') }} "></script>
    <!-- jQuery -->

</head>

<body class="home">

<!-- preloader -->
<div class="preloader" aria-busy="true" aria-label="Loading, please wait." role="progressbar"></div>
<div class="preloader--main">
    <div class="st--inner">
        <span class="preloader-spin"></span>
    </div>
</div>
<div class="preloader btm" aria-busy="true" aria-label="Loading, please wait." role="progressbar"></div>

<div class="site_wrap">

    <header class="header st--header-1">
        <div class="header--top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="header--left">
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="header--right">
                            <li>
                                <a href="#" class="zmdi zmdi-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="zmdi zmdi-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="zmdi zmdi-behance"></a>
                            </li>
                            <li>
                                <a href="#" class="zmdi zmdi-dribbble"></a>
                            </li>
                            <li>
                                <a href="#" class="zmdi zmdi-linkedin"></a>
                            </li>
                            <li>
                                <a href="#" class="zmdi zmdi-vk"></a>
                            </li>
                            <li>
                                <a href="#" class="zmdi zmdi-google-plus"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo--area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 logo--column">
                        <a href="#" class="logo"><img src="{{ asset('blog_img/logo.png')}}" alt=""></a>
                    </div>
                    <div class="col-md-8 ads--column--1">
                        <a href="#" class="header--ads">
                            <img src="{{asset('blog_img/ads--1.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu--area header--bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 menu--column">
                        <nav class="main_menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="category-news.html">Category News</a></li>
                                <li><a href="single-blog.html">Single Page</a>
                                    <ul class="sub-menu">
                                        <li><a href="single-blog.html">Single Blog</a></li>
                                        <li><a href="single-blog-center.html">Single Blog Center</a></li>
                                        <li><a href="category-news.html">Category News</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Dropdown</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Label A-1</a></li>
                                        <li><a href="#">Label A-2</a></li>
                                        <li><a href="#">Label A-3</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Label A-1</a></li>
                                                <li><a href="#">Label A-2</a></li>
                                                <li><a href="#">Label A-3</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Label A-1</a></li>
                                                        <li><a href="#">Label A-2</a></li>
                                                        <li><a href="#">Label A-3</a></li>
                                                        <li><a href="#">Label A-4</a></li>
                                                        <li><a href="#">Label A-5</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Label A-4</a></li>
                                                <li><a href="#">Label A-5</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Label A-4</a></li>
                                        <li><a href="#">Label A-5</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-3 search--column">
                        <form class="st--search--box">
                            <div>
                                <input type="search" placeholder="Enter Keyword to Search">
                                <button type="submit"><i class="zmdi zmdi-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->

@yield('content')



<footer class="footer st--footer--1">
    <div class="st--footer--top st--sp--65 st--dark--bg--2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="widget st--footer--widget">
                        <a href="#" class="footer--logo">
                            <img src="{{ asset('blog_img/logo--white.png')}}" alt="">
                        </a>
                        <p>Stylish is a blog and magazine theme for all compnay who are looking for blog magazine template.we try to create a with more stylish also great UI .</p>
                        <div class="st--footer--social">
                            <a href="#" class="zmdi zmdi-facebook"></a>
                            <a href="#" class="zmdi zmdi-twitter"></a>
                            <a href="#" class="zmdi zmdi-linkedin"></a>
                            <a href="#" class="zmdi zmdi-pinterest"></a>
                            <a href="#" class="zmdi zmdi-google-plus"></a>
                            <a href="#" class="zmdi zmdi-behance"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="widget st--footer--widget">
                        <div class="st--widget--title--2">
                            <h4>Recent Post</h4>
                        </div>
                        <div class="st--recent--postbox--1">
                            <div class="st--single">
                                <div class="pull-left">
                                    <div class="st--recent--img" style="background-image: url({{asset('blog_img/post--1.jpg')}})"></div>
                                </div>
                                <div class="st--recent--content">
                                    <h5><a href="#">My first session was 90 minutes long</a></h5>
                                    <a href="#" class="st--date">25 April 2017, 1:21 PM</a>
                                </div>
                            </div>
                            <div class="st--single">
                                <div class="pull-left">
                                    <div class="st--recent--img" style="background-image: url({{ asset('blog_img/post--2.jpg')}}"></div>
                                </div>
                                <div class="st--recent--content">
                                    <h5><a href="#">My first session was 90 minutes long</a></h5>
                                    <a href="#" class="st--date">25 April 2017, 1:21 PM</a>
                                </div>
                            </div>
                            <div class="st--single">
                                <div class="pull-left">
                                    <div class="st--recent--img" style="background-image: url({{ asset('blog_img/post--3.jpg')}}"></div>
                                </div>
                                <div class="st--recent--content">
                                    <h5><a href="#">My first session was 90 minutes long</a></h5>
                                    <a href="#" class="st--date">25 April 2017, 1:21 PM</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="widget st--footer--widget">
                        <div class="st--widget--title--2">
                            <h4>Recent Post</h4>
                        </div>
                        <div class="st--footer--inner st--tag--group--1">
                            <a href="#" class="st--button--3 sm">Business</a>
                            <a href="#" class="st--button--3 sm">Travel</a>
                            <a href="#" class="st--button--3 sm">Technology Blog</a>
                            <a href="#" class="st--button--3 sm">Sports</a>
                            <a href="#" class="st--button--3 sm">Football</a>
                            <a href="#" class="st--button--3 sm">Food</a>
                            <a href="#" class="st--button--3 sm">Movies</a>
                            <a href="#" class="st--button--3 sm">Music</a>
                            <a href="#" class="st--button--3 sm">Design</a>
                            <a href="#" class="st--button--3 sm">Art</a>
                            <a href="#" class="st--button--3 sm">Museum</a>
                            <a href="#" class="st--button--3 sm">Lifestyle</a>
                            <a href="#" class="st--button--3 sm">Fashion</a>
                            <a href="#" class="st--button--3 sm">Entertainment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="st--footer--btm st--dark--bg--3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <span>© Copyright 2017. Powered by Crazycafe..</span>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="st--footer--link">
                        <a href="#">Tech</a>
                        <a href="#">Travel</a>
                        <a href="#">Food</a>
                        <a href="#">Fasion</a>
                        <a href="#">Design</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer -->

<!-- Vendors (All Essential JavaScript plugins) -->

<!-- bootstrap -->
<script type="text/javascript" src="{{ asset('js/blog_js/vendor/bootstrap.min.js') }} "></script>
<!-- magnific -->
<script type="text/javascript" src="{{ asset('js/blog_js/vendor/magnific.popup.min.js') }} "></script>
<!-- slick -->
<script type="text/javascript" src="{{ asset('js/blog_js/vendor/slick.min.js') }} "></script>
<!-- slicknav -->
<script type="text/javascript" src="{{ asset('js/blog_js/vendor/slicknav.min.js') }} "></script>
<!-- masonry -->
<script type="text/javascript" src="{{ asset('js/blog_js/vendor/masonry.pkgd.min.js') }} "></script>
<!-- web ticker -->
<script type="text/javascript" src="{{ asset('js/blog_js/vendor/web.ticker.min.js') }} "></script>
<!-- active -->
<script type="text/javascript" src="{{ asset('js/blog_js/active.js') }} "></script>

</div>
<!-- end .site_wrap -->
</body>
</html>
