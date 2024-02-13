@extends('frontend.main_master')
@section('main')
 <!-- breadcrumb-area -->
 <section class="breadcrumb-area">
    <div class="breadcrumb-bg" data-background="{{asset('frontend/assets/img/nursing-home-business/banner.png')}}"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h3 class="title">Nursing Home Business</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Nursing Home Business</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->
<!-- nursing-home-business -->
<section class="nursing-home-business pt-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section-title text-center ">
                <h6 class="sub-title txt-purple">Nursing Home Business</h6>
                <h3 class="title">
                    @if(session()->get('language') == 'english')
                    Nursing Home Business Assistants
                    @else
                    ผู้ช่วยทางธุรกิจ Nursing Home 
                    @endif
                </h3>
                <div style="margin: 0 auto;" class="col-8">
                    <div  class="txt-percent txt-purple">80% </div>
                    <div class="nursing-home-business-intro pt-30" style="margin-top: -20px;">
                        
                    @if(session()->get('language') == 'english')
                    of Nursing Home operators, both medium and small-sized, 
                        are currently facing the following challenges:
                    @else
                    ของผู้ประกอบการธุรกิจ Nursing Home ขนาดกลางและขนาดเล็ก กำลังเผชิญปัญหา เหล่านี้ ?
                    @endif
                    </div>
                </div>
                    
            </div>
        </div>  
        <div class="row mb-50">
            <div class="col-md-6 ">  
                <div class="list-item">
                    <div class="circle">01</div>    
                    <div class="content">
                    @if(session()->get('language') == 'english')
                    <strong>Lack of Customers:</strong> Difficulty in marketing efforts, leading to challenges in closing sales.
                    @else
                    ไม่มีลูกค้า ทำการตลาดไม่เป็น ปิดงานขายไม่ได้
                    @endif
                       
                    </div>
                </div>
                <div class="list-item">
                    <div class="circle">02</div>    
                    <div class="content"> 
                    @if(session()->get('language') == 'english')
                    <strong>Overwhelming Owner Responsibilities: </strong>
                        Owners find it challenging to manage all aspects of 
                        the business due to time constraints, 
                        impacting service quality.
                    @else
                     เจ้าของต้องดูทุกเรื่อง ไม่มีเวลา ห่วงคุณภาพ
                    @endif
                    
                    </div>
                </div>
                <div class="list-item">
                    <div class="circle">03</div>    
                    <div class="content"> 
                    @if(session()->get('language') == 'english')
                    <strong>Unorganized Data Management:</strong> Lack of systematic data storage and organization.
                    @else
                    การจัดเก็บข้อมูลไม่เป็นระบบ

                    @endif
                    </div>
                </div>
                <div class="list-item">
                    <div class="circle">04</div>    
                    <div class="content">
                        
                    @if(session()->get('language') == 'english')
                    <strong>Business Expansion Hurdles:</strong> Difficulty in expanding the business due to various reasons.
                    @else
                    ขยายธุรกิจไม่ได้
                    @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="list-item">
                    <div class="circle">05</div>    
                    <div class="content"> 
                    @if(session()->get('language') == 'english')
                    <strong>Staff Shortage:</strong> Facing challenges in recruiting and retaining quality staff.
                    @else
                    ขาดพนักงาน ขาดพนักงานที่มีคุณภาพ
                    @endif
                    </div>
                </div>
                <div class="list-item">
                    <div class="circle">06</div>    
                    <div class="content"> 
                    @if(session()->get('language') == 'english')
                    <strong>Legal Compliance Issues:</strong> Struggling to comply with regulations such as the Nursing Home Act and PDPA (Personal Data Protection Act).
                
                    @else
                    ไม่สามารถปฏิบัติตามข้อกฏหมาย,สบส,PDPA
                    @endif
                    </div>
                </div>
                <div class="list-item">
                    <div class="circle">07</div>    
                    <div class="content"> 
                    @if(session()->get('language') == 'english')
                    <strong>Uncertain Profitability and True Costs:</strong> Lack of profitability, coupled with uncertainty regarding the true costs within the business.
                
                    @else
                    ไม่มีกำไรไม่รู้ต้นทุนแท้จริง ทางธุรกิจ

                    @endif
                    </div>
                </div>
            </div>
            
        </div>  
    </div>
</section>
<!-- nursing-home-business-end -->


<section>
    <!--Nursing Home Management -->
    <div class="container-fluid nursing-home-management-bg">
    <div class="row justify-content-end">
        <div class="col-lg-6 nursing-home-management-photo">
            
        </div>
        <div class="col-lg-6 profit-home-content ">
            <div class="section-title white-title mb-50">
                <h6 class="sub-title">Nursing Home Business</h6>
                <h3 class="title">Nursing Home Management</h3>
                <p class=" pt-30 txt-white">
                    @if(session()->get('language') == 'english')
                    For business owners facing challenges in managing a Nursing Home, Agyhero serves as a modern tool that assists in comprehensive business management. It provides support across all dimensions of the business, from strategic business planning, operational practices, marketing and sales, to quality assurance and legal compliance. The key aspect is that Agyhero empowers business owners to confidently expand their investments.
                    @else
                    สำหรับเจ้าของธุรกิจ Nursing Home ที่กำลังเผชิญกับความยากลำบากในการบริหารจัดการธุรกิจ, Agyhero เป็นเครื่องมือช่วยที่ทันสมัยที่สามารถช่วยบริหารจัดการทุกด้านของธุรกิจคุณ โดยมอบการช่วยเหลือที่ครอบคลุมทุกมิติของธุรกิจ ทั้งจากการวางแผนทางธุรกิจ, ด้านปฏิบัติการ, การตลาดและการขาย, รวมถึงด้านคุณภาพและกฏหมาย ที่สำคัญคือ Agyhero ช่วยให้เจ้าของธุรกิจสามารถขยายการลงทุนของตนได้อย่างมั่นใจ"
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>
    <!--Nursing Home Management End -->
    <!--Nursing Home Franchise -->
<div class="container-fluid nursing-home-franchise-bg">
    <div class="row justify-content-end">
        
        <div class="col-lg-6 nursing-home-management-content ">
            <div class="section-title white-title mb-50">
                <h6 class="sub-title txt-purple">Nursing Home BusinessY</h6>
                <h3 class="title txt-navy">Nursing Home Franchises</h3>
                <p class=" txt-navy pt-30">
                    @if(session()->get('language') == 'english')
                    Introducing our Smart Health Device for elderly care,
                    For business owners looking for a Nursing Home brand ready to expand in terms of brand image, design, 
                    and a business plan geared towards global expansion, Care-D Nursing Home by Agyhero is the suitable choice.
                    @else
                    "สำหรับผู้ประกอบธุรกิจที่กำลังมองหาแบรนด์ Nursing Home ที่พร้อมที่จะขยายตลาด ทั้งในด้านภาพลักษณ์แบรนด์, การออกแบบ, และแผนธุรกิจที่พร้อมที่จะขยายสู่ระดับสากล, Care-D Nursing Home by Agyhero เป็นตัวเลือกที่เหมาะสม."
                    @endif
                </p>
            </div>

        </div>
        <div class="col-lg-6 nursing-home-franchise-photo">
            
        </div>
    </div>
</div>
    <!--Nursing Home Franchise End -->
    <!--Business Solution -->
<div class="container-fluid nursing-home-solution-bg">
    <div class="row justify-content-end">
        <div class="col-lg-6 nursing-home-solution-photo">
            
        </div>
        <div class="col-lg-6 nursing-home-management-content ">
            <div class="section-title white-title mb-50">
                <h6 class="sub-title txt-white">Nursing Home Business</h6>
                <h3 class="title txt-white">Business Solution</h3>
                <p class=" txt-white pt-10">
                    <ul class="business-solution-list">
                    @if(session()->get('language') == 'english')
                        <li>1. Professional Management team</li>
                        <li>2. Marketing & Sale</li>
                        <li>3. Quality assurance & Standard of procedure</li>
                        <li>4. System & Technology</li>
                        <li>5. People & Training</li>
                        <li>6. Maximize profit</li>

                    @else

                    <li>1.ทีมงานมืออาชีพ ประสบการณ์ธุรกิจ 20 ปี</li>
                    <li>2.ศักยภาพด้านการตลาดและงานขาย</li>
                    <li>3.มาตรฐานธุรกิจ และคุณภาพ</li>
                    <li>4.ระบบบริหารจัดการและเทคโนโลยี</li>
                    <li>5.บุคคลากรและการฝึกอบรม</li>
                    <li>6.เพิ่มProfit อย่างยั่งยืน</li>
                   
                    @endif

                    </ul>
                </p>
            </div>
            
        </div>
        
    </div>
</div>
    <!--Business Solution End-->
</section>

<!-- Who-->

<section class="who-area  pt-70 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section-title text-center mb-80 ">
                <h6 class="sub-title txt-purple">Nursing Home Business</h6>
                <h3 class="title">Who can partner with us</h3>
                    
            </div>
        </div>    
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="list-item">
                    <div class="circle">01</div>    
                    <div class="content">
                        <strong>Building Owners</strong><br/>
                            @if(session()->get('language') == 'english')
                            Whether you own an old house, old building, hotel, or apartment that is not being utilized to its full potential, a Nursing Home business can help create value and increase asset value for you.
                            @else
                            ไม่ว่าคุณเป็นเจ้าของบ้านเก่า, ตึกเก่า, โรงแรม, หรืออพาร์ทเม้นท์ที่ยังไม่ได้ใช้ประโยชน์อย่างเต็มที่, ธุรกิจ Nursing Home สามารถช่วยสร้างมูลค่าและเพิ่มมูลค่าสินทรัพย์ให้คุณได้
                            @endif 

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="list-item">
                    <div class="circle">02</div>    
                    <div class="content"> 
                        <strong>Franchise Investor</strong><br/>
                            @if(session()->get('language') == 'english')
                            Agyhero is actively seeking franchise partners with a vision for developing business opportunities in elderly care.
                            @else
                            Agyhero กำลังมองหาพันธมิตรแฟรนไชส์ที่มีวิสัยทัศน์ในการพัฒนาธุรกิจด้านการดูแลผู้สูงอายุ
                           @endif 
                               
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="list-item">
                    <div class="circle">03</div>    
                    <div class="content">
                        <strong>Developer & Investor</strong><br/>
                           @if(session()->get('language') == 'english')
                           For real estate businesses and investors seeking opportunities to expand their ventures, we specialize in assisting you in the development and enhancement of your project space, ultimately increasing its overall value.
                            @else
                            สำหรับธุรกิจอสังหาและนักลงทุนที่กำลังมองหาโครงการที่จะสร้างการเติบโตในธุรกิจ, เราเป็นผู้ช่วยให้คุณพัฒนาและเพิ่มมูลค่าพื้นที่โครงการของคุณได้
                           @endif 
                      </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="list-item">
                    <div class="circle">04</div>    
                    <div class="content"> 
                        <strong>Nursing Home Business Owner</strong><br/>
                        @if(session()->get('language') == 'english')
                        For Nursing Home business owners looking for professional management to support business expansion and competitiveness, joining forces with us provides centralized benefits in marketing, quality development, technology, and workforce resources.Developer & Investor.
                        @else
                        สำหรับเจ้าของธุรกิจ Nursing Home ที่ต้องการการบริหารจัดการมืออาชีพเพื่อรองรับการขยายธุรกิจและการแข่งขัน การเข้าร่วมกับเราทำให้ได้รับประโยชน์จากการตลาด, การพัฒนาคุณภาพ, เทคโนโลยี, และทรัพยากรแรงงาน
                           @endif 
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Who end-->

        
@endsection