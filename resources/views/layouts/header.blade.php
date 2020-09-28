<header>
   <div class="navbar-wrapper">
      <div class="container">
         <div class="row_flex">
            <div class="col-xs-12 col-sm-3">
               <a class="navbar-brand" href="{{route('home')}}"><?php print Helper::dynamicImages(asset('/'),'images/logo.png',array("data-width"=>"177","data-height"=>"99","alt"=>"logo","class"=>"img-responsive"),'logo',true); ?></a>
            </div>
            <div class="col-xs-12 col-sm-9">
               <nav class="navbar navbar-inverse">
                  <div class="navbar-header">
                     <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                  </div>
                  
                  <div class="collapse navbar-collapse js-navbar-collapse custom_menucss">
                     <ul class="nav navbar-nav">
                        <li class={{$menu ? "active" : "" }}> <a href="{{route('home')}}"> Home     </a></li>
                        <li class={{$blogmenu ? "active" : "" }}> <a href="{{route('blog')}}"> Blog      </a></li>
                        <li class={{$aboutmenu ? "active" : "" }}> <a href="{{route('aboutus')}}"> About      </a></li>                                              
                        <li class={{$testimonialmenu ? "active" : "" }}> <a href="{{route('testimonial')}}"> Testimonials    </a></li>
                        <li class={{$contactmenu ? "active" : "" }}> <a href="{{route('contactus')}}"> Contact  </a></li>
                     </ul>
                  </div>
                  <!-- /.nav-collapse -->
               </nav>
            </div>
         </div>
      </div>
   </div>
   <!-- Bottom Menu -->
</header>