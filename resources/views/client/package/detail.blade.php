@extends('layouts._client')

@section('content')
    <main class="main">
        <section class="section-box-2">
            <div class="container">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        @foreach($data['package']->images as $image)
                            @if($loop->first)

                                <div class="carousel-item active">
                                    <div class="banner-hero banner-image-single"><img
                                            src="{{$image->url}}" style="height:500px;" alt="jobBox"></div>
                                </div>
                            @else

                                <div class="carousel-item">
                                    <div class="banner-hero banner-image-single"><img
                                            src="{{$image->url}}" style="height:500px;" alt="jobBox"></div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                {{--                <div class="banner-hero banner-image-single"><img src="{{asset('assets/imgs/page/job-single/thumb.png')}}" alt="jobBox"></div>--}}
                <div class="row mt-10">
                    <div class="col-lg-8 col-md-12">
                        <h3>{{$data['package']->name}}</h3>
                    </div>
                    <div class="col-lg-4 col-md-12 text-lg-end">
                        <a href="https://api.whatsapp.com/send?phone={{$data['package']->photographer->phone}}&text=Hello%20*{{$data['package']->photographer->user->name}}*%2C%20I%20want%20more%20info%20about%20the%20your%20photography%20package%20*{{$data['package']->name}}*"
                           class="btn btn-apply-icon btn-apply btn-apply-big hover-up">Book now
                        </a>
                    </div>
                </div>
                <div class="border-bottom pt-10 pb-10"></div>
            </div>
        </section>
        <section class="section-box mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="job-overview">
                            <h5 class="border-bottom pb-15 mb-30">Package Detail</h5>
                            <div class="row">
                                <div class="col-md-6 d-flex">
                                    <div class="sidebar-icon-item"><img
                                            src="{{asset('assets/imgs/page/job-single/industry.svg')}}" alt="jobBox">
                                    </div>
                                    <div class="sidebar-text-info ml-10"><span
                                            class="text-description industry-icon mb-10">Duration</span><strong
                                            class="small-heading"> {{round($data['package']->duration / 60)}}
                                            Hours</strong></div>
                                </div>
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img
                                            src="{{asset('assets/imgs/page/job-single/job-level.svg')}}" alt="jobBox">
                                    </div>
                                    <div class="sidebar-text-info ml-10"><span
                                            class="text-description joblevel-icon mb-10">Price</span><strong
                                            class="small-heading">Rp {{number_format($data['package']->price)}} /
                                            Session</strong></div>
                                </div>
                            </div>
                            <div class="row mt-25">
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img
                                            src="{{asset('assets/imgs/page/job-single/salary.svg')}}" alt="jobBox">
                                    </div>
                                    <div class="sidebar-text-info ml-10"><span
                                            class="text-description salary-icon mb-10">Camera</span><strong
                                            class="small-heading">{{$data['package']->camera}}</strong></div>
                                </div>
                                <div class="col-md-6 d-flex">
                                    <div class="sidebar-icon-item"><img
                                            src="{{asset('assets/imgs/page/job-single/experience.svg')}}" alt="jobBox">
                                    </div>
                                    <div class="sidebar-text-info ml-10"><span
                                            class="text-description experience-icon mb-10">Lenses</span><strong
                                            class="small-heading">{{$data['package']->lenses}}</strong></div>
                                </div>
                            </div>
                            <div class="row mt-25">
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img
                                            src="{{asset('assets/imgs/page/job-single/job-type.svg')}}" alt="jobBox">
                                    </div>
                                    <div class="sidebar-text-info ml-10"><span
                                            class="text-description jobtype-icon mb-10">Media</span><strong
                                            class="small-heading">{{$data['package']->media}}</strong></div>
                                </div>
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img
                                            src="{{asset('assets/imgs/page/job-single/deadline.svg')}}" alt="jobBox">
                                    </div>
                                    <div class="sidebar-text-info ml-10"><span
                                            class="text-description mb-10">Edited Photo</span>
                                        <strong class="small-heading">{{$data['package']->edited_photo}}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-25">
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img
                                            src="{{asset('assets/imgs/page/job-single/updated.svg')}}" alt="jobBox">
                                    </div>
                                    <div class="sidebar-text-info ml-10"><span
                                            class="text-description jobtype-icon mb-10">Raw Photo</span><strong
                                            class="small-heading">{{$data['package']->raw_photo ? 'Yes' : 'No'}}</strong>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img
                                            src="{{asset('assets/imgs/page/job-single/location.svg')}}" alt="jobBox">
                                    </div>
                                    <div class="sidebar-text-info ml-10"><span
                                            class="text-description mb-10">Location</span><strong
                                            class="small-heading">{{$data['package']->city->name}}
                                            , {{$data['package']->province->name}}</strong></div>
                                </div>
                            </div>
                        </div>
                        <div class="content-single">
                            {!!$data['package']->description!!}
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                        <div class="sidebar-border">
                            <div class="sidebar-heading">
                                <div class="avatar-sidebar">
                                    <figure><img alt="jobBox" src="{{$data['package']->photographer->photos}}">
                                    </figure>
                                    <div class="sidebar-info"><span
                                            class="sidebar-company">{{\Illuminate\Support\Str::limit($data['package']->photographer->user->name, 13)}}</span><span
                                            class="card-location" style="font-size: 10px;">{{$data['package']->photographer->province->name}}, {{$data['package']->photographer->city->name}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-list-job">
                                <div class="box-map">
                                    {{\Illuminate\Support\Str::limit($data['package']->photographer->headline, 100, ' ...')}}
                                </div>
                                <ul class="ul-disc">
                                    <li>
                                        {{$data['package']->photographer->address}}
                                    </li>
                                    <li>Phone: {{$data['package']->photographer->phone}}</li>
                                    <li>Email: contact@Evara.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-box mt-70 mb-20">
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
