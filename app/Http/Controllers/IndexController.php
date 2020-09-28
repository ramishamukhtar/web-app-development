<?php
namespace App\Http\Controllers;
use Helper;
use View;
use DB;
use Illuminate\Support\Str;
use App\Http\Requests\yTableinquiryRequest;
use App\Http\Requests\yTablecommentsRequest;
use App\Model\inquiry;
use App\Model\comments;
use App\Model\blogs;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
        $favicon=Helper::OneColData('imagetable','img_path',"table_name='favicon' and ref_id=0 and is_active_img='1'");
        View()->share('favicon',$favicon);
        View()->share('config',$this->getConfig());
    }
    public function index()
    {
        $portfolio_images = Helper::returnDataSet('imagetable', "table_name='portfolio' and ref_id=12 and type=2");
        $featured_blog = Helper::returnModFeatured('blogs')->with('image')->get();
        $testimonialData = Helper::returnMod('testimonials')->with('image')->get();
        $homeBanner=Helper::getimageoftable('inner_banner', 1,null);
        return view('index')->with('title','Welcome')->with(compact('portfolio_images', 'featured_blog', 'testimonialData','homeBanner'))->with('menu',true);
    }
    public function testimonial()
    {
        $pageBanner=Helper::getimageoftable('inner_banner', 2,null);
        $portfolio_images = Helper::returnDataSet('imagetable', "table_name='portfolio' and ref_id=12 and type=2");
        $testimonialData = Helper::returnMod('testimonials')->with('image')->with('image_optional')->paginate(4);
        
        return view('testimonial')->with('title','Testimonial')->with(compact('portfolio_images', 'testimonialData', 'pageBanner'))->with('testimonialmenu',true);
    }
    public function blog($categoryId=null){
        $pageBanner=Helper::getimageoftable('inner_banner', 2,null);
        if(isset($_GET['search'])){
            $name = $_GET['search'];
            $blogData=blogs::where('blog_title','LIKE','%'.$name.'%')->with('image')->paginate(4);
        }
        else{
            if($categoryId != null){
                $blogData=blogs::where('blog_category_id',$categoryId)->with('image')->paginate(4);
            }
            else{
                $blogData=Helper::returnMod('blogs')->with('image')->paginate(4);
            }
        }
        $categories = Helper::returnDataSet('m_flag', "flag_type='BLOGCATEGORY'");
        $blogNews = Helper::returnModWithOrderBy('blogs', 'id','desc', 3)->with('image')->get();
        return view('blogs')->with('title','Blog')->with(compact('blogData', 'categories', 'blogNews','pageBanner'))->with('blogmenu',true);
    }
    public function blogdetail($id)
    {
        $pageBanner=Helper::getimageoftable('inner_banner', 2,null);
        $blogData = Helper::getImageWithRow('blogs','id',$id);
        $categories = Helper::returnDataSet('m_flag', "flag_type='BLOGCATEGORY'");
        $blogNews = Helper::returnModWithOrderBy('blogs', 'id','desc', 3)->with('image')->get();
        $commentsOnBlog = Helper::getImageWithData('comments','id',"blog_id=".$id);
        $tags = Helper::returnMod('blog_tags')->where('blog_id', $id)->get();
        return view('blog-details')->with('title','Blog Details')->with(compact('blogData','blogNews', 'categories', 'commentsOnBlog','pageBanner', 'tags'))->with('blogmenu',true);
    }
    public function submitBlogComment(yTablecommentsRequest $request,$blogId){
        $validator = $request->validated();
        $comment = new comments();
        $comment->blog_id = $blogId;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->message;
        $comment->save();
        $this->echoSuccess("Your Reply is Submitted!");
    }
    public function aboutus()
    {
        $pageBanner=Helper::getimageoftable('inner_banner', 2,null);
        $featured_blog = Helper::returnModFeatured('blogs')->with('image')->get();
        return view('aboutus')->with('title','About us')->with(compact('featured_blog','pageBanner'))->with('aboutmenu',true);
    }
    public function contactus()
    {
        $pageBanner=Helper::getimageoftable('inner_banner', 2,null);
        return view('contactus')->with('title','Contact us')->with('contactmenu',true)->with(compact('pageBanner'))->with('contactmenu',true);
    }
    public function contactusSubmit(yTableinquiryRequest $request){
        $validator = $request->validated();
        $inquiry = new inquiry;
        $inquiry->inquiries_name = $request->inquiries_name;
        $inquiry->inquiries_lname = $request->inquiries_lname;
        $inquiry->inquiries_email = $request->inquiries_email;
        $inquiry->inquiries_phone = $request->inquiries_phone;
        $inquiry->extra_content = $request->extra_content;
        $inquiry->save();
        $this->echoSuccess("Inquiry Saved");
    }
}