<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    protected $fillable = ['tag_id','post_id'];
    protected $table = 'post_tag';

    public function post()
    {
        $this->belongsTo('App\Post');
    }
    public $timestamps = false;
}
