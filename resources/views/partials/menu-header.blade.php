<div class="container">
    <div class="bottom-content-wrap row ratym-logo-container">
        <div class="left-child">
          <ul id="mainmenu" class="nav navbar-nav nav-menu">
                <li class="active"> <a href="{{ route('/') }}">Home</a></li>
                <li><a href="{{ route('about-us') }}">About</a></li>
                <li><a href="#">Causes</a></li>
          </ul>
        </div>
        <div class="mid-child">
            <div class="site-branding">
                <a href="#"><img src="{{ asset('assets-frontend/img/logo.png') }}" alt="Brand" style=""></a>
            </div>
        </div>
        <div class="right-child">
            <ul id="mainmenu" class="nav navbar-nav nav-menu">
                
                <li><a href="#">Event</a></li>
                <li> <a href="{{ route('contact-us') }}">Contact</a></li>
            </ul>
            <a href="#" class="default-btn">Donate Now</a>
        </div>
    </div>
</div>