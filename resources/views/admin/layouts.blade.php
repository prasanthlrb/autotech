<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

@include('admin.headlink');
<!-- END: Head-->

<!-- BEGIN: Body-->

<!-- <body class="vertical-layout vertical-menu-modern light 2-columns  navbar-sticky footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout"> -->

<body class="vertical-layout 2-columns footer-static navbar-hidden pace-done menu-hide vertical-overlay-menu" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">


 @include('admin.header')


    @include('admin.sidebar')

    <!-- BEGIN: Content-->
    <div class="app-content content">
     @yield('body-section')
    </div>
    
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @include('admin.footer')