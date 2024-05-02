@extends('layouts._admin',[
    'title' => ['Photographer', 'Detail Photographer']
])
@section('content')
    @include('layouts.notifications')
    <!--begin::Navbar-->
    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            <!--begin::Details-->
            <div class="d-flex flex-wrap flex-sm-nowrap">
                <!--begin: Pic-->
                <div class="me-7 mb-4">
                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                        <img src="{{$photographer->photo}}" alt="image" />
                    </div>
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="flex-grow-1">
                    <!--begin::Title-->
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <!--begin::User-->
                        <div class="d-flex flex-column">
                            <!--begin::Name-->
                            <div class="d-flex align-items-center mb-2">
                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{$photographer->user->name}}</a>
                                @if($photographer->user->status == 'active')
                                <a href="#">
                                    <i class="ki-duotone ki-verify fs-1 text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                                @endif
                            </div>
                            <!--end::Name-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                    <i class="ki-duotone ki-profile-circle fs-4 me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>{{ucfirst($photographer->user->role)}}</a>
                                <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                    <i class="ki-duotone ki-geolocation fs-4 me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>SF, Bay Area</a>
                                <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
                                    <i class="ki-duotone ki-sms fs-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>{{$photographer->user->email}}</a>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                        <!--begin::Actions-->
                        <div class="d-flex my-4">
                            <a href="#" class="btn btn-sm btn-danger me-2">Reject</a>
                            <a href="#" class="btn btn-sm btn-primary me-3">Approve</a>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Title-->
                    <!--begin::Stats-->
                    <div class="d-flex flex-wrap flex-stack">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-grow-1 pe-8">
                            <!--begin::Stats-->
                            <div class="d-flex flex-wrap">
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="4500">0</div>
                                    </div>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-500">Packages</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="80">0</div>
                                    </div>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-500">Category</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Details-->
            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold justify-content-center">
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="{{route('admin.photographer.detail', ['id' => $photographer->id])}}">Overview</a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/security.html">My Packages</a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/activity.html">Portofolio</a>
                </li>

            </ul>
        </div>
    </div>
    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6 mb-10">
        <!--begin::Icon-->
        <i class="ki-duotone ki-information fs-2tx text-warning me-4">
            <span class="path1"></span>
            <span class="path2"></span>
            <span class="path3"></span>
        </i>
        <!--end::Icon-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-grow-1">
            <!--begin::Content-->
            <div class="fw-semibold">
                <h4 class="text-gray-900 fw-bold">About me</h4>
                <div class="fs-6 text-gray-700">
                    {{$photographer->headline}}
                </div>
            </div>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Notice-->
    <!--end::Navbar-->
    <!--begin::details View-->
    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Profile Details</h3>
            </div>
            <!--end::Card title-->
            <!--begin::Action-->
            @if(auth()->user()->role != 'admin')
                <a href="account/settings.html" class="btn btn-sm btn-primary align-self-center">Edit Profile</a>
            @endif
            <!--end::Action-->
        </div>
        <!--begin::Card header-->
        <!--begin::Card body-->
        <div class="card-body p-9">
            <h4 class="mb-9">Personal Information</h4>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Identity Number</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{$photographer->identity_number}}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">NPWP</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{$photographer->npwp}}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Date of Birth</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{$photographer->date_of_birth}}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Phone Number</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{$photographer->phone}}</span>
                </div>
            </div>
            <!--end::Row-->

            <h4 class="mb-9">Address Information</h4>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Address</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{$photographer->address}}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Province</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{$photographer->province->name}}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">City</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{$photographer->city->name}}</span>
                </div>
            </div>
            <h4 class="mb-9">Bank Information</h4>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Bank Name</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{$photographer->bank_name}}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Bank Account Name</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{$photographer->bank_account_name}}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Bank Account Number</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{$photographer->bank_account_number}}</span>
                </div>
            </div>
            <h4 class="mb-9">Social Media Information</h4>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Instagram</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{$photographer->instagram}}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Facebook</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{$photographer->facebook}}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Twitter</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{$photographer->twitter}}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Other</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{$photographer->portofolio}}</span>
                </div>
            </div>
            <!--end::Input group-->
            <!--begin::Notice-->

        </div>
        <!--end::Card body-->
    </div>
@endsection
