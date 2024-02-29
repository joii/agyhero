@extends('frontend.main_master')
@section('main')

@section('title')
HOME | AGYHERO | THE NURSING HOME EXPERT
@endsection

<!-- slider-area -->
@include('frontend.home_all.home_slide')
<!-- slider-area-end -->

<!-- about-area -->
@include('frontend.home_all.home_about')
<!-- about-area-end -->

<!-- whyus-area -->
@include('frontend.home_all.home_whyus')
<!-- whyus-area-end -->

 <!-- services-area -->
 @include('frontend.home_all.home_service')
<!-- services-area-end -->

 <!-- profit-area -->
 @include('frontend.home_all.home_profit')
<!-- profit-area-end -->

<!-- techonology-area -->
@include('frontend.home_all.home_technology')
<!-- techonology-area-end -->

<!-- news-area -->
@include('frontend.home_all.home_news')
<!-- news-area-end -->

<!-- partner-area -->
@include('frontend.home_all.home_partner')
<!-- partner-area-end -->

@endsection