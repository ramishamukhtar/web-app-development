@extends('layouts.main', [
'menu'=>$menu,
'blogmenu'=>false,
'aboutmenu'=>false,
'testimonialmenu'=>false,
'contactmenu'=>false,
])
@section('content')
<!-- class="{{isset($aboutusmenu)?'active':''}}" from controller "pass menu with true to make it active" -->
<section class="sliderMain" id="home">
   <div class="carousel slide online-main" data-ride="carousel" id="carousel-example-generic1">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
         <div class="item active">
            <div class="overlay">
               <img alt="slider" src="{{asset($homeBanner)}}">
            </div>
            <div class="container">
               <div class="slide_content">
                  <div class="carousel-caption">
                     <div class="">
                      <?php Helper::inlineEditable("div", ['class'=>"slider-text",'data-ckeditor'=>'true'], '<h1 class="wow fadeInDown" data-wow-delay="0.2s">
                           Cosmetic Growth
                        </h1>
                          <p class="wow fadeInUp" data-wow-delay="0.4s">
                           Cosmetic Growth Agency has been working extremely close with cosmetic professionals and companies all over the world.
                        </p>', 'INDEX'); ?>
                        
                    
                        <div class="PlayArea">
                          <a data-fancybox="" href="{{$config['VIDEO']}}" class="plyicn"> 
                          <img src="{{asset('images/play-icon.png')}}" class="PlayIcon" alt="">
                          </a>
                          <span>or</span>
                          <h6>Have a tour <i class="fa fa-angle-right" aria-hidden="true"></i></h6>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
  <!-- Controls -->
</section>
<!-- SLIDER SEC END -->
<section class="AboutSec">
   <div class="container">
      <div class="row">
         <div class="col-xs-12 col-sm-5 About_Img">
                  <div class="PlayArea">
                      <a data-fancybox="" href="{{$config['VIDEO']}}" class="plyicn"> 
                       <img src="{{asset('images/play-icon.png')}}" class="PlayIcon" alt="">
                     </a>      
                    </div>
            <img src="{{asset('images/img01.jpg')}}" class="img-responsive pull-right wow fadeInLeft" data-wow-delay="0.6s" alt="">
         </div>
         <div class="col-xs-12 col-sm-7">
            <div class="col-xs-12 col-sm-12">
              <?php Helper::inlineEditable("h3", ['class'=>'wow fadeInRight', 'data-wow-delay'=>'0.2s'], 'Authority Within Your Industry', 'INDEX'); ?>

              <?php Helper::inlineEditable("h2", ['class'=>'wow fadeInRight', 'data-wow-delay'=>'0.4s'], 'You need to make sure your ideal <strong> clientele, pick your business</strong> over your competition.', 'INDEX'); ?>
              <?php Helper::inlineEditable("p", ['class'=>'wow fadeInLeft', 'data-wow-delay'=>'0.6s'], 'In 2020, the digital sphere is without a doubt the greatest tool for cosmetic brand growth. However, you need more than a basic online presence, to assert any sort of authority within your industry. You need to stay competitive, and to do this you need to be efficient & effective with your digital marketing.', 'INDEX'); ?>
               <div class="Services">
                  <div class="col-xs-12 col-sm-12">
                  <?php Helper::inlineEditable("h4", "", 'Our Services:', 'INDEX'); ?>
                  <ul class="list-inline sev_list">
                     <li><a href=""> Paid Advertisment </a></li>
                     <li><a href=""> Sales Funnel Creation </a></li>
                     <li><a href=""> Content Creation </a></li>
                     <li><a href=""> Social Media Management </a></li>
                  </ul>
               </div>
               </div>
               <br>
               <div class="clearfix"></div>

               <a href="" class="read_more wow fadeInDown" data-wow-delay="0.8s">Our Vision </a>
            </div>
            
         </div>
      </div>
   </div>
</section>
@include('extends.portfoliowidget', ['portfolio_images'=> $portfolio_images])
<section class="TestimonialSec">
   <div class="container-fluid">
     <div class="small_text Middle"> <?php Helper::inlineEditable("span", "", 'Our Happy Customers', 'INDEX'); ?></div>
     <?php Helper::inlineEditable("h2",['class'=>'wow fadeInUp', 'data-wow-delay'=>'0.8s'],'The Opinion our Clients', 'INDEX'); ?>
      <div class="col-xs-12 col-sm-12 col-sm-offset-2">
          <div class="client_slider">
          <?php $delayTestimonial = 0.0; ?>
            @foreach($testimonialData as $key => $value)
              <div class="wow fadeInUp" data-wow-delay="{{$delayTestimonial = $delayTestimonial + 0.2}}s">
              <div class="main_content">
              <p>{{$value->comment}}</p>

              <div class="BtmSec">
                <div class="col-xs-12 col-sm-3">
                   <img src="{{asset($value->image_optional->url)}}" class="img-responsive img-circle" alt="">
                </div>
                <div class="col-xs-12 col-sm-9">
                   <h5>{{$value->user_name}} </h5> 
                   <h6>{{$value->user_position}}</h6>   
                </div>                 
              </div>
              </div>                 
              </div>
            @endforeach
          </div>
      </div>
  </div>
</section>
@include('extends.blogwidget', ['featured_blog'=> $featured_blog])
@include('extends.footerlogo')
@endsection
@section('css')
<style type="text/css">
	/*in page css here*/
</style>
@endsection
@section('js')
<script type="text/javascript">
(()=>{
  /*in page css here*/
})()
</script>
@endsection