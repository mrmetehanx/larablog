@extends('front.layouts.app')
@section('title', 'Contact')
@section('script')
<script data-cfasync="false"
    src="{{ asset('../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
@endsection
@section('body')
<!-- Start Main content -->
<main class="bg-grey pb-30">
    <div class="entry-header entry-header-style-2 pb-80 pt-80 mb-50 text-white"
        style="background-image: url(assets/imgs/news/news-17.jpg)">
        <div class="container entry-header-content">
            <h1 class="entry-title mb-50 font-weight-900">
                Get in Touch
            </h1>
        </div>
    </div>
    <div class="container single-content">
        <div class="entry-wraper mt-50">
            <p class="font-large">We are AliThemes , a creative and dedicated group of individuals who love web
                development almost as much as we love our customers.
                We are passionate team with the mission for achieving the perfection in web design.
                All designs are made by love with pixel perfect design and excellent coding quality. Speed, security and
                SEO friendly alway in our mind.</p>
            <hr class="wp-block-separator is-style-wide">
            <p><span class="mr-5">
                    <ion-icon name="location-outline" role="img" class="md hydrated" aria-label="location outline">
                    </ion-icon>
                </span><strong>Address</strong>: Lorem 142 Str., 2352, Ipsum, State, USA</p>
            <p><span class="mr-5">
                    <ion-icon name="home-outline" role="img" class="md hydrated" aria-label="home outline"></ion-icon>
                </span><strong>Our website</strong>: <a href="../../../index.htm">https://alithemes.com</a></p>
            <p><span class="mr-5">
                    <ion-icon name="planet-outline" role="img" class="md hydrated" aria-label="planet outline">
                    </ion-icon>
                </span><strong>Support center</strong>: <a href="../../../index-1.htm">https://alithemes.ticksy.com</a>
            </p>
            <h3 class="mt-30">Advertise</h3>
            <hr class="wp-block-separator is-style-wide">
            <p>Please contact us directly at <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                    data-cfemail="c7a6a3b487b2abb3b5a6a9a2b0b4e9a4a8aae9">[email&#160;protected]</a> For large or unique
                campaigns please email <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                    data-cfemail="d5a6b4b9b095a0b9a1a7b4bbb0a2a6fbb6bab8">[email&#160;protected]</a> for
                requests-for-proposal and additional pricing information. </p>
            <h1 class="mt-30">Get in touch</h1>
            <hr class="wp-block-separator is-style-wide">
            <form class="form-contact comment_form" action="{{ route('message.store') }}" method="post"
                id="commentForm">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                    @include('components.flash-message')
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" name="name" id="name" type="text" placeholder="Name"
                                value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" name="email" id="email" type="email" placeholder="Email"
                                value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="phone" id="phone" type="text" placeholder="Phone"
                                value="{{ old('phone') }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                placeholder="Message">{{ old('comment') }}"</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="send-comment" class="button button-contactForm">Send message</button>
                </div>
            </form>
        </div>
    </div>
    <!--container-->
</main>
<!-- End Main content -->
@endsection
