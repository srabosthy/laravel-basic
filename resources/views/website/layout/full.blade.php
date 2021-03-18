<!DOCTYPE html>
<html lang="en">
    @include('website.includes.head')
    <body class="sb-nav-fixed">
        @include('website.includes.topnav')
        <div id="layoutSidenav">
            @include('website.includes.sidenav')
            <div id="layoutSidenav_content">
                @yield('content')
                @include('website.includes.footer')
            </div>
        </div>
        @include('website.includes.script')
    </body>
</html>