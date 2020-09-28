<?php
namespace App\Http\Controllers\Adminiy\FCCallbackControllers;
use App\Http\Controllers\Controller;
use Helper;
use App\Model\blogs;
use App\Model\blog_tags;
use DB;
use Illuminate\Support\Str;
class blogsController extends Controller
{
    public function __construct()
    {
        $favicon=Helper::OneColData('imagetable','img_path',"table_name='favicon' and ref_id=0 and is_active_img='1'");
        View()->share('v',config('app.vadminiy'));
        View()->share('favicon',$favicon);
    }
    public function beforeInsert($inputs){
    	$blog_tag_id = implode(',',$inputs['blog_tag_id']);
    	unset($inputs['blog_tag_id']);
		$inputs['blog_tag_id']=$blog_tag_id;
		return $inputs;
    }
	public function afterInsert($model){
		blog_tags::where('blog_id',$model->id)->delete();
		$blog_tags=explode(',', $model->blog_tag_id);
		foreach ($blog_tags as $key => $value) {
			$blog_tags= new blog_tags;
			$blog_tags->blog_id=$model->id;
			$blog_tags->tag_name=$value;
			$blog_tags->is_active=1;
			$blog_tags->is_deleted=0;
			$blog_tags->save();
		}
	}
	public function beforeDelete($table,$id,$col){
		/*before deleting record*/
	}
	public function afterDelete($table,$id,$col){
		/*after deleting record*/
	}
}
