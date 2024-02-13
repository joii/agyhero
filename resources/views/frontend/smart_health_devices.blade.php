@extends('frontend.main_master')
@section('main')
<!-- breadcrumb-area -->
<section class="breadcrumb-area">
<div class="breadcrumb-bg" data-background="{{ asset('frontend/assets/img/contact-expert/banner.png')}}"></div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb-content">
                <h3 class="title">Technology</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">HOME</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Smart Health Devices</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
</section>
<!-- breadcrumb-area-end -->

<!-- smart-health-device-area -->
<section class="pt-50 pb-50">
<div class="container">
    
    <div class="row">
        <div class="col-md-12 text-center section-title">
            <h6 class="sub-title">TECHNOLOGY</h6>
                <h2 class="title">Smart Health Devices </h2>  
                <p>
                    @if(session()->get('language') == 'english') 
                    Introducing our Smart Health Device for elderly care, a solution centered around an advanced online medical record system and the Internet of Medical Things (IoMT). For seniors with seamless connectivity and personalized experiences.
                    @else
                    ระบบบันทึกประวัติการรักษาทางการแพทย์แบบออนไลน์ (IoMT) สำหรับผู้สูงอายุ
                    @endif
                </p>
        </div>
        
    </div>
    
</div>
</section>
<!-- smart-health-device-area-end -->

<!-- smart-health-device-area -->
<section class="nursing-home-area our-vision-bg mb-0 ">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 smart-device-photo">
            
        </div>
        <div class="col-lg-6 nursing-home-content">
            <div class="section-title white-title mb-50">
                <h6 class="sub-title">Smart Health Device</h6>
                <h3 class="title">
                @if(session()->get('language') == 'english')  
                Patient Medical Record System
                @else
                ระบบบันทึกการดูแลผู้ป่วย
                @endif
               </h3>
                <p class="txt-white pt-20">
                @if(session()->get('language') == 'english')
                The patient care recording system is an online medical record-keeping system designed for elderly care. It facilitates systematic data storage, reducing paper usage and enabling easy information retrieval. It is scalable to support branch expansion, with an automatic alert system for family members. Enhance customer relationships with this system.
                @else
                ระบบบันทึกเวชระเบียนการดูแลผู้สูงอายุออนไลน์ เพื่อให้การจัดเก็บข้อมูลเป็นไปอย่างระบบ ลดใช้กระดาษ และเพิ่มความสะดวกในการค้นหาข้อมูล ระบบยังรองรับการขยายธุรกิจของคุณได้อย่างยืดหยุ่น พร้อมกับระบบแจ้งเตือนที่ทำงานโดยอัตโนมัติ เพื่อเพิ่มประสิทธิภาพในการดูแลและสร้างความสัมพันธ์เชิงบวกกับลูกค้าของเรา
                @endif
                </p>
            </div>

            
        </div>
    </div>
    <div class="container-fluid profit-home-techonology-bg">
        <div class="row justify-content-end">
            
            <div class="col-lg-6 profit-home-content ">
                <div class="section-title white-title mb-50">
                    <h6 class="sub-title txt-purple">Smart Health Device</h6>
                    <h3 class="title txt-navy">Internet of Medical Things (IOMT )</h3>
                    <p class=" txt-navy pt-30">
                    @if(session()->get('language') == 'english')
                    Smart health monitoring devices automatically record health measurements, enhancing the efficiency of caregivers. They provide real-time reporting of results to family members, contributing to effective caregiving.
                    @else
                    เครื่องมือตรวจวัดสุขภาพอัฉริยะที่สามารถบันทึกค่าการตรวจวัดโดยอัตโนมัติ เพิ่มประสิทธิภาพในการดำเนินงานของผู้ดูแล และนอกจากนี้ยังสามารถสร้างรายงานผลเพื่อให้แก่ญาติได้อย่างทันที ทั้งนี้เพื่อเสริมสร้างประสบการณ์การดูแลเหนือระดับ
                    @endif
                    </p>
                        
                </div>
               
            </div>
            <div class="col-lg-6 iomt-photo">
                
            </div>
        </div>
    </div>
</div>
</section>
<!-- smart-health-device-area-end -->

@endsection