@extends('front.layouts.app')
@section('title', 'Category')
@section('script')
<script src="{{ asset('assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/masonry.pkgd.min.js') }}"></script>
@endsection
@section('body')
<!-- Start Main content -->
<main>
    <!--archive header-->
    <div class="archive-header pt-50 text-center pb-50">
        <div class="container">
            <h2 class="font-weight-900">{{ $category->name }}</h2>
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> {{ $category->name }}
            </div>
        </div>
    </div>
    <div class="container">
        <!--Loop Masonry-->
        <div class="grid row mb-30">
            <div class="grid-sizer"></div>
            @foreach ($articles as $article)
            <article class="grid-item col pb-50 wow fadeIn animated">
                <div class="post-card-1 border-radius-10 hover-up">
                    <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                        style="background-image: url({{ $article->img }})">
                        <a class="img-link" href="{{ route('post',$article->slug) }}"></a>
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
                            <a href="category.html"><span class="post-cat text-success">{{ $article->category->name }}</span></a>
                        </div>
                        <div class="d-flex post-card-content">
                            <h5 class="post-title mb-20 font-weight-900">
                                <a href="{{ route('post',$article->slug) }}">{{ $article->title }}</a>
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
            @endforeach
        </div>
        <div class="row">
            <div class="col-12">
                {{ $articles->links('vendor.pagination.default') }}
                <div class="pagination-area mb-30 wow fadeInUp animated">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="elegant-icon arrow_left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#">04</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="elegant-icon arrow_right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Main content -->
@endsection
