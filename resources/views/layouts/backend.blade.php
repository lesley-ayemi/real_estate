
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
@include('layouts.global_components.backend.head')
<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-content-menu" data-col="2-columns">
  <!-- fixed-top-->
  @include('layouts.global_components.backend.nav')
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      @include('layouts.global_components.backend.sidebar')
      <div class="content-body">
          @yield('content')
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  @include('layouts.global_components.backend.footer')
  <!-- BEGIN VENDOR JS-->
  @include('layouts.global_components.backend.scripts')
</body>
</html>