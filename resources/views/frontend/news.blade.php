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
                        <li class="breadcrumb-item active" aria-current="page">News</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

</section>
<!-- breadcrumb-area-end -->
<!-- All News -->
<section>
<div class="container">
        <div class="row">
            <div class="col-lg-12 news-content ">
                <div class="section-title mb-80  text-center">
                    <h6 class="sub-title">NEWS</h6>
                    <h3 class="title">News and Events</h3>
                        
                </div>
            </div>
        </div>
        <div class="row ">
            @foreach($all_news as $item)
        
            <div class="col-lg-6" >
                <div class="blog-post-item bp-style-one mb-50" style="padding: 0;">
                    <div class="blog-post-thumb">
                        <a href="{{ route('news.details',$item->id) }}">
                            <img src="{{ asset($item->news_thumbnail) }}" alt="BHS collaborates with Doctor A to Z" title="BHS collaborates with Doctor A to Z" width="100%">
                            <div class="overlay-post-date text-center"> {{ Carbon\Carbon::parse($item->news_date)->isoFormat('MMM D') }} </div>
                        </a>
                    </div>
                    <div class="blog-post-content">
                        <h4><a href="{{ route('news.details',$item->id) }}">
                        @if(session()->get('language') == 'english')   
                        {{ $item->news_title_en }}
                        @else
                        {{ $item->news_title_th }}
                        @endif
                    
                       </a></h4>
                        <p>
                           @if(session()->get('language') == 'english')  
                           {{ $item->news_description_en }}
                            @else
                            {{ $item->news_description_th }}
                            @endif
                        
                        </p>
                        
                    </div>
                </div>
            </div>
            @endforeach
           
            
        </div>
        </div> 

    
</section>

<!--- All News End -->

@endsection