@extends('layouts._admin',[
    'title' => ['Home']
])
@section('content')
    <div class="card card-flush h-md-100">
        <!--begin::Body-->
        <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0"
             style="background-position: 100% 50%; background-image:url('{{ url('assets/media/stock/900x600/42.png') }}')">
            <!--begin::Wrapper-->
            <div class="mb-10">
                <!--begin::Title-->
                <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                    <span class="me-2">Selamat Datang di Dashboard Photofreelancers !
                    </span>
                </div>
                <!--end::Title-->
            </div>
            <!--begin::Wrapper-->
            <!--begin::Illustration-->
            <img class="mx-auto h-150px h-lg-200px theme-light-show"
                 src="{{ asset('admin/assets/media/illustrations/misc/upgrade.svg') }}" alt="">
            <img class="mx-auto h-150px h-lg-200px theme-dark-show"
                 src="{{ asset('admin/assets/media/illustrations/misc/upgrade-dark.svg') }}" alt="">
            <!--end::Illustration-->
        </div>
        <!--end::Body-->
    </div>
@endsection
