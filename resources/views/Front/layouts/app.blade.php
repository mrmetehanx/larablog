<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - Metehan'ın Kişisel Sayfası</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/theme/favicon.png') }}">
    <!-- NewsBoard CSS  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widgets.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <div class="scroll-progress primary-bg"></div>
    <!-- Start Preloader -->
    <!-- <div class="preloader text-center">
        <div class="circle"></div>
    </div> -->
    <!--Offcanvas sidebar-->
    <aside id="sidebar-wrapper" class="custom-scrollbar">
    </aside>
    <!-- Start Header -->
    <header class="main-header header-style-1 font-heading">
        <div class="header-top">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-md-3 col-xs-6">
                        <a href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/imgs/theme/logo.png') }}"
                                alt=""></a>
                    </div>
                    <div class="col-md-9 col-xs-6 text-right header-top-right ">
                        <ul class="list-inline nav-topbar d-none d-md-inline">
                            <li class="list-inline-item"><a href="http://demos.alithemes.com/html/stories/docs/"><i
                                        class="elegant-icon icon_document_alt mr-5"></i>Patch Notes</a></li>
                        </ul>
                        <span class="vertical-divider mr-20 ml-20 d-none d-md-inline"></span>
                        <button class="search-icon d-none d-md-inline"><span class="mr-15 text-muted font-small"><i
                                    class="elegant-icon icon_search mr-5"></i>Search</span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-sticky">
            <div class="container align-self-center">
                <div class="mobile_menu d-lg-none d-block"></div>
                <div class="main-nav d-none d-lg-block float-left">
                    <nav>
                        <!--Desktop menu-->
                        <ul class="main-menu d-none d-lg-inline font-small">
                            <li> <a href="{{ route('home') }}">Home</a> </li>
                            <li> <a href="{{ route('about') }}">About</a> </li>
                            @foreach ($categories as $category)
                            @if ($category->subcategory->count()>0)
                            <li class="menu-item-has-children">
                                <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a>
                                <ul class="sub-menu text-muted font-small">
                                    @foreach ($category->subcategory as $subcategory)
                                    <li><a
                                            href="{{ route('category',$subcategory->slug) }}">{{ $subcategory->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            @else
                            <li> <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a> </li>
                            @endif
                            @endforeach
                            <li> <a href="{{ route('contact') }}">Contact</a> </li>

                        </ul>
                        <!--Mobile menu-->
                        <ul id="mobile-menu" class="d-block d-lg-none text-muted">
                            <li class="menu-item-has-children">
                                <a href="index.html">Home</a>
                                <ul class="sub-menu text-muted font-small">
                                    <li><a href="index.html">Home default</a></li>
                                    <li><a href="home-2.html">Homepage 2</a></li>
                                    <li><a href="home-3.html">Homepage 3</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="page-about.html">About</a></li>
                                    <li><a href="page-contact.html">Contact</a></li>
                                    <li><a href="page-typography.html">Typography</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-search.html">Search</a></li>
                                    <li><a href="page-author.html">Author</a></li>
                                    <li><a href="page-404.html">404 page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Category</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="category-list.html">List layout</a></li>
                                    <li><a href="category-grid.html">Grid layout</a></li>
                                    <li><a href="category-masonry.html">Masonry layout</a></li>
                                    <li><a href="category-big.html">Big layout</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Single post</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="single.html">Default</a></li>
                                    <li><a href="single-2.html">Big image</a></li>
                                    <li><a href="single-3.html">Left image</a></li>
                                    <li><a href="single-4.html">With sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="float-right header-tools text-muted font-small">
                    <ul class="header-social-network d-inline-block list-inline mr-15">
                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank"
                                href="#"><i class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank"
                                href="#"><i class="elegant-icon social_twitter "></i></a></li>
                        <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank"
                                href="#"><i class="elegant-icon social_pinterest "></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>
    <!--Start search form-->
    <div class="main-search-form">
        <div class="container">
            <div class=" pt-50 pb-50 ">
                <div class="row mb-20">
                    <div class="col-12 align-self-center main-search-form-cover m-auto">
                        <p class="text-center"><span class="search-text-bg">Search</span></p>
                        <form action="#" class="search-header">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Search stories, places and people">
                                <div class="input-group-append">
                                    <button class="btn btn-search bg-white" type="submit">
                                        <i class="elegant-icon icon_search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-80 text-center">
                    <div class="col-12 font-small suggested-area">
                        <h5 class="suggested font-heading mb-20 text-muted"> <strong>Suggested keywords:</strong></h5>
                        <ul class="list-inline d-inline-block">
                            <li class="list-inline-item"><a href="category.html">World</a></li>
                            <li class="list-inline-item"><a href="category.html">American</a></li>
                            <li class="list-inline-item"><a href="category.html">Opinion</a></li>
                            <li class="list-inline-item"><a href="category.html">Tech</a></li>
                            <li class="list-inline-item"><a href="category.html">Science</a></li>
                            <li class="list-inline-item"><a href="category.html">Books</a></li>
                            <li class="list-inline-item"><a href="category.html">Travel</a></li>
                            <li class="list-inline-item"><a href="category.html">Business</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-80">
                    <div class="col-lg-4">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div
                                class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html">
                                    <img src="{{ asset('assets/imgs/news/thumb-2.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html">Travel Tips</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div
                                class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html">
                                    <img src="{{ asset('assets/imgs/news/thumb-4.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html">Lifestyle</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div
                                class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html">
                                    <img src="{{ asset('assets/imgs/news/thumb-3.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html">Hotel Review</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('body')
    <!--site-bottom-->
    <div class="site-bottom pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Destinations</h5>
                        </div>
                        <div class="post-block-list post-module-1">
                            <ul class="list-post">
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div
                                            class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="{{ asset('assets/imgs/news/thumb-1.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                    href="single.html">The Best Time to Travel to Cambodia</a></h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">27 Jan</span>
                                                <span class="post-by has-dot">13k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div
                                            class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="{{ asset('assets/imgs/news/thumb-2.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                    href="single.html">20 Photos to Inspire You to Visit Cambodia</a>
                                            </h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">27 August</span>
                                                <span class="post-by has-dot">14k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div
                                            class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="{{ asset('assets/imgs/news/thumb-3.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                    href="single.html">Epic Arts Cambodia: Charity for the Disabled</a>
                                            </h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">29 August</span>
                                                <span class="post-by has-dot">23k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Lifestyle</h5>
                        </div>
                        <div class="post-block-list post-module-1">
                            <ul class="list-post">
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div
                                            class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="{{ asset('assets/imgs/news/thumb-4.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                    href="single.html">10 Ways to De-Stress Your Day Hour by Hour</a>
                                            </h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">12 August</span>
                                                <span class="post-by has-dot">3k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div
                                            class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="{{ asset('assets/imgs/news/thumb-5.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                    href="single.html">134 Free Weekly Meal Planner Printable</a></h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">15 August</span>
                                                <span class="post-by has-dot">4.1k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div
                                            class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="{{ asset('assets/imgs/news/thumb-6.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                    href="single.html">Free Printable Stickers for Your Bullet
                                                    Journal</a></h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">16 August</span>
                                                <span class="post-by has-dot">2.2k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated" data-wow-delay="0.4s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Photography</h5>
                        </div>
                        <div class="post-block-list post-module-1">
                            <ul class="list-post">
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div
                                            class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="{{ asset('assets/imgs/news/thumb-7.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                    href="single.html">Which TBA Preset Pack is Right For You?</a></h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">06 May</span>
                                                <span class="post-by has-dot">23k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div
                                            class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="{{ asset('assets/imgs/news/thumb-8.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                    href="single.html">How to Get Amazing Photos at the Pyramids of
                                                    Giza</a></h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">05 Jun</span>
                                                <span class="post-by has-dot">5k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div
                                            class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="{{ asset('assets/imgs/news/thumb-9.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                    href="single.html">Beginner’s Guide to Travel Drone Photography</a>
                                            </h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">08 August</span>
                                                <span class="post-by has-dot">2k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-widget widget-latest-posts mb-30 mt-20 wow fadeInUp animated">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Categories</h5>
                </div>
                <div class="carausel-3-columns">
                    @foreach ($category_full as $category)
                    <div
                        class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                        <div
                            class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                            <a class="color-white" href="{{ route('category',$category->slug) }}">
                                <img src="{{ asset('assets/imgs/news/thumb-1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="post-content media-body">
                            <h6> <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a> </h6>
                            <p class="text-muted font-small">{{ $category->text }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--container-->
    </div>
    <!--end site-bottom-->
    <!-- Footer Start-->
    <footer class="pt-50 pb-20 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="sidebar-widget wow fadeInUp animated mb-30">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">About me</h5>
                        </div>
                        <div class="textwidget">
                            <p>
                                Start writing, no matter what. The water does not flow until the faucet is turned on.
                            </p>
                            <p><strong class="color-black">Address</strong><br>
                                123 Main Street<br>
                                New York, NY 10001</p>
                            <p><strong class="color-black">Follow me</strong><br>
                                <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                    <li class="list-inline-item"><a class="fb" href="#" target="_blank"
                                            title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="tw" href="#" target="_blank"
                                            title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li class="list-inline-item"><a class="pt" href="#" target="_blank"
                                            title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="sidebar-widget widget_categories wow fadeInUp animated mb-30" data-wow-delay="0.1s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Quick link</h5>
                        </div>
                        <ul class="font-small">
                            <li class="cat-item cat-item-2"><a href="#">About me</a></li>
                            <li class="cat-item cat-item-4"><a href="#">Help & Support</a></li>
                            <li class="cat-item cat-item-5"><a href="#">​​Licensing Policy</a></li>
                            <li class="cat-item cat-item-6"><a href="#">Refund Policy</a></li>
                            <li class="cat-item cat-item-7"><a href="#">Hire me</a></li>
                            <li class="cat-item cat-item-7"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sidebar-widget widget_tagcloud wow fadeInUp animated mb-30" data-wow-delay="0.2s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Tagcloud</h5>
                        </div>
                        <div class="tagcloud mt-50">
                            @foreach ($tags as $tag)
                                <a class="tag-cloud-link" href="{{ route('category',$tag->slug) }}">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget_newsletter wow fadeInUp animated mb-30" data-wow-delay="0.3s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Newsletter</h5>
                        </div>
                        <div class="newsletter">
                            <p class="font-medium">Subscribe to our newsletter and get our newest updates right on your
                                inbox.</p>
                            <form class="input-group form-subcriber mt-30 d-flex">
                                <input type="email" class="form-control bg-white font-small"
                                    placeholder="Enter your email">
                                <button class="btn bg-primary text-white" type="submit">Subscribe</button>
                                <label class="mt-20"> <input class="mr-5" name="name" type="checkbox" value="1"
                                        required=""> I agree to the <a href="#" target="_blank">terms &amp;
                                        conditions</a> </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated">
                <p class="float-md-left font-small text-muted">© 2020, Stories - Personal Blog HTML Template </p>
                <p class="float-md-right font-small text-muted">
                    Design by <a href="../../../index.htm" target="_blank">AliThemes</a> | All rights reserved
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div class="dark-mark"></div>
    <!-- Vendor JS-->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.ticker.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.theia.sticky.js') }}"></script>
    @yield('script')
    <!-- NewsBoard JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
