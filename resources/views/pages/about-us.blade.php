@extends('layout.master')
@section('title')
{{ __('RATYM | About Us') }}
@endsection
@section('content') 
<div class="pager-header">
    <div class="container">
        <div class="page-content">
            <h2>About Us</h2>
            <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                <li class="breadcrumb-item active">About Us</li>
            </ol>
        </div>
    </div>
</div>
<section class="about-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="row about-wrap">
            <div class="col-md-6 xs-padding">
                <div class="about-image">
                    <img src="{{ asset('assets-frontend/img/about.jpg') }}" alt="about image">
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="about-content">
                    <h2>You are definitely intrigued to <br> discover who we are.</h2>
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                    <a href="#" class="default-btn">More About Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection