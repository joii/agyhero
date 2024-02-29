@extends('frontend.main_master')
@section('main')
@section('title')
CONTACT EXPERT | AGYHERO | THE NURSING HOME EXPERT 
@endsection
<!-- breadcrumb-area -->
<section class="breadcrumb-area">
<div class="breadcrumb-bg" data-background="{{ asset('frontend/assets/img/contact-expert/banner.png')}}"></div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb-content">
                <h3 class="title">Contact Expert</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">HOME</a></li>
                        <li class="breadcrumb-item active" aria-current="page">CONTACT EXPERT</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
</section>
<!-- breadcrumb-area-end -->

<!-- Google Map-->
<section>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 p-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.543567604464!2d100.57265847451593!3d13.806366496029028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29dfd21f5caaf%3A0x532522c4d3203cd2!2sWell%20Aesthetic%20%26%20Wellness%20Center!5e0!3m2!1sen!2sth!4v1708488119331!5m2!1sen!2sth" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
        </div>
    </div>
</div>
</section>

<!-- use for map style --> 

<!-- Google-map-end -->
<!--Contact-info -->
<section class="pt-120 pb-70" style="margin-top: -200px;">
<div class="container">
    <div class="row justify-content-center">
    <!-- https://lin.ee/cmfigrv -->
    </div>
    <div class="row">
        <div class="col-md-4 ">
            <div class="contact-box contact-box-1">
                <h6 class="txt-purple">TEL</h6>
                <p class="txt-navy">+66(0)65-986-5248</p>
            </div>                           
        </div>
        <div class="col-md-4 ">
            <div class="contact-box contact-box-2">
                <h6>E-MAIL</h6>
            <p>info@agyhero.com</p>
            </div>
        </div>
        <div class="col-md-4  mb-30">
            <div class="contact-box contact-box-3">
                <h6>SOCIAL MEDIA</h6>
                <table width="230" style="margin: 0 auto;">
                <tr>
                    <!-- <td><img src="{{ asset('frontend/assets/img/icon/line-icon.png')}}"  class="social-footer-icon" /> @agyhero</td>
                    <td><img src="{{ asset('frontend/assets/img/icon/fb-icon.png')}}" class="social-footer-icon" /> agyhero</td> -->
                    <td><a href="https://www.facebook.com/AgyheroNursingHomeExpert" target="_blank"><img src="{{ asset('frontend/assets/img/icon/fb-icon.png')}}" class="social-footer-icon" /></a></td>
                    <td><a href="https://www.youtube.com/@AgyHero-ff2uz" target="_blank"><img src="{{ asset('frontend/assets/img/icon/youtube-icon.png')}}" class="social-footer-icon" /></a></td>
                    <td><a href="https://www.instagram.com/agyhero/" target="_blank"><img src="{{ asset('frontend/assets/img/icon/ig-icon.png')}}" class="social-footer-icon" /></a></td>
                    <td><a href="https://www.tiktok.com/@agyhero.official?_t=8k0ZxQTsH2X&_r=1" target="_blank"><img src="{{ asset('frontend/assets/img/icon/tiktok-icon.png')}}" class="social-footer-icon" /></a></td>
                </tr>
                </table>
            </div>    
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4  ">
             <h3 class="txt-purple">
                @if(session()->get('language') == 'english') 
                Address
                @else
                ที่อยู่
                @endif
            </h3>
             <p>
             @if(session()->get('language') == 'english') 
             Well Aesthetic & Wellness Center Building<br/>
             8/2 Room No. A101-A104 <br/>
             Ratchadaphisek Rd, Chandra Kasem <br/>
             Chatuchak Bangkok 10900<br/>

             @else
             อาคาร Well Aesthetic & Wellness Center<br/>
             เลขที่ 8/2 ห้องเลขที่ A101-A104 <br/>
             ถ.รัชดาภิเษก แขวงจันทรเกษม เขตจตุจักร<br/>
              กรุงเทพมหานคร 10900<br/>
             @endif 

             </p>
            
        </div>
        <div class="col-md-3  ">
        <p>
             <a href="https://lin.ee/cmfigrv" target="_blank"><img src="{{asset('frontend/assets/img/logo/qr-line.jpg')}}" alt="Line AgyHero" title="Line AgyHero" width="180" /></a>

             </p>
        </div>
      
    </div>
</div>
</section>
<!-- Contact-info -end -->

<!-- use for map style --> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPZ-Erd-14Vf2AoPW2Pzlxssf6-2R3PPs"></script>
<script src="{{ asset('frontend/assets/js/map.scripts.js')}}"></script>
<script>
(function($){	
var _latitude = 13.8063613;
var _longitude = 100.5752334;
init(_latitude, _longitude);
})(jQuery);
</script>

@endsection