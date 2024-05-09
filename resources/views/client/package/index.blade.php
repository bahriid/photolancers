@extends('layouts._client')

@section('content')
    <main class="main">
        <section class="section-box-2">
            <div class="container">
                <div class="banner-hero banner-single banner-single-bg">
                    <div class="block-banner text-center">
                        <h3 class="wow animate__animated animate__fadeInUp"><span class="color-brand-2">22 Jobs</span>
                            Available Now</h3>
                        <div class="font-sm color-text-paragraph-2 mt-10 wow animate__animated animate__fadeInUp"
                             data-wow-delay=".1s">Explore and secure the best photography deals, updated daily for fresh inspiration
                        </div>
                        <div class="form-find text-start mt-40 wow animate__animated animate__fadeInUp"
                             data-wow-delay=".2s">
                            <form action="{{route('package.index')}}">
                                <div class="box-industry">
                                    <select class="form-input mr-10 select-active" name="category">
                                        <option
                                            value="All"
                                            @if(request()->get('category') == 'All')
                                                selected="selected"
                                            @endif
                                        >All Category</option>
                                        @foreach($data['categories'] as $category)
                                            <option
                                                value="{{$category->id}}"
                                                @if(request()->get('category') == $category->id)
                                                    selected="selected"
                                                    @endif
                                            >{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <select class="form-input mr-10 select-active" name="province">
                                    <option
                                        value="All"
                                        @if(request()->get('province') == 'All')
                                            selected="selected"
                                        @endif
                                    >All Province</option>
                                    @foreach($data['provinces'] as $province)
                                        <option value="{{$province->id}}"
                                                @if(request()->get('province') == $province->id)
                                                    selected="selected"
                                                    @endif
                                        >{{$province->name}}</option>
                                    @endforeach
                                </select>
                                <input class="form-input input-keysearch mr-10" type="text" name="budget" value="{{request()->get('budget')}}"
                                       placeholder="Your Budget... ">
                                <button class="btn btn-default btn-find font-sm" type="submit"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-right">
                        <div class="content-page mt-70">
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
                                                    <figure><img src="{{$package->images->first()->url}}" alt="jobBox">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="card-block-info">
                                                <h5><a href="#">{{$package->name}}</a></h5>
                                                <div class="mt-5">
                                                    <span
                                                        class="card-location mr-15">{{$package->province->name}}, {{$package->city->name}}</span>
                                                </div>
                                                <div class="card-2-bottom mt-20">
                                                    <div class="row">
                                                        <div class="col-xl-7 col-md-7 mb-2">
                                                            <a class="btn btn-tags-sm mr-5"
                                                               href="/frontend/jobs-grid">{{$package->category->name}}</a>
                                                        </div>
                                                        <div class="col-xl-5 col-md-5 text-lg-end">
                                                    <span class="card-text-price">Rp. {{number_format($package->price - ($package->price * ($package->discount/100)))}}
                                                    <span class="card-text-price"
                                                          style="color: red;font-size: 10px;text-decoration: line-through;">Rp. {{number_format($package->price)}}</span>
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
                        <div class="paginations">
                            {{ $data['packages']->links() }}

{{--                            <ul class="pager">--}}
{{--                                <li><a class="pager-prev" href="#"></a></li>--}}
{{--                                <li><a class="pager-number" href="#">1</a></li>--}}
{{--                                <li><a class="pager-number" href="#">2</a></li>--}}
{{--                                <li><a class="pager-number" href="#">3</a></li>--}}
{{--                                <li><a class="pager-number" href="#">4</a></li>--}}
{{--                                <li><a class="pager-number" href="#">5</a></li>--}}
{{--                                <li><a class="pager-number active" href="#">6</a></li>--}}
{{--                                <li><a class="pager-number" href="#">7</a></li>--}}
{{--                                <li><a class="pager-next" href="#"></a></li>--}}
{{--                            </ul>--}}
                        </div>
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
    </main>
@endsection
