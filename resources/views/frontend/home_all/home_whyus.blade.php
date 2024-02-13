<!-- why-us-area -->
<section class="why-us-area why-us-bg pt-50 pb-50 ">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-7">
                <div class=" pt-25">
                    <div class="why-us mb-20">
                        <button class="ml-0"><img src="{{ asset('frontend/assets/img/icon/team-icon.svg')}}" class="why-us-icon"/> Professional Team</button>
                        <button class="ml-0"><img src="{{ asset('frontend/assets/img/icon/inno-icon.svg')}}" class="why-us-icon"/> Innovation</button>
                        <button class="ml-0"><img src="{{ asset('frontend/assets/img/icon/family-icon.svg')}}" class="why-us-icon"/> Customer Database</button>
                        <button class="ml-0"><img src="{{ asset('frontend/assets/img/icon/experience-icon.svg')}}" class="why-us-icon"> Experiences</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="section-title pr-80 ">
                    <h6 class="sub-title txt-white">why us</h6>
                    <h3 class="title txt-white">
                        @if(session()->get('language') == 'english')
                        Agyhero Nursing Home Management & Franchise
                        @else
                        ฝึกอบรมด้านธุรกิจ Nursing Home
                        @endif
                    </h3>
                    <p class=" pt-20 txt-white">
                        @if(session()->get('language') == 'english')
                        With 20+ years of nursing home expertise, our team follows SOPs, ISO standards, and legal compliance. Our network includes influencers, and partnerships with entities like Sleep Coach Thailand and Docare boost business value by connecting with hospitals and insurance companies.
                        @else
                        จากประสบการณ์ธุรกิจจริงกว่า 20 ปี ได้ออกแบบองค์ความรู้ทางด้านธุรกิจที่ช่วยให้ผู้ประกอบการ สามารถ มองภาพรวมของธุรกิจดูแลผู้สูงอายุได้ครอบ 360 องศา
                        @endif
                    
                    </p>

                    
   

                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- why-us-area-end -->