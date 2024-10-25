<div class="container">
    <div class="bottom-content-wrap row">
        <div class="col-sm-4">
            <div class="site-branding">
                <a href="#"><img src="{{ asset('assets-frontend/img/logo.png') }}" alt="Brand" style="height: 86px;"></a>
            </div>
        </div>
        <div class="col-sm-8 text-right">
            <ul id="mainmenu" class="nav navbar-nav nav-menu">
                <li class="active"> <a href="{{ route('/') }}">Home</a></li>
                <li><a href="{{ route('about-us') }}">About</a></li>
                <li><a href="#">Causes</a></li>
                <li><a href="#">Event</a></li>
                <li> <a href="{{ route('contact-us') }}">Contact</a></li>
            </ul>
            <a href="#" class="default-btn">Donet Now</a>
        </div>
    </div>
</div>