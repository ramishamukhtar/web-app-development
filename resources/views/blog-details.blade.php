@extends('layouts.main', [
'menu'=>false,
'blogmenu'=>$blogmenu,
'aboutmenu'=>false,
'testimonialmenu'=>false,
'contactmenu'=>false,
])
@section('content')
@include('extends.banner', ['pageBanner'=> $pageBanner, 
'title'=>'Blog Details', 
'pagename'=>'BLOG-DETAILS',
'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
 ])
  <!-- SLIDER SEC END -->
<section class="inner-content">
    <div class="container">    
    <div class="col-xs-12 col-sm-8 col-md-8">
      
      <img src="{{asset($blogData->img_path)}}" class="img-responsive" alt="">
     
      <div class="content-box">
      <span>By {{$blogData->created_by}} /  {{substr($blogData->created_at,0,10)}}</span>
       <h1>{{$blogData->blog_title}} </h1>
       <?php print $blogData->blog_description; ?>
        </div>  <!-- CONTENT BOX END -->
        <h5>Comments</h5>
        <div class="content-box comment-box">
        @foreach($commentsOnBlog as $comments) 
        <div class="row"> 
         @if($comments->img_path)
        <div class="col-xs-12 col-md-2"> <img src="{{asset($comments->img_path)}}" class="img-responsive"> </div>
        @else
        <div class="col-xs-12 col-md-2"> <img src="{{asset('images/blank-profile-picture.jpg')}}" class="img-responsive"> </div>
        @endif
          <div class="col-xs-12 col-md-10"> 
             <div class="row">
                 <div class="col-xs-12 col-md-6">   <h6>{{$comments->name}}</h6> </div>
                  <div class="col-xs-12 col-md-6"> <span class="text_right">Reply</span> </div>
                </div>  

            <span>{{substr($blogData->created_at,0,10)}}</span>
            <p>{{$comments->comment}}</p>
          </div>
        </div> <!-- Content Comment end -->
        <div class="col-xs-12 col-md-12 border-top"></div>
        @endforeach
    </div> <!-- Comment Box End -->
        <h5>Leave A Reply</h5>
         <div class="content-box leave-box">
         <form id="comment_form" class="CrudForm" data-noinfo="true" data-customcallback="submit_success" data-customcallbackFail="submit_error" method="POST" action="{{route('commentSubmit', [$blogData->id])}}">
          @csrf
         <div class="row">
             <div class="col-xs-12 col-md-6">
                {{Helper::errorField('email',$errors)}}
                <input type="text" placeholder="Your Name" name="name" class="form-control input-type">
             </div>
              <div class="col-xs-12 col-md-6">
                <input type="email" placeholder="Your Mail" name="email" class="form-control input-type">
             </div>
             </div>
             <div class="row">
              <div class="col-xs-12 col-md-12">
              <textarea placeholder="Write Your Message..." name="message" class="form-control input-type text-area"></textarea>
             </div>
             </div>
             <div class="row">
             <button type="submit" class="read_more">Post Comment</button>
             </div>
         </form>
         </div> <!-- Leave Box -->
    </div> <!-- ========================== LEFT CONTENT END HERE ====================== -->
    <div class="col-xs-12 col-md-4">
            <div class="blogRight">
                <div class="brBox search">
                    <form action="{{route('blog')}}" method="GET" class="subscriber form-vertical" id="subscriber-form">
                        <div class="input-group" style="">
                            <input type="text" class="form-control" placeholder="Search" name="search" required>
                            <span class="input-group-btn" style="">
                             <button id="sub-btn" class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                         </span>
                        </div>
                    </form>
                </div>
                <div class="brBox">
                    <h3>Category</h3>
                    <ul class="list-unstyled categrory">
                        @foreach($categories as $key => $value)
                        <li><a href="{{route('blog', $value->id)}}">{{$value->flag_value}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="brBox recent-box">
                    <h3>Recent news</h3>
                    @foreach($blogNews as $news)
                        <div class="brMedia">
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-left-image" src="{{asset($news->image->url)}}" alt="">
                                </div>
                                <div class="media-body">
                                    
                                    <p>{{$news->blog_title}}</p>
                                    <h5>{{substr($news->created_at,0,10)}}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="brBox">
                    <h3>Keywords</h3>
                    <ul class="list-unstyled list-inline brLinks">
                        @foreach($tags as $tag)
                        <li><a href="">{{$tag->tag_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
  <!--Blog Sec End-->
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
function submit_error(res){
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
function submit_success(_msg){
    if(_msg.status){
        generateNotification('1','Thank you! Your Comment has been Submitted.');
        $('#comment_form')[0].reset();
        setTimeout(()=>{
            location.reload()
        },1000)
    }
}
</script>
@endsection