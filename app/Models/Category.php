<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'slug', 'parent_id','image', 'url', 'type', 'lang_status'];

    public function subCategories()
    {
        return $this->hasMany(Category::class, 'parent_id')->where('status',1);
    }
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id')->select('id', 'name');
    }
}
