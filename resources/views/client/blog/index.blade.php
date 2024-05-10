@extends('layouts._client')

@section('content')
    <main class="main">
        <section class="section-box">
            <div class="breacrumb-cover">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="mb-10">Blog</h2>
                            <p class="font-lg color-text-paragraph-2">Get the latest news, updates and tips about
                                photography here</p>
                        </div>
                        <div class="col-lg-6 text-end">
                            <ul class="breadcrumbs mt-40">
                                <li><a class="home-icon" href="{{route('home')}}">Home</a></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-50">
            <div class="container">
                <div class="row">
                    @foreach($data['featured'] as $featured)
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-5 hover-up"
                                 style="background-image: url('{{$featured->banner}}')"><a
                                    href="{{route('blog.detail', ['slug' => $featured->slug])}}">
                                    <div class="box-cover-img">
                                        <div class="content-bottom">
                                            <h3 class="color-white mb-20">{{$featured->title}}</h3>
                                            <div class="author d-flex align-items-center mr-20"><img class="mr-10"
                                                                                                     alt="jobBox"
                                                                                                     src="https://ui-avatars.com/api/?{{$featured->user->name}}"><span
                                                    class="color-white font-sm mr-25">{{$featured->user->name}}</span><span
                                                    class="color-white font-sm">{{\Carbon\Carbon::parse($featured->created_at)->format('d m Y')}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="section-box mt-50">
            <div class="post-loop-grid">
                <div class="container">
                    <div class="text-left">
                        <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Latest Posts</h2>
                        <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Don&apos;t
                            miss the trending news</p>
                    </div>
                    <div class="row mt-30">
                        <div class="col-lg-8">
                            <div class="row">
                                @foreach($data['latest'] as $latest)
                                    <div class="col-lg-6 mb-30">
                                        <div class="card-grid-3 hover-up">
                                            <div class="text-center card-grid-3-image"><a
                                                    href="{{route('blog.detail', ['slug' => $featured->slug])}}">
                                                    <figure><img alt="jobBox" src="{{$featured->banner}}">
                                                    </figure>
                                                </a></div>
                                            <div class="card-block-info">
                                                <div class="tags mb-15"><a class="btn btn-tag"
                                                                           href="#">News</a></div>
                                                <h5><a href="{{route('blog.detail', ['slug' => $featured->slug])}}">
                                                        {{$featured->title}}
                                                    </a></h5>
                                                <p class="mt-10 color-text-paragraph font-sm">{{\Illuminate\Support\Str::limit($featured->description, 100, ' ...')}}
                                                    .</p>
                                                <div class="card-2-bottom mt-20">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-6">
                                                            <div class="d-flex">
                                                                <img class="img-rounded"
                                                                     src="https://ui-avatars.com/api/?{{$featured->user->name}}">
                                                                <div class="info-right-img">
                                                                    <span class="font-sm font-bold color-brand-1 op-70">{{$featured->user->name}}</span>
                                                                    <br>
                                                                    <span class="font-xs color-text-paragraph-2">{{\Carbon\Carbon::parse($featured->created_at)->format('d m Y')}}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 text-end col-6 pt-15">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="paginations">
                                {{$data['latest']->links()}}
{{--                                <ul class="pager">--}}
{{--                                    <li><a class="pager-prev" href="#"></a></li>--}}
{{--                                    <li><a class="pager-number" href="#">1</a></li>--}}
{{--                                    <li><a class="pager-number" href="#">2</a></li>--}}
{{--                                    <li><a class="pager-number" href="#">3</a></li>--}}
{{--                                    <li><a class="pager-number" href="#">4</a></li>--}}
{{--                                    <li><a class="pager-number" href="#">5</a></li>--}}
{{--                                    <li><a class="pager-number active" href="#">6</a></li>--}}
{{--                                    <li><a class="pager-number" href="#">7</a></li>--}}
{{--                                    <li><a class="pager-next" href="#"></a></li>--}}
{{--                                </ul>--}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                            <div class="widget_search mb-40">
                                <div class="search-form">
                                    <form action="{{route('blog.index')}}">
                                        <input type="text" placeholder="Search…" name="search" value="{{request()->get('search')}}">
                                        <button type="submit"><i class="fi-rr-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-shadow sidebar-news-small">
                                <h5 class="sidebar-title">Trending Now</h5>
                                <div class="post-list-small">
                                    @foreach($data['trending'] as $trending)
                                        <div class="post-list-small-item d-flex align-items-center">
                                        <figure class="thumb mr-15"><img src="{{$trending->banner}}"
                                                                         alt="jobBox"></figure>
                                        <div class="content">
                                            <h5>{{$trending->title}}</h5>
                                            <div class="post-meta text-muted d-flex align-items-center mb-15">
                                                <div class="author d-flex align-items-center mr-20"><img alt="jobBox"
                                                                                                         src="https://ui-avatars.com/api/?{{$featured->user->name}}"><span>{{$trending->user->name}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
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
