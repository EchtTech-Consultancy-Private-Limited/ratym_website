@extends('layout.master')
@section('title')
{{ __('RATYM | Home') }}
@endsection
@section('content') 
<section class="slider-section">
    <div class="slider-wrapper">
        <div id="main-slider" class="nivoSlider">
            <img src="{{ asset('assets-frontend/img/slider-1.png')}}" alt="" title="#slider-caption-1"/>
            <img src="{{ asset('assets-frontend/img/slider-2.png')}}" alt="" title="#slider-caption-2"/>
            <img src="{{ asset('assets-frontend/img/slider-3.png')}}" alt="" title="#slider-caption-3"/>
        </div><!-- /#main-slider -->
        <div id="slider-caption-1" class="nivo-html-caption slider-caption">
            <div class="display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="slider-text">
                            <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
                            <h1 class="wow cssanimation leFadeInRight sequence">RATYM</h1>
                            <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Help today because tomorrow you may be the one who needs helping! <br>Forget what you can get and see what you can give.</p>
                            <a href="#" class="border-btn default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join With Us<i class="ti-arrow-right margin"></i></a>
                            <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet Now<i class="ti-arrow-right margin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /#slider-caption-1 -->
        <div id="slider-caption-2" class="nivo-html-caption slider-caption">
            <div class="display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="slider-text">
                            <h1 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">Together we  <br>can make a Difference</h1>
                            <p class="wow cssanimation fadeInBottom" data-wow-delay="1s">Help today because tomorrow you may be the one who needs helping! <br>Forget what you can get and see what you can give.</p>
                            <a href="#" class=" border-btn default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join With Us<i class="ti-arrow-right margin"></i></a>
                            <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet Now<i class="ti-arrow-right margin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /#slider-caption-2 -->
        <div id="slider-caption-3" class="nivo-html-caption slider-caption">
            <div class="display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="slider-text">
                            <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
                            <h1 class="wow cssanimation lePushReleaseFrom sequence" data-wow-delay="1s">Give a little. Change a lot.</h1>
                            <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Help today because tomorrow you may be the one who needs helping! <br>Forget what you can get and see what you can give.</p>
                            <a href="#" class="border-btn default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join With Us<i class="ti-arrow-right margin"></i></a>
                            <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet Now<i class="ti-arrow-right margin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /#slider-caption-3 -->
    </div>
</section><!-- /#slider-Section -->
<section class="promo-section bd-bottom">
            <div class="promo-wrap">
               <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 xs-padding">
                            <div class="promo-content">
                                <img src="{{ asset('assets-frontend/img/icon-1.png')}}" alt="prmo icon">
                                <h3>Make Donetion</h3>
                                <p>Help today because tomorrow you may be the one who needs helping!</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 xs-padding">
                            <div class="promo-content">
                                <img src="{{ asset('assets-frontend/img/icon-2.png')}}" alt="prmo icon">
                                <h3>Fundrising</h3>
                                <p>Help today because tomorrow you may be the one who needs helping! </p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 xs-padding">
                            <div class="promo-content">
                                <img src="{{ asset('assets-frontend/img/icon-3.png')}}" alt="prmo icon">
                                <h3>Become A Volunteer</h3>
                                <p>Help today because tomorrow you may be the one who needs helping! </p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Promo Section -->
        
        <section class="causes-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>Recent Key Components</h2>
                    <span class="heading-border"></span>
                    <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
                </div><!-- /Section Heading -->
                <div class="causes-wrap row">
                    <div class="col-md-3 xs-padding">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="{{ asset('assets-frontend/img/social.jpg')}}" alt="causes">
                                
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">25%</span></div>
                                </div>
                           </div>
                            <div class="causes-details">
                                <h3>Social</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                            <a href="#" class="donate-btn">Donate Now<i class="ti-arrow-right"></i></a>
                        </div>
                    </div><!-- /Causes-1 -->
                    <div class="col-md-3 xs-padding">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="{{ asset('assets-frontend/img/cultural.jpg')}}" alt="causes">
                               
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">45%</span></div>
                                </div>
                           </div>
                            <div class="causes-details">
                                <h3>Cultural​</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                            <a href="#" class="donate-btn">Donate Now<i class="ti-arrow-right"></i></a>
                        </div>
                    </div><!-- /Causes-2 -->
                    <div class="col-md-3 xs-padding">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="{{ asset('assets-frontend/img/education.jpg')}}" alt="causes">
                                
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">75%</span></div>
                                </div>
                           </div>
                            <div class="causes-details">
                                <h3>Education</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                            <a href="#" class="donate-btn">Donate Now<i class="ti-arrow-right"></i></a>
                        </div>
                    </div><!-- /Causes-3 -->
                    <div class="col-md-3 xs-padding">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="{{ asset('assets-frontend/img/empowerment.jpg')}}" alt="causes">
                               
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">75%</span></div>
                                </div>
                           </div>
                            <div class="causes-details">
                                <h3>Woman Empowerment</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                            <a href="#" class="donate-btn">Donate Now<i class="ti-arrow-right"></i></a>
                        </div>
                    </div><!-- /Causes-3 -->
                </div>
            </div>
        </section><!-- /Causes Section -->
        
        <section class="about-section bd-bottom shape circle padding">
            <div class="container">
                <div class="row">
                   <div class="col-md-4 xs-padding">
                        <div class="profile-wrap">
                            <img class="profile" src="{{ asset('assets-frontend/img/profile.png')}}" alt="profile">
                            <h3>Jonathan Smith <span>CEO & Founder of Charitify.</span></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <img src="{{ asset('assets-frontend/img/sign.png')}}" alt="sign">
                        </div>
                    </div>
                    <div class="col-md-8 xs-padding">
                        <div class="about-wrap row">
                            <div class="col-md-6 xs-padding">
                                <img src="{{ asset('assets-frontend/img/our-mission.png')}}" alt="about-thumb">
                                <h3>Our Mission</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                <a href="#" class="default-btn">Read More</a>
                            </div>
                            <div class="col-md-6 xs-padding">
                                <img src="{{ asset('assets-frontend/img/our-vision.png')}}" alt="about-thumb">
                                <h3>Our Vision</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                <a href="#" class="default-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Causes Section -->
        
        <section class="campaigns-section bd-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 xs-padding">
                        <div class="campaigns-wrap">
                            <h4>Featured Campaigns</h4>
                            <h2>Featured project to built a School.</h2>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">35%</span></div>
                            </div>
                            <div class="donation-box">
                                <h3><i class="ti-bar-chart"></i>Goal: ₹450000</h3>
                                <h3><i class="ti-thumb-up"></i>Raised: ₹55000</h3>
                            </div>
                            <a href="#" class="default-btn">Donate Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <div class="video-wrap">
                            <img src="{{ asset('assets-frontend/img/video.jpg')}}" alt="video">
                            <div class="play">
                                <a class="img-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=_IlLwfC2dNc"><i class="ti-control-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Featured Campaigns Section -->
        
        <section class="team-section bg-grey bd-bottom circle shape padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>Meet Out Volunteers</h2>
                    <span class="heading-border"></span>
                    <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
                </div><!-- /Section Heading -->
                <div class="team-wrapper row">
                    <div class="col-lg-6 sm-padding">
                        <div class="team-wrap row">
                            <div class="col-md-6">
                                <div class="team-details">
                                   <img src="{{ asset('assets-frontend/img/team-1.jpg')}}" alt="team">
                                    <div class="hover">
                                        <h3>Jonathan Smith <span>Communicator</span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-1 -->
                            <div class="col-md-6">
                                <div class="team-details">
                                   <img src="{{ asset('assets-frontend/img/team-2.png')}}" alt="team">
                                    <div class="hover">
                                        <h3>Angelina Rose <span>Certified Reader</span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-2 -->
                            <div class="col-md-6">
                                <div class="team-details">
                                    <img src="{{ asset('assets-frontend/img/team-2.png')}}" alt="team">
                                    <div class="hover">
                                        <h3>Taylor Swift <span>Event Creator</span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-3 -->
                            <div class="col-md-6">
                                <div class="team-details">
                                   <img src="{{ asset('assets-frontend/img/team-1.jpg')}}" alt="team">
                                    <div class="hover">
                                        <h3>Michel Brown <span>Internet Specialist</span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-4 -->
                        </div>
                    </div>
                    <div class="col-lg-6 sm-padding">
                        <div class="team-content">
                            <h2>Become a Volunteer?</h2>
                            <h3>Join your hand with us for a better life and beautiful future.</h3>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                            <ul class="check-list">
                                <li><i class="fa fa-check"></i>We are friendly to each other.</li>
                                <li><i class="fa fa-check"></i>If you join with us,We will give you free training.</li>
                                <li><i class="fa fa-check"></i>Its an opportunity to help poor children.</li>
                                <li><i class="fa fa-check"></i>No goal requirements.</li>
                                <li><i class="fa fa-check"></i>Joining is tottaly free. We dont need any money from you.</li>
                            </ul>
                            <a href="#" class="default-btn">Join With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Team Section -->
        
        <section id="counter" class="counter-section">
		    <div class="container">
                <ul class="row counters">
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i>₹</i>
                            <h3 class="counter">85389</h3>
                            <h4 class="text-white">Money Donated</h4>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-face-smile"></i>
                            <h3 class="counter">10693</h3>
                            <h4 class="text-white">Volunteer Around The World</h4>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-user"></i>
                            <h3 class="counter">50177</h3>
                            <h4 class="text-white">People Impacted</h4>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-comments"></i>
                            <h3 class="counter">669</h3>
                            <h4 class="text-white">Positive Feedbacks</h4>
                        </div>
                    </li>
                </ul>
		    </div>
		</section><!-- Counter Section -->
       
        <section class="events-section bg-grey bd-bottom padding">
           <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>Upcoming Events</h2>
                    <span class="heading-border"></span>
                    <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
                </div><!-- /Section Heading -->
                <div id="event-carousel" class="events-wrap owl-Carousel">
                    <div class="events-item">
                        <div class="event-thumb">
                           <img src="{{ asset('assets-frontend/img/events-1.jpg')}}" alt="events">
                        </div>
                        <div class="event-details">
                            <h3>Let's talk about the poor children.</h3>
                            <div class="event-info">
                                <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                                <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                            </div>
                            <p>Help today because tomorrow you may be the one who needs more helping!</p>
                            <a href="#" class="default-btn">Read More</a>
                        </div>
                    </div><!-- Event-1 -->
                    <div class="events-item">
                        <div class="event-thumb">
                           <img src="{{ asset('assets-frontend/img/events-2.jpg')}}" alt="events">
                        </div>
                        <div class="event-details">
                            <h3>Insure clean water to everyone in Slums.</h3>
                            <div class="event-info">
                                <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                                <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                            </div>
                            <p>Help today because tomorrow you may be the one who needs more helping!</p>
                            <a href="#" class="default-btn">Read More</a>
                        </div>
                    </div><!-- Event-2 -->
                    <div class="events-item">
                        <div class="event-thumb">
                           <img src="{{ asset('assets-frontend/img/events-3.jpg')}}" alt="events">
                        </div>
                        <div class="event-details">
                            <h3>Nepal Earthquake Clean Water Initiative.</h3>
                            <div class="event-info">
                                <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                                <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                            </div>
                            <p>Help today because tomorrow you may be the one who needs more helping!</p>
                            <a href="#" class="default-btn">Read More</a>
                        </div>
                    </div><!-- Event-3 -->
                </div>
           </div>
        </section><!-- Events Section -->
        
        <section class="testimonial-section bd-bottom padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>What People Say</h2>
                    <span class="heading-border"></span>
                    <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
                </div><!-- /Section Heading -->
                <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
                    <div class="testimonial-item">
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <div class="testi-footer">
                           <img src="{{ asset('assets-frontend/img/team-1.jpg')}}" alt="profile">
                            <h4>Jonathan Smith <span>Marketer</span></h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <div class="testi-footer">
                           <img src="{{ asset('assets-frontend/img/team-2.jpg')}}" alt="profile">
                            <h4>Angelina Rose <span>Designer</span></h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <div class="testi-footer">
                           <img src="{{ asset('assets-frontend/img/team-3.jpg')}}" alt="profile">
                            <h4>Taylor Swift <span>Developer</span></h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <div class="testi-footer">
                           <img src="{{ asset('assets-frontend/img/team-4.jpg')}}" alt="profile">
                            <h4>Michel Brown <span>Programer</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Testimonial Section -->
        
        <section class="blog-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>Recent Stories</h2>
                    <span class="heading-border"></span>
                    <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
                </div><!-- /Section Heading -->
                <div class="row">
                    <div class="col-lg-12 xs-padding">
                        <div class="blog-items grid-list row">
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="{{ asset('assets-frontend/img/home-blog-1.jpg')}}" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                        <h3><a href="#">The History of Donation Told</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 1 -->
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="{{ asset('assets-frontend/img/home-blog-2.jpg')}}" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                        <h3><a href="#">Help the Comunity</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 2 -->
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="{{ asset('assets-frontend/img/home-blog-3.jpg')}}" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                        <h3><a href="#">Charity Ever Rule the World?</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 3 -->
                        </div>
                    </div><!-- Blog Posts -->
                </div>
            </div>
        </section><!-- Blog Section -->
@endsection
