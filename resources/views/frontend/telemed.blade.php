@extends('frontend.main_master')
@section('main')
 <!-- breadcrumb-area -->
 <section class="breadcrumb-area">
    <div class="breadcrumb-bg" data-background="{{asset('frontend/assets/img/home/profit-telemed.png')}}"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h3 class="title">Telemedicine</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Agyhero Telemedicine online platform</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<section class="technology-area technology-bg pt-70 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section-title text-center mb-80 ">
                <h6 class="sub-title txt-purple">Telemedicine</h6>
                <h3 class="title">Agyhero Telemedicine Online Platform</h3>
                    
            </div>
        </div>    
    </div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-12">
                   @if(session()->get('language') == 'english')
                   Connect with healthcare professionals effortlessly through the Agyhero Telemedicine online platform. This facilitates comprehensive elderly care, addressing various issues conveniently and reducing the need for travel and movement.
                   @else
                   เชื่อมต่อไปยังแพทย์และผู้เชี่ยวชาญด้านสาธารณสุขอย่างง่ายดายผ่าน Agyhero Telemedicine, แพลตฟอร์มทางออนไลน์ที่ช่วยให้การดูแลผู้สูงอายุครอบคลุมทุกปัญหา ไม่เพียงเท่านั้นที่จะทำให้การดูแลสะดวกสบาย แต่ยังช่วยลดความเสี่ยงในการเคลื่อนย้ายและการเดินทาง                   @endif
            </div>
            <div class="col-lg-7 pt-30">
                <h3>ELDERLY CARE TECHNOLOGY</h3>
                <p>
                AGYHERO offers tailored solutions for businesses in the elderly care sector. Elevate your services with our expertise, technology, and innovative models designed to enhance elderly care experiences. A haven of specialized care and compassion. We prioritize the well-being of our seniors, providing a nurturing environment that integrates innovation, personalized attention, and top-notch medical expertise.

                </p>
                <ul class="no-bullets">
                                    <li><strong>Cutting-edge Innovations:</strong> Advanced technological solutions designed specifically for senior well-being.</li>
                    <li><strong>Comfort-Centric Design:</strong> Prioritizing comfort, safety, and ease of use for seniors.</li>
                    <li><strong>Health Monitoring Systems:</strong> Comprehensive tools for health tracking, ensuring proactive care.</li>
                    <li><strong>Empowering Seniors and Caregivers:</strong> State-of-the-art systems that empower both seniors and caregivers for improved quality of life.</li>
                    <li><strong>Tailored Solutions:</strong> Customized technology addressing unique needs in elderly care.</li>
                                
                
                </ul>
            </div>
            <div class="col-lg-5 pt-30 ">
                <img src="http://127.0.0.1:8000/frontend/assets/img/home/innovation.png" class="technology-lead-photo" alt="AgyHero : THE NURSING HOME EXPERT" title="AgyHero : THE NURSING HOME EXPERT">
                
            </div>
        </div>
    </div>
</section>



@endsection