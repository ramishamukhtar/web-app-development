<section class="BlogSec">
   <div class="container">
      <div class="small_text Middle wow fadeInLeft" data-wow-delay="0.2s"><?php Helper::inlineEditable("span", "", 'Our Lastest Blog', 'INDEX'); ?> </div>
         <?php Helper::inlineEditable("h2",['class'=>'wow fadeInLeft', 'data-wow-delay'=>'0.4s'],'The Most Recent Post', 'INDEX'); ?>
      <div class="row RowColm">
      <?php $delayBlog = 0.0; ?>
          @foreach($featured_blog as $key => $blog)
            <div class="col-xs-12 col-sm-4 wow fadeInUp" data-wow-delay="{{$delayBlog = $delayBlog + 0.2}}s">
               <div class="L_News">
                  <div class="NewsImg">
                     <img src="{{asset($blog->image->url)}}" class="img-responsive" alt="">
                  </div>
					<a href="{{route('blog')}}">
                  <div class="NewsDescp">
                     <h4>{{$blog->blog_title}}</h4>
                     <p class="detals">{{$blog->blog_shortdescription}}</p>
                  </div>
                  </a>
               </div>
            </div>
          @endforeach
      </div>
   </div>
</section>