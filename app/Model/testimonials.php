<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
class testimonials extends Model
{
	protected $table = 'testimonials';
	public $primaryKey = 'id';
    protected $fillable = [
        'user_name', 'user_position', 'posted_date','comment','total_stars','updated_at', 'created_at','user_id','is_deleted','is_active','user_email','user_phone', 'is_featured',
    ];
    public function image()
    {
        return $this->morphOne('App\Model\Image', 'imageable')->where('table_name', 'testimonials');
    }
    public function image_optional()
    {
        return $this->morphOne('App\Model\Image', 'imageable')->where('table_name', 'testimonials_optional');
    }
}
