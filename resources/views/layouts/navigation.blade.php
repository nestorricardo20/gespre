
   <!-- end::Head -->
    <!-- end::Body -->
    <body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <!-- begin::Header -->
            <header class="m-grid__item     m-header "   >
                <div class="m-header__top" style="height:50px; !important " >
                    <div >
                        <div class="m-stack m-stack--ver m-stack--desktop">
                            <!-- begin::Brand -->
                            <div class="m-stack__item m-brand">
                                <div class="m-stack m-stack--ver m-stack--general m-stack--inline">
                                    <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                        @if(auth()->user()->role=='user' )                                        
                                            <a href="{{route('home')}}" class="m-brand__logo-wrapper">                                        
                                        @elseif (auth()->user()->role=='admin' )                                        
                                            <a href="{{route('home.admin')}}" class="m-brand__logo-wrapper">                                        
                                        @elseif (auth()->user()->role=='superadmin' )                                        
                                            <a href="{{route('home.superadmin')}}" class="m-brand__logo-wrapper">                                        
                                        @endif
                                            <img alt="" src="{{ url('assets/demo/demo5/media/img/logo/')}}/logo_presupuesto.jpg" />
                                        </a>
                                    </div>
                                    <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left m-dropdown--align-push" data-dropdown-toggle="click" aria-expanded="true">
                                            <a href="#" class="dropdown-toggle m-dropdown__toggle btn btn-outline-metal m-btn  m-btn--icon m-btn--pill">
                                                <span>
                                                    Panel de control
                                                </span>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--left m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="m-nav">
                                                                <li class="m-nav__section m-nav__section--first ">
                                                                    <span class="m-nav__section-text">
                                                                        Menú Rápido 
                                                                    </span>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="{{route('home')}}" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Programación 
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Ejecución
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Seguimiento
                                                                        </span>
                                                                    </a>
                                                                <!-- </li>
                                                                <li class="m-nav__item">
                                                                    <a href="" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Accounting
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                <li class="m-nav__item">
                                                                    <a href="" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Customer Relationship
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Order Processing
                                                                        </span>
                                                                    </a>
                                                                </li> -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- begin::Responsive Header Menu Toggler menu pequeño nrmz-->
                                        <!-- <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                            <span></span>
                                        </a> -->
                                        <!-- end::Responsive Header Menu Toggler-->
            <!-- begin::Topbar Toggler-->
                                        <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                            <i class="flaticon-more"></i>
                                        </a>
                                        <!--end::Topbar Toggler-->
                                    </div>
                                </div>
                            </div>
                            <!-- end::Brand -->     
                <!-- begin::Topbar -->
                            <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                                <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                                    <div class="m-stack__item m-topbar__nav-wrapper">
                                        <ul class="m-topbar__nav m-nav m-nav--inline">
                                            <li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center  m-dropdown--mobile-full-width" data-dropdown-toggle="click" data-dropdown-persistent="true">
                                                <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                                                    <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                                                    <span class="m-nav__link-icon">
                                                        <span class="m-nav__link-icon-wrapper">
                                                            <i class="flaticon-music-2"></i>
                                                        </span>
                                                    </span>
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
                                                            <span class="m-dropdown__header-title">
                                                                9 New
                                                            </span>
                                                            <span class="m-dropdown__header-subtitle">
                                                                User Notifications
                                                            </span>
                                                        </div>
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                                                                    <li class="nav-item m-tabs__item">
                                                                        <a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
                                                                            Alerts
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item m-tabs__item">
                                                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">
                                                                            Events
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item m-tabs__item">
                                                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">
                                                                            Logs
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
                                                                        <div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
                                                                            <div class="m-list-timeline m-list-timeline--skin-light">
                                                                                <div class="m-list-timeline__items">
                                                                                    <div class="m-list-timeline__item">
                                                                                        <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                                                                        <span class="m-list-timeline__text">
                                                                                            12 new users registered
                                                                                        </span>
                                                                                        <span class="m-list-timeline__time">
                                                                                            Just now
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="m-list-timeline__item">
                                                                                        <span class="m-list-timeline__badge"></span>
                                                                                        <span class="m-list-timeline__text">
                                                                                            System shutdown
                                                                                            <span class="m-badge m-badge--success m-badge--wide">
                                                                                                pending
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="m-list-timeline__time">
                                                                                            14 mins
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="m-list-timeline__item">
                                                                                        <span class="m-list-timeline__badge"></span>
                                                                                        <span class="m-list-timeline__text">
                                                                                            New invoice received
                                                                                        </span>
                                                                                        <span class="m-list-timeline__time">
                                                                                            20 mins
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="m-list-timeline__item">
                                                                                        <span class="m-list-timeline__badge"></span>
                                                                                        <span class="m-list-timeline__text">
                                                                                            DB overloaded 80%
                                                                                            <span class="m-badge m-badge--info m-badge--wide">
                                                                                                settled
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="m-list-timeline__time">
                                                                                            1 hr
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="m-list-timeline__item">
                                                                                        <span class="m-list-timeline__badge"></span>
                                                                                        <span class="m-list-timeline__text">
                                                                                            System error -
                                                                                            <a href="#" class="m-link">
                                                                                                Check
                                                                                            </a>
                                                                                        </span>
                                                                                        <span class="m-list-timeline__time">
                                                                                            2 hrs
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                                        <span class="m-list-timeline__badge"></span>
                                                                                        <span href="" class="m-list-timeline__text">
                                                                                            New order received
                                                                                            <span class="m-badge m-badge--danger m-badge--wide">
                                                                                                urgent
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="m-list-timeline__time">
                                                                                            7 hrs
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                                        <span class="m-list-timeline__badge"></span>
                                                                                        <span class="m-list-timeline__text">
                                                                                            Production server down
                                                                                        </span>
                                                                                        <span class="m-list-timeline__time">
                                                                                            3 hrs
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="m-list-timeline__item">
                                                                                        <span class="m-list-timeline__badge"></span>
                                                                                        <span class="m-list-timeline__text">
                                                                                            Production server up
                                                                                        </span>
                                                                                        <span class="m-list-timeline__time">
                                                                                            5 hrs
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                                                        <div class="m-scrollable" m-scrollabledata-scrollable="true" data-max-height="250" data-mobile-max-height="200">
                                                                            <div class="m-list-timeline m-list-timeline--skin-light">
                                                                                <div class="m-list-timeline__items">
                                                                                    <div class="m-list-timeline__item">
                                                                                        <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                                        <a href="" class="m-list-timeline__text">
                                                                                            New order received
                                                                                        </a>
                                                                                        <span class="m-list-timeline__time">
                                                                                            Just now
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="m-list-timeline__item">
                                                                                        <span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
                                                                                        <a href="" class="m-list-timeline__text">
                                                                                            New invoice received
                                                                                        </a>
                                                                                        <span class="m-list-timeline__time">
                                                                                            20 mins
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="m-list-timeline__item">
                                                                                        <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                                        <a href="" class="m-list-timeline__text">
                                                                                            Production server up
                                                                                        </a>
                                                                                        <span class="m-list-timeline__time">
                                                                                            5 hrs
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="m-list-timeline__item">
                                                                                        <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                        <a href="" class="m-list-timeline__text">
                                                                                            New order received
                                                                                        </a>
                                                                                        <span class="m-list-timeline__time">
                                                                                            7 hrs
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="m-list-timeline__item">
                                                                                        <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                        <a href="" class="m-list-timeline__text">
                                                                                            System shutdown
                                                                                        </a>
                                                                                        <span class="m-list-timeline__time">
                                                                                            11 mins
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="m-list-timeline__item">
                                                                                        <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                        <a href="" class="m-list-timeline__text">
                                                                                            Production server down
                                                                                        </a>
                                                                                        <span class="m-list-timeline__time">
                                                                                            3 hrs
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                                                        <div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
                                                                            <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                                                                <span class="">
                                                                                    All caught up!
                                                                                    <br>
                                                                                    No new logs.
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"  data-dropdown-toggle="click">
                                                <a href="#" class="m-nav__link m-dropdown__toggle">
                                                    <span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
                                                    <span class="m-nav__link-icon">
                                                        <span class="m-nav__link-icon-wrapper">
                                                            <i class="flaticon-share"></i>
                                                        </span>
                                                    </span>
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
                                                            <span class="m-dropdown__header-title">
                                                                Quick Actions
                                                            </span>
                                                            <span class="m-dropdown__header-subtitle">
                                                                Shortcuts
                                                            </span>
                                                        </div>
                                                        <div class="m-dropdown__body m-dropdown__body--paddingless">
                                                            <div class="m-dropdown__content">
                                                                <div class="m-scrollable" data-scrollable="false" data-max-height="380" data-mobile-max-height="200">
                                                                    <div class="m-nav-grid m-nav-grid--skin-light">
                                                                        <div class="m-nav-grid__row">
                                                                            <a href="#" class="m-nav-grid__item">
                                                                                <i class="m-nav-grid__icon flaticon-file"></i>
                                                                                <span class="m-nav-grid__text">
                                                                                    Generate Report
                                                                                </span>
                                                                            </a>
                                                                            <a href="#" class="m-nav-grid__item">
                                                                                <i class="m-nav-grid__icon flaticon-time"></i>
                                                                                <span class="m-nav-grid__text">
                                                                                    Add New Event
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="m-nav-grid__row">
                                                                            <a href="#" class="m-nav-grid__item">
                                                                                <i class="m-nav-grid__icon flaticon-folder"></i>
                                                                                <span class="m-nav-grid__text">
                                                                                    Create New Task
                                                                                </span>
                                                                            </a>
                                                                            <a href="#" class="m-nav-grid__item">
                                                                                <i class="m-nav-grid__icon flaticon-clipboard"></i>
                                                                                <span class="m-nav-grid__text">
                                                                                    Completed Tasks
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
                                                <a href="#" class="m-nav__link m-dropdown__toggle">
                                                    <span class="m-topbar__welcome">
                                                         {{ auth()->user()->role}}    
                                                     {{-- //   Hello --}},&nbsp;
                                                    </span>
                                                    <span class="m-topbar__username">
                                                        Nick
                                                    </span>
                                                    <span class="m-topbar__userpic">
                                                        <img src="{{ url('assets/app/media/img/users/')}}/user4.jpg"  class="m--img-rounded m--marginless m--img-centered" alt=""/>
                                                    </span>
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                                                            <div class="m-card-user m-card-user--skin-dark">
                                                                <div class="m-card-user__pic">
                                                                    <img src="{{ url('assets/app/media/img/users/')}}/user4.jpg"  class="m--img-rounded m--marginless" alt=""/>
                                                                </div>
                                                                <div class="m-card-user__details">
                                                                    <span class="m-card-user__name m--font-weight-500">
                                                                        Mark Andre
                                                                    </span>
                                                                    <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                                                        mark.andre@gmail.com
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav m-nav--skin-light">
                                                                    <li class="m-nav__section m--hide">
                                                                        <span class="m-nav__section-text">
                                                                            Section
                                                                        </span>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        {{--  <x-slot name="content"> --}}
                                                                             <x-dropdown-link :href="route('profile.edit')">
                                                                                {{ __('Profile') }}
                                                                            </x-dropdown-link>
                                                                      {{--   </x-slot> --}}

                                                                       {{--  <a href="profile.html" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                            <span class="m-nav__link-title">
                                                                                <span class="m-nav__link-wrap">
                                                                                    <span class="m-nav__link-text">
                                                                                        My Profile
                                                                                    </span>
                                                                                    <span class="m-nav__link-badge">
                                                                                        <span class="m-badge m-badge--success">
                                                                                            2
                                                                                        </span>
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </a> --}}
                                                                    </li>
                                                                    <!-- <li class="m-nav__item">
                                                                        <a href="profile.html" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Activity
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="profile.html" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Messages
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                    <li class="m-nav__item">
                                                                        <a href="profile.html" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                            <span class="m-nav__link-text">
                                                                                FAQ
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="profile.html" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Support
                                                                            </span>
                                                                        </a>
                                                                    </li> -->
                                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                   
                                                                        @if(Auth::check())                                                                        
                                                                                <form id="logout-form" action="{{ url('logout') }}" method="POST">
                                                                                            {{ csrf_field() }}
                                                                                    <button type="submit" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</button>
                                                                                </form>
                                                                              @else
                                                                            <li><a href="{{route('login')}}"><i class="fa fa-user"></i>
                                                                                    Login
                                                                                </a>
                                                                            </li>
                                                                        @endif
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end::Topbar -->
                        </div>
                    </div>
                </div>
            
            </header>
            <!-- end::Header -->        