@extends('frontend.main_master')
@section('main')
@section('title')
Supplyment | AGYHERO | THE NURSING HOME EXPERT
@endsection
<!-- acamedy-area -->
<section>
<div class="container-fluid profit-home-techonology-bg">
        <div class="row justify-content-end">
            
            <div class="col-lg-6 profit-home-content ">
                <div class="section-title white-title mb-50">
                    <h6 class="sub-title txt-purple">Supplyment</h6>
                    <h3 class="title txt-navy">
                        @if(session()->get('language') == 'english')   
                        Competitive price from <br/>high volume purchasing
                        @else
                        สินค้าและเวชภัณฑ์ ราคาสมาชิก
                        @endif

                    
                    </h3>
                    <p class=" txt-navy pt-30">
                        @if(session()->get('language') == 'english') 
                        Products for the Nursing Home business are available at volume sale prices, as we have a network of centers where price negotiations are possible. Take advantage of our network to secure competitive pricing for your business.
                        @else
                        สินค้าสำหรับธุรกิจ Nursing Home ในราคา Volume Sale เพราะเรามี เครือข่ายศูนย์ ที่สามารถต่อรองราคาได้
                        @endif
                    </p>
                </div>
              
            </div>
            <div class="col-lg-6 supplyment-home-photo">
                
            </div>
        </div>
    </div>
</section>


<!-- acamedy-area -->  
<section class=" pt-50 pb-70">
<div class="container">
    <div class="row justify-content-center">
    <div class="col-10">
                <div class="section-title mb-50 text-center">
                  <h3 class="title">
                        @if(session()->get('language') == 'english') 
                        Competitive price from high volume purchasing
                        @else
                        สินค้าและเวชภัณฑ์ ราคาสมาชิก
                        @endif
                        
                    </h3>
                    <p class=" txt-navy pt-30">
                    @if(session()->get('language') == 'english')
                    Products for the Nursing Home business are available at volume sale prices, as we have a network of centers where price negotiations are possible. Take advantage of our network to secure competitive pricing for your business.                  
                    @else
                    สินค้าสำหรับธุรกิจ Nursing Home ในราคา Volume Sale เพราะเรามี เครือข่ายศูนย์ ที่สามารถต่อรองราคาได้   
                    @endif
                    </p>
                </div>    
            </div>
        <div class="col-md-6 col-sm-12 pt-30 ">
            <img src="{{ asset('frontend/assets/img/home/more-supplyment.png')}}" width="100%" alt="AgyHero : THE NURSING HOME EXPERT" title="AgyHero : THE NURSING HOME EXPERT">
        </div>  
        
        
    </div>
</div>
</section>
<!-- acamedy-area-end -->  
@endsection