 <!-- header-area -->
 <header>
    <div id="header-sticky" class="header-top-area menu-area d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li><a href="/nursing-home-business" >Nursing Home Business</a></li>  
                                    <li><a href="/why-us" >Why Us</a></li>
                                    <li><a href="/our-brand" >Our Brand</a> </li>
                                    <li><a href="https://care-d.co"  target="_blank">Individual services</a></li>
                                    <li><a href="/contact-expert" >Contact Expert</a></li>
                                </ul>
                            </div>
                            <div class="lang-nav d-none d-md-block">   
                                <a href="{{ route('english.language') }}" class="lang @if(session()->get('language') == 'english') active @endif ">EN</a> / <a href="{{ route('thai.language') }}" class="lang  @if(session()->get('language') == 'thai') active @endif">TH</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header-sticky-two" class="main-header menu-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="d-block d-lg-flex align-items-center">
                        <div class="logo">
                            <a href="/"><img src=" {{ asset('frontend/assets/img/logo.png') }}" alt=""></a>
                        </div>
                        <div class="main-header-contact d-none d-lg-block">
                            <ul>
                                <li>
                                    <div class="header-contact-box">
                                        <div class="h-contact-icon">
                                            <img src="{{ asset('frontend/assets/img/icon/email_icon.png')}}" alt="">
                                        </div>
                                        <div class="h-contact-content">
                                            <h5>email:</h5>
                                            <span>info@agyhero.com</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="header-contact-box">
                                        <div class="h-contact-icon">
                                            <img src="{{ asset('frontend/assets/img/icon/phone_icon.png')}}" alt="">
                                        </div>
                                        <div class="h-contact-content">
                                            <h5>contact:</h5>
                                            <span>+66(0)65-986-5248</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <div class="menu-backdrop"></div>

                        <nav class="menu-box">
                            <div class="close-btn"><i class="fal fa-times"></i></div>
                            <div class="nav-logo"><a href="/"><img src="{{ asset('frontend/assets/img/logo/logo_light_bg.png')}}" alt="" title=""></a>
                            </div>
                            <div class="menu-outer">
                            <div class=" text-right pr-30">
                            <a href="{{ route('english.language') }}" class="lang txt-navy @if(session()->get('language') == 'english') active @endif ">EN</a> / <a href="{{ route('thai.language') }}" class="lang txt-navy @if(session()->get('language') == 'thai') active @endif">TH</a>
                          
                            </div>    
                           
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="https://www.facebook.com/AgyheroNursingHomeExpert" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://www.youtube.com/@AgyheroNursingHomeExpert" target="_blank"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="https://www.instagram.com/agyhero/" target="_blank"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="https://www.tiktok.com/@agyhero.official?_t=8k0ZxQTsH2X&_r=1" target="_blank"><img src="{{ asset('frontend/assets/img/icon/tiktok.svg')}}" width="35" class="tiktok-icon"></a></li>
                                   
                                   </ul>
                            
                             
                            </div>
                           
                        </nav>
                    </div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->