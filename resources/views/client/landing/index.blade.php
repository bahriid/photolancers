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
                                <h1 class="heading-banner wow animate__animated animate__fadeInUp">The <span class="color-brand-2">Easiest Way</span><br class="d-none d-lg-block">to Find Your Professional Photographer</h1>
                                <div class="banner-description mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Join countless clients who trust us to find the perfect photographer,<br class="d-none d-lg-block">capturing more than moment <br class="d-none d-lg-block"> capturing memories</div>
                                <div class="form-find mt-40 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                    <form>
                                        <div class="box-industry">
                                            <select class="form-input mr-10 select-active input-industry">
                                                <option value="0">Packages</option>
                                                <option value="1">Software</option>
                                                <option value="2">Finance</option>
                                                <option value="3">Recruting</option>
                                                <option value="4">Management</option>
                                                <option value="5">Advertising</option>
                                                <option value="6">Development</option>
                                            </select>
                                        </div>
                                        <select class="form-input mr-10 select-active">
                                            <option value="">Location</option>
                                            <option value="AX">Aland Islands</option>
                                        </select>
                                        <input class="form-input input-keysearch mr-10" type="text" placeholder="Your Budget... ">
                                        <button class="btn btn-default btn-find font-sm"></button>
                                    </form>
                                </div>
                                <div class="list-tags-banner mt-60 wow animate__animated animate__fadeInUp" data-wow-delay=".3s"><strong>Popular Searches:</strong><a href="#">Designer</a>, <a href="#">Web</a>, <a href="#">IOS</a>, <a href="#">Developer</a>, <a href="#">PHP</a>, <a href="#">Senior</a>, <a href="#">Engineer</a></div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12 d-none d-xl-block col-md-6">
                            <div class="banner-imgs">
                                <div class="block-1 shape-1"><img class="img-responsive" alt="jobBox" src="assets/imgs/page/homepage1/banner1.png"></div>
                                <div class="block-2 shape-2"><img class="img-responsive" alt="jobBox" src="assets/imgs/page/homepage1/banner2.png"></div>
                                <div class="block-3 shape-3"><img class="img-responsive" alt="jobBox" src="assets/imgs/page/homepage1/icon-top-banner.png"></div>
                                <div class="block-4 shape-3"><img class="img-responsive" alt="jobBox" src="assets/imgs/page/homepage1/icon-bottom-banner.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="mt-100"></div>
        <section class="section-box mt-80">
            <div class="section-box wow animate__animated animate__fadeIn">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Browse by Package</h2>
                        <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Discover the ideal photography package tailored to your needs, with new options added regularly</p>
                    </div>
                    <div class="box-swiper mt-50">
                        <div class="swiper-container swiper-group-5 swiper">
                            <div class="swiper-wrapper pb-70 pt-5">
                                <div class="swiper-slide hover-up"><a href="jobs-list.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/marketing.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Marketing &amp; Sale</h4>
                                                <p class="font-xs">1526<span> Jobs Available</span></p>
                                            </div>
                                        </div></a><a href="jobs-grid.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/customer.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Customer Help</h4>
                                                <p class="font-xs">185<span> Jobs Available</span></p>
                                            </div>
                                        </div></a>
                                </div>
                                <div class="swiper-slide hover-up"><a href="jobs-grid.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/finance.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Finance</h4>
                                                <p class="font-xs">168<span> Jobs Available</span></p>
                                            </div>
                                        </div></a><a href="jobs-list.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/lightning.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Software</h4>
                                                <p class="font-xs">1856<span> Jobs Available</span></p>
                                            </div>
                                        </div></a>
                                </div>
                                <div class="swiper-slide hover-up"><a href="jobs-grid.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/human.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Human Resource</h4>
                                                <p class="font-xs">165<span> Jobs Available</span></p>
                                            </div>
                                        </div></a><a href="jobs-grid.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/management.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Management</h4>
                                                <p class="font-xs">965<span> Jobs Available</span></p>
                                            </div>
                                        </div></a>
                                </div>
                                <div class="swiper-slide hover-up"><a href="jobs-list.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/retail.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Retail &amp; Products</h4>
                                                <p class="font-xs">563<span> Jobs Available</span></p>
                                            </div>
                                        </div></a><a href="jobs-grid.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/security.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Security Analyst</h4>
                                                <p class="font-xs">254<span> Jobs Available</span></p>
                                            </div>
                                        </div></a>
                                </div>
                                <div class="swiper-slide hover-up"><a href="jobs-grid.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/content.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Content Writer</h4>
                                                <p class="font-xs">142<span> Jobs Available</span></p>
                                            </div>
                                        </div></a><a href="jobs-list.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/research.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Market Research</h4>
                                                <p class="font-xs">532<span> Jobs Available</span></p>
                                            </div>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section-box mb-30">
            <div class="container">
                <div class="box-we-hiring">
                    <div class="text-1"><span class="text-we-are">We are</span><span class="text-hiring">Hiring</span></div>
                    <div class="text-2">Let&rsquo;s <span class="color-brand-1">Work</span> Together<br> &amp; <span class="color-brand-1">Explore</span> Opportunities</div>
                    <div class="text-3">
                        <div class="btn btn-apply btn-apply-icon" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section-box mt-50">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Packages of the day</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Explore and secure the best photography deals, updated daily for fresh inspiration</p>
                    <div class="list-tabs mt-40">
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a class="active" id="nav-tab-job-1" href="#tab-job-1" data-bs-toggle="tab" role="tab" aria-controls="tab-job-1" aria-selected="true"><img src="assets/imgs/page/homepage1/management.svg" alt="jobBox"> Management</a></li>
                            <li><a id="nav-tab-job-2" href="#tab-job-2" data-bs-toggle="tab" role="tab" aria-controls="tab-job-2" aria-selected="false"><img src="assets/imgs/page/homepage1/marketing.svg" alt="jobBox"> Marketing &amp; Sale</a></li>
                            <li><a id="nav-tab-job-3" href="#tab-job-3" data-bs-toggle="tab" role="tab" aria-controls="tab-job-3" aria-selected="false"><img src="assets/imgs/page/homepage1/finance.svg" alt="jobBox"> Finance</a></li>
                            <li><a id="nav-tab-job-4" href="#tab-job-4" data-bs-toggle="tab" role="tab" aria-controls="tab-job-4" aria-selected="false"><img src="assets/imgs/page/homepage1/human.svg" alt="jobBox"> Human Resource</a></li>
                            <li><a id="nav-tab-job-5" href="#tab-job-5" data-bs-toggle="tab" role="tab" aria-controls="tab-job-5" aria-selected="false"><img src="assets/imgs/page/homepage1/retail.svg" alt="jobBox"> Retail &amp; Products</a></li>
                            <li><a id="nav-tab-job-6" href="#tab-job-6" data-bs-toggle="tab" role="tab" aria-controls="tab-job-6" aria-selected="false"><img src="assets/imgs/page/homepage1/content.svg" alt="jobBox"> Content Writer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-70">
                    <div class="tab-content" id="myTabContent-1">
                        <div class="tab-pane fade show active" id="tab-job-1" role="tabpanel" aria-labelledby="tab-job-1">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">React</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-3.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Frontend Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-5.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Angular</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Products Manager</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-job-2" role="tabpanel" aria-labelledby="tab-job-2">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Products Manager</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Frontend Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-5.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Angular</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">React</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-3.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-job-3" role="tabpanel" aria-labelledby="tab-job-3">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Frontend Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-5.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Angular</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Products Manager</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">React</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-3.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-job-4" role="tabpanel" aria-labelledby="tab-job-4">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Products Manager</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Frontend Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-5.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Angular</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">React</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-3.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-job-5" role="tabpanel" aria-labelledby="tab-job-5">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Frontend Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-5.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Angular</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Products Manager</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">React</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-3.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-job-6" role="tabpanel" aria-labelledby="tab-job-6">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">React</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-3.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Frontend Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-5.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Angular</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Products Manager</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box overflow-visible mt-100 mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="box-image-job"><img class="img-job-1" alt="jobBox" src="assets/imgs/page/homepage1/img-chart.png"><img class="img-job-2" alt="jobBox" src="assets/imgs/page/homepage1/controlcard.png">
                            <figure class="wow animate__animated animate__fadeIn"><img alt="jobBox" src="assets/imgs/page/homepage1/img1.png"></figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="content-job-inner"><span class="color-text-mutted text-32">Millions of Moments. </span>
                            <h2 class="text-52 wow animate__animated animate__fadeInUp">Find the One That’s <span class="color-brand-2">Perfect</span> For You</h2>
                            <div class="mt-40 pr-50 text-md-lh28 wow animate__animated animate__fadeInUp">Explore all the unique photography packages on our platform. Get personalized recommendations based on your preferences. Read reviews from thousands of satisfied clients worldwide. The perfect photography experience awaits you.</div>
                            <div class="mt-40">
                                <div class="wow animate__animated animate__fadeInUp"><a class="btn btn-default" href="jobs-grid.html">Search Packages</a><a class="btn btn-link" href="page-about.html">Learn More</a></div>
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
                            <p class="font-sm color-text-paragraph mt-10">We provide complete photographic <br class="d-none d-lg-block">solutions, tailored to meet <br class="d-none d-lg-block"> every unique need and vision.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="text-center">
                            <h1 class="color-brand-2"><span class="count">17</span><span> +</span></h1>
                            <h5>Locations</h5>
                            <p class="font-sm color-text-paragraph mt-10">Our studios across the globe <br class="d-none d-lg-block">ensure that no matter where you are, <br class="d-none d-lg-block">you receive the utmost in quality and service.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="text-center">
                            <h1 class="color-brand-2"><span class="count">86</span><span> +</span></h1>
                            <h5>Professional Photographers</h5>
                            <p class="font-sm color-text-paragraph mt-10">Our team comprises highly <br class="d-none d-lg-block">skilled photographers dedicated to  <br class="d-none d-lg-block">capturing your moments perfectly.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="text-center">
                            <h1 class="color-brand-2"><span class="count">28</span><span> +</span></h1>
                            <h5>Happy Clients</h5>
                            <p class="font-sm color-text-paragraph mt-10">We pride ourselves on <br class="d-none d-lg-block">exceeding client expectations and  <br class="d-none d-lg-block">delivering memorable experiences.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-50">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Top Photographers</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Discover your next photoshoot, event coverage, or artistic collaboration.</p>
                </div>
            </div>
            <div class="container">
                <div class="box-swiper mt-50">
                    <div class="swiper-container swiper-group-1 swiper-style-2 swiper">
                        <div class="swiper-wrapper pt-5">
                            <div class="swiper-slide">
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-1.png"></div>
                                            <div class="text-info-right">
                                                <h4>Linkedin</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>68</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">25<span> Open Jobs</span></span></div>
                                        </div></a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-2.png"></div>
                                            <div class="text-info-right">
                                                <h4>Adobe</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>42</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">17<span> Open Jobs</span></span></div>
                                        </div></a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-3.png"></div>
                                            <div class="text-info-right">
                                                <h4>Dailymotion</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>46</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">65<span> Open Jobs</span></span></div>
                                        </div></a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-4.png"></div>
                                            <div class="text-info-right">
                                                <h4>NewSum</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>68</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">25<span> Open Jobs</span></span></div>
                                        </div></a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-5.png"></div>
                                            <div class="text-info-right">
                                                <h4>PowerHome</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>87</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">34<span> Open Jobs</span></span></div>
                                        </div></a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-6.png"></div>
                                            <div class="text-info-right">
                                                <h4>Whop.com</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>34</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">56<span> Open Jobs</span></span></div>
                                        </div></a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-7.png"></div>
                                            <div class="text-info-right">
                                                <h4>Greewood</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>124</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">78<span> Open Jobs</span></span></div>
                                        </div></a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-8.png"></div>
                                            <div class="text-info-right">
                                                <h4>Kentucky</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>54</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">98<span> Open Jobs</span></span></div>
                                        </div></a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-9.png"></div>
                                            <div class="text-info-right">
                                                <h4>Qeuity</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>76</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">90<span> Open Jobs</span></span></div>
                                        </div></a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-10.png"></div>
                                            <div class="text-info-right">
                                                <h4>Honda</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>89</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">34<span> Open Jobs</span></span></div>
                                        </div></a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-5.png"></div>
                                            <div class="text-info-right">
                                                <h4>Toyota</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>34</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">26<span> Open Jobs</span></span></div>
                                        </div></a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-3.png"></div>
                                            <div class="text-info-right">
                                                <h4>Lexuxs</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>27</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">54<span> Open Jobs</span></span></div>
                                        </div></a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-6.png"></div>
                                            <div class="text-info-right">
                                                <h4>Ondo</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>54</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">58<span> Open Jobs</span></span></div>
                                        </div></a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-2.png"></div>
                                            <div class="text-info-right">
                                                <h4>Square</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>16</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">37<span> Open Jobs</span></span></div>
                                        </div></a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-8.png"></div>
                                            <div class="text-info-right">
                                                <h4>Vista</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>97</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">43<span> Open Jobs</span></span></div>
                                        </div></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-button-next-1"></div>
                    <div class="swiper-button-prev swiper-button-prev-1"></div>
                </div>
            </div>
        </section>
        <section class="section-box mt-50">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Photography by Location</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Find your favorite photographers and experience the benefits of local expertise.</p>
                </div>
            </div>
            <div class="container">
                <div class="row mt-50">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                        <div class="card-image-top hover-up"><a href="jobs-grid.html">
                                <div class="image" style="background-image: url(assets/imgs/page/homepage1/location1.png);"><span class="lbl-hot">Hot</span></div></a>
                            <div class="informations"><a href="jobs-grid.html">
                                    <h5>Paris, France</h5></a>
                                <div class="row">
                                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">5 Vacancy</span></div>
                                    <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">120 companies</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-7 col-sm-12 col-12">
                        <div class="card-image-top hover-up"><a href="jobs-grid.html">
                                <div class="image" style="background-image: url(assets/imgs/page/homepage1/location2.png);"><span class="lbl-hot">Trending</span></div></a>
                            <div class="informations"><a href="jobs-grid.html">
                                    <h5>London, England</h5></a>
                                <div class="row">
                                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">7 Vacancy</span></div>
                                    <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">68 companies</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12 col-12">
                        <div class="card-image-top hover-up"><a href="jobs-grid.html">
                                <div class="image" style="background-image: url(assets/imgs/page/homepage1/location3.png);"><span class="lbl-hot">Hot</span></div></a>
                            <div class="informations"><a href="jobs-grid.html">
                                    <h5>New York, USA</h5></a>
                                <div class="row">
                                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">9 Vacancy</span></div>
                                    <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">80 companies</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                        <div class="card-image-top hover-up"><a href="jobs-grid.html">
                                <div class="image" style="background-image: url(assets/imgs/page/homepage1/location4.png);"></div></a>
                            <div class="informations"><a href="jobs-grid.html">
                                    <h5>Amsterdam, Holland</h5></a>
                                <div class="row">
                                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">16 Vacancy</span></div>
                                    <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">86 companies</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12 col-12">
                        <div class="card-image-top hover-up"><a href="jobs-grid.html">
                                <div class="image" style="background-image: url(assets/imgs/page/homepage1/location5.png);"></div></a>
                            <div class="informations"><a href="jobs-grid.html">
                                    <h5>Copenhagen, Denmark</h5></a>
                                <div class="row">
                                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">39 Vacancy</span></div>
                                    <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">186 companies</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                        <div class="card-image-top hover-up"><a href="jobs-grid.html">
                                <div class="image" style="background-image: url(assets/imgs/page/homepage1/location6.png);"></div></a>
                            <div class="informations"><a href="jobs-grid.html">
                                    <h5>Berlin, Germany</h5></a>
                                <div class="row">
                                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">15 Vacancy</span></div>
                                    <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">632 companies</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-50 mb-50">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">News and Blog</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Get the latest news, updates and tips</p>
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
                                                <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news1.png"></figure></a></div>
                                        <div class="card-block-info">
                                            <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">News</a></div>
                                            <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great Impression</a></h5>
                                            <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-6">
                                                        <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user1.png" alt="jobBox">
                                                            <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Sarah Harding</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                        <div class="text-center card-grid-3-image"><a href="#">
                                                <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news2.png"></figure></a></div>
                                        <div class="card-block-info">
                                            <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">Events</a></div>
                                            <h5><a href="blog-details.html">39 Strengths and Weaknesses To Discuss in a Job Interview</a></h5>
                                            <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-6">
                                                        <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user2.png" alt="jobBox">
                                                            <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Steven Jobs</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">6 mins to read</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                        <div class="text-center card-grid-3-image"><a href="#">
                                                <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news3.png"></figure></a></div>
                                        <div class="card-block-info">
                                            <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">News</a></div>
                                            <h5><a href="blog-details.html">Interview Question: Why Dont You Have a Degree?</a></h5>
                                            <p class="mt-10 color-text-paragraph font-sm">Learn how to respond if an interviewer asks you why you dont have a degree, and read example answers that can help you craft</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-6">
                                                        <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user3.png" alt="jobBox">
                                                            <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Wiliam Kend</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">9 mins to read</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div class="text-center"><a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="blog-grid.html">Load More Posts</a></div>
                </div>
            </div>
        </section>
        <section class="section-box mt-50 mb-20">
            <div class="container">
                <div class="box-newsletter">
                    <div class="row">
                        <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="assets/imgs/template/newsletter-left.png" alt="joxBox"></div>
                        <div class="col-lg-12 col-xl-6 col-12">
                            <h2 class="text-md-newsletter text-center">New Things Will Always<br> Update Regularly</h2>
                            <div class="box-form-newsletter mt-40">
                                <form class="form-newsletter">
                                    <input class="input-newsletter" type="text" value="" placeholder="Enter your email here">
                                    <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="assets/imgs/template/newsletter-right.png" alt="joxBox"></div>
                    </div>
                </div>
            </div>
        </section>
        <script src="assets/js/plugins/counterup.js"></script>
    </main>
@endsection
