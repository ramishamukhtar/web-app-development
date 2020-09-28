<section class="Inner_banner">
<img alt="Decorative" class="image" src="{{asset($pageBanner)}}">
<div class="overlay_inner">
  <div class="container">
    <div class="text">
       <?php Helper::inlineEditable("h1",['class'=>'playf wow fadeInUp', 'data-wow-delay'=>'0.2s'],$title, $pagename); ?>
      <?php Helper::inlineEditable("p",['class'=>'wow fadeInUp', 'data-wow-delay'=>'0.4s'],$short_description, $pagename); ?>
    </div>
  </div>
</div>
</section>