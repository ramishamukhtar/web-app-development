@extends('layouts.main', [
'menu'=>false,
'blogmenu'=>false,
'aboutmenu'=>false,
'testimonialmenu'=>false,
'contactmenu'=>$contactmenu,
])
@section('content')
@include('extends.banner', ['pageBanner'=> $pageBanner, 
'title'=>'Contact Us', 
'pagename'=>'CONTACTUS',
'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
 ])
  <!-- SLIDER SEC END -->
<section class="ContactSec">
<div class="container">
  <div class="row">            
<div class="col-xs-12 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
    <form class="CrudForm" id="inquiry_form" data-noinfo="true" data-customcallback="inquiry_success" data-customcallbackFail="inquiry_error" method="POST" action="{{route('contactusSubmit')}}">
    @csrf
   <div class="row">
     <div class="col-xs-12 col-sm-6 form-group">
      {{Helper::errorField('inquiries_name',$errors)}}
        <input type="text" class="form-control" placeholder="First Name" name="inquiries_name">
     </div>
       <div class="col-xs-12 col-sm-6 form-group">
        <input type="text" class="form-control" placeholder="Last Name" name="inquiries_lname">
     </div>
   </div>
   <div class="row">
     <div class="col-xs-12 col-sm-6 form-group">
        <input type="text" class="form-control" placeholder="Phone Number" name="inquiries_phone">
     </div>
       <div class="col-xs-12 col-sm-6 form-group">
        <input type="email" class="form-control" placeholder="Email" name="inquiries_email">
     </div>
   </div>
    <div class="row">
     <div class="col-xs-12 col-sm-12 form-group">
        <textarea class="form-control" placeholder="Message" name="extra_content"></textarea>
     </div>
   </div>
      <div class="row"> 
        <div class="submit_btn col-xs-12 col-sm-5 form-group">
          <input type="submit" value="Submit" name="submit">
       </div>
     </div>                     
   </form>
</div> 
<div class="col-xs-12 col-sm-6  wow fadeInRight" data-wow-delay="0.2s">
  <div class="col-xs-12 col-sm-10 pull-right">
       <div class="row form-group">
          <div class="col-xs-12 col-sm-2">
            <img src="{{asset('images/icon01.png')}}" class="img-responsive" alt="">
           </div>

           <div class="col-xs-12 col-sm-10"> 
            <?php Helper::inlineEditable("p", "", 'Lorem Ipsum 13/2 Permanent St Melbourne VLC', 'CONTACTUS')?>
           </div>
       </div>
       <div class="row form-group">
          <div class="col-xs-12 col-sm-2">
            <img src="{{asset('images/icon02.png')}}" class="img-responsive" alt="">
           </div>

           <div class="col-xs-12 col-sm-10"> 
            <p>Office: <a href="tel:+123 456 789 0"> +123 456 789 0</a> <br>
           Mobile: <a href="tel:+123 456 789 0">+123 456 789 0</a> </p>
           </div>
       </div>
       <div class="row form-group">
             <div class="col-xs-12 col-sm-2">
            <img src="{{asset('images/icon03.png')}}" class="img-responsive" alt="">
           </div>

           <div class="col-xs-12 col-sm-10"> 
            <a href="mailto:support-1@example.com">
              <?php Helper::inlineEditable("p", "", 'support-1@example.com', 'CONTACTUS')?>
             </a>
           </div>
       </div>
     </div>
     </div>
  </div>
</div>
</section>
<section class="MapSec">         
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359630.09737905!2d-113.7240346513082!3d36.2460939887435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1600684886663!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>   
</section>
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
function inquiry_error(res){
  if(res){
    if(isJSON(res)){
      res = JSON.parse(res);
      if(res.errors){
        var _errors='';
        for(j in res.errors){
          _errors+=res.errors[j].join('</br>')+'</br>';
        }
        generateNotification('0',_errors);
      }
    }
  }
}
function inquiry_success(_msg){
    if(_msg.status){
        generateNotification('1','Thank you! your message has been sent to admin.');
    $('#inquiry_form')[0].reset();
    }
}
</script>
@endsection