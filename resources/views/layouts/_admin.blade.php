<!DOCTYPE html>
<html lang="en">
<head>
    <title>Photolancers - A Place for Photographic Freelancers</title>
    <meta charset="utf-8"/>
    <meta name="description" content="Photolancers - A Place for Photographic Freelancers"/>
    <meta name="keywords" content="Photolancers, Photographic, Freelancers"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Photolancers - A Place for Photographic Freelancers"/>
    <meta property="og:url" content="{{route('home')}}"/>
    <meta property="og:site_name" content="Photolancers by BahriID"/>
    <link rel="canonical" href="{{route('home')}}"/>
    <link rel="shortcut icon" href="{{asset('admin/assets/media/logos/favicon.ico')}}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <link href="{{asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('admin/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        // if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
    @yield('style')
</head>
<body id="kt_body" class="header-fixed">
<script>
    var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
</script>
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <div id="kt_aside" class="aside py-9" data-kt-drawer="true" data-kt-drawer-name="aside"
             data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
             data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
             data-kt-drawer-toggle="#kt_aside_toggle">
            <!--begin::Brand-->
            <div class="aside-logo flex-column-auto px-9 mb-9" id="kt_aside_logo">
                <!--begin::Logo-->
                <a href="{{route('admin.dashboard')}}">
                    <img alt="Logo" src="{{asset('admin/assets/media/logos/demo3.svg')}}"
                         class="h-20px logo theme-light-show"/>
                    <img alt="Logo" src="{{asset('admin/assets/media/logos/demo3-dark.svg')}}"
                         class="h-20px logo theme-dark-show"/>
                </a>
                <!--end::Logo-->
            </div>
            <!--end::Brand-->
            <!--begin::Aside menu-->
            <div class="aside-menu flex-column-fluid ps-5 pe-3 mb-9" id="kt_aside_menu">
                <!--begin::Aside Menu-->
                <div class="w-100 hover-scroll-overlay-y d-flex pe-2" id="kt_aside_menu_wrapper" data-kt-scroll="true"
                     data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
                     data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                     data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper"
                     data-kt-scroll-offset="100">
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-rounded menu-sub-indention menu-active-bg fw-semibold my-auto"
                         id="#kt_aside_menu" data-kt-menu="true">

                        <a href="{{ route('admin.dashboard') }}"
                           class="menu-item here show menu-accordion">
                            <span class="menu-link">
                                <span class="menu-title ms-5">Dashboard</span>
                            </span>
                        </a>

                        <a href="{{ route('admin.category') }}"
                           class="menu-item here show menu-accordion">
                            <span class="menu-link">
                                <span class="menu-title ms-5">Kategori Paket</span>
                            </span>
                        </a>

                        <a href="{{ route('admin.photographer') }}"
                           class="menu-item here show menu-accordion">
                            <span class="menu-link">
                                <span class="menu-title ms-5">Photographers</span>
                            </span>
                        </a>
                        <a href="{{ route('admin.photographer') }}"
                           class="menu-item here show menu-accordion">
                            <span class="menu-link">
                                <span class="menu-title ms-5">Packages</span>
                            </span>
                        </a>
                        <a href="{{ route('admin.photographer') }}"
                           class="menu-item here show menu-accordion">
                            <span class="menu-link">
                                <span class="menu-title ms-5">Blog</span>
                            </span>
                        </a>
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside menu-->
            <!--begin::Footer-->
            <div class="aside-footer flex-column-auto px-9" id="kt_aside_footer">
                <!--begin::User panel-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-circle symbol-40px">
                            <img src="{{asset('admin/assets/media/avatars/300-1.jpg')}}" alt="photo"/>
                        </div>
                        <!--end::Avatar-->
                        <!--begin::User info-->
                        <div class="ms-2">
                            <!--begin::Name-->
                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold lh-1">{{auth()->user()->name}}</a>
                            <!--end::Name-->
                            <!--begin::Major-->
                            <span class="text-muted fw-semibold d-block fs-7 lh-1">{{ucfirst(auth()->user()->role)}}</span>
                            <!--end::Major-->
                        </div>
                        <!--end::User info-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::User menu-->
                    <div class="ms-1">
                        <div class="btn btn-sm btn-icon btn-active-color-primary position-relative me-n2"
                             data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true"
                             data-kt-menu-placement="top-end">
                            <i class="ki-duotone ki-setting-2 fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                        <!--begin::User account menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="{{asset('admin/assets/media/avatars/300-1.jpg')}}"/>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Username-->
                                    <div class="d-flex flex-column">
                                        <div class="fw-bold d-flex align-items-center fs-5">{{auth()->user()->name}}
                                            <span
                                                class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                        </div>
                                        <a href="#"
                                           class="fw-semibold text-muted text-hover-primary fs-7">{{auth()->user()->email}}</a>
                                    </div>
                                    <!--end::Username-->
                                </div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="account/overview.html" class="menu-link px-5">My Profile</a>
                            </div>

                            <div class="menu-item px-5">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                   class="menu-link px-5">
                                    Sign Out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::User account menu-->
                    </div>
                    <!--end::User menu-->
                </div>
                <!--end::User panel-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header mt-0 mt-lg-0 pt-lg-0" data-kt-sticky="true" data-kt-sticky-name="header"
                 data-kt-sticky-offset="{lg: '300px'}">
                <!--begin::Container-->
                <div class="container d-flex flex-stack flex-wrap gap-4" id="kt_header_container">
                    <!--begin::Page title-->
                    <div
                        class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-10 pb-lg-0"
                        data-kt-swapper="true" data-kt-swapper-mode="prepend"
                        data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                        <!--begin::Heading-->
                        <h1 class="d-flex flex-column text-gray-900 fw-bold my-0 fs-1">{{end($title)}}</h1>
                        <!--end::Heading-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{route('admin.dashboard')}}" class="text-muted text-hover-primary">Dashboard</a>
                            </li>
                            @foreach($title as $item)
                                @if ($loop->last)
                                    <li class="breadcrumb-item text-gray-900">{{$item}}</li>
                                @else
                                    <li class="breadcrumb-item text-muted">{{$item}}</li>
                                @endif
                            @endforeach
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title=-->
                    <!--begin::Wrapper-->
                    <div class="d-flex d-lg-none align-items-center ms-n3 me-2">
                        <!--begin::Aside mobile toggle-->
                        <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                            <i class="ki-duotone ki-abstract-14 fs-1 mt-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                        <!--end::Aside mobile toggle-->
                        <!--begin::Logo-->
                        <a href="{{route('admin.dashboard')}}" class="d-flex align-items-center">
                            <img alt="Logo" src="{{asset('admin/assets/media/logos/demo3.svg')}}" class="theme-light-show h-20px"/>
                            <img alt="Logo" src="{{asset('admin/assets/media/logos/demo3-dark.svg')}}" class="theme-dark-show h-20px"/>
                        </a>
                        <!--end::Logo-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Topbar-->
                    <div class="d-flex align-items-center flex-shrink-0 mb-0 mb-lg-0">
                        <div class="d-flex align-items-center ms-3 ms-lg-4">
                            <!--begin::Menu toggle-->
                            <a href="#"
                               class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px"
                               data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                               data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-night-day theme-light-show fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                    <span class="path7"></span>
                                    <span class="path8"></span>
                                    <span class="path9"></span>
                                    <span class="path10"></span>
                                </i>
                                <i class="ki-duotone ki-moon theme-dark-show fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                            <!--begin::Menu toggle-->
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                data-kt-menu="true" data-kt-element="theme-mode-menu">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-night-day fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
														<span class="path7"></span>
														<span class="path8"></span>
														<span class="path9"></span>
														<span class="path10"></span>
													</i>
												</span>
                                        <span class="menu-title">Light</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-moon fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
                                        <span class="menu-title">Dark</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-screen fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</span>
                                        <span class="menu-title">System</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Container-->
                <div class="container-xxl" id="kt_content_container">
                   @yield('content')
                </div>
                <!--end::Container-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container d-flex flex-column flex-md-row flex-stack">
                    <div class="text-gray-900 order-2 order-md-1">
                        <span class="text-gray-500 fw-semibold me-1">Created by</span>
                        <a href="{{route('home')}}" target="_blank"
                           class="text-muted text-hover-primary fw-semibold me-2 fs-6">Photolancers</a>
                    </div>
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<script>var hostUrl = "assets/";</script>
<script src="{{asset('admin/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('admin/assets/js/scripts.bundle.js')}}"></script>
@yield('script')
</body>
</html>
