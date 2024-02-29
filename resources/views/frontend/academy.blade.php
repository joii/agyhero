@extends('frontend.main_master')
@section('main')
@section('title')
ACADEMY | AGYHERO | THE NURSING HOME EXPERT 
@endsection
<!-- acamedy-area -->
<section>
<div class="container-fluid profit-home-bg">
        <div class="row ">
            <div class="col-lg-6 academy-home-photo min-h-200">
            </div>
            <div class="col-lg-6 profit-home-content ">
                <div class="section-title white-title mb-50 min-h-200">
                    <h6 class="sub-title txt-white">ACADEMY</h6>
                    <h3 class="title txt-white">
                        @if(session()->get('language') == 'english') 
                        Academy Training Center
                        @else
                        หลักสูตรผู้ดูแลผู้สูงอายุ และอบรมผู้ช่วยพยาบาล
                        @endif

                    </h3>
                    <p class=" txt-white pt-30">
                        @if(session()->get('language') == 'english') 
                        We empower nurses with specialized training and invite forward-thinking partners to revolutionize eldercare. Experience the synergy of expertise and collaboration.
                        @else
                    
                        สร้างความเชี่ยวชาญในการดูแลผู้สูงอายุ ด้วยการฝึกอบรมเฉพาะทาง ให้กับเจ้าหน้าที่ดูแลผู้สูงอายุด้วยองค์ความรู้จากพยาบาลวิชาชีพเฉพาะทางสำหรับการดูแลผู้สูงอายุโดยเฉพาะ ทำให้เจ้าหน้าที่ดูแลผู้สูงอายุนั้น สามารถทำงานร่วมกับพยาบาลวิชาชีพได้เป็นอย่างดี
                                           
                    
                        @endif
                   
                    </p>
                </div>
                
            </div>
            
        </div>
    </div>
</section>
<!-- acamedy-area -->
<section class="market-area academy-bg">
<div class="container">
    <div class="row ">
        <div class="col-lg-6">
            <div class="section-title mb-50 pt-50 ">

                <h2 class="title txt-navy">
                    @if(session()->get('language') == 'english') 
                    Agyhero and 
                    @else
                    Agyhero และ
                    @endif
                <br/>
                <span class="txt-purple">Bangkok Prince School</span></h2>
                <div class="pt-20 ">    
                    @if(session()->get('language') == 'english') 
                    Agyhero and Bangkok Prince School address the needs of personnel by offering short-term training courses lasting 6 months for elderly care and nursing assistant roles. These programs aim to facilitate the registration of caregivers with the Ministry of Public Health.
                    @else
                    Agyhero และ โรงเรียนบางกอกพริ๊นซ์ บริบาล รองรับความต้องการของบุคคลากร โดยมีหลักสูตรฝึกอบรมระยะสั้น 6 เดือนสำหรับการดูแลผู้สูงอายุและเป็นผู้ช่วยพยาบาลเพื่อขอขึ้นทะเบียนใบอนุญาตผู้ดูแลกับหน่วยงานกระทรวงสาธารณสุข
                    @endif    
                </div>
                
            </div>
        </div>
        
    </div>
</div>
</section>


<!-- acamedy-area-end -->

<!-- acamedy-area -->  
<section class=" pt-50 pb-70">
<div class="container">
    <div class="row justify-content-center">
    <div class="col-10">
                <div class="section-title mb-50 text-center">
                  <h3 class="title">
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
        <div class="col-md-6 col-sm-12 pt-30 ">
            <img src="{{ asset('frontend/assets/img/home/more-academy-2.png')}}" width="100%" alt="AgyHero : THE NURSING HOME EXPERT" title="AgyHero : THE NURSING HOME EXPERT">
        </div>  
        <div class="col-md-6 col-sm-12 pt-30">
            <img src="{{ asset('frontend/assets/img/home/more-academy-3.png')}}" width="100%" alt="AgyHero : THE NURSING HOME EXPERT" title="AgyHero : THE NURSING HOME EXPERT">
        </div>  
       
        
    </div>
</div>
</section>
<!-- acamedy-area-end -->  
@endsection