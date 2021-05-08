@extends('front.layouts.app')
@section('title', 'About')
@section('script')
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
@endsection
@section('body')
<!-- Start Main content -->
<main class="bg-grey pb-30">
    <div class="container single-content">
        <div class="entry-header entry-header-style-1 mb-50 pt-50 text-center">
            <h1 class="entry-title mb-20 font-weight-900 ">
                About me
            </h1>
            <p class="text-muted"><span class="typewrite d-inline" data-period="2000"
                    data-type='[ " Travel Blogger. ", "Content Writter. ", "Food Guides " ]'></span></p>
        </div>
        <!--end single header-->
        <figure class="image mb-30 m-auto text-center border-radius-10">
            <img class="border-radius-10" src="assets/imgs/news/news-17.jpg" alt="post-title">
        </figure>
        <!--figure-->
        <article class="entry-wraper">
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
                    data-cfemail="49282d3a093c253d3b28272c3e3a672a262467">[email&#160;protected]</a> For large or unique
                campaigns please email <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                    data-cfemail="097a68656c497c657d7b68676c7e7a276a6664">[email&#160;protected]</a> for
                requests-for-proposal and additional pricing information. </p>
            <h1 class="mt-30">Get in touch</h1>
            <hr class="wp-block-separator is-style-wide">
            <form class="form-contact comment_form" action="#" id="commentForm">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="website" id="website" type="text" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="button button-contactForm">Send message</button>
                </div>
            </form>
        </article>
    </div>
    <!--container-->
</main>
<!-- End Main content -->
@endsection
