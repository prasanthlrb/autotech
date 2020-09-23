<!-- BEGIN: Main Menu-->
<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow" role="navigation" data-menu="menu-wrapper">
    <div class="navbar-header d-xl-none d-block">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="/vendor/dashboard">
                    <div class="brand-logo"><img class="logo" src="/website/images/logo-white.png"></div>
                    <!-- <h2 class="brand-text mb-0">AutoTech</h2> -->
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <!-- Horizontal menu content-->
    <div class="navbar-container main-menu-content" data-menu="menu-container">
        <!-- include /includes/mixins-->
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="filled">

            @if(!empty($role))
            
            @if($role->dashboard == 'on')
            <li class="dashbord nav-item" data-menu="dropdown">
            	<a class="dropdown-toggle nav-link" href="/vendor/dashboard/">
            		<i class="menu-livicon" data-icon="desktop"></i>
            		<span data-i18n="Dashboard">Dashboard</span>
            	</a>
            </li>
            @endif

            @if($role->appointment == 'on')
            <li class="appointment nav-item" data-menu="dropdown">
            	<a class="dropdown-toggle nav-link" href="/vendor/appointment">
            		<i class="menu-livicon" data-icon="briefcase"></i>
            		<span data-i18n="Appointment">Appointment</span>
            	</a>
            </li>
            @endif

            <li class="apps dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="menu-livicon" data-icon="comments"></i><span>Apps</span></a>
                <ul class="dropdown-menu">
                    <!-- <li data-menu=""><a class="dropdown-item align-items-center" href="app-chat.html" data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Chat</a>
                    </li> -->
                    @if($role->calendor == 'on')
                    <li data-menu=""><a class="calendar dropdown-item align-items-center" href="/vendor/calendar" data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Calendar</a>
                    </li>
                    @endif
                </ul>
            </li>

            @if($role->push_notification == 'on')
            <li class="push-notification nav-item" data-menu="dropdown">
            	<a class="dropdown-toggle nav-link" href="/vendor/push-notification">
            	<i class="menu-livicon" data-icon="comments"></i>
            	<span>Push Notification</span></a>
            </li>
            @endif

            @if($role->service == 'on')
            <li class="service nav-item" data-menu="dropdown">
                <a class="dropdown-toggle nav-link" href="/vendor/new-service">
                <i class="menu-livicon" data-icon="comments"></i>
                <span>Service</span></a>
            </li>
            @endif

            @if($role->review == 'on')
            <li class="review nav-item" data-menu="dropdown">
            	<a class="dropdown-toggle nav-link" href="/vendor/review/">
            		<i class="menu-livicon" data-icon="desktop"></i>
            		<span data-i18n="Review & Rating">Review & Rating</span>
            	</a>
            </li>
            @endif

            @if($role->coupon == 'on')
            <li class="coupon nav-item" data-menu="dropdown">
            	<a class="dropdown-toggle nav-link" href="/vendor/coupon/">
            		<i class="menu-livicon" data-icon="desktop"></i>
            		<span data-i18n="Coupon">Coupon</span>
            	</a>
            </li>
            @endif

            @if($role->workers == 'on')
            <li class="workers nav-item" data-menu="dropdown">
                <a class="dropdown-toggle nav-link" href="/vendor/workers/">
                    <i class="menu-livicon" data-icon="desktop"></i>
                    <span data-i18n="Workers">Add Workers</span>
                </a>
            </li>
            @endif

            @if($role->reports == 'on')
            <li class="report nav-item" data-menu="dropdown">
            	<a class="dropdown-toggle nav-link" href="/vendor/report/">
            		<i class="menu-livicon" data-icon="notebook"></i>
            		<span data-i18n="Revenue Reports">Revenue Reports</span>
            	</a>
            </li>
            @endif

            @else

            <li class="dashbord nav-item" data-menu="dropdown">
                <a class="dropdown-toggle nav-link" href="/vendor/dashboard/">
                    <i class="menu-livicon" data-icon="desktop"></i>
                    <span data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>

            <li class="appointment nav-item" data-menu="dropdown">
                <a class="dropdown-toggle nav-link" href="/vendor/appointment">
                    <i class="menu-livicon" data-icon="briefcase"></i>
                    <span data-i18n="Appointment">Appointment</span>
                </a>
            </li>

            <li class="apps dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="menu-livicon" data-icon="comments"></i><span>Apps</span></a>
                <ul class="dropdown-menu">
                    <!-- <li data-menu=""><a class="dropdown-item align-items-center" href="app-chat.html" data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Chat</a>
                    </li> -->
                    <li data-menu=""><a class="calendar dropdown-item align-items-center" href="/vendor/calendar" data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Calendar</a>
                    </li>
                </ul>
            </li>

            <li class="push-notification nav-item" data-menu="dropdown">
                <a class="dropdown-toggle nav-link" href="/vendor/push-notification">
                <i class="menu-livicon" data-icon="comments"></i>
                <span>Push Notification</span></a>
            </li>

            <li class="service nav-item" data-menu="dropdown">
                <a class="dropdown-toggle nav-link" href="/vendor/new-service">
                <i class="menu-livicon" data-icon="comments"></i>
                <span>Service</span></a>
            </li>

            <li class="review nav-item" data-menu="dropdown">
                <a class="dropdown-toggle nav-link" href="/vendor/review/">
                    <i class="menu-livicon" data-icon="desktop"></i>
                    <span data-i18n="Review & Rating">Review & Rating</span>
                </a>
            </li>

            <li class="coupon nav-item" data-menu="dropdown">
                <a class="dropdown-toggle nav-link" href="/vendor/coupon/">
                    <i class="menu-livicon" data-icon="desktop"></i>
                    <span data-i18n="Coupon">Coupon</span>
                </a>
            </li>

            <li class="workers nav-item" data-menu="dropdown">
                <a class="dropdown-toggle nav-link" href="/vendor/workers/">
                    <i class="menu-livicon" data-icon="desktop"></i>
                    <span data-i18n="Workers">Add Workers</span>
                </a>
            </li>

            <li class="report nav-item" data-menu="dropdown">
                <a class="dropdown-toggle nav-link" href="/vendor/report/">
                    <i class="menu-livicon" data-icon="notebook"></i>
                    <span data-i18n="Revenue Reports">Revenue Reports</span>
                </a>
            </li>
            @endif

        </ul>
    </div>
    <!-- /horizontal menu content-->
</div>
<!-- END: Main Menu-->