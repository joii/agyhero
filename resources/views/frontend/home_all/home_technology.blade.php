<!-- techonology-area -->
            
<section class="technology-area technology-bg pt-70 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section-title text-center mb-80 ">
                <h6 class="sub-title txt-purple">OUR INNOVATIVE EXPERTISE</h6>
                <h3 class="title">Eldercare Technology</h3>
                    
            </div>
        </div>    
    </div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-12">
            @if(session()->get('language') == 'english')
                AGYHERO offers tailored solutions for businesses in the elderly care sector. Elevate your services with our expertise, technology, and innovative models designed to enhance elderly care experiences. A haven of specialized care and compassion. We prioritize the well-being of our seniors, providing a nurturing environment that integrates innovation, personalized attention, and top-notch medical expertise.
                @else
                AGYHERO นำเสนอระบบการบริหารที่ปรับให้เหมาะกับธุรกิจการดูแลผู้สูงอายุ ยกระดับบริการด้วยความเชี่ยวชาญ เทคโนโลยี และนวัตกรรมที่ออกแบบมา เพื่อการดูแลผู้สูงอายุ ด้วยหัวใจของการบริการ ความเป็นมนุษย์ ความเอาใจใส่ เราให้ความสำคัญกับความเป็นอยู่ที่ดีของผู้สูงอายุ จัดให้มีสภาพแวดล้อมที่เอื้ออำนวยต่อการดูแลทั้งจากนวัตกรรม ความเอาใจใส่จากเจ้าหน้าที่ผู้ดูแลผู้สูงอายุ และความเชี่ยวชาญทางการแพทย์ระดับแนวหน้า
                @endif
            </div>
            <div class="col-lg-7 pt-30">
                <ul class="no-bullets">
                @if(session()->get('language') == 'english')
                    <li><strong>Cutting-edge Innovations:</strong> Advanced technological solutions designed specifically for senior well-being.</li>
                    <li><strong>Comfort-Centric Design:</strong> Prioritizing comfort, safety, and ease of use for seniors.</li>
                    <li><strong>Health Monitoring Systems:</strong> Comprehensive tools for health tracking, ensuring proactive care.</li>
                    <li><strong>Empowering Seniors and Caregivers:</strong> State-of-the-art systems that empower both seniors and caregivers for improved quality of life.</li>
                    <li><strong>Tailored Solutions:</strong> Customized technology addressing unique needs in elderly care.</li>
                @else
                    <li><strong>Cutting-edge Innovations:</strong> ด้วยเทคโนโลยีที่ออกแบบมาเพื่อดูแลผู้สูงอายุโดยเฉพาะ</li>
                    <li><strong>Comfort-Centric Design:</strong> ให้ความสำคัญกับความสะดวกสบาย ความปลอดภัย และความสะดวกในการใช้งานสำหรับผู้สูงอายุ</li>
                    <li><strong>Health Monitoring Systems:</strong> เครื่องมือครบวงจรสำหรับการติดตามสุขภาพ มั่นใจในการดูแลอย่างใกล้ชิด</li>
                    <li><strong>Empowering Seniors and Caregivers:</strong> ระบบการดูแลที่ช่วยให้ทั้งผู้สูงอายุและผู้ดูแลมีคุณภาพชีวิตที่ดีขึ้น</li>
                    <li><strong>Tailored Solutions:</strong> เทคโนโลยีที่ปรับแต่งตามความต้องการเฉพาะในการดูแลผู้สูงอายุ</li>
     

                @endif
                
                
                </ul>
            </div>
            <div class="col-lg-5 pt-30 ">
                <img src="{{ asset('frontend/assets/img/home/innovation.png')}}" class="technology-lead-photo" alt="AgyHero : THE NURSING HOME EXPERT" title="AgyHero : THE NURSING HOME EXPERT"  />
                
            </div>
        </div>
    </div>
</section>
<!-- technology-area-end -->