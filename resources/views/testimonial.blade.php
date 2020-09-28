@extends('layouts.main', [
'menu'=>false,
'blogmenu'=>false,
'aboutmenu'=>false,
'testimonialmenu'=>$testimonialmenu,
'contactmenu'=>false,
])
@section('content')
@include('extends.banner', ['pageBanner'=> $pageBanner, 
'title'=>'Testimonials', 
'pagename'=>'TESTIMONIAL',
'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
 ])
<!-- SLIDER SEC END -->
<section class="TestimonialSec InnerDetail">
     <div class="container">
      <div class="col-xs-12 col-sm-9 Middle">
           <div class="small_text Middle wow fadeInUp" data-wow-delay="0.2s"> <?php Helper::inlineEditable("span", "", 'Our Happy Customers', 'TESTIMONIAL'); ?></div>
           <?php Helper::inlineEditable("h2",['class'=>'wow fadeInUp', 'data-wow-delay'=>'0.8s'],'The Opinion our Clients', 'TESTIMONIAL'); ?>
            @foreach($testimonialData as $key => $value)
		        <div class="row RowColm">
              	<div class="col-xs-12 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="main_content bg_second">
        
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
                <div class="col-xs-12 col-sm-6 wow fadeInRight" data-wow-delay="0.4s">
                 <img src="{{asset($value->image->url)}}" class="img-responsive border" alt="">
                </div> 
            </div>
            @endforeach
           <ul class="pagination Middle">
             {{$testimonialData->links()}}
           </ul> 
         </div>
     </div>
</section>
@include('extends.portfoliowidget', ['portfolio_images'=> $portfolio_images])

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