<section class="Portfolio_Sec">
   <div class="container">
         <?php Helper::inlineEditable("span", ['class'=>'small_text Middle'], 'Lorem Ipsum', 'INDEX'); ?>
    </div>
    

   <div class="container-fluid">           
         <?php Helper::inlineEditable("h2", ['class'=>'wow fadeInUp', 'data-wow-delay'=>'0.2s'], 'Our Portfolio', 'INDEX'); ?>
         <div class="PortfolioSlider">
          <?php $delay = 0.0; ?>
          @for($counter =0; $counter < count($portfolio_images); $counter++)
            <div class="wow fadeInUp" data-wow-delay="{{$delay = $delay + 0.2}}s">
               <div class="L_News">
                  <div class="NewsImg">
                     <img src="{{asset($portfolio_images[$counter]->img_path)}}" class="img-responsive" alt="">
                  </div>
               </div>
            </div>
            @endfor
          </div>
    </div>
  </div>
</section>