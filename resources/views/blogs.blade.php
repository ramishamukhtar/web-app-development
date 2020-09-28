@extends('layouts.main', [
'menu'=>false,
'blogmenu'=>$blogmenu,
'aboutmenu'=>false,
'testimonialmenu'=>false,
'contactmenu'=>false,
])
@section('content')
@include('extends.banner', ['pageBanner'=> $pageBanner, 
'title'=>'Blog', 
'pagename'=>'BLOGS',
'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
 ])
  <!-- SLIDER SEC END -->
  <div class="blogsec">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                
                @foreach($blogData as $data)
                <div class="blogbox">
                    <div class="media">
                        <div class="media-body">
                            <div class="imgBoxes"><img src="{{asset($blogData[0]->image->url)}}" alt="" class="img-responsive"></div>
                            
                            <div class="contentArea">
                              
                                <h5>By {{$data->created_by}}  /  {{substr($data->created_at,0,10)}}</h5>
                                <h3>{{$data->blog_title}}</h3>
                                <p>{{$data->blog_shortdescription}}... </p>
                                <div class="sharebox">
                                <div class="pull-left">
                                    <a href="{{route('blogdetail', $data->id)}}" class="readmore">read more</a>
                                </div>
                            </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="pagersec">
                    <ul class="pagination">
                     {{$blogData->links()}}
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="blogRight">
                    <div class="brBox search">
                        <form action="" method="GET" class="subscriber form-vertical" id="subscriber-form">
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
                    <div class="brBox">
                        <h3>Recent news</h3>

                        @foreach($blogNews as $news)
                        
                        <div class="brMedia">
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-left-image" src="{{asset($news->image->url)}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h5>{{substr($news->created_at,0,10)}}</h5>
                                    <p>{{$news->blog_title}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
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
</script>
@endsection