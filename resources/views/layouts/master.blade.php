
<!DOCTYPE html>
@include('layouts.global_components.frontend.head')
<body>

    <!-- /.preloader -->
    <div id="preloader"></div>
    <div class="theme-layout">

        {{-- register session --}}
        @include('layouts.global_components.frontend.confirm')


        {{-- navigation menu --}}
        @include('layouts.global_components.frontend.navbar')




        <!--Slider yield !-->
        @yield('content-slider')

        {{-- search section --}}
        @yield('content-search')

        <!--Recent Properties yield !-->
        @yield('content-recent')

        {{-- banner section --}}
        @yield('content-banner')

        {{-- featured section --}}
        @yield('content-featured')

        {{-- agents section --}}
        @yield('content-agents')

        {{-- partners section --}}
        @yield('content-partners')

        @include('layouts.global_components.frontend.footer')

    <!-- Script -->
    @include('layouts.global_components.frontend.scripts')
</body>
</html>
