<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	protected $guarded = [];
	
    public function category()
    {
		
    	return $this->belongsTo('App\Models\ProductCategory','category_id')->withDefault(function ($data) {
			foreach($data->getFillable() as $dt){
				$data[$dt] = __('Deleted');
			}
		});
	}
	
	public function menuCate(){
		return $this->belongsTo('App\Models\Category', 'menu_category_id')->where('status', 1);
	}
	
	public function product_images() {
        return $this->hasMany('App\Models\ProductImage');
    }
}
