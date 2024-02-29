@extends('frontend.main_master')
@section('main')
@section('title')
HOME | AGYHERO | THE NURSING HOME EXPERT | Smart Health Device
@endsection
<!-- smart-health-device-area -->
<section class="nursing-home-area our-vision-bg mb-0 ">
<div class="container-fluid profit-home-techonology-bg">
        <div class="row justify-content-end">
            <div class="col-lg-6 profit-home-content ">
                <div class="section-title white-title mb-50">
                    <h6 class="sub-title txt-purple">Smart Health Device</h6>
                    <h3 class="title txt-navy">Smart Health Devices</h3>
                    <p>
                    @if(session()->get('language') == 'english') 
                    Introducing our Smart Health Device for elderly care, a solution centered around an advanced online medical record system and the Internet of Medical Things (IoMT). For seniors with seamless connectivity and personalized experiences.
                    @else
                    เทคโนโลยีรูปแบบใหม่สำหรับการดูแลผู้สูงอายุ เพื่อให้การดูแลและฟื้นฟูนั้นมีประสิทธิภาพ การนำเทคโนโลยีสมัยใหม่ทางการแพทย์ เป็นเรื่องที่จะช่วยทำให้เกิดความแตกต่างและได้ผลลัพธ์ของการดูแลสูงสุด                    @endif
                </p>       
                </div>
            </div>
            <div class="col-lg-6 iomt-photo">
                
            </div>
        </div>
        <div class="row">
        <div class="col-md-12 text-center section-title pb-50 pt-50">
            <h3 class="title txt-navy">Technology- Smart Health Device</h3>
                
        </div>
    </div>
 </section>
 <!-- smart-health-device-area-end -->
<!-- smart-health-device-area-start -->
<section class=" pb-70">
<div class="container">
    
    <div class="row">
        <div class="col-md-6 mb-30">
            <div class="device-box" >
                <div class="circle">01</div>
                <h3 class="title txt-purple pt-30">
                @if(session()->get('language') == 'english')  
                Patient Medical Record System
                @else
                ระบบบันทึกการดูแลผู้ป่วย
                @endif
               </h3>
                <p class=" pt-20">
                @if(session()->get('language') == 'english')
                The patient care recording system is an online medical record-keeping system designed for elderly care. It facilitates systematic data storage, reducing paper usage and enabling easy information retrieval. It is scalable to support branch expansion, with an automatic alert system for family members. Enhance customer relationships with this system.
                @else
                ระบบบันทึกเวชระเบียนการดูแลผู้สูงอายุออนไลน์ เพื่อให้การจัดเก็บข้อมูลเป็นไปอย่างระบบ ลดใช้กระดาษ และเพิ่มความสะดวกในการค้นหาข้อมูล ระบบยังรองรับการขยายธุรกิจของคุณได้อย่างยืดหยุ่น พร้อมกับระบบแจ้งเตือนที่ทำงานโดยอัตโนมัติ เพื่อเพิ่มประสิทธิภาพในการดูแลและสร้างความสัมพันธ์เชิงบวกกับลูกค้าของเรา
                @endif
                </p>
            
            </div>
            
        </div>
        <div class="col-md-6  mb-30">
            <div class="device-box">
                <div class="circle">02</div>
                <h3 class="title txt-purple pt-30">
                @if(session()->get('language') == 'english')  
                Internet of Medical Things (IOMT )
                @else
                ระบบบันทึกการดูแลผู้ป่วย
                @endif
               </h3>
                <p class=" pt-20">
                @if(session()->get('language') == 'english')
                Smart health monitoring devices automatically record health measurements, enhancing the efficiency of caregivers. They provide real-time reporting of results to family members, contributing to effective caregiving.
                @else
                เครื่องมือตรวจวัดสุขภาพอัฉริยะที่สามารถบันทึกค่าการตรวจวัดโดยอัตโนมัติ เพิ่มประสิทธิภาพในการดำเนินงานของผู้ดูแล และนอกจากนี้ยังสามารถสร้างรายงานผลเพื่อให้แก่ญาติได้อย่างทันที ทั้งนี้เพื่อเสริมสร้างประสบการณ์การดูแลเหนือระดับ
                @endif
                </p>
                
            </div>
            
        </div>
      
    </div>
</div>
</section>
<!-- smart-health-device-area-end -->
<section class="market-area smart-device-bg">
<div class="container">
    <div class="row ">
        <div class="col-lg-6">
            <div class="section-title mb-50 pt-50 ">
                <h2 class="title txt-navy">Intelligent Patient Care Management System.</h2>
                <div class="pt-20 intelligent-box">
                    <ul>
                        <li><img src="{{ asset('frontend/assets/img/icon/line-icon.png')}}" width="45" /></li>
                        <li>
                            <strong class="txt-uppercase">Deliver real-time updates </strong>
                             to relatives and family through the LINE Application group
                        </li>
                    </ul>
               
                </div>
                <div class="pt-20 intelligent-box">
                    <ul>
                        <li><img src="{{ asset('frontend/assets/img/home/more-smart-device-icon-2.png')}}"  width="45" /></li>
                        <li>
                        <strong class="txt-uppercase">Upgrade elderly care with our efficient paperless system</strong>, 
                        ensuring quick access to vital information for streamlined and sustainable service delivery.
        
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>
</section>

@endsection