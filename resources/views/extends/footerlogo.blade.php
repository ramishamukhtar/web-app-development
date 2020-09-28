<?php
$footer_logo = Helper::returnImageModel('imagetable')->where('table_name','footer_logos')->where('ref_id',12)->where('type',2)->get();
//dd($footer_logo);
?>
<section class="LogoSec">
   <div class="container">
      <div class="row">
      <div class="logo_slider">
        {{$delay = 0.0}}
        @for($counter =0; $counter < count($footer_logo); $counter++)
         <div class="wow fadeInUp" data-wow-delay="{{$delay = $delay + 0.2}}s">
            <img src="{{asset($footer_logo[$counter]->img_path)}}" class="img-responsive" alt="">
         </div>
        @endfor
      </div>
   </div>
   </div>
</section>
