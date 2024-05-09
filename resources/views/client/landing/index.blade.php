@extends('layouts._client')

@section('content')
    <main class="main">
        <div class="bg-homepage1"></div>
        <section class="section-box">
            <div class="banner-hero hero-1">
                <div class="banner-inner">
                    <div class="row">
                        <div class="col-xl-8 col-lg-12">
                            <div class="block-banner">
                                <h1 class="heading-banner wow animate__animated animate__fadeInUp">The <span
                                        class="color-brand-2">Easiest Way</span><br class="d-none d-lg-block">to Find
                                    Your Professional Photographer</h1>
                                <div class="banner-description mt-20 wow animate__animated animate__fadeInUp"
                                     data-wow-delay=".1s">Join countless clients who trust us to find the perfect
                                    photographer,<br class="d-none d-lg-block">capturing more than moment <br
                                        class="d-none d-lg-block"> capturing memories
                                </div>
                                <div class="form-find mt-40 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                    <form>
                                        <div class="box-industry">
                                            <select class="form-input mr-10 select-active input-industry">
                                                @foreach($data['categories'] as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <select class="form-input mr-10 select-active">
                                            @foreach($data['provinces'] as $province)
                                                <option value="{{$province->id}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                        <input class="form-input input-keysearch mr-10" type="number"
                                               placeholder="Your Budget... ">
                                        <button class="btn btn-default btn-find font-sm"></button>
                                    </form>
                                </div>
                                <div class="list-tags-banner mt-60 wow animate__animated animate__fadeInUp"
                                     data-wow-delay=".3s"><strong>Popular Searches:
                                    </strong>
                                    @foreach($data['categories']->take(5) as $popular)

                                        @if($loop->last)
                                            <a href="#">{{$popular->name}}</a>
                                        @else
                                            <a href="#">{{$popular->name}}</a>,
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12 d-none d-xl-block col-md-6">
                            <div class="banner-imgs">
                                <div class="block-1 shape-1"><img class="img-responsive" alt="jobBox"
                                                                  src="assets/imgs/page/homepage1/banner1.png"></div>
                                <div class="block-2 shape-2"><img class="img-responsive" alt="jobBox"
                                                                  src="assets/imgs/page/homepage1/banner2.png"></div>
                                <div class="block-3 shape-3"><img class="img-responsive" alt="jobBox"
                                                                  src="assets/imgs/page/homepage1/icon-top-banner.png">
                                </div>
                                <div class="block-4 shape-3"><img class="img-responsive" alt="jobBox"
                                                                  src="assets/imgs/page/homepage1/icon-bottom-banner.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="mt-100"></div>
        <section class="section-box mt-50">
            <div class="section-box wow animate__animated animate__fadeIn">
                <div class="container">
                    <div class="text-start">
                        <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Popular category</h2>
                        <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Discover the
                            ideal photography package tailored to your needs, with new options added regularly</p>
                    </div>
                    <div class="box-swiper mt-50">
                        <div class="swiper-container swiper-group-6 mh-none swiper">
                            <div class="swiper-wrapper pb-70 pt-5">
                                @foreach($data['categories'] as $listCategory)
                                    <div class="swiper-slide hover-up">
                                        <div class="card-grid-5 card-category hover-up"
                                             style="background-image: url('{{$listCategory['image']}}')"><a
                                                href="#">
                                                <div class="box-cover-img">
                                                    <div class="content-bottom">
                                                        <h6 class="color-white mb-5">{{$listCategory->name}}</h6>
                                                        <p class="color-white font-xs">
                                                            <span>{{$listCategory->packages_count}}</span><span>  Packages Available</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-button-next swiper-button-next-1"></div>
                        <div class="swiper-button-prev swiper-button-prev-1"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-box overflow-visible mt-100 mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="box-image-job"><img class="img-job-1" alt="jobBox"
                                                        src="assets/imgs/page/homepage1/img-chart.png"><img
                                class="img-job-2" alt="jobBox" src="assets/imgs/page/homepage1/controlcard.png">
                            <figure class="wow animate__animated animate__fadeIn"><img alt="jobBox"
                                                                                       src="assets/imgs/page/homepage1/img1.png">
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="content-job-inner"><span
                                class="color-text-mutted text-32">Millions of Moments. </span>
                            <h2 class="text-52 wow animate__animated animate__fadeInUp">Find the One That’s <span
                                    class="color-brand-2">Perfect</span> For You</h2>
                            <div class="mt-40 pr-50 text-md-lh28 wow animate__animated animate__fadeInUp">Explore all
                                the unique photography packages on our platform. Get personalized recommendations based
                                on your preferences. Read reviews from thousands of satisfied clients worldwide. The
                                perfect photography experience awaits you.
                            </div>
                            <div class="mt-40">
                                <div class="wow animate__animated animate__fadeInUp"><a class="btn btn-default"
                                                                                        href="jobs-grid.html">Search
                                        Packages</a><a class="btn btn-link" href="page-about.html">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box overflow-visible mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="text-center">
                            <h1 class="color-brand-2"><span class="count">25</span><span> K+</span></h1>
                            <h5>Completed Projects</h5>
                            <p class="font-sm color-text-paragraph mt-10">We provide complete photographic <br
                                    class="d-none d-lg-block">solutions, tailored to meet <br class="d-none d-lg-block">
                                every unique need and vision.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="text-center">
                            <h1 class="color-brand-2"><span class="count">17</span><span> +</span></h1>
                            <h5>Locations</h5>
                            <p class="font-sm color-text-paragraph mt-10">Our studios across the globe <br
                                    class="d-none d-lg-block">ensure that no matter where you are, <br
                                    class="d-none d-lg-block">you receive the utmost in quality and service.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="text-center">
                            <h1 class="color-brand-2"><span class="count">86</span><span> +</span></h1>
                            <h5>Professional Photographers</h5>
                            <p class="font-sm color-text-paragraph mt-10">Our team comprises highly <br
                                    class="d-none d-lg-block">skilled photographers dedicated to <br
                                    class="d-none d-lg-block">capturing your moments perfectly.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="text-center">
                            <h1 class="color-brand-2"><span class="count">28</span><span> +</span></h1>
                            <h5>Happy Clients</h5>
                            <p class="font-sm color-text-paragraph mt-10">We pride ourselves on <br
                                    class="d-none d-lg-block">exceeding client expectations and <br
                                    class="d-none d-lg-block">delivering memorable experiences.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-70">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Packages of the day</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Explore and secure
                        the best photography deals, updated daily for fresh inspiration</p>
                </div>
                <div class="mt-70">
                    <div class="row">
                        @foreach($data['packages'] as $package)
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="card-grid-2 grid-bd-16 hover-up">
                                    <div class="card-grid-2-image">
                                        @if($package['discount'])
                                            <span
                                                class="lbl-hot bg-danger"><span>{{$package['discount']}} %</span></span>
                                        @endif
                                        <div class="image-box">
                                            <figure><img src="{{$package->images->first()->url}}" alt="jobBox"></figure>
                                        </div>
                                    </div>
                                    <div class="card-block-info">
                                        <h5><a href="#">{{$package->name}}</a></h5>
                                        <div class="mt-5">
                                            <span class="card-location mr-15">{{$package->province->name}}, {{$package->city->name}}</span>
                                        </div>
                                        <div class="card-2-bottom mt-20">
                                            <div class="row">
                                                <div class="col-xl-7 col-md-7 mb-2">
                                                    <a class="btn btn-tags-sm mr-5" href="/frontend/jobs-grid">{{$package->category->name}}</a>
                                                </div>
                                                <div class="col-xl-5 col-md-5 text-lg-end">
                                                    <span class="card-text-price">Rp. {{number_format($package->price - ($package->price * ($package->discount/100)))}}
                                                    <span class="card-text-price" style="color: red;font-size: 10px;text-decoration: line-through;">Rp. {{number_format($package->price)}}</span>
                                                    </span>
                                                    <span class="text-muted">/ Session</span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="font-sm color-text-paragraph mt-20">{{\Illuminate\Support\Str::limit($package->description, 100, ' ...')}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="text-center mt-10"><a class="btn btn-brand-1 btn-icon-more hover-up">See more </a></div>
                </div>
            </div>
        </section>
        <section class="section-box mt-70">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Top Photographers</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Discover your next
                        photoshoot, event coverage, or artistic collaboration.</p>
                </div>
                <div class="mt-50 card-bg-white">
                    <div class="row">
                        @foreach($data['photographers'] as $photographer)
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="card-grid-2-image-left">
                                        <div class="card-grid-2-image-rd online">
                                            <a href="candidate-details.html">
                                                <figure><img alt="jobBox" src="assets/imgs/page/candidates/user1.png"></figure>
                                            </a>
                                        </div>
                                        <div class="card-profile pt-10">
                                            <a href="candidate-details.html">
                                                <h5>{{$photographer->user->name}}</h5>
                                            </a>
                                            <span class="font-xs color-text-mutted" style="font-size: 10px !important;">{{$photographer->province->name}}, {{$photographer->city->name}}</span>

                                        </div>
                                    </div>
                                    <div class="card-block-info">
                                        <p class="font-xs color-text-paragraph-2">{{\Illuminate\Support\Str::limit($photographer->about, 100, ' ...')}}</p>
                                        <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                            <div class="text-center">
                                                @if($photographer->facebook)
                                                    <a class="btn btn-tags-sm mb-10 mr-5" href="{{$photographer->facebook}}">Facebook</a>
                                                @endif
                                                @if($photographer->instagram)
                                                    <a class="btn btn-tags-sm mb-10 mr-5" href="{{$photographer->instagram}}">Instagram</a>
                                                @endif
                                                @if($photographer->twitter)
                                                    <a class="btn btn-tags-sm mb-10 mr-5" href="{{$photographer->twitter}}">Twitter</a>
                                                @endif
                                                @if($photographer->portofolio)
                                                    <a class="btn btn-tags-sm mb-10 mr-5" href="{{$photographer->portofolio}}">Portofolio</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row mt-40 mb-60">
                        <div class="col-lg-12">
                            <div class="text-center"><a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="blog-grid.html">See More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-50 mb-50">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">News and Blog</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Get the latest
                        news, updates and tips</p>
                </div>
            </div>
            <div class="container">
                <div class="mt-50">
                    <div class="box-swiper style-nav-top">
                        <div class="swiper-container swiper-group-3 swiper">
                            <div class="swiper-wrapper pb-70 pt-5">
                                <div class="swiper-slide">
                                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                        <div class="text-center card-grid-3-image"><a href="#">
                                                <figure><img alt="jobBox"
                                                             src="assets/imgs/page/homepage1/img-news1.png"></figure>
                                            </a></div>
                                        <div class="card-block-info">
                                            <div class="tags mb-15"><a class="btn btn-tag"
                                                                       href="blog-grid.html">News</a></div>
                                            <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great
                                                    Impression</a></h5>
                                            <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the
                                                world&amp;rsquo;s most sustainable healthcare company by creating
                                                high-quality healthcare products in iconic, sustainable packaging.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                        <div class="text-center card-grid-3-image"><a href="#">
                                                <figure><img alt="jobBox"
                                                             src="assets/imgs/page/homepage1/img-news2.png"></figure>
                                            </a></div>
                                        <div class="card-block-info">
                                            <div class="tags mb-15"><a class="btn btn-tag"
                                                                       href="blog-grid.html">Events</a></div>
                                            <h5><a href="blog-details.html">39 Strengths and Weaknesses To Discuss in a
                                                    Job Interview</a></h5>
                                            <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the
                                                world&amp;rsquo;s most sustainable healthcare company by creating
                                                high-quality healthcare products in iconic, sustainable packaging.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                        <div class="text-center card-grid-3-image"><a href="#">
                                                <figure><img alt="jobBox"
                                                             src="assets/imgs/page/homepage1/img-news3.png"></figure>
                                            </a></div>
                                        <div class="card-block-info">
                                            <div class="tags mb-15"><a class="btn btn-tag"
                                                                       href="blog-grid.html">News</a></div>
                                            <h5><a href="blog-details.html">Interview Question: Why Dont You Have a
                                                    Degree?</a></h5>
                                            <p class="mt-10 color-text-paragraph font-sm">Learn how to respond if an
                                                interviewer asks you why you dont have a degree, and read example
                                                answers that can help you craft</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="blog-grid.html">Load More Posts</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-50 mb-20">
            <div class="container">
                <div class="box-newsletter">
                    <div class="row">
                        <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img
                                src="assets/imgs/template/newsletter-left.png" alt="joxBox"></div>
                        <div class="col-lg-12 col-xl-6 col-12">
                            <h2 class="text-md-newsletter text-center">New Things Will Always<br> Update Regularly</h2>
                            <div class="box-form-newsletter mt-40">
                                <form class="form-newsletter">
                                    <input class="input-newsletter" type="text" value=""
                                           placeholder="Enter your email here">
                                    <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img
                                src="assets/imgs/template/newsletter-right.png" alt="joxBox"></div>
                    </div>
                </div>
            </div>
        </section>
        <script src="assets/js/plugins/counterup.js"></script>
    </main>
@endsection
