<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      @include('partials.header-script')
  </head>
  <body>
        <!-- <div class="site-preloader-wrap">
            <div class="spinner"></div>
        </div> -->
        <!-- Preloader -->
        <header id="header" class="header-section">
            <div class="top-header">
                @include('partials.top-head')
            </div>
            <div class="bottom-header">
                @include('partials.menu-header')
            </div>
        </header><!-- /Header Section -->
        <div class="header-height"></div>
             @yield('content')
        <div class="sponsor-section bd-bottom">
            @include('partials.sponsor-section')
        </div><!-- ./Sponsor Section -->
      @include('partials.footer')
      @include('partials.footer-script')
  </body>
</html>