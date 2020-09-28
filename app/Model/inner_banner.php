<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class inner_banner extends Model
{
    protected $table='inner_banner';
    public $primaryKey = 'id';
    protected $fillable = [
        'title', 'user_id','created_at', 'updated_at','is_active','is_deleted',
    ];
    public function image()
    {
        return $this->morphOne('App\Model\Image', 'imageable')->where('table_name', 'inner_banner');
    }
}
