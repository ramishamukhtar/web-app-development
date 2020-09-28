<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class blog_tags extends Model
{
    protected $table='blog_tags';
    public $primaryKey = 'id';
    protected $fillable = [
        'tag_name','blog_id','is_active','is_deleted','created_at', 'updated_at'
    ];
}
