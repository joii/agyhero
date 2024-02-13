@extends('frontend.main_master')
@section('main')
 <!-- breadcrumb-area -->
 <section class="breadcrumb-area">
<div class="breadcrumb-bg" data-background="{{ asset('frontend/assets/img/why-us/banner.png')}}"></div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb-content">
                <h3 class="title">Why Us?</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">HOME</a></li>
                        <li class="breadcrumb-item active" aria-current="page">WHY US</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
</section>
<!-- breadcrumb-area-end -->

<!-- why-us-area -->
<section class="why-us-area pt-120 pb-70">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="section-title pr-80 mb-50 text-center">
                <h6 class="sub-title">Why Us</h6>
                <h2 class="title">
                    @if(session()->get('language') == 'english')
                    Agyhero Nursing Home Management & Franchise 
                    What makes it interesting?
                    @else
                    Agyhero Nursing Home  Management & Franchise น่าสนใจอย่างไร?
                    @endif


                </h2>
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-6 mb-30">
            <div class="why-us-bg-1">
                <div class="why-us-content">
                    <h6>
                    @if(session()->get('language') == 'english') 
                    Professional Management team
                    @else
                    ทีมงานมืออาชีพ
                    @endif
                    
                    </h6>
                    <p>
                    @if(session()->get('language') == 'english')    
                    The team has over 20 years of experience in the Nursing Home business, making them experts with profound knowledge and understanding.
                    @else
                    ทีมงานมีประสบการณ์ทางด้านธุรกิจ Nursing Home เกิน 20 ปี เป็นผู้เชี่ยวชาญที่มีความเชี่ยวชาญและความเข้าใจในด้่านธุรกิจ Nursing Home
                    @endif

                </p>
                </div>
            </div>
            
        </div>
        <div class="col-md-6  mb-30">
            <div class="why-us-bg-2">
                <div class="why-us-content">
                    <h6>
                    @if(session()->get('language') == 'english') 
                    Standard
                    @else
                    มาตรฐาน
                    @endif
                    
                    </h6>
                    <p>
                    @if(session()->get('language') == 'english')    
                    We have proprietary standard operating procedures (SOP) manuals in both business and staff training. Additionally, we adhere to ISO standards and comply with relevant laws.
                    @else
                    เรามีคู่มือมาตรฐานที่เป็นเอกสิทธิ์ในด้านธุรกิจและการอบรมพนักงาน (SOP) นอกจากนี้ยังรองรับมาตรฐาน ISO และเป็นไปตามกฏหมายที่เกี่ยวข้อง.
                    @endif

                </p>
                    
                </div>
            </div>
            
        </div>
        <div class="col-md-6  mb-30">
            <div class="why-us-bg-3">
                <div class="why-us-content">
                    <h6>
                    @if(session()->get('language') == 'english') 
                    Customer Base
                    @else
                    ฐานลูกค้า
                    @endif
                    
                    </h6>
                    <p>
                    @if(session()->get('language') == 'english')    
                    Our network includes influencers such as celebrities and medical professionals in marketing. Furthermore, we have a strong customer base through the channels of the robust BHS group.
                    @else
                    เรามีเครือข่าย Influencer เช่น ดารานักแสดงและแพทย์ในด้านการตลาด นอกจากนี้, เรายังมีฐานเครือข่ายลูกค้าจากช่องทางของเครือ BHS group ที่มีความแข็งแกร่ง.
                    @endif

                </p>
                   
                      </div>
            </div>
            
        </div>
        <div class="col-md-6  mb-30">
            <div class="why-us-bg-4">
                <div class="why-us-content">
                <h6>
                    @if(session()->get('language') == 'english') 
                    Partnerships
                    @else
                    ฐานลูกค้า
                    @endif
                    
                    </h6>
                 <p>
                    @if(session()->get('language') == 'english')    
                    Agyhero has business partnerships that enhance business value and market competitiveness. Examples include collaborations with Sleep Coach Thailand, Docare, and serving as an intermediary connecting businesses with partners like hospitals and insurance companies.
                    @else
                    Agyhero มีพันธมิตรทางธุรกิจที่ช่วยสร้างมูลค่าในธุรกิจและเพิ่มศักยภาพในการแข่งขันทางการตลาด เช่น Sleep Coach Thailand, Docare, รวมถึงการเป็นตัวกลางที่เชื่อมโยงการเข้าไปเจรจาธุรกิจกับพันธมิตรอื่นๆ เช่น โรงพยาบาลและบริษัทประกัน และอื่นๆ.
                    @endif

                </p>
                   
                    
                </div>
            </div>
            
        </div>
    </div>
</div>
</section>
<!-- why-us-area-end -->

<!-- nursing-home-vision -->
<section class="nursing-home-area our-vision-bg mb-0 ">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 vision-photo">
            
        </div>
        <div class="col-lg-6 nursing-home-content">
            <div class="section-title white-title mb-50">
                <h6 class="sub-title">Our Vision</h6>
                <h3 class="title">Company Established</h3>
                <p class="txt-white pt-20">
                @if(session()->get('language') == 'english')   
                    Under the visionary leadership of Chairman and Founder Mrs. Nittaya Chanaisawan, Agyhero has pioneered
                    the elderly care industry for over 20 years. This journey commenced with the establishment of a school offering short-term courses in elderly care and nursing assistance, eventually expanding into the Asia Nursing Home business. 
                <br/><br/>
                Further strides were made with the establishment of the Ishii Stroke Rehabilitation Center, focusing on specialized care for stroke patients. Initiatives like Amataya and Chanarak underscore our commitment to the growth of elderly care in society. In collaboration with Dr. Anucha Panoi, Agyhero is dedicated to advancing a business 
                well-prepared in medical, nursing, and technological aspects, providing comprehensive elderly care in Nursing Homes under the Agyhero company.
                @else
                จากวิสัยทัศน์ของประธานกรรมการและผู้ก่อตั้ง คุณนิตยา ชไนศวรรย์ เรื่องการดูแลผู้สูงอายุและการขับเคลื่อนธุรกิจดูแลผู้สูงอายุได้มีประสบการณ์ยาวนานกว่า 20 ปี โดยการเปิดโรงเรียนสอนหลักสูตรการดูแลผู้สูงอายุและผู้ช่วยพยาบาลระยะสั้น และให้บริการที่ Asia Nursing Home ซึ่งได้ขยายธุรกิจเข้าสู่กลุ่มเฉพาะทางผู้ป่วยโรคหลอดเลือดสมองที่ Ishii Stroke Rehabilitation Center นอกจากนี้ยังมีโครงการที่ดูแล อาธิ เช่น Amataya และ Chanarak ทำให้เห็นได้ว่าทิศทางการเติบโตของสังคมผู้สูงอายุนั้นสำคัญ จึงได้ร่วมมือกับ นายแพทย์อุชา พาน้อย ผู้ก่อตั้ง เพื่อขับเคลื่อนธุรกิจที่มีความพร้อมทั้งด้านการแพทย์ การพยาบาล และเทคโนโลยี เพื่อการดูแลผู้สูงอายุใน Nursing Home ภายใต้บริษัท Agyhero

                @endif
            
               </p>

        
            </div>
            
        </div>
        
    </div>
</div>
</section>
<!-- nursing-home-vision-end -->

<!-- services-area -->
<section class="market-area market-bg">
<div class="container">
    <div class="row ">
        <div class="col-lg-6">
            <div class="section-title mb-50 pt-50 ">
                <h6 class="sub-title">Nursing Home Market</h6>
                <h2 class="title">Age care. One of the most fruitful growth markets in the world.</h2>
                <p class="pt-20">
                @if(session()->get('language') == 'english')   
                    Age care. One of the most promising growth markets in the world. Business in elderly care is one of the industries with high growth potential worldwide.
                    Given the global demographic shift towards an aging society, the elderly care business has been experiencing continuous and substantial growth. The world now demands an aged care facility. Are you ready to supply it? The aging society has led to an increased demand for services. Are you ready?
                    <br/><br/>
                    Thailand is transitioning into a completely aging society. According to information from the Thai Business Analysis Center (ttb) report as of June 22, 2023, the business of elderly care centers is projected to grow at an average rate of 30.5% from 2024 to 2028. The Nursing Home business has a remarkable survival rate of up to 90.6%.
                    
                    @else
                    ธุรกิจดูแลผู้สูงอายุ หนึ่งในธุรกิจที่มีแนวโน้มการเติบของตลาดที่เต็มไปด้วยศักยภาพในโลก
                    จากภาพรวมทางโลก ที่มีการเปลี่ยนแปลงในทิศทางของสังคมผู้สูงอายุ ทำให้ธุรกิจดูแลผู้สูงอายุมีการเติบโตที่สูงมากและต่อเนื่อง
                    <br/><br/>
                    สังคมผู้สูงอายุทำให้ความต้องการสถานบริการเพิ่มสูงขึ้น,คุณพร้อมแล้วหรือยัง?
                    ประเทศไทยเข้าสู่สังคมผู้สูงอายุอย่างสมบูรณ์ จากการ อ้างอิงข้อมูลจากศูนย์วิเคราะห์ธุรกิจ ทีทีบี (ttb) รายงานฉบับวันที่ 22 มิถุนายน 2566  ธุรกิจศูนย์ ดูแลผู้สูงอายุในช่วงปี 2567-2571 จะมีการโตเฉลี่ย  30.5 %และ ธุรกิจ Nursing Home มีอัตราการรอดสูงถึง 90.6%
                                        
                    @endif
                </p>
            </div>
        </div>
        
    </div>
</div>
</section>
<!-- services-area-end -->


<!-- success location -->
<section class="why-us-area pt-120 pb-70" style="position: relative;">
<div class="location-description d-none d-md-block d-lg-block d-xl-block">500 BEDS CAPACITY<br/>
    200 HOUSES MONTHLY HOME <br/>SERVICES</div>
<div class="container">
    <div class="row justify-content-center" >
        
        <div class="col-lg-10">
            <div class="section-title pr-80 mb-50 text-center">
                <h6 class="sub-title">Our Nursing Home</h6>
                <h2 class="title">Our Nursing Home (Success Location) </h2>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4">
            <ul class="location-item-list">
                <li><strong>Asia nursing home</strong><br/>สาขาพัฒนาการ</li>
                <li><strong>Asia nursing home</strong><br/>สาขารามอินทรา</li>
                <li><strong>Ishii</strong><br/>สาขาเกษตรนวมินทร์</li>
                <li><strong>Asia nursing home</strong><br/>สาขาแจ้งวัฒนะ</li>
            </ul>
        </div>
        <div class="col-md-5 ">
            <img src="{{ asset('frontend/assets/img/why-us/success-location.png')}}"  class="d-none d-md-block d-lg-block d-xl-block" alt="AgyHero : THE NURSING HOME EXPERT" title="AgyHero : THE NURSING HOME EXPERT" />
            <ul class="location-item-list">
                <li><strong>Amataya</strong><br/>กระบี่</li>
                
            </ul>
        </div>
        <div class="col-md-3 order-order-first">
            <ul class="location-item-list-right ">
                <li><strong>Ishii</strong><br/>สาขาลาดพร้าว</li>
                <li><strong>Ishii</strong><br/>สาขาเจริญนคร</li>
                <li><strong>Chanarak</strong><br/>ราชบุรี</li>
            </ul>
        </div>
    </div>
</div>
</section>
<!-- success-location-end -->        


@endsection