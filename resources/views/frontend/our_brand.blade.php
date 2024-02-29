@extends('frontend.main_master')
@section('main')
@section('title')
OUR BRAND | AGYHERO | THE NURSING HOME EXPERT 
@endsection
 <!-- breadcrumb-area -->
 <section class="breadcrumb-area">
<div class="breadcrumb-bg" data-background="{{ asset('frontend/assets/img/our-brand/banner.png')}}"></div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb-content">
                <h3 class="title">Our Brand</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">HOME</a></li>
                        <li class="breadcrumb-item active" aria-current="page">OUR BRAND</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
</section>
<!-- breadcrumb-area-end -->

<!-- brand-vision-area -->
<section class="pt-50 pb-50">
<div class="container">
    
    <div class="row">
        <div class="col-md-12 text-center section-title">
            <h6 class="sub-title">Care -D Nursing Home Franchise</h6>
                <h2 class="title">Brand Vision </h2>  
        </div>
        
    </div>
    
</div>
</section>
<!-- brand-visio-area-end -->

<!-- brand-vision2-area -->
<section class="brand-vision brand-vision-bg">
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <div class="section-title mb-50 pt-50 ">
                <img src="{{ asset('frontend/assets/img/logo/logo_light_bg.png')}}" alt="AgyHero : THE NURSING HOME EXPERT" title="AgyHero : THE NURSING HOME EXPERT"  width="200" class="mb-20">
                <h2 class="title">Fulfilling happiness<br/>
                    for the elderly and<br/>
                    their families</h2>
                <p class="pt-20">
                    @if(session()->get('language') == 'english')
                    Establishing high-quality standards of care, our organization, Care-DNA, is dedicated to developing cutting-edge technologies tailored for the optimal well-being of 
                    the elderly. To adapt to ongoing changes, 
                    we aim to create a sustainable business ecosystem through strategic partnerships.
                    @else
                    สร้างคุณภาพและมาตรฐานการดูแล พัฒนาองค์กร ด้วย Care-DNA จัดหาและพัฒนาเทคโนโลยีที่ดีที่สุดสำหรับการดูแลผู้สูงอายุ เพื่อให้ก้าวทันการเปลี่ยนแปลง สร้างระบบนิเวศน์ของธุรกิจที่ยั่งยืนกับพันธมิตรทางธุรกิจ
                    @endif
                
                </p>
            </div>
        </div>
    </div>
    
</div>
</section>
<!-- brand-vision2-area-end -->

<!-- showroom-->
<section class=" pt-50">
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-6 col-sm-12 pt-30 ">
            <img src="{{ asset('frontend/assets/img/our-brand/showroom-1.png')}}" width="100%" alt="AgyHero : THE NURSING HOME EXPERT" title="AgyHero : THE NURSING HOME EXPERT"/>
        </div>  
        <div class="col-md-6 col-sm-12 pt-30">
            <img src="{{ asset('frontend/assets/img/our-brand/showroom-2.png')}}" width="100%" alt="AgyHero : THE NURSING HOME EXPERT" title="AgyHero : THE NURSING HOME EXPERT" />
        </div>  
        <div class="col-md-6 col-sm-12 pt-30">
            <img src="{{ asset('frontend/assets/img/our-brand/showroom-3.png')}}" width="100%" alt="AgyHero : THE NURSING HOME EXPERT" title="AgyHero : THE NURSING HOME EXPERT"/>
        </div>   
        <div class="col-md-6 col-sm-12 pt-30">
            <img src="{{ asset('frontend/assets/img/our-brand/showroom-4.png')}}" width="100%" alt="AgyHero : THE NURSING HOME EXPERT" title="AgyHero : THE NURSING HOME EXPERT"/>
        </div>  
        
    </div>
</div>
</section>
<!-- showroom-end-->

<!-- brand-concept-title -->
<section class="pt-70">
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8 text-center section-title">
        <h6 class="sub-title">OUR BRAND</h6>
        <h2 class="title">Brand Concept</h2>
        <p class="pt-20">
            @if(session()->get('language') == 'english')
            Nursing Home that provides care for the elderly with a human-centric approach, within a standardized environment and quality care.
It serves as an additional and comprehensive support for families in caring for the elderly, addressing every aspect, including physical, emotional, and spiritual well-being.
            @else
            Nursing Home ที่ดูแลผู้สูงอายุ ด้วยใจของมนุษย์ (Human-Centric Care) ภายใต้สภาพแวดล้อมและการดูแลที่มีมาตรฐาน เพื่อเป็นการสนับสนุนเสริมเติมสำหรับครอบครัวในการดูแลผู้สูงอายุในทุกมิติ ทั้งร่างกาย, จิตใจ, และจิตวิญญาณ
            @endif

        </p>
    </div>    
</div>

</div>
</section>
<!-- brand-concept-title-end -->
<!-- brand-concept -->
<section class="brand-concept-bg">
<div class="concept-photo-center d-none d-xl-block d-lg-block d-md-block"><img src="{{ asset('frontend/assets/img/our-brand/concept.png')}}" title="" alt="" width="90%" /></div>
<div class="container">
    <div class="row justify-content-center pt-50 pb-50">
    <div class="col-md-4 concept-body-area" >
        <h2>
            @if(session()->get('language') == 'english')
            Body
            @else 
            สุขภาพทั่วไป
            @endif
        
        </h2>
            <ul> 
            @if(session()->get('language') == 'english')
            <li><strong>Personal hygiene:</strong> enabling and supporting people to maintain their usual standards of hygiene.</li>
            <li><strong>Eating and nutritional care:</strong> providing meals that meet the service user's needs and preferences.</li>
            <li><strong>Choice and control:</strong> enabling service users to make choices about the care and treatment they receive.</li>
            <li><strong>Pain management: </strong>ensuring service users have the correct support and medication to manage their pain.</li>
    
            @else 
            <li><strong>Personal hygiene:</strong> ดูแลสุขภาพร่างกายให้เป็นไปตามเกณฑ์มาตรฐาน</li>
            <li><strong>Eating and nutritional care:</strong>การจัดเตรียมอาหารที่ตรงกับความต้องการและความชอบของผู้สูงอายุ</li>
            <li><strong>Choice and control:</strong> ให้ทางเลือกที่เหมาะสมในการดูแลและการรักษาที่จะได้รับ</li>
            <li><strong>Pain management: </strong>ตรวจสอบยาที่ใช้ดูแลผู้สูงอายุเป็นไปอย่างเหมาะสม</li>
    
            @endif
           </ul>
    </div>
    <div class="col-md-4 pt-30"></div>
    <div class="col-md-4 concept-dignity-area">
            <h2>
                @if(session()->get('language') == 'english')
                Dignity
                @else 
                สังคมและการอยู่ร่วมกัน
                @endif


            </h2>
            <ul>
            @if(session()->get('language') == 'english')
            <li><strong>Communication:</strong> speaking to people respectfullyand listening to what they have to say, this includes using their preferred method of communication.</li>
            <li><strong>Social inclusion:</strong> supporting people to keep in contact with loved ones and participate in social</li>
            <li><strong>activities where possible Practical assistance:</strong> providing service users with the correct level of support to maintain their independence.</li>
  
                @else 
                <li><strong>Communication:</strong> การพูดคุย ด้วยความเคารพและฟังความต้องการของผู้สูงอายุ</li>
            <li><strong>Social inclusion:</strong> การสร้างสังคมที่ดี มีปฏิสัมพันธ์กันด้วยความเข้าใจและโอบอ้อมอารี</li>
            <li><strong>activities where possible Practical assistance:</strong> สร้างกิจกรรมเพื่อให้เกิดความสัมพันธ์อันดี ในการอยู่ร่วมกัน</li>
  
  
                @endif
              </ul>
    </div>
</div>
</div>
</section>
<!-- brand-concept-end -->
<!-- respect -->
<section class="brand-respect-bg">
<div class="container">
<div class="row justify-content-center pt-50 pb-50">
    <div class="col-7 text-center">
        <h2 class="txt-purple ">
            @if(session()->get('language') == 'english')
            With Respect
            @else 
            เคารพและความเป็นส่วนตัว
            @endif

        </h2>
        @if(session()->get('language') == 'english')
        <p><strong>Confidentiality</strong> - ensuring all services are carried out with respect to agreed confidentiality and preference of personal space<br/>
        <strong>Beliefs</strong> - Being considerate of their religious and cultural beliefs</p>
            @else 
            <p><strong>Confidentiality</strong> - การดูแลเฉพาะบุคคล และรักษาความเป็นส่วนตัวสำหรับข้อมูลของผู้สูงอายุ<br/>
        <strong>Beliefs</strong> - เคารพความเชื่อและความแตกต่างของแต่ละบุคคล</p>
            @endif
    </div>
</div>    
</div>
</section>
<!-- respect-end -->

<!-- products-services -->
<section class="service-bg">
<div class="container">
    <div class="row justify-content-center pt-50 pb-50">
        <div class="col-10 text-center">
        <h6 class="sub-title txt-purple">OUR BRAND</h6>
        <h2 class="title">Brand Concept</h2> 
        <p>
            @if(session()->get('language') == 'english')
            Service offerings from Care-D Nursing Home are thoughtfully designed to be an integral part of family happiness and well-being
            @else
            บริการของ Care-D Nursing Home ออกแบบเพื่อเป็นส่วนสำคัญของความสุขและสมดุลของครอบครัว:
            @endif

        </p>
        </div>
        <div class="col-md-4 col-sm-12 pt-30 ">
        <div class="card product-item "> 
            <div class="card-body pt-50">
                <div class="service-circle product-color-0"><img src="{{ asset('frontend/assets/img/our-brand/icon-service-1.png')}}" alt="AgyHero : THE NURSING HOME EXPERT" title="AgyHero : THE NURSING HOME EXPERT"/></div>  
                @if(session()->get('language') == 'english')
                <h4 class="card-title text-center pt-20">Monthly Long-Term <br/>Elderly Care Service</h4>
                <ul>
                <li>Shared or single rooms are available.</li>
                <li>24/7 caregiver service.</li>
                <li>Inclusive of basic amenities such as meals and bedding.</li>
                <li>ctivities and fundamental physiotherapy.</li>
                <li>Additional services can be added based on individual needs and preferences.</li>
                </ul>
                @else
                <h4 class="card-title text-center pt-20">บริการดูแลผู้สูงอายุแบบระยะยาวรายเดือน</h4>
                <ul>
                <li>ห้องพักในรูปแบบห้องรวมหรือห้องเดี่ยว</li>
                <li>บริการผู้ดูแลตลอด 24 ชั่วโมง</li>
                <li>อาหารและเครื่องนุ่งห่มพื้นฐานรวม</li>
                <li>กิจกรรมนันทนาการและกายภาพบำบัดพื้นฐาน</li>
                <li>ค่าใช้จ่ายเพิ่มเติมสำหรับสิ่งอำนวยความสะดวกพิเศษ หรือบริการพิเศษต่าง ๆ ตามความต้องการ</li>
                </ul>
                @endif
            </div>
            <div class="product-item-footer product-color-4 text-center">35,000-45,000 @if(session()->get('language') == 'english') Baht / month @else บาท/เดือน @endif</div>
        </div>
    </div>  
    <div class="col-md-4 col-sm-12 pt-30">
        <div class="card product-item "> 
            <div class="card-body pt-50">
                <div class="service-circle product-color-0"><img src="{{ asset('frontend/assets/img/our-brand/icon-service-2.png')}}" alt="AgyHero : THE NURSING HOME EXPERT" title="AgyHero : THE NURSING HOME EXPERT"/></div>  
                @if(session()->get('language') == 'english')
                <h4 class="card-title text-center pt-20">Daily Care Service</h4>
                <ul>
                <li>Comprehensive day-long care services.</li>
                <li>Inclusive of caregiver support, meals, recreational activities, and basic physiotherapy.</li>
                </ul>
                @else
                <h4 class="card-title text-center pt-20">บริการดูแลรายวัน</h4>
                <ul>
                <li>บริการรับดูแลผู้สูงอายุตลอดวัน</li>
                <li>ผู้ดูแล, อาหาร, กิจกรรมนันทนาการ, และกายภาพบำบัดพื้นฐานรวม</li>
                </ul>
                @endif
            
            </div>
            <div class="product-item-footer product-color-4 text-center">1,500 @if(session()->get('language') == 'english') Baht / day @else บาท/วัน @endif</div>
        </div>
    </div>  
    <div class="col-md-4 col-sm-12 pt-30">
        <div class="card product-item "> 
            <div class="card-body pt-50">
                <div class="service-circle product-color-0"><img src="{{ asset('frontend/assets/img/our-brand/icon-service-3.png')}}" alt="AgyHero : THE NURSING HOME EXPERT" title="AgyHero : THE NURSING HOME EXPERT"/></div>  
                @if(session()->get('language') == 'english')
                <h4 class="card-title text-center pt-20">At-Home Care Service</h4>
                <ul>
                <li>Personalized elderly care services delivered directly to the individual's residence.</li>
                <li>Caregivers dispatched from the center to the home as per the user's requirement.</li>
                </ul>
                @else
                <h4 class="card-title text-center pt-20">บริการดูแลที่บ้าน</h4>
                <ul>
                <li>การจัดส่งผู้ดูแลมืออาชีพจากศูนย์ไปที่บ้านตามที่ผู้ใช้บริการต้องการ</li>
                </ul>
                @endif
            
            </div>
            <div class="product-item-footer product-color-4 text-center">35,000-45,000 @if(session()->get('language') == 'english') Baht / month @else บาท/เดือน @endif</div>
        </div>
    </div>   
    </div>    
</div>
</section>
<!-- products-services-end -->
<!-- strength-->
<section class="strength-bg" >
<div class="container strength-area">
    <div class="row justify-content-center pt-50 pb-50">
        <div class="col-10 text-center pb-50">
            <h6 class="sub-title txt-purple">OUR BRAND</h6>
            <h2 class="title">
                @if(session()->get('language') == 'english')
                Brand Care-D Nursing Home's strengths
                @else
                จุดแข็งของแบรนด์
                @endif
            </h2> 
        </div>
        <div class="col-md-6 ">  
            <div class="list-item">
                <div class="circle">01</div>    
                <div class="content"> 
                    @if(session()->get('language') == 'english')
                    <strong>Comprehensive Care Focus:</strong> Care-D Nursing Home emphasizes providing care in various forms, including daily home care services, center-based daily care, and long-term elderly care.
                    @else
                    <strong>เน้นในการดูแลทุกรูปแบบ:</strong> <br/>Care-D Nursing Home มุ่งเน้นในการให้บริการดูแลที่ครอบคลุมทุกรูปแบบ ทั้งการดูแลรายวันที่บ้าน, บริการดูแลรายวันที่ศูนย์, และบริการดูแลผู้สูงอายุแบบระยะยาว
                    @endif

                </div>
            </div>
            <div class="list-item">
                <div class="circle">02</div>    
                <div class="content"> 
                    @if(session()->get('language') == 'english')
                    <strong>Professional Team:</strong> With an experienced and highly skilled team, Care-D can deliver quality and expert care services.
                     @else
                    <strong>มีทีมงานมืออาชีพ:</strong> <br/>ด้วยทีมงานที่มีประสบการณ์และทักษะทางวิชาชีพที่สูง, Care-D สามารถให้บริการดูแลที่มีคุณภาพและเชี่ยวชาญ
                    @endif
                </div>
            </div>
            <div class="list-item">
                <div class="circle">03</div>    
                <div class="content"> 
                @if(session()->get('language') == 'english')
                    <strong>Standards and Quality:</strong> The brand adheres to strict standards and quality measures, following established business guidelines and standardized procedures (SOP).
                    @else
                    <strong>มาตรฐานและคุณภาพ:</strong> <br/>แบรนด์นี้มีมาตรฐานและคุณภาพที่ถูกจัดทำอย่างเข้มงวด ด้วยคู่มือมาตรฐานทางธุรกิจและขั้นตอนการทำงานที่มีมาตรฐาน (SOP)
                    @endif
                </div>
            </div>
            
        </div>
        <div class="col-md-6">
        <div class="list-item">
            <div class="circle">04</div>    
            <div class="content" > 
                @if(session()->get('language') == 'english')
                <strong>Trustworthiness:</strong> Care-D has gained trust from its customers by offering elderly-friendly services that cater to the needs of both the elderly and their families.
                    @else
                    <strong>ความน่าเชื่อถือ:</strong> <br/>Care-D ได้สร้างความน่าเชื่อถือจากลูกค้าด้วยการให้บริการที่เอื้อต่อผู้สูงอายุและครอบครัว
                @endif
                </div>
        </div>
        <div class="list-item">
            <div class="circle">05</div>    
            <div class="content"> 
                @if(session()->get('language') == 'english')
                <strong>Technology-Integrated Care:</strong> Care-D excels in providing care services by incorporating advanced technologies into its operations.
                        @else
                <strong>การดูแลที่มีเทคโนโลยี:</strong> <br/>ความล้ำลึกในการนำเทคโนโลยีเข้ามาช่วยในการดูแล, ทำให้ Care-D มีความเป็นเลิศในการให้บริการ
                @endif
            </div>
        </div>
        <div class="list-item">
            <div class="circle">06</div>    
            <div class="content"> 
                @if(session()->get('language') == 'english')
                <strong>Understand the Elderly's Needs:</strong> The brand places importance on understanding and adapting to the changing needs of the elderly, considering their environmental conditions.
                    @else
                <strong>ความเข้าใจความต้องการของผู้สูงอายุ:</strong> <br/>การให้ความสำคัญในการเข้าใจความต้องการและการปรับเปลี่ยนตามสภาพแวดล้อมของผู้สูงอายุ
                @endif
            </div>
        </div>
    </div>


       
        
    </div><!-- ./row-->
</div>        
</section>

<!-- strength-end-->

<!-- franchise-->
<section>
<div class="container franchise-area">
    <div class="row justify-content-center pt-50 pb-50">
        <div class="col-10 text-center pb-50">
            <h6 class="sub-title txt-purple">OUR BRAND</h6>
            <h2 class="title">
                @if(session()->get('language') == 'english')
                Investment Plan for Care-D Nursing Home Franchise
                @else
                แผนการลงทุนของ Franchisee
                @endif

            </h2> 
        </div>
        <div class="col-md-6 ">  
            <div class="list-item">
                <div class="circle">01</div>    
                <div class="content"> 
                    @if(session()->get('language') == 'english')
                    <strong>Franchise Fee:</strong> The initial cost to acquire the Care-D Nursing Home franchise, which includes the right to use the brand and benefit from the established business model
                    @else
                    <strong>ค่าธรรมเนียมแฟรนไชส์:</strong> ค่าใช้จ่ายเริ่มต้นเพื่อจะได้รับสิทธิ์ในการเป็นเจ้าของแฟรนไชส์ Care-D Nursing Home ซึ่งรวมถึงสิทธิ์ในการใช้แบรนด์และได้รับประโยชน์จากระบบธุรกิจที่กำหนดมา
                    @endif
                </div>
            </div>
            <div class="list-item">
                <div class="circle">02</div>    
                <div class="content"> 
                   @if(session()->get('language') == 'english')
                   <strong>Training and Support: </strong>Investment in training programs for franchisees and staff, ensuring they are well-equipped with the necessary skills and knowledge to operate the nursing home successfully.
                   @else
                    <strong>การฝึกอบรมและการสนับสนุน:</strong> การลงทุนในโปรแกรมฝึกอบรมสำหรับเจ้าของแฟรนไชส์และพนักงาน เพื่อให้พวกเขามีทักษะและความรู้ที่เพียงพอในการดำเนินธุรกิจ Nursing Home อย่างประสบความสำเร็จ
                    @endif
                 </div>
            </div>
            <div class="list-item">
                <div class="circle">03</div>    
                <div class="content"> 
                   @if(session()->get('language') == 'english')
                   <strong>Infrastructure Setup:</strong> Costs associated with setting up the physical infrastructure of the nursing home, including interior design, furnishings, and necessary equipment.
                   @else
                    <strong>การติดตั้งโครงสร้างพื้นฐาน:</strong> ค่าใช้จ่ายที่เกี่ยวข้องกับการติดตั้งโครงสร้างก่อสร้างของ Nursing Home รวมถึงการออกแบบภายใน การตกแต่งภายใน และอุปกรณ์ที่จำเป็น
การผสมเทคโนโลยี: การลงทุนในการใช้เทคโนโลยีที่เพิ่มประสิทธิภาพการดูแล ปรับปรุงการดำเนินงาน และเพิ่มความมีประสิทธิภาพทั้งหมด

                    @endif
                </div>
            </div>
            <div class="list-item">
                <div class="circle">04</div>    
                <div class="content"> 
                    @if(session()->get('language') == 'english')
                    <strong>Technology Integration:</strong> Investment in implementing technology solutions that enhance the quality of care, streamline operations, and improve overall efficiency.
                    @else
                    <strong>การผสมเทคโนโลยี:</strong>การลงทุนในการใช้เทคโนโลยีที่เพิ่มประสิทธิภาพการดูแล ปรับปรุงการดำเนินงาน และเพิ่มความมีประสิทธิภาพทั้งหมด
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="list-item">
                <div class="circle">05</div>    
                <div class="content"> 
                    @if(session()->get('language') == 'english')
                   <strong>Marketing and Branding:</strong> Allocated budget for Care-D Nursing Home franchise marketing and branding. Operational expenses cover day-to-day staffing, utilities, and maintenance. 
                   @else
                    <strong>การตลาดและการสร้างแบรนด์:</strong> งบประมาณที่จัดสรรสำหรับกิจกรรมการตลาดและการสร้างแบรนด์เพื่อโปรโมตแฟรนไชส์ Care-D Nursing Home ในตลาดเป้าหมายและดึงดูดลูกค้าเป้าหมาย
                    @endif
                </div>
            </div>
            <div class="list-item">
                <div class="circle">06</div>    
                <div class="content"> 
                    @if(session()->get('language') == 'english')
                    <strong>Compliance and Licensing:</strong> Budget for ensuring compliance with legal and licensing requirements, including obtaining necessary permits and certifications.
                    @else
                    <strong>กฎหมายและการได้รับใบอนุญาต:</strong> งบประมาณสำหรับการให้ความสอดคล้องกับกฎหมายและข้อกำหนดในการได้รับใบอนุญาต รวมถึงการขอใบอนุญาตและการได้รับการรับรองที่จำเป็น
                    @endif
                 </div>
            </div> 
            <div class="list-item">
                <div class="circle">07</div>    
                <div class="content"> 
                    @if(session()->get('language') == 'english')
                    <strong>Operational Expensesg:</strong> Covering day-to-day operational expenses, such as staffing, utilities, and ongoing maintenance.
                    @else
                    <strong>ค่าใช้จ่ายในการดำเนินงาน:</strong> ค่าใช้จ่ายประจำวันที่เกี่ยวข้องกับการดำเนินธุรกิจ เช่น ค่าจ้างพนักงาน ค่าสาธารณูปโภค และการบำรุงรักษาตลอดเวลา
                    @endif
                 </div>
            </div>   
            <div class="list-item">
                <div class="circle">08</div>    
                <div class="content"> 
                    @if(session()->get('language') == 'english')
                    <strong>Contingency Fund:</strong> A reserve fund set aside to address unforeseen expenses or challenges that may arise during the establishment and operation of the nursing home.
                    @else
                    <strong>กองทุนฉุกเฉิน:</strong> กองทุนสำรองที่ถูกสร้างขึ้นเพื่อจัดการกับค่าใช้จ่ายหรือปัญหาที่ไม่คาดคิดที่อาจจะเกิดขึ้น
                    @endif
                </div>
            </div>    
        </div>
    </div>
</div>        
</section>
<!-- franchise-end -->

<!-- franchisor-->
<section class="franchisor-bg">
<div class="container franchisor-area">
<div class="row justify-content-center  pt-50 pb-50">
    <div class="col-10 text-center pb-50">
        <h6 class="sub-title txt-white">OUR BRAND</h6>
        <h2 class="title txt-white">
            @if(session()->get('language') == 'english')
            What you will receive from the franchisor
            @else
            สิ่งที่จะได้รับจาก Franchisor
            @endif

        </h2> 
    </div>
    <div class="col-md-6 ">  
        <div class="list-item">
            <div class="circle">01</div>    
            <div class="content"> 
                @if(session()->get('language') == 'english')
                <strong>Brand Usage Rights:</strong> You will have the right to use the Care-D Nursing Home brand, which is trusted and recognized in the elderly care market.
                @else
                <strong>สิทธิ์ในการใช้แบรนด์:</strong> คุณจะได้รับสิทธิ์ในการใช้แบรนด์ Care-D Nursing Home ซึ่งเป็นสิ่งที่มีความน่าเชื่อถือและรู้จักในตลาดดูแลผู้สูงอายุ
                @endif
            </div>
        </div>
        <div class="list-item">
            <div class="circle">02</div>    
            <div class="content"> 
                @if(session()->get('language') == 'english')
                <strong>Training and Knowledge:</strong> You will receive training in both business and elderly care to effectively manage and operate your business.
                @else
                <strong>ฝึกอบรมและความรู้:</strong> คุณจะได้รับการฝึกอบรมทั้งในด้านธุรกิจและด้านการดูแลผู้สูงอายุ เพื่อให้คุณพร้อมที่จะบริหารและดำเนินธุรกิจได้อย่างมีประสิทธิภาพ
                @endif
            </div>
        </div>
        <div class="list-item">
            <div class="circle">03</div>    
            <div class="content"> 
                @if(session()->get('language') == 'english')
                <strong>Business Support:</strong> You will receive support from the internal team and franchise staff of Care-D Nursing Home in various aspects to assist and address any issues that may arise. 
                @else
                <strong>การสนับสนุนทางธุรกิจ:</strong> คุณจะได้รับการสนับสนุนจากทีมงานภายในและเจ้าหน้าที่แฟรนไชส์ Care-D Nursing Home ในด้านต่างๆ เพื่อช่วยเหลือและแก้ไขปัญหาที่อาจเกิดขึ้น
                @endif
            </div>
        </div>
        <div class="list-item">
            <div class="circle">04</div>    
            <div class="content"> 
                @if(session()->get('language') == 'english')
                <strong>Marketing Promotion:</strong> You will receive assistance in creating and conducting marketing activities to make your business known and attract customers.
                @else
                <strong>การส่งเสริมทางการตลาด:</strong> คุณจะได้รับการช่วยเหลือในการสร้างและดำเนินกิจกรรมทางการตลาด เพื่อให้กิจการของคุณเป็นที่รู้จักและดึงดูดลูกค้า
                @endif
            </div>
        </div>
        <div class="list-item">
            <div class="circle">05</div>    
            <div class="content"> 
                @if(session()->get('language') == 'english')
                <strong>Innovation and Technology:</strong> You will be informed about innovations and technologies that can be implemented to enhance the efficiency of elderly care services.
                @else
                <strong>นวัตกรรมและเทคโนโลยี:</strong> คุณจะได้รับข้อมูลเกี่ยวกับนวัตกรรมและเทคโนโลยีที่สามารถนำเข้าไปใช้ในการดูแลผู้สูงอายุเพื่อเพิ่มประสิทธิภาพในการให้บริการ
                @endif
            </div>
        </div>    
    </div>
    <div class="col-md-6 ">  
        <div class="list-item">
            <div class="circle">06</div>    
            <div class="content"> 
                @if(session()->get('language') == 'english')
                <strong>Analytical Management Systems:</strong> You will have access to analytical management systems that assist in managing and tracking the efficiency of your business.
                @else
                <strong>ส่งเสริมและสนับสนุนให้เข้าถึงเทคโนโลยีนวัตกรรม:</strong> คุณจะได้รับการเข้าถึงระบบบริหารที่เครื่องเคราะห์ที่ช่วยในการจัดการและติดตามประสิทธิภาพของธุรกิจ
                @endif
            </div>
        </div> 
        <div class="list-item">
            <div class="circle">07</div>    
            <div class="content"> 
                @if(session()->get('language') == 'english')
                <strong>Standard Certification:</strong> You will receive assistance in ensuring that your business meets relevant standards.
                @else
                <strong>การรับรองมาตรฐาน:</strong> คุณจะได้รับการช่วยเหลือในการทำให้ธุรกิจของคุณได้รับการรับรองตามมาตรฐานที่เกี่ยวข้อง
                @endif
            </div>
        </div>  
        <div class="list-item">
            <div class="circle">08</div>    
            <div class="content"> 
                @if(session()->get('language') == 'english')
                <strong>Public Relations:</strong> You will receive assistance in managing media and public relations to enhance the brand image of your Care-D Nursing Home in the market.
                @else
                <strong>การประชาสัมพันธ์: </strong> คุณจะได้รับการช่วยเหลือในการจัดการกับสื่อและการประชาสัมพันธ์เพื่อเสริมโฉมแบรนด์ Care-D Nursing Home ของคุณในตลาด
                @endif
            </div>    
        </div>
        <div class="list-item">
            <div class="circle">09</div>    
            <div class="content"> 
                @if(session()->get('language') == 'english')
                <strong>Business Partnerships:</strong> Assistance in forming beneficial business partnerships and ongoing support from experienced management and staff.
                @else
                <strong>คู่ค้าและพันธมิตรธุรกิจ:</strong> คุณจะได้รับการช่วยเหลือในการค้นหาและเข้าสู่คู่ค้าและสร้างพันธมิตรธุรกิจที่สามารถสนับสนุนและเสริมสร้างธุรกิจของคุณได้. นอกจากนี้, คุณยังจะได้รับการควบคุมและการสนับสนุนจากฝ่ายบริหารและทีมงานที่มีประสบการณ์.
                @endif
            </div>    
        </div>
    </div>
</div>    
</div>
</section>

<!-- franchisor-end -->

<!-- Model-->
<section>
<div class="container">
    <div class="row justify-content-center  pt-50 pb-50">
        <div class="col-10 text-center pb-50">
            <h6 class="sub-title txt-purple">Nursing Home -Home Model</h6>
            <h2 class="title ">
            @if(session()->get('language') == 'english')   
            Create value for old buildings to support the Mega Trend <br/>Nursing Home - Home Model business.
            @else
            สร้างมูลค่าตึกหรืออาคารเก่า ให้รองรับธุรกิจ Mega trend
            @endif
            </h2> 
        </div>
        <div class="col-md-6 col-sm-12  ">
            <img src="{{ asset('frontend/assets/img/our-brand/model-1.png')}}" alt="AgyHero : THE NURSING HOME EXPERT" title="AgyHero : THE NURSING HOME EXPERT" width="100%"/>
            <p class="text-center model-title">Nursing Home - Low rise building model</p>
        </div>
        <div class="col-md-6 col-sm-12  ">
            <img src="{{ asset('frontend/assets/img/our-brand/model-2.png')}}" alt="AgyHero : THE NURSING HOME EXPERT" title="AgyHero : THE NURSING HOME EXPERT" width="100%"/>
            <p class="text-center model-title">Nursing Home : Hotel Model</p>
        </div>
    </div>
    
</div>        

</section>

<!-- Model-end -->
            

@endsection