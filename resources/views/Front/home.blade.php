@extends('front.layouts.app')
@section('title', 'Home')
@section('body')
<!-- Start Main content -->
<main>
    <div class="featured-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <p class="text-muted"><span class="typewrite d-inline" data-period="2000"
                            data-type='[ " Travel Blogger. ", "Content Writter. ", "Food Guides " ]'></span></p>
                    <h2>Hello, I’m <span>{{ Str::of($about->name)->explode(' ')[0] }}</span></h2>
                    <h3 class="mb-20"> Welcome to my blog</h3>
                    <h5 class="text-muted">Don't miss out on the latest news about Travel tips, Hotels review, Food
                        guide...</h5>
                    <form class="input-group form-subcriber mt-30 d-flex">
                        <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                        <button class="btn bg-primary text-white" type="submit">Subscribe</button>
                    </form>
                </div>
                <div class="col-lg-6 text-right d-none d-lg-block">
                    <img src="assets/imgs/authors/featured.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="hot-tags pt-30 pb-30 font-small align-self-center">
            <div class="widget-header-3">
                <div class="row align-self-center">
                    <div class="col-md-4 align-self-center">
                        <h5 class="widget-title">Featured posts</h5>
                    </div>
                    <div class="col-md-8 text-md-right font-small align-self-center">
                        <p class="d-inline-block mr-5 mb-0"><i
                                class="elegant-icon  icon_tag_alt mr-5 text-muted"></i>Hot tags:</p>
                        <ul class="list-inline d-inline-block tags">
                            <li class="list-inline-item"><a href="#"># Covid-19</a></li>
                            <li class="list-inline-item"><a href="#"># Inspiration</a></li>
                            <li class="list-inline-item"><a href="#"># Work online</a></li>
                            <li class="list-inline-item"><a href="#"># Stay home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="loop-grid mb-30">
            <div class="row">
                <div class="col-lg-8 mb-30">
                    <div
                        class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                        <div class="arrow-cover"></div>
                        <div class="slide-fade">
                            <div class="position-relative post-thumb">
                                <div class="thumb-overlay img-hover-slide position-relative"
                                    style="background-image: url(assets/imgs/news/news-4.jpg)">
                                    <a class="img-link" href="single.html"></a>
                                    <span class="top-left-icon bg-warning"><i
                                            class="elegant-icon icon_star_alt"></i></span>
                                    <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                        <div class="entry-meta meta-0 font-small mb-20">
                                            <a href="category.html"><span
                                                    class="post-cat text-info text-uppercase">Travel</span></a>
                                            <a href="category.html"><span
                                                    class="post-cat text-success text-uppercase">Animal</span></a>
                                        </div>
                                        <h3 class="post-title font-weight-900 mb-20">
                                            <a class="text-white" href="single.html">Beachmaster Elephant Seal Fights
                                                off Rival Male, The match is uncompromising</a>
                                        </h3>
                                        <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                            <span class="post-on">20 minutes ago</span>
                                            <span class="hit-count has-dot">23k Views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative post-thumb">
                                <div class="thumb-overlay img-hover-slide position-relative"
                                    style="background-image: url(assets/imgs/news/news-6.jpg)">
                                    <a class="img-link" href="single.html"></a>
                                    <span class="top-left-icon bg-danger"><i class="elegant-icon icon_image"></i></span>
                                    <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                        <div class="entry-meta meta-0 font-small mb-20">
                                            <a href="category.html"><span
                                                    class="post-cat text-info text-uppercase">Lifestyle</span></a>
                                        </div>
                                        <h3 class="post-title font-weight-900 mb-20">
                                            <a class="text-white" href="single.html">This genius photo experiment shows
                                                we are all just sheeple in the consumer matrix</a>
                                        </h3>
                                        <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                            <span class="post-on">26 August 2020</span>
                                            <span class="hit-count has-dot">18k Views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                    <div class="post-card-1 border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                            style="background-image: url(assets/imgs/news/news-1.jpg)">
                            <a class="img-link" href="single.html"></a>
                            <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                            <ul class="social-share">
                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i
                                            class="elegant-icon social_facebook"></i></a></li>
                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i
                                            class="elegant-icon social_twitter"></i></a></li>
                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i
                                            class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="post-content p-30">
                            <div class="entry-meta meta-0 font-small mb-10">
                                <a href="category.html"><span class="post-cat text-info">Travel</span></a>
                                <a href="category.html"><span class="post-cat text-success">Food</span></a>
                            </div>
                            <div class="d-flex post-card-content">
                                <h5 class="post-title mb-20 font-weight-900">
                                    <a href="single.html">Want fluffy Japanese pancakes but can’t fly to Tokyo?</a>
                                </h5>
                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                    <span class="post-on">27 August</span>
                                    <span class="time-reading has-dot">12 mins read</span>
                                    <span class="post-by has-dot">23k views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated">
                    <div class="post-card-1 border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                            style="background-image: url(assets/imgs/news/news-7.jpg)">
                            <a class="img-link" href="single.html"></a>
                            <ul class="social-share">
                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i
                                            class="elegant-icon social_facebook"></i></a></li>
                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i
                                            class="elegant-icon social_twitter"></i></a></li>
                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i
                                            class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="post-content p-30">
                            <div class="entry-meta meta-0 font-small mb-10">
                                <a href="category.html"><span class="post-cat text-warning">Fashion</span></a>
                            </div>
                            <div class="d-flex post-card-content">
                                <h5 class="post-title mb-20 font-weight-900">
                                    <a href="single.html">Put Yourself in Your Customers Shoes</a>
                                </h5>
                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                    <span class="post-on">17 July</span>
                                    <span class="time-reading has-dot">8 mins read</span>
                                    <span class="post-by has-dot">12k views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                    <div class="post-card-1 border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                            style="background-image: url(assets/imgs/news/news-9.jpg)">
                            <a class="img-link" href="single.html"></a>
                            <ul class="social-share">
                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i
                                            class="elegant-icon social_facebook"></i></a></li>
                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i
                                            class="elegant-icon social_twitter"></i></a></li>
                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i
                                            class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="post-content p-30">
                            <div class="entry-meta meta-0 font-small mb-10">
                                <a href="category.html"><span class="post-cat text-danger">Travel</span></a>
                            </div>
                            <div class="d-flex post-card-content">
                                <h5 class="post-title mb-20 font-weight-900">
                                    <a href="single.html">Life and Death in the Empire of the Tiger</a>
                                </h5>
                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                    <span class="post-on">7 August</span>
                                    <span class="time-reading has-dot">15 mins read</span>
                                    <span class="post-by has-dot">500 views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.4s">
                    <div class="post-card-1 border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                            style="background-image: url(assets/imgs/news/news-11.jpg)">
                            <a class="img-link" href="single.html"></a>
                            <span class="top-right-icon bg-info"><i class="elegant-icon icon_headphones"></i></span>
                            <ul class="social-share">
                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i
                                            class="elegant-icon social_facebook"></i></a></li>
                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i
                                            class="elegant-icon social_twitter"></i></a></li>
                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i
                                            class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="post-content p-30">
                            <div class="entry-meta meta-0 font-small mb-10">
                                <a href="category.html"><span class="post-cat text-success">Lifestyle</span></a>
                            </div>
                            <div class="d-flex post-card-content">
                                <h5 class="post-title mb-20 font-weight-900">
                                    <a href="single.html">When Two Wheels Are Better Than Four</a>
                                </h5>
                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                    <span class="post-on">15 Jun</span>
                                    <span class="time-reading has-dot">9 mins read</span>
                                    <span class="post-by has-dot">1.2k views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <div class="bg-grey pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post-module-2">
                        <div class="widget-header-1 position-relative mb-30  wow fadeInUp animated">
                            <h5 class="mt-5 mb-30">Travel tips</h5>
                        </div>
                        <div class="loop-list loop-list-style-1">
                            <div class="row">
                                <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                    <div class="post-card-1 border-radius-10 hover-up">
                                        <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                            style="background-image: url(assets/imgs/news/news-6.jpg)">
                                            <a class="img-link" href="single.html"></a>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i
                                                            class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i
                                                            class="elegant-icon social_twitter"></i></a></li>
                                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i
                                                            class="elegant-icon social_pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="post-content p-30">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="category.html"><span
                                                        class="post-cat text-info">Artists</span></a>
                                                <a href="category.html"><span
                                                        class="post-cat text-success">Film</span></a>
                                            </div>
                                            <div class="d-flex post-card-content">
                                                <h5 class="post-title mb-20 font-weight-900">
                                                    <a href="single.html">Easy Ways to Use Alternatives to Plastic</a>
                                                </h5>
                                                <div class="post-excerpt mb-25 font-small text-muted">
                                                    <p>Graduating from a top accelerator or incubator can be as
                                                        career-defining for a&nbsp;startup founder&nbsp;as an elite
                                                        university diploma. The intensive programmes, which…</p>
                                                </div>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">27 August</span>
                                                    <span class="time-reading has-dot">12 mins read</span>
                                                    <span class="post-by has-dot">23k views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                    <div class="post-card-1 border-radius-10 hover-up">
                                        <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                            style="background-image: url(assets/imgs/news/news-8.jpg)">
                                            <a class="img-link" href="single.html"></a>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i
                                                            class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i
                                                            class="elegant-icon social_twitter"></i></a></li>
                                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i
                                                            class="elegant-icon social_pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="post-content p-30">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="category.html"><span class="post-cat">Fashion</span></a>
                                            </div>
                                            <div class="d-flex post-card-content">
                                                <h5 class="post-title mb-20 font-weight-900">
                                                    <a href="single.html">Tips for Growing Healthy, Longer Hair</a>
                                                </h5>
                                                <div class="post-excerpt mb-25 font-small text-muted">
                                                    <p>Proin vitae placerat quam. Ut sodales eleifend urna, in
                                                        condimentum tortor ultricies eu. Nunc auctor iaculis dolorProin
                                                        vitae placerat quam. Proin vitae placerat quam.</p>
                                                </div>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">12 August</span>
                                                    <span class="time-reading has-dot">6 mins read</span>
                                                    <span class="post-by has-dot">3k views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                    <div class="post-card-1 border-radius-10 hover-up">
                                        <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                            style="background-image: url(assets/imgs/news/news-10.jpg)">
                                            <a class="img-link" href="single.html"></a>
                                            <span class="top-right-icon bg-secondary"><i
                                                    class="elegant-icon icon_heart_alt"></i></span>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i
                                                            class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i
                                                            class="elegant-icon social_twitter"></i></a></li>
                                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i
                                                            class="elegant-icon social_pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="post-content p-30">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="category.html"><span
                                                        class="post-cat text-success">Lifestyle</span></a>
                                            </div>
                                            <div class="d-flex post-card-content">
                                                <h5 class="post-title mb-20 font-weight-900">
                                                    <a href="single.html">Project Ideas Around the House</a>
                                                </h5>
                                                <div class="post-excerpt mb-25 font-small text-muted">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                                        tempor condimentum metus non tempor. Maecenas non augue aliquam,
                                                        facilisis lectus quis, lacinia risus.</p>
                                                </div>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">27 August</span>
                                                    <span class="time-reading has-dot">12 mins read</span>
                                                    <span class="post-by has-dot">23k views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                    <div class="post-card-1 border-radius-10 hover-up">
                                        <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                            style="background-image: url(assets/imgs/news/news-12.jpg)">
                                            <a class="img-link" href="single.html"></a>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i
                                                            class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i
                                                            class="elegant-icon social_twitter"></i></a></li>
                                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i
                                                            class="elegant-icon social_pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="post-content p-30">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="category.html"><span
                                                        class="post-cat text-danger">Hotels</span></a>
                                            </div>
                                            <div class="d-flex post-card-content">
                                                <h5 class="post-title mb-20 font-weight-900">
                                                    <a href="single.html">How to Give Yourself a Spa Day from Home</a>
                                                </h5>
                                                <div class="post-excerpt mb-25 font-small text-muted">
                                                    <p>Graduating from a top accelerator or incubator can be as
                                                        career-defining for a&nbsp;startup founder&nbsp;as an elite
                                                        university diploma. The intensive programmes, which…</p>
                                                </div>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">18 August</span>
                                                    <span class="time-reading has-dot">14 mins read</span>
                                                    <span class="post-by has-dot">25k views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="post-module-3">
                        <div class="widget-header-1 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Latest posts</h5>
                        </div>
                        <div class="loop-list loop-list-style-1">
                            @foreach ($latest as $article)
                            <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative"
                                                style="background-image: url({{ asset($article->img) }})">
                                                <a class="img-link" href="single.html"></a>
                                            </div>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i
                                                            class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i
                                                            class="elegant-icon social_twitter"></i></a></li>
                                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i
                                                            class="elegant-icon social_pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8 align-self-center">
                                        <div class="post-content">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="{{ route('category',$article->category->slug) }}"><span
                                                        class="post-cat text-danger">{{ $article->category->name }}</span></a>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a href="{{ route('post',$article->slug) }}">{{ $article->title }}</a>
                                            </h5>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">{{ $article->created_at }}</span>
                                                <span class="time-reading has-dot">12 mins read</span>
                                                <span class="post-by has-dot">{{ $article->visit }} views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </div>
                    {{ $latest->links('vendor.pagination.custom') }}
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div
                            class="sidebar-widget widget-about mb-50 pt-30 pr-30 pb-30 pl-30 bg-white border-radius-5 has-border  wow fadeInUp animated">
                            <img class="about-author-img mb-25" src="assets/imgs/authors/author.jpg" alt="">
                            <h5 class="mb-20">Hello, I'm {{ $about->name }}</h5>
                            <p class="font-medium text-muted">Hi, I’m {{ $about->name }}, a Florida native, who left my career in
                                corporate wealth management six years ago to embark on a summer of soul searching that
                                would change the course of my life forever.</p>
                            <strong>Follow me: </strong>
                            <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                <li class="list-inline-item"><a class="fb" href="#" target="_blank" title="Facebook"><i
                                            class="elegant-icon social_facebook"></i></a></li>
                                <li class="list-inline-item"><a class="tw" href="#" target="_blank" title="Tweet now"><i
                                            class="elegant-icon social_twitter"></i></a></li>
                                <li class="list-inline-item"><a class="pt" href="#" target="_blank" title="Pin it"><i
                                            class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Most popular</h5>
                            </div>
                            <div class="post-block-list post-module-1">
                                <ul class="list-post">
                                    @foreach ($articles_class::orderBy('visit','desc')->limit(4)->get() as $article)
                                    <li class="@if(!$loop->last)mb-30 @endif wow fadeInUp animated">
                                        <div
                                            class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                        href="{{ route('post',$article->slug) }}">{{ $article->title }}</a>
                                                </h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span
                                                        class="post-on">{{ $article->created_at->diffForHumans() }}</span>
                                                    <span class="post-by has-dot">{{ $article->visit }} views</span>
                                                </div>
                                            </div>
                                            <div
                                                class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="{{ route('post',$article->slug) }}">
                                                    <img src="{{ asset($article->img) }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Last comments</h5>
                            </div>
                            <div class="post-block-list post-module-2">
                                <ul class="list-post">
                                    <li class="mb-30 wow fadeInUp animated">
                                        <div
                                            class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div
                                                class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html">
                                                    <img src="assets/imgs/authors/author-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <p class="mb-10"><a href="author.html"><strong>David</strong></a>
                                                    <span class="ml-15 font-small text-muted has-dot">16 Jan 2020</span>
                                                </p>
                                                <p class="text-muted font-small">A writer is someone for whom writing is
                                                    more difficult than...</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-30 wow fadeInUp animated">
                                        <div
                                            class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div
                                                class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html">
                                                    <img src="assets/imgs/authors/author-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <p class="mb-10"><a href="author.html"><strong>Kokawa</strong></a>
                                                    <span class="ml-15 font-small text-muted has-dot">12 Feb 2020</span>
                                                </p>
                                                <p class="text-muted font-small">Striking pewter studded epaulettes
                                                    silver zips</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated">
                                        <div
                                            class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div
                                                class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html">
                                                    <img src="assets/imgs/news/thumb-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <p class="mb-10"><a href="author.html"><strong>Tsukasi</strong></a>
                                                    <span class="ml-15 font-small text-muted has-dot">18 May 2020</span>
                                                </p>
                                                <p class="text-muted font-small">Workwear bow detailing a slingback
                                                    buckle strap</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget widget_instagram wow fadeInUp animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Instagram</h5>
                            </div>
                            <div class="instagram-gellay">
                                <ul class="insta-feed">
                                    <li>
                                        <a href="{{ asset('assets/imgs/thumbnail-3.jpg') }}" class="play-video"
                                            data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img
                                                class="border-radius-5"
                                                src="{{ asset('assets/imgs/news/thumb-1.jpg') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('assets/imgs/thumbnail-4.jpg') }}" class="play-video"
                                            data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img
                                                class="border-radius-5"
                                                src="{{ asset('assets/imgs/news/thumb-2.jpg') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('assets/imgs/thumbnail-5.jpg') }}" class="play-video"
                                            data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img
                                                class="border-radius-5"
                                                src="{{ asset('assets/imgs/news/thumb-3.jpg') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('assets/imgs/thumbnail-3.jpg') }}" class="play-video"
                                            data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img
                                                class="border-radius-5"
                                                src="{{ asset('assets/imgs/news/thumb-4.jpg') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('assets/imgs/thumbnail-4.jpg') }}" class="play-video"
                                            data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img
                                                class="border-radius-5"
                                                src="{{ asset('assets/imgs/news/thumb-5.jpg') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('assets/imgs/thumbnail-5.jpg') }}" class="play-video"
                                            data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img
                                                class="border-radius-5"
                                                src="{{ asset('assets/imgs/news/thumb-6.jpg') }}" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Main content -->
@endsection
