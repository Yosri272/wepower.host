@php
    $directory = app()->getLocale() == 'ar' ? 'rtl' : 'ltr';
@endphp
<!DOCTYPE html>
<html lang="en" dir="{{ $directory }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- App favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ $generaleSetting?->favicon ?? asset('assets/favicon.png') }}" />

    <!-- App title -->
    <title>{{ $generaleSetting?->title ?? config('app.name', 'Laravel') }}</title>

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Font-Awesome--Min-Css-Link -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <!-- sweetalert css-->
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">

<<<<<<< HEAD
    <!-- table sorter stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets/css/datatables.min.css') }}">

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    <!-- Bootstrap--Min-Css-Link -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">

    <!-- quill css -->
    <link rel="stylesheet" href="{{ asset('assets/css/quill.snow.css') }}">

    <!-- Custom--Css-Link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<<<<<<< HEAD
    <!-- Apexcharts Link -->
    <link rel="stylesheet" href="{{ asset('assets/css/apexcharts.css') }}">

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    <!--Responsive--Css-Link -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Toastr Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<<<<<<< HEAD
=======
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}" type="text/css">

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    @stack('css')

    <style>
        .has-passport.fixed-header .app-header {
            top: 55px;
        }

        .has-passport.fixed-sidebar .app-main .app-main-outer {
            padding-top: 50px;
        }

        .has-passport.fixed-sidebar .app-sidebar {
            top: 80px;
            height: 100svh;
        }
<<<<<<< HEAD
    </style>
</head>

<body>
=======

        .profilePic {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 1px solid #eee;
        }
    </style>
</head>

<body class="loading">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    <!-- alert for seeder and passport install and storage link -->
    <div class="w-100 d-flex flex-column gap-1" style="z-index: 99; position: fixed; top: 0;">
        <!-- seeder run -->
        @if ($seederRun)
            <div class="alert alert-danger alert-dismissible fade show mb-0 w-100 text-center rounded-0 text-black"
                role="alert" style="padding: 10px">
                <strong><i class="fa fa-exclamation-circle" data-toggle="tooltip" data-placement="bottom"
                        title='If you do not run this seeder, you will not be able to use the system.'></i>
                    Seeder dose not run.</strong> Please run <code class="text-danger">php artisan migrate:fresh
                    --seed</code> or <a href="{{ route('seeder.run.index') }}" class="btn btn-sm common-btn"> Click
                    here</a>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                    id="closeAlert"></button>
            </div>
        @endif

        <!-- storage link -->
        @if ($storageLink)
            <div class="alert alert-danger alert-dismissible fade show mb-0 w-100 text-center rounded-0 text-black"
                role="alert" style="padding: 10px">
                <strong><i class="fa fa-exclamation-circle" data-toggle="tooltip" data-placement="bottom"
                        title='If you can not install storage link, then image not found.'></i>
                    Storage link dose not exist or image not found then</strong> please run <code
                    class="text-danger">php artisan
                    storage:link</code> or <a href="{{ route('storage.install.index') }}"
                    class="btn btn-sm common-btn">
                    Click here</a>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                    id="closeAlert"></button>
            </div>
        @endif
    </div>

<<<<<<< HEAD
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header {{ ($seederRun || $storageLink) ? 'has-passport' : '' }}"
        id="appContent">
        <div class="app-header header-shadow">
=======
    <div class="app-container body-tabs-shadow fixed-sidebar fixed-header {{ $seederRun || $storageLink ? 'has-passport' : '' }}"
        id="appContent">
        <div class="app-header">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            <div class="app-header-logo"></div>
            <div class="app-header-mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header-menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header-content">
                <!-- Header-left-Section -->
                <div class="app-header-left">
                    <div class="header-pane ">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
<<<<<<< HEAD
                </div>
                <!-- End-Header-Left-section -->
                
                
                
                

                <!-- Header-Rignt-Section -->
                
                


                <div class="app-header-right">

                    @if (auth()->user()->shop && request()->is('admin/*', 'admin'))
                        <a class="btn btn-primary {{ $directory == 'rtl' ? 'ms-3' : 'me-3' }}"
                            href="{{ route('shop.dashboard') }}" target="blank">
                            <i class="fa-solid fa-store"></i>
                            <span>
                                {{ __('Go To Shop') }}
                            </span>
                        </a>
                    @endif

                    @role('admin|root')
                        @if (request()->is('shop/*', 'shop'))
                            <a class="btn btn-primary {{ $directory == 'rtl' ? 'ms-3' : 'me-3' }}"
                                href="{{ route('admin.dashboard') }}" target="blank">
                                <i class="fa-solid fa-user-tie"></i>
                                <span>
                                    {{ __('Go To Admin') }}
                                </span>
                            </a>
                        @endif
                    @endrole
                    
                                    
                 <!-- search bar -->
                 <!--   <div class="searchingBox">-->
                 <!--       <div class="d-flex position-relative">-->
                 <!--           <input type="text" id="searchInput" class="form-control" placeholder="Search Menu" autocomplete="off">-->
                 <!--           <span class="searchIcon"><i class="fa fa-search"></i></span>-->
                 <!--       </div>-->
                 <!--       <ul class="search-list" style="display: none"></ul>-->
                 <!--   </div>-->
                 <!--   <div class="badgeButtonBox me-1 me-md-3">-->
                 <!--       <div id="searchBtn" class="notifactionIcon">-->
                 <!--           <button type="button" class="emailBadge">-->
                 <!--               <img src="{{ asset('assets/icons-admin/search.svg') }}" alt="search" loading="lazy" />-->
                 <!--           </button>-->
                 <!--       </div>-->
                 <!--   </div>-->
                    

                   <!-- Theme dark and light -->
                    <div class="badgeButtonBox me-1 me-md-3">
                        <div class="notifactionIcon" onclick="switchTheme()">
                            <button type="button" class="emailBadge">
                                <img class="lightModeIcon" src="{{ asset('assets/icons-admin/moon.svg') }}" alt="bell" loading="lazy" />
                                <img class="darkModeIcon" src="{{ asset('assets/icons-admin/sun.svg') }}" alt="bell" loading="lazy" />
=======

                    <!-- Header-Text-Section -->
                    <div class="header-text">
                        <h4 class="mb-0 header-title">
                            @yield('header-title')
                        </h4>
                        <p class="mb-0 header-subtitle">
                            @yield('header-subtitle')
                        </p>
                    </div>
                </div>
                <!-- End-Header-Left-section -->

                <!-- Header-Right-Section -->
                <div class="app-header-right">

                    @if ($businessModel == 'multi')
                        @php
                            $user = auth()->user();
                            $isShop = true;
                            if (!$user->hasRole('root') && ($user->shop || $user->myShop)) {
                                $isShop = false;
                            }
                        @endphp
                    @endif

                    <!-- search bar -->
                    <div class="searchingBox">
                        <div class="d-flex position-relative">
                            <input type="text" id="searchInput" class="form-control" placeholder="Search Menu"
                                autocomplete="off">
                            <span class="searchIcon"><i class="fa fa-search"></i></span>
                        </div>
                        <ul class="search-list" style="display: none"></ul>
                    </div>
                    <div class="badgeButtonBox me-1 me-md-3">
                        <div id="searchBtn" class="notificationIcon">
                            <button type="button" class="emailBadge">
                                <img src="{{ asset('assets/icons-admin/search.svg') }}" alt="search"
                                    loading="lazy" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </button>
                        </div>
                    </div>

<<<<<<< HEAD
                    <!-- Notification Section -->
                    <div class="badgeButtonBox me-3">
                        <div class="notifactionIcon">
                            <button type="button" class="emailBadge dropdown-toggle position-relative"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bell noti"></i>
                                <span class="position-absolute notificationCount" id="totalNotify"></span>
                            </button>
                            <div class="dropdown-menu p-0 emailNotifactionSection">
                                <div class="dropdown-item emailNotifaction">
                                    <div class="emailHeader">
                                        <h6 class="massTitel">
                                            {{ __('Notifications') }}
                                        </h6>
                                        <a href="@hasanyrole('admin|root') {{ route('admin.notification.readAll') }} @else {{ route('shop.notification.readAll') }} @endhasanyrole"
                                            class="text-dark">
                                            {{ __('Marks all as read') }}
                                        </a>
                                    </div>
                                    <div class="messege-section" id="notifications">

                                    </div>
                                    <div class="emailFooter">
                                        <a href="@hasanyrole('admin|root') {{ route('admin.notification.show') }} @else {{ route('shop.notification.show') }} @endhasanyrole"
                                            class="massPera text-dark">
                                            {{ __('View All Notifications') }}
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
=======
                    <!-- Theme dark and light -->
                    <div class="badgeButtonBox me-1 me-md-3">
                        <div class="notificationIcon" onclick="switchTheme()">
                            <button type="button" class="emailBadge">
                                <img class="lightModeIcon" src="{{ asset('assets/icons-admin/moon.svg') }}"
                                    alt="bell" loading="lazy" />
                                <img class="darkModeIcon" src="{{ asset('assets/icons-admin/sun.svg') }}"
                                    alt="bell" loading="lazy" />
                            </button>
                        </div>
                    </div>

                    @hasPermission(['admin.dashboard.notification', 'shop.dashboard.notification'])
                        <!-- Notification Section -->
                        <div class="badgeButtonBox me-1 me-md-3">
                            <div class="notificationIcon">
                                <button type="button" class="emailBadge dropdown-toggle position-relative"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/icons/bell-on.svg') }}" alt="bell" loading="lazy" />
                                    <span class="position-absolute notificationCount" id="totalNotify"></span>
                                </button>
                                <div class="dropdown-menu p-0 emailNotificationSection">
                                    <div class="dropdown-item emailNotification">
                                        <div class="emailHeader">
                                            <h6 class="massTitle">
                                                {{ __('Notifications') }}
                                            </h6>
                                            <a href="@hasPermission('admin.dashboard.notification')
{{ route('admin.notification.readAll') }}
@else
{{ route('shop.notification.readAll') }}
@endhasPermission"
                                                class="text-dark">
                                                {{ __('Marks all as read') }}
                                            </a>
                                        </div>
                                        <div class="message-section" id="notifications">

                                        </div>
                                        <div class="emailFooter">
                                            <a href="@hasPermission('admin.dashboard.notification')
{{ route('admin.notification.show') }}
@else
{{ route('shop.notification.show') }}
@endhasPermission"
                                                class="massPera text-dark">
                                                {{ __('View All Notifications') }}
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endhasPermission
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

                    <!-- Language Dropdown -->
                    <div class="user-profile-box dropdown mx-3">
                        <div class="nav-profile-box dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
<<<<<<< HEAD
                            <div class="profile-image">
                                <a href="#">
                                    <img class="" src="{{ asset('assets/icons/language.svg') }}"
                                        alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="dropdown-menu profile-item" style="width: 160px !important">
                            @foreach ($languages as $lang)
                                <a href="{{ route('change.language', 'language=' . $lang->name) }}" class="dropdown-item {{ $lang->name == app()->getLocale() ? 'language-active' : '' }}">
=======
                            @php
                                $selectedLang = null;
                                foreach ($languages as $lang) {
                                    if ($lang->name == app()->getLocale()) {
                                        $selectedLang = $lang;
                                        break;
                                    }
                                }
                            @endphp
                            <div class="lang">
                                <img src="{{ asset('assets/icons-admin/Language.svg') }}" alt="icon"
                                    loading="lazy" />
                                <span>{{ ucfirst($selectedLang ? $selectedLang->title : __('English')) }}</span>
                                <i class="fa-solid fa-angle-down dropIcon"></i>
                            </div>
                        </div>

                        <div class="dropdown-menu profile-item">
                            @foreach ($languages as $lang)
                                <a href="{{ route('change.language', 'language=' . $lang->name) }}"
                                    class="dropdown-item {{ $lang->name == app()->getLocale() ? 'language-active' : '' }}">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    <i class="fa fa-language mr-3"></i>
                                    {{ __($lang->title) }}
                                </a>
                            @endforeach
                        </div>
                    </div>

<<<<<<< HEAD
                    <div class="user-profile-box dropdown ml-3">
                        <div class="nav-profile-box dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="profile-image">
                                <img class="profilepic"
                                    src="{{ auth()->user()->thumbnail ?? asset('assets/icons/user.svg') }}"
                                    alt="profile" loading="lazy" />
                            </div>
                            <div class="profile-content">
                                <span>{{ ucfirst(auth()->user()->name) }}</span>
                                <i class="fa-solid fa-angle-down dropIcon"></i>
=======
                    <!-- User Profile Dropdown -->
                    <div class="user-profile-box user-profile dropdown">
                        <div class="nav-profile-box dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="profile-info">
                                <span class="name">{{ ucfirst(Str::limit(auth()->user()?->name, 20)) }}</span>
                                <span class="role">{{ ucfirst(auth()->user()?->getRoleNames()?->first()) }}</span>
                            </div>
                            <div class="profile-image">
                                <img class="profilePic"
                                    src="{{ auth()->user()?->thumbnail ?? asset('assets/icons/user.svg') }}"
                                    alt="profile" loading="lazy" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </div>
                        </div>

                        <div class="dropdown-menu profile-item ">
<<<<<<< HEAD
                            <a href="@role('admin|root') {{ route('admin.profile.index') }} @else {{ route('shop.profile.index') }} @endrole"
                                class="dropdown-item">
                                <i class="fa fa-user {{ $directory == 'rtl' ? 'ms-2' : 'me-2' }}"></i>
                                {{ __('Profile') }}
                            </a>
                            @if (request()->is('admin/*'))
                                <a href="{{ route('admin.generale-setting.index') }}" class="dropdown-item">
                                    <i
                                        class="fa fa-cog {{ $directory == 'rtl' ? 'ms-2' : 'me-2' }}"></i>{{ __('Settings') }}
                                </a>
                            @endif
                            <a href="@role('admin|root') {{ route('admin.profile.change-password') }} @else {{ route('shop.profile.change-password') }} @endrole"
                                class="dropdown-item">
                                <i
                                    class="fa-solid fa-key {{ $directory == 'rtl' ? 'ms-2' : 'me-2' }}"></i>{{ __('Change Password') }}
                            </a>
                            <button class="dropdown-item cursor-pointer logout">
                                <i
                                    class="fa-solid fa-right-from-bracket {{ $directory == 'rtl' ? 'ms-2' : 'me-2' }}"></i>{{ __('Logout') }}
=======
                            @if (request()->is('admin/*', 'admin'))
                                @hasPermission('admin.profile.index')
                                    <a href="{{ route('admin.profile.index') }}" class="dropdown-item">
                                        <img src="{{ asset('assets/icons-admin/user-circle.svg') }}" alt="user"
                                            loading="lazy" />
                                        {{ __('Profile') }}
                                    </a>
                                @endhasPermission
                            @else
                                @hasPermission('shop.profile.index')
                                    <a href="{{ route('shop.profile.index') }}" class="dropdown-item">
                                        <img src="{{ asset('assets/icons-admin/user-circle.svg') }}" alt="user"
                                            loading="lazy" />
                                        {{ __('Profile') }}
                                    </a>
                                @endhasPermission
                            @endif

                            @if (request()->is('admin/*', 'admin'))
                                @hasPermission('admin.generale-setting.index')
                                    <a href="{{ route('admin.generale-setting.index') }}" class="dropdown-item">
                                        <img src="{{ asset('assets/icons-admin/settings.svg') }}" alt="setting"
                                            loading="lazy" />
                                        {{ __('Settings') }}
                                    </a>
                                @endhasPermission

                                @hasPermission('admin.profile.change-password')
                                    <a href="{{ route('admin.profile.change-password') }}" class="dropdown-item">
                                        <img src="{{ asset('assets/icons-admin/role-permission.svg') }}" alt="key"
                                            loading="lazy" />
                                        {{ __('Change Password') }}
                                    </a>
                                @endhasPermission
                            @else
                                @hasPermission('shop.profile.change-password')
                                    <a href="{{ route('shop.profile.change-password') }}" class="dropdown-item">
                                        <img src="{{ asset('assets/icons-admin/role-permission.svg') }}" alt="key"
                                            loading="lazy" />
                                        {{ __('Change Password') }}
                                    </a>
                                @endhasPermission
                            @endif

                            <button class="dropdown-item cursor-pointer logout text-danger">
                                <img src="{{ asset('assets/icons-admin/log-out.svg') }}" alt="key"
                                    loading="lazy" />
                                {{ __('Logout') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End-Header-Right-Section -->

            </div>
        </div>
        <div class="app-main">

            @include('layouts.sidebar')

            <!-- ****Body-Section***** -->

            <div class="app-main-outer">
                <!-- ****End-Body-Section**** -->
                <div class="app-main-inner">
                    <div class="container-fluid">

                        @yield('content')

                    </div>
                </div>
                <!-- Footer-Section -->

                @if (!$generaleSetting || $generaleSetting?->show_footer)
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer-inner">
                                <div>
                                    © {{ date('Y') }} {{ $generaleSetting?->footer_text }}
                                </div>
                                <div class="d-none d-sm-block">
                                    <i class="bi bi-telephone"></i>
                                    <span>
<<<<<<< HEAD
                                        {{ $generaleSetting?->footer_phone ?? '+8801714231625' }}
=======
                                        {{ $generaleSetting?->footer_phone ?? '0123456789' }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    </span>
                                </div>
                                <div class="d-none d-sm-block">
                                    <i class="fa-solid fa-envelope"></i>
                                    <span>
<<<<<<< HEAD
                                        {{ $generaleSetting?->footer_email ?? 'razinsoftltd@gmail.com' }}
=======
                                        {{ $generaleSetting?->email ?? 'example@gmail.com' }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>

    <!-- Logout Form -->
<<<<<<< HEAD
    <form action="@hasanyrole('admin|root'){{ route('admin.logout') }}@else{{ route('shop.logout') }}@endhasanyrole"
        method="POST" id="logoutForm">
=======
    @php
        $action = request()->is('admin/*', 'admin') ? route('admin.logout') : route('shop.logout');
    @endphp
    <form action="{{ $action }}" method="POST" id="logoutForm">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        @csrf
    </form>

    <script src="{{ asset('assets/scripts/jquery-3.6.3.min.js') }}"></script>
    <!-- Bootstrap-Min-Bundil-Link -->
    <script src="{{ asset('assets/scripts/bootstrap.bundle.min.js') }}"></script>
<<<<<<< HEAD
    <!-- Main-Script-Js-Link -->
    <script src="{{ asset('assets/scripts/main.js') }}"></script>

    <!-- Apex-Charts-Js-Link -->
    <script src="{{ asset('assets/scripts/apexcharts.min.js') }}"></script>

=======

    <script src="{{ asset('assets/scripts/script.js') }}"></script>
    <!-- Main-Script-Js-Link -->
    <script src="{{ asset('assets/scripts/main.js') }}"></script>

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    <!-- Full-Screen-Js-Link -->
    <script src="{{ asset('assets/scripts/full-screen.js') }}"></script>

    <!--select2 -->
    <script src="{{ asset('assets/scripts/select2.min.js') }}"></script>

    <!-- sweetalert js-->
    <script src="{{ asset('assets/scripts/sweetalert2.min.js') }}"></script>

<<<<<<< HEAD
    <script src="{{ asset('assets/scripts/datatables.min.js') }}"></script>

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    <!-- quill  editor-->
    <script src="{{ asset('assets/scripts/quill.js') }}"></script>

    <script src="{{ asset('assets/scripts/jQuery.print.min.js') }}"></script>

<<<<<<< HEAD
    <script src="{{ asset('assets/scripts/script.js') }}"></script>

    <script src="{{ asset('assets/scripts/toastr.min.js') }}"></script>

    <!-- Pusher-Js-Link -->
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    
  <script>
    function switchTheme() {
    const body = document.body;
    const lightIcon = document.querySelector('.lightModeIcon');
    const darkIcon = document.querySelector('.darkModeIcon');
    
    body.classList.toggle('dark-mode');
    
    lightIcon.classList.toggle('d-none');
    darkIcon.classList.toggle('d-none');
    
    localStorage.setItem('darkMode', body.classList.contains('dark-mode'));
}

// تحميل الوضع المسبق عند فتح الصفحة
document.addEventListener('DOMContentLoaded', () => {
    const isDarkMode = localStorage.getItem('darkMode') === 'true';
    const body = document.body;
    const lightIcon = document.querySelector('.lightModeIcon');
    const darkIcon = document.querySelector('.darkModeIcon');

    if (isDarkMode) {
        body.classList.add('dark-mode');
        lightIcon.classList.add('d-none');
        darkIcon.classList.remove('d-none');
    } else {
        body.classList.remove('dark-mode');
        lightIcon.classList.remove('d-none');
        darkIcon.classList.add('d-none');
    }
});
</script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });

=======
    <script src="{{ asset('assets/scripts/toastr.min.js') }}"></script>

    <script src="{{ asset('assets/scripts/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/jquery-ui.js') }}"></script>

    <!-- Pusher-Js-Link -->
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

    <script>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        document.addEventListener("DOMContentLoaded", function() {
            var themeColor = "{{ $generaleSetting?->primary_color ?? '#EE456B' }}";
            var themeHoverColor = "{{ $generaleSetting?->secondary_color ?? '#FEE5E8' }}";
            document.documentElement.style.setProperty('--theme-color', themeColor);
            document.documentElement.style.setProperty('--theme-hover-bg', themeHoverColor);
<<<<<<< HEAD
        });

=======

            // manage menu active svg color
            var svgImages = document.querySelectorAll(".menu.active .menu-icon");
            changeSvgImageColor(svgImages, themeColor);

            var selectedSvgImage;
            var svgColor;
            if (document.querySelectorAll(".btn-outline-primary img")) {
                selectedSvgImage = document.querySelectorAll(".btn-outline-primary img");
                svgColor = themeColor;
                changeSvgImageColor(selectedSvgImage, svgColor);
            }

            if (document.querySelectorAll(".btn-primary img")) {
                selectedSvgImage = document.querySelectorAll(".btn-primary img");
                svgColor = "#ffffff";
                changeSvgImageColor(selectedSvgImage, svgColor);
            }

            if (document.querySelectorAll(".btn-outline-info img")) {
                selectedSvgImage = document.querySelectorAll(".btn-outline-info img");
                svgColor = "#0ea5e9";
                changeSvgImageColor(selectedSvgImage, svgColor);
            }

            if (document.querySelectorAll(".btn-outline-warning img")) {
                selectedSvgImage = document.querySelectorAll(".btn-outline-warning img");
                svgColor = "#f97316";
                changeSvgImageColor(selectedSvgImage, svgColor);
            }

            if (document.querySelectorAll(".btn-danger img")) {
                selectedSvgImage = document.querySelectorAll(".btn-danger img");
                svgColor = "#ffffff";
                changeSvgImageColor(selectedSvgImage, svgColor);
            }

            if (document.querySelectorAll(".btn-outline-danger img")) {
                selectedSvgImage = document.querySelectorAll(".btn-outline-danger img");
                svgColor = "#ef4444";
                changeSvgImageColor(selectedSvgImage, svgColor);
            }

            if (document.querySelectorAll(".btn-outline-success img")) {
                selectedSvgImage = document.querySelectorAll(".btn-outline-success img");
                svgColor = "#059669";
                changeSvgImageColor(selectedSvgImage, svgColor);
            }

            if (document.querySelectorAll(".svg-bg img")) {
                selectedSvgImage = document.querySelectorAll(".svg-bg img");
                svgColor = themeColor;
                changeSvgImageColor(selectedSvgImage, svgColor);
            }
        });

        function changeSvgImageColor(svgImages, svgColor, defaultColor = "#25314C") {
            svgImages.forEach(function(svgImage) {
                var svgPath = svgImage.getAttribute("src");
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        var svgContent = xhr.responseText;

                        const strokeRegex = new RegExp(`stroke="${defaultColor}"`, 'g');
                        const fillRegex = new RegExp(`fill="${defaultColor}"`, 'g');

                        svgContent = svgContent.replace(strokeRegex, `stroke="${svgColor}"`);
                        svgContent = svgContent.replace(fillRegex, `fill="${svgColor}"`);

                        svgImage.src = "data:image/svg+xml;charset=utf-8," + encodeURIComponent(svgContent);
                    }
                };
                xhr.open("GET", svgPath, true);
                xhr.send();
            });
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        // Fetch Admin Notifications
        const fetchAdminNotifications = () => {
            $.ajax({
                type: 'GET',
<<<<<<< HEAD
                url: "{{ route('admin.new.notification') }}",
=======
                url: "{{ route('admin.dashboard.notification') }}",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                data: {
                    _token: "{{ csrf_token() }}"
                },
                dataType: 'json',
                success: function(response) {
                    $('#totalNotify').text(response.data.total)
                    $('#notifications').empty()
                    $.each(response.data.notifications, function(key, value) {
                        var id = value.id;
                        var link = "{{ route('admin.notification.read', ':id') }}";
                        link = link.replace(':id', id);
                        $('#notifications').append(
                            `<a href="${link}" class="item d-flex gap-2 align-items-center">
                            <div class="iconBox ${value.type == 'danger' ? 'cardIcon' : 'pdfIcon'}">
                                <i class="bi ${value.icon}"></i>
                            </div>
                            <div class="notification w-100 ${!value.is_read ? 'unread' : ''}">
                                <div class="userName">
<<<<<<< HEAD
                                    <p class="massTitel">${value.title} </p>
=======
                                    <p class="massTitle">${value.title} </p>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    <span class="time">${value.time}</span>
                                </div>
                                <div>
                                    <p class="description">${value.content}</p>
                                </div>
                            </div>
                        </a>`
                        );
                    })
                },
                error: function(e) {
                    $('#notifications').empty()
<<<<<<< HEAD
                    $("#notifications").html(e.responseText);
=======
                    if (e.status == 401 || e.status == 403) {
                        $('#totalNotify').text(0)
                        $("#notifications").html("emply");
                    } else {
                        $("#notifications").html(e.responseText);
                    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                }
            });
        }

        // fetch shop notifications
        const fetchShopNotifications = () => {
            $.ajax({
                type: 'GET',
<<<<<<< HEAD
                url: "{{ route('shop.new.notification') }}",
=======
                url: "{{ route('shop.dashboard.notification') }}",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                data: {
                    _token: "{{ csrf_token() }}"
                },
                dataType: 'json',
                success: function(response) {
                    $('#totalNotify').text(response.data.total)
                    $('#notifications').empty()
                    $.each(response.data.notifications, function(key, value) {
                        var id = value.id;
                        var link = "{{ route('shop.notification.read', ':id') }}";
                        link = link.replace(':id', id);
                        $('#notifications').append(
                            `<a href="${link}" class="item d-flex gap-2 align-items-center">
                            <div class="iconBox ${value.type == 'danger' ? 'cardIcon' : 'pdfIcon'}">
                                <i class="bi ${value.icon}"></i>
                            </div>
                            <div class="notification w-100 ${!value.is_read ? 'unread' : ''}">
                                <div class="userName">
<<<<<<< HEAD
                                    <p class="massTitel">${value.title} </p>
=======
                                    <p class="massTitle">${value.title} </p>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    <span class="time">${value.time}</span>
                                </div>
                                <div>
                                    <p class="description">${value.content}</p>
                                </div>
                            </div>
                        </a>`
                        );
                    })
                },
                error: function(e) {
                    $('#notifications').empty()
<<<<<<< HEAD
                    $("#notifications").html(e.responseText);
=======
                    if (e.status == 401 || e.status == 403) {
                        $('#totalNotify').text(0)
                        $("#notifications").html("empty");
                    } else {
                        $("#notifications").html(e.responseText);
                    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                }
            });
        }
    </script>

    <!-- Pusher Scripts -->
    <script>
<<<<<<< HEAD
        var pusher = new Pusher('{{ config('broadcasting.connections.pusher.key') }}', {
            cluster: '{{ config('broadcasting.connections.pusher.options.cluster') }}',
=======
        var pusher = new Pusher("{{ config('broadcasting.connections.pusher.key') }}", {
            cluster: "{{ config('broadcasting.connections.pusher.options.cluster') }}",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        });

        var channel = pusher.subscribe('notification-channel');
    </script>

    <!-- Show Notifications Using Pusher JS -->
<<<<<<< HEAD
    @role('admin|root')
        <script>
            channel.bind('admin-product-request', function(data) {
                var message = data.message;
                if (message.startsWith('"') && message.endsWith('"')) {
                    message = message.slice(1, -1);
                }
                toastr.success(message)
                // new Audio("{{ asset('assets/audio/notification.mp3') }}").play();
                fetchAdminNotifications()
            });

            channel.bind('support-ticket-event', function(data) {
                var message = data.message;
                if (message.startsWith('"') && message.endsWith('"')) {
                    message = message.slice(1, -1);
                }
                toastr.success(message)
                fetchAdminNotifications()
            });

            fetchAdminNotifications() // fetch Admin Notifications
        </script>
    @else
        <script>
            var shopID = "{{ auth()->user()->shop?->id }}";
            channel.bind('product-approve-event', function(data) {
                var shopId = data.shop_id;
                var message = data.message;
                if (shopId == shopID) {
=======

    @if (request()->is('admin/*', 'admin'))
        @hasPermission('admin.dashboard.notification')
            <script>
                channel.bind('admin-product-request', function(data) {
                    var message = data.message;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    if (message.startsWith('"') && message.endsWith('"')) {
                        message = message.slice(1, -1);
                    }
                    toastr.success(message)
<<<<<<< HEAD
                    fetchShopNotifications()
                }
            });
            fetchShopNotifications() // fetch Shop Notifications
        </script>
    @endrole
=======
                    // new Audio("{{ asset('assets/audio/notification.mp3') }}").play();
                    fetchAdminNotifications()
                });

                channel.bind('support-ticket-event', function(data) {
                    var message = data.message;
                    if (message.startsWith('"') && message.endsWith('"')) {
                        message = message.slice(1, -1);
                    }
                    toastr.success(message)
                    fetchAdminNotifications()
                });

                fetchAdminNotifications() // fetch Admin Notifications
            </script>
        @endhasPermission
    @else
        @hasPermission('shop.dashboard.notification')
            <script>
                var shopID = "{{ generaleSetting('shop')?->id }}";
                channel.bind('product-approve-event', function(data) {
                    var requestShopId = data.shop_id;
                    var message = data.message;
                    if (requestShopId == shopID) {
                        if (message.startsWith('"') && message.endsWith('"')) {
                            message = message.slice(1, -1);
                        }
                        toastr.success(message)
                        fetchShopNotifications()
                    }
                });
                fetchShopNotifications() // fetch Shop Notifications
            </script>
        @endhasPermission
    @endif
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
    </script>

    @stack('scripts')

    @if (session('success'))
        <script>
            Toast.fire({
                icon: 'success',
                title: '{{ session('success') }}'
            })
        </script>
    @endif

    @if (session('error'))
        <script>
            Toast.fire({
                icon: 'error',
                title: "{{ session('error') }}"
            })
        </script>
    @endif

    @if (session('demoMode'))
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "{{ session('demoMode') }}",
            });
        </script>
    @endif

<<<<<<< HEAD
=======
    @if (session('alertError'))
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                html: `{{ session('alertError')['message'] }} <br><br> {{ isset(session('alertError')['message2']) ? session('alertError')['message2'] : '' }}`,
            });
        </script>
    @endif

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    <Script>
        document.addEventListener("DOMContentLoaded", function() {
            var root = document.documentElement;

            // Get the value of --theme-color
            var themeColor = getComputedStyle(root).getPropertyValue("--theme-color");

            $(".deleteConfirm").on("click", function(e) {
                e.preventDefault();
                const url = $(this).attr("href");
                Swal.fire({
                    title: "{{ __('Are you sure?') }}",
<<<<<<< HEAD
                    text: '{{ __("You won't be able to revert this!") }}',
=======
                    text: '{{ __('You will not be able to revert this!') }}',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: themeColor,
                    cancelButtonColor: "#d33",
                    confirmButtonText: "{{ __('Yes, delete it!') }}",
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url;
                    }
                });
            });

            $(".logout").on("click", function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "{{ __('Are you sure?') }}",
                    text: "{{ __('Are you sure you want to log out?') }}",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: themeColor,
                    cancelButtonColor: "#d33",
                    confirmButtonText: "{{ __('Yes, Logout!') }}",
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById("logoutForm").submit();
                    }
                });
            });
<<<<<<< HEAD
=======

            // form submit loader
            $('form').on('submit', function() {
                var submitButton = $(this).find('button[type="submit"]');

                submitButton.prop('disabled', true);
                submitButton.removeClass('px-5');

                submitButton.html(`<div class="d-flex align-items-center gap-1">
                    <div class="spinner-border spinner-border-sm" role="status"></div>
                    <span>Loading...</span>
                </div>`)
            });
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        });
    </Script>

</body>

</html>
