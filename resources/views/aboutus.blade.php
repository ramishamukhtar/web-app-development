@extends('layouts.main', [
'menu'=>false,
'blogmenu'=>false,
'aboutmenu'=>$aboutmenu,
'testimonialmenu'=>false,
'contactmenu'=>false,
])
@section('content')
@include('extends.banner', ['pageBanner'=> $pageBanner, 
'title'=>'About Us', 
'pagename'=>'ABOUTUS',
'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
 ])
  <!-- SLIDER SEC END -->
<section class="AboutSec InnerContent">
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
             <?php Helper::inlineEditable("h3",['class'=>'wow fadeInRight', 'data-wow-delay'=>'0.2s'],'Authority Within Your Industry','ABOUTUS'); ?>
             <?php Helper::inlineEditable("h2",['class'=>'wow fadeInRight', 'data-wow-delay'=>'0.4s'],'You need to make sure your ideal  <strong>clientele, pick your business </strong> over your competition.','ABOUTUS'); ?>
               <?php Helper::inlineEditable("p",'','LIn 2020, the digital sphere is without a doubt the greatest tool for cosmetic brand growth. However, you need more than a basic online presence, to assert any sort of authority within your industry. You need to stay competitive, and to do this you need to be efficient & effective with your digital marketing.','ABOUTUS'); ?>
         
           
          <div class="clearfix"></div> <br>
             <a href="" class="read_more wow fadeInDown" data-wow-delay="0.8s">Contact Us </a>
          </div>
       </div>
   </div>
   <div class="row padd_top">
    <div class="col-xs-12 col-sm-6">
      <div class="content">
        <?php Helper::inlineEditable("h2",['class'=>'wow fadeInLeft', 'data-wow-delay'=>'0.2s'],'<strong>Ethos </strong>','ABOUTUS'); ?>
        <?php Helper::inlineEditable("p",['class'=>'wow fadeInLeft', 'data-wow-delay'=>'0.4s'],"Our ethos is simple. To be the best company in the world at generating income for cosmetic businesses, through online platforms. Unlike other agencies who focus on generating more clients and money for their business, we focus on you. We spend our time learning, developing our knowledge, keeping up with trends and algorithms to make sure that any other company cannot come close to the results we generate for our clients. We don’t focus on our quantity of clients - and in fact, we don't actually have an enormous capacity for clientele. However, you can ensure that if you work with us, it'll feel like you have your own personal in house team - a team you can comfortably instil faith in driving your business forward.",'ABOUTUS'); ?>
      </div>
      <div class="content">
        <?php Helper::inlineEditable("h2",['class'=>'wow fadeInLeft', 'data-wow-delay'=>'0.2s'],'<strong>Vision </strong>','ABOUTUS'); ?>
        <?php Helper::inlineEditable("p",['class'=>'wow fadeInLeft', 'data-wow-delay'=>'0.8s'],"The founders of the Cosmetic Growth Agency, Myran and Joe met in high school and quickly realised that they had a similar vision and goals. They decided that they were going to start a business together while still in school; after multiple trial and errors of different business models, they came across social media and digital marketing. In an effort to try and gain experience and knowledge in this field - they would meet up every night and research how to market businesses through social media platforms, and how to gain traction to websites. ",'ABOUTUS'); ?>
       </div>
     </div>
      <div class="col-xs-12 col-sm-6 wow fadeInRight" data-wow-delay="0.6s">
          <?php Helper::dynamicImages(asset(''),'images/img07.jpg',array("data-width"=>"562","data-height"=>"522","class"=>"img-responsive"),'ABOUTUS'); ?>
      </div>
       <div class="col-xs-12">
          <p class="wow fadeInUp" data-wow-delay="0.6s">They invested every bit of money they could get; from savings to part-time jobs, into online courses and coaching. They recognised that they couldn’t run a business and be the best at generating results for multiple different niches and industries. They noticed from the clients they had already acquired, how they were gravitating a lot more towards the cosmetic industry</p>
          <p class="wow fadeInUp" data-wow-delay="0.8s">To gain the experience, they needed a mentor and someone who had a lot of experience in generating results for cosmetic companies. Myran and Joe set out to find this person and eventually got in touch with an advertising specialist in Germany, called Nikola. He'd been working with cosmetic companies for years and had an awe-inspiring track record. After explaining their vision and speaking with him back and forth, they decided to team up and crush the German market together. After acquiring and working with dozens of companies - formulating a specific unique strategy (producing outstanding results in Germany), it was time to bring the Cosmetic Growth Agency to the UK and the rest for the world ... </p>
          <p  class="wow fadeInUp" data-wow-delay="0.9s">Over the last two years, the Cosmetic Growth Agency has been working extremely close with cosmetic professionals and companies all over the world. They've solidified their techniques and strategies, to achieve certainty in producing the highest calibre of results - no matter the location.</p>
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