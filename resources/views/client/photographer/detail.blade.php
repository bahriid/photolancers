@extends('layouts._client')

@section('content')
    <main class="main">
        <section class="section-box-2">
            <div class="container">
                <div class="banner-hero banner-image-single"><img src="{{asset('assets/imgs/page/candidates/img.png')}}"
                                                                  alt="jobbox"></div>
                <div class="box-company-profile">
                    <div class="image-compay"><img src="{{$data['photographer']->photos}}"
                                                   style="height:85px;width:85px;" alt="jobbox"></div>
                    <div class="row mt-10">
                        <div class="col-lg-8 col-md-12">
                            <h5 class="f-18">{{$data['photographer']->user->name}}</h5>
                            <p class="mt-0 font-md color-text-paragraph-2 mb-15"><span class="card-location"
                                                                                       style="font-size:13px !important;">{{$data['photographer']->province->name}}, {{$data['photographer']->city->name}}</span>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-12 text-lg-end"><a class="btn btn-apply btn-apply-big"
                                                                       href="https://api.whatsapp.com/send?phone={{$data['photographer']->phone}}&text=Hello%20*{{$data['photographer']->user->name}}*%2C%20I%20am%20interested%20on%20your%20profile%20in%20photolancers.%20Can%20we%20talk%3F">Book Now</a></div>
                    </div>
                </div>
                <div class="border-bottom pt-10 pb-10"></div>
            </div>
        </section>
        <section class="section-box mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="content-single">
                            {{$data['photographer']->headline}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                        <div class="sidebar-border">
                            <h5 class="f-18 text-center">Overview</h5>
                            <div class="sidebar-list-job">
                                <ul class="ul-disc">
                                    <li>{{$data['photographer']->address}}, {{$data['photographer']->province->name}}
                                        , {{$data['photographer']->city->name}}</li>
                                    <li>Phone: {{$data['photographer']->phone}}</li>
                                    <li>Email: {{$data['photographer']->user->email}}</li>
                                </ul>
                            </div>
                            <div class="sidebar-list-job">
                                <div class="text-center">
                                    @if($data['photographer']->facebook)
                                        <a class="btn btn-tags-sm mb-10 mr-5"
                                           href="{{$data['photographer']->facebook}}">Facebook</a>
                                    @endif
                                    @if($data['photographer']->instagram)
                                        <a class="btn btn-tags-sm mb-10 mr-5"
                                           href="{{$data['photographer']->instagram}}">Instagram</a>
                                    @endif
                                    @if($data['photographer']->twitter)
                                        <a class="btn btn-tags-sm mb-10 mr-5" href="{{$data['photographer']->twitter}}">Twitter</a>
                                    @endif
                                    @if($data['photographer']->portofolio)
                                        <a class="btn btn-tags-sm mb-10 mr-5"
                                           href="{{$data['photographer']->portofolio}}">Portofolio</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-50 mb-50">
            <div class="container">
                <div class="text-left">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Photographer Packages</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Get the latest
                        news, updates and tips</p>
                </div>
                <div class="mt-50">
                    <div class="box-swiper style-nav-top">
                        <div class="swiper-container swiper-group-4 swiper">
                            <div class="swiper-wrapper pb-10 pt-5">
                                @foreach($data['packages'] as $package)
                                    <div class="swiper-slide">
                                        <div class="card-grid-2 grid-bd-16 hover-up">
                                            <div class="card-grid-2-image">
                                                @if($package['discount'])
                                                    <span
                                                        class="lbl-hot bg-danger"><span>{{$package['discount']}} %</span></span>
                                                @endif
                                                <div class="image-box">
                                                    <figure><img src="{{$package->images->first()->url}}" alt="jobBox">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="card-block-info">
                                                <h5>
                                                    <a href="{{route('package.detail',['id'=>$package->id])}}">{{$package->name}}</a>
                                                </h5>
                                                <div class="mt-5">
                                                    <span
                                                        class="card-location mr-15">{{$package->province->name}}, {{$package->city->name}}</span>
                                                </div>
                                                <div class="card-2-bottom mt-20">
                                                    <div class="row">
                                                        <div class="col-xl-7 col-md-12 mb-2">
                                                            <a class="btn btn-tags-sm mr-5"
                                                               href="#">{{$package->category->name}}</a>
                                                        </div>
                                                        <div class="col-xl-5 col-md-12 text-lg-end">
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
                        </div>
                        <div class="swiper-button-next swiper-button-next-4"></div>
                        <div class="swiper-button-prev swiper-button-prev-4"></div>
                    </div>
                    <div class="text-center"><a class="btn btn-grey" href="#">See All Other Packages</a></div>
                </div>
            </div>
        </section>

        <section class="section-box mt-50 mb-20">
            <div class="container">
                <div class="box-newsletter">
                    <div class="row">
                        <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img
                                src="{{asset('assets/imgs/template/newsletter-left.png')}}" alt="joxBox"></div>
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
                                src="{{asset('assets/imgs/template/newsletter-right.png')}}" alt="joxBox"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
