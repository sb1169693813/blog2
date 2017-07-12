<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Article extends Model
{
    //
    protected $fillable = [
        'title', 'content', 'intro','created_at','updated_at','published_at'
    ];
    protected $dates = ['created_at', 'updated_at', 'disabled_at'];
    //修改器
    public function setPublishedAtAttribute($published_at)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat("Y-m-d", $published_at);
    }

    //全局where条件
    public function scopePublish($query)
    {
      $query->where('published_at','<=',Carbon::now());
    }
}
