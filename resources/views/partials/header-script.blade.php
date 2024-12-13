<meta charset="utf-8">
<meta name="description" content="">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{{ $metaDetails->meta_tag_description ?? 'NGO/Charity/Fundraising ' }}">
<meta name="keywords" content="{{ $metaDetails->meta_keywords ?? 'NGO/Charity/Fundraising ' }}">
<meta name="tag" content="{{ $metaDetails->meta_tag ?? 'NGO/Charity/Fundraising ' }}">
<meta name="baseURL" content="{{ asset('/') }}">
<!-- <link rel="shortcut icon" href="{{ asset('assets-nsg/images/favicon.png')}}" type="image/png" /> -->
<link rel="shortcut icon" href="assets-frontend/img/logo.png" type="image/png" />
<title>@section('title')
        {{ config('app.name') }}
    @show
</title>
<link rel="stylesheet" href="{{ asset('assets-frontend/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets-frontend/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{ asset('assets-frontend/css/elegant-font-icons.css')}}">
<link rel="stylesheet" href="{{ asset('assets-frontend/css/elegant-line-icons.css')}}">
<link rel="stylesheet" href="{{ asset('assets-frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets-frontend/css/venobox/venobox.css')}}">
<link rel="stylesheet" href="{{ asset('assets-frontend/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{ asset('assets-frontend/css/slicknav.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets-frontend/css/css-animation.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets-frontend/css/nivo-slider.css')}}">
<link rel="stylesheet" href="{{ asset('assets-frontend/css/main.css')}}">
<link rel="stylesheet" href="{{ asset('assets-frontend/css/responsive.css')}}">

@stack('post-css')