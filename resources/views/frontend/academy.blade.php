@extends('frontend.main_master')
@section('main')
<!-- breadcrumb-area -->
<section class="breadcrumb-area">
<div class="breadcrumb-bg" data-background="{{ asset('frontend/assets/img/home/profit-academy.png')}}"></div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb-content">
                <h3 class="title">AgyHero Academy</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">HOME</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Academy Training Center</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
</section>
<!-- breadcrumb-area-end -->

<!-- acamedy-area -->
<section class="pt-50 pb-50">
<div class="container"> 
    <div class="row">
        <div class="col-md-12 text-center section-title">
            <h6 class="sub-title">Academy</h6>
                <h2 class="title">Academy Training Center </h2>  
                <p>
                    @if(session()->get('language') == 'english') 
                    Training courses for Elderly Caregivers and  Nurse Assistance
                     @else
                     หลักสูตรผู้ดูแลผู้สูงอายุ และอบรมผู้ช่วยพยาบาล
                    @endif
                </p>
        </div>
        
    </div>
    
</div>
</section>
<!-- acamedy-area-end -->

<!-- acamedy-area -->
<section>
<div class="container-fluid profit-home-bg">
        <div class="row justify-content-end">
            <div class="col-lg-6 academy-photo">
                
            </div>
            <div class="col-lg-6 profit-home-content ">
                <div class="section-title white-title mb-50">
                    <h6 class="sub-title txt-white">Academy Training Center</h6>
                    <h3 class="title txt-white">
                    @if(session()->get('language') == 'english') 
                    Training courses for Elderly Caregivers and  Nurse Assistance 
                    @else
                    หลักสูตรผู้ดูแลผู้สูงอายุ และอบรมผู้ช่วยพยาบาล
                    @endif
                        
                    </h3>
                    <p class=" txt-white pt-30">
                
                    @if(session()->get('language') == 'english') 
                    Agyhero and Bangkok Prince School address the needs of personnel by offering short-term training courses lasting 6 months for elderly care and nursing assistant roles. These programs aim to facilitate the registration of caregivers with the Ministry of Public Health.
                    @else
                    Agyhero และ โรงเรียนบางกอกพริ๊นซ์ บริบาล รองรับความต้องการของบุคคลากร โดยมีหลักสูตรฝึกอบรมระยะสั้น 6 เดือนสำหรับการดูแลผู้สูงอายุและเป็นผู้ช่วยพยาบาลเพื่อขอขึ้นทะเบียนใบอนุญาตผู้ดูแลกับหน่วยงานกระทรวงสาธารณสุข

                    @endif                      
                    </p>
                </div>
               
            </div>
            
        </div>
    </div>
    <div class="container-fluid profit-home-techonology-bg">
        <div class="row justify-content-end">
            
            <div class="col-lg-6 profit-home-content ">
                <div class="section-title white-title mb-50">
                    <h6 class="sub-title txt-purple">Academy Training Center</h6>
                    <h3 class="title txt-navy">
                        @if(session()->get('language') == 'english') 
                        Training in Nursing Home Business
                        @else
                        ฝึกอบรมด้านธุรกิจ Nursing Home
                        @endif
                    </h3>
                    <p class=" txt-navy pt-30">
                    @if(session()->get('language') == 'english')
                    Drawing from over 20 years of real business experience, we have designed a knowledge framework that empowers entrepreneurs to have a comprehensive 360-degree view of the elderly care business. This framework is aimed at providing insights and understanding across all aspects of the elderly care industry.                    
                    @else
                    จากประสบการณ์ธุรกิจจริงกว่า 20 ปี ได้ออกแบบองค์ความรู้ทางด้านธุรกิจที่ช่วยให้ผู้ประกอบการ สามารถ มองภาพรวมของธุรกิจดูแลผู้สูงอายุได้ครอบ 360 องศา     
                    @endif
                    </p>
                        
                </div>
               
            </div>
            <div class="col-lg-6 home-business-photo">
                
            </div>
        </div>
    </div>
    </section>
<!-- acamedy-area-end -->    

@endsection