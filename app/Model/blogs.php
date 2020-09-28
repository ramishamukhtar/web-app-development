<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    protected $table='blogs';
    public $primaryKey = 'id';
    protected $fillable = [
        'blog_title','blog_slug','blog_shortdescription', 'blog_description','is_active','is_deleted','user_id','created_at', 'updated_at', 'blog_category_id', 'created_by','is_featured',
    ];
    public function image()
    {
        return $this->morphOne('App\Model\Image', 'imageable')->where('table_name', 'blogs');
    }
	public function blog_tags()
    {
        return $this->hasMany('App\Models\blog_tags');
    }
}
