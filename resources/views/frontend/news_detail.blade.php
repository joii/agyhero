@extends('frontend.main_master')
@section('main')
@section('title')
NEWS | AGYHERO | THE NURSING HOME EXPERT 
@endsection
 <!-- breadcrumb-area -->
 <section class="breadcrumb-area">
<div class="breadcrumb-bg" data-background="{{ asset('frontend/assets/img/why-us/banner.png')}}"></div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb-content">
                <h3 class="title">News</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">HOME</a></li>
                        <li class="breadcrumb-item " aria-current="page"><a href="{{route('home.news')}}">News</a></li>
                        <li class="breadcrumb-item active">
                        @if(session()->get('language') == 'english')
                        {{ $news->news_title_th }}
                        @else
                        {{ $news->news_title_en }}
                        @endif
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
</section>
<!-- breadcrumb-area-end -->

<!-- News-detail-area -->
<section class="nursing-home-business pt-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="section-title  text-center ">
                <h6 class="sub-title txt-purple">News</h6>
                <h3 class="title">
                    @if(session()->get('language') == 'english')
                    {{ $news->news_title_th }}
                    @else
                    {{ $news->news_title_en }}
                    @endif
                </h3>
                <p class="pt-50">
                <img src="{{ asset($news->news_image) }}" alt="{{ $news->news_title_th }}" title="{{ $news->news_title_th }}" width="100%"> 
                </p>
               
            </div>  
            <div class="pt-50 pb-50">
                      
                  <p class="home-news-date">{{ Carbon\Carbon::parse($news->news_date)->format('M d Y') }}</p>
                  <h4>
                  @if(session()->get('language') == 'english')  
                  {{ $news->news_description_en }}
                  @else
                  {{ $news->news_description_th }}
                  @endif
                  </h4>
                  <p>
                  @if(session()->get('language') == 'english')
                  {!! $news->news_detail_en !!}
                  @else
                  {!! $news->news_detail_th !!}
                  @endif
                  </p>
            </div>  
            </div>
        </div>  
    </div>
</section>        

<!-- News-detail-area-end -->


@endsection