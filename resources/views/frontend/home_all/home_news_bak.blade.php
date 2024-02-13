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
            <div class="col-lg-6" >
                <div class="blog-post-item bp-style-one mb-50" style="padding: 0;">
                    <div class="blog-post-thumb">
                        <a href="news-details.html">
                            <img src="{{ asset('frontend/assets/img/home/news-1.png')}}" alt="BHS collaborates with Doctor A to Z" title="BHS collaborates with Doctor A to Z" width="100%">
                            <div class="overlay-post-date">08 <span>feb</span></div>
                        </a>
                    </div>
                    <div class="blog-post-content">
                        <h4><a href="news-details.html">
                        @if(session()->get('language') == 'english')   
                        BHS collaborates with Doctor A to Z
                        @else
                        BHS จับมือ​ Doctor A to Z เปิดตัว Agyhero 
                        @endif
                    
                       </a></h4>
                        <p>
                           @if(session()->get('language') == 'english')  
                            BHS collaborates with
                            Doctor A to Z to launch Agyhero and the Elderly Care Business Forum 2022
                            @else
                            BHS จับมือ​ Doctor A to Z เปิดตัว Agyhero  และ Elderly Care Business Forum 2022
                            @endif
                        
                        </p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6" >
                <div class="blog-post-item bp-style-one mb-50" style="padding: 0;">
                    <div class="blog-post-thumb">
                        <a href="news-details.html">
                            <img src="{{ asset('frontend/assets/img/home/news-2.png')}}" alt=" Agyhero introduces a One Day Surgery Clinic" title=" Agyhero introduces a One Day Surgery Clinic" width="100%">
                            <div class="overlay-post-date">08 <span>feb</span></div>
                        </a>
                    </div>
                    <div class="blog-post-content">
                        <h4><a href="news-details.html">
                        @if(session()->get('language') == 'english')  
                        Agyhero introduces a One Day Surgery Clinic
                        @else
                            Agyhero เปิดตัว One day surgery clinic ผ่าตัดหลอดเลือดแบบไม่พักฟื้น
                        @endif
                    
                        </a></h4>
                        <p>
                          
                        @if(session()->get('language') == 'english')  
                        Agyhero introduces a One Day Surgery Clinic for non-recovery surgery, focusing on vascular procedures. 
                        @else
                        Agyhero เปิดตัว One day surgery clinic ผ่าตัดหลอดเลือดแบบไม่พักฟื้น
                        @endif
                        </p>
                        
                    </div>
                </div>
            </div>
            
        </div>
        </div> 
</section>
<!-- news-end -->