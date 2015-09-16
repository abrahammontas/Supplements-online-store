<?php

class Product extends Eloquent {

	protected $table = 'product';
	protected $guarded = array('id');


	public function Type() {
        return $this->hasOne('Product_Type','id','id_product_type');
    }


    public function Brand() {
        return $this->hasOne('Brand','id','id_brand');
    }



}
