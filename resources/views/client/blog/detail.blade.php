@extends('layouts._client')

@section('content')
    <main class="main">
        <section class="section-box">
            <div><img src="{{asset('assets/imgs/page/blog/img-single.png')}}"></div>
        </section>
        <section class="section-box">
            <div class="archive-header pt-50 text-center">
                <div class="container">
                    <div class="box-white">
                        <div class="max-width-single"><a class="btn btn-tag" href="#">{{$data['blog']->category}}</a>
                            <h2 class="mb-30 mt-20 text-center">{{$data['blog']->title}}</h2>
                            <div class="post-meta text-muted d-flex align-items-center mx-auto justify-content-center">
                                <div class="author d-flex align-items-center mr-30"><img alt="jobBox"
                                                                                         src="https://ui-avatars.com/api/?{{$data['blog']->user->name}}"><span>{{$data['blog']->user->name}}</span>
                                </div>
                                <div class="date"><span class="font-xs color-text-paragraph-2 mr-20 d-inline-block"><img
                                            class="img-middle mr-5"
                                            src="{{asset('assets/imgs/page/blog/calendar.svg')}}">{{\Carbon\Carbon::parse($data['blog']->created_at)->format('d m Y')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="post-loop-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="single-body">
                            <div class="max-width-single text-center">
                                <img alt="jobBox"
                                     src="{{$data['blog']->banner}}">
                            </div>
                            <div class="max-width-single mt-70">
                                {!!$data['blog']->description!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
