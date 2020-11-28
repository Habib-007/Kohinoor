<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Category extends Model
{
    public $guarded = [];
    protected static function boot(){
        parent::boot();
        static::creating(function ($category){
            $category->slug=str_slug($category->name);
        });
    }
}
