<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table='comments';
    public $primaryKey = 'id';
    protected $fillable = [
        'blog_id','name','email', 'comment','created_at', 'updated_at','is_featured','is_active','is_deleted',
    ];
    public function image()
    {
        return $this->morphOne('App\Model\Image', 'imageable')->where('table_name', 'comments');
    }
}
