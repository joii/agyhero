@php

 $news = App\Models\News::latest()->limit(2)->get();

@endphp
<!-- news -->
<section class="news-area news-bg ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 news-content ">
                <div class="section-title mb-80 ">
                    <h6 class="sub-title">NEWS</h6>
                    <h3 class="title">News and Events</h3>
                        
                </div>
            </div>
        </div>
    </div>
    <div class="container custom-container">
        <div class="row blog-active">
            @foreach($news as $item)
        
            <div class="col-md-6" >
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
<!-- news-end -->