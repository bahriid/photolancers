@extends('layouts._client')

@section('content')
    <main class="main">

        <section class="section-box-2">
            <div class="container">
                <div class="banner-hero banner-company">
                    <div class="block-banner text-center">
                        <h3 class="wow animate__animated animate__fadeInUp">Browse Photographers</h3>
                        <div class="font-sm color-text-paragraph-2 mt-10 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Discover your next
                            photoshoot, event coverage, or artistic collaboration.</div>
                        <div class="box-list-character">
                            <ul>
                                <li><a class="{{request()->get('search') == 'A' || !request()->get('search')  ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'A'])}}">A</a></li>
                                <li><a class="{{request()->get('search') == 'B' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'B'])}}">B</a></li>
                                <li><a class="{{request()->get('search') == 'C' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'C'])}}">C</a></li>
                                <li><a class="{{request()->get('search') == 'D' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'D'])}}">D</a></li>
                                <li><a class="{{request()->get('search') == 'E' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'E'])}}">E</a></li>
                                <li><a class="{{request()->get('search') == 'F' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'F'])}}">F</a></li>
                                <li><a class="{{request()->get('search') == 'G' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'G'])}}">G</a></li>
                                <li><a class="{{request()->get('search') == 'H' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'H'])}}">H</a></li>
                                <li><a class="{{request()->get('search') == 'I' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'I'])}}">I</a></li>
                                <li><a class="{{request()->get('search') == 'J' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'J'])}}">J</a></li>
                                <li><a class="{{request()->get('search') == 'K' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'K'])}}">K</a></li>
                                <li><a class="{{request()->get('search') == 'L' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'L'])}}">L</a></li>
                                <li><a class="{{request()->get('search') == 'M' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'M'])}}">M</a></li>
                                <li><a class="{{request()->get('search') == 'N' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'N'])}}">N</a></li>
                                <li><a class="{{request()->get('search') == 'O' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'O'])}}">O</a></li>
                                <li><a class="{{request()->get('search') == 'P' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'P'])}}">P</a></li>
                                <li><a class="{{request()->get('search') == 'Q' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'Q'])}}">Q</a></li>
                                <li><a class="{{request()->get('search') == 'R' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'R'])}}">R</a></li>
                                <li><a class="{{request()->get('search') == 'S' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'S'])}}">S</a></li>
                                <li><a class="{{request()->get('search') == 'T' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'T'])}}">T</a></li>
                                <li><a class="{{request()->get('search') == 'U' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'U'])}}">U</a></li>
                                <li><a class="{{request()->get('search') == 'V' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'V'])}}">V</a></li>
                                <li><a class="{{request()->get('search') == 'W' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'W'])}}">W</a></li>
                                <li><a class="{{request()->get('search') == 'X' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'X'])}}">X</a></li>
                                <li><a class="{{request()->get('search') == 'Y' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'Y'])}}">Y</a></li>
                                <li><a class="{{request()->get('search') == 'Z' ? 'active' : ''}}" href="{{route('photographer.index', ['search'=> 'Z'])}}">Z</a></li>
                            </ul>
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
                                @foreach($data['photographers'] as $photographer)
                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                        <div class="card-grid-2 hover-up">
                                            <div class="card-grid-2-image-left">
                                                <div class="card-grid-2-image-rd">
                                                    <a href="{{route('photographer.detail', ['id'=> $photographer->id])}}">
                                                        <figure><img alt="jobBox" src="{{$photographer->photo}}"></figure>
                                                    </a>
                                                </div>
                                                <div class="card-profile pt-10">
                                                    <a href="{{route('photographer.detail', ['id'=> $photographer->id])}}">
                                                        <h5>{{$photographer->user->name}}</h5>
                                                    </a>
                                                    <span class="font-xs color-text-mutted" style="font-size: 10px !important;">{{$photographer->province->name}}, {{$photographer->city->name}}</span>

                                                </div>
                                            </div>
                                            <div class="card-block-info">
                                                <p class="font-xs color-text-paragraph-2">{{\Illuminate\Support\Str::limit($photographer->headline, 100, ' ...')}}</p>
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
                        </div>
                        <div class="paginations">
                            {{ $data['photographers']->links() }}

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
