@extends('frontend.main_master')
@section('main')
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.5431007977595!2d100.57271317466723!3d13.806394586591223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29d8ef2dc06b1%3A0xcb4279f52fb48ad5!2sCare-D%20Clinic!5e0!3m2!1sen!2sth!4v1706603923278!5m2!1sen!2sth" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        </div>
    </div>
</div>
</section>

<!-- use for map style --> 

<!-- Google-map-end -->
<!--Contact-info -->
<section class="pt-120 pb-70" style="margin-top: -200px;">
<div class="container">
    <div class="row justify-content-center">
        
    </div>
    <div class="row">
        <div class="col-md-4 ">
            <div class="contact-box contact-box-1">
                <h6 class="txt-purple">TEL</h6>
                <p class="txt-navy">+66(0)2000 0000</p>
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
                    <td><img src="img/icon/line-icon.png"  class="social-footer-icon" /> agyhero</td>
                    <td><img src="img/icon/fb-icon.png" class="social-footer-icon" /> agyhero</td>
                </tr>
                </table>
            </div>
            
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
var _latitude = 13.8063809;
var _longitude = 100.4928863;
init(_latitude, _longitude);
})(jQuery);
</script>

@endsection