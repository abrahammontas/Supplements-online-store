<?php

class Validate {

    public static $perfil_rules = array(
        'name' => 'required',
        'lastname' => 'required',
        'occupation' => 'required',
        'image' => 'required|max:2048'
    );

    public static $article_rules = array(
        'id_profile' => 'required',
        'content' => 'required',
        'image' => 'required|max:2048'
    );


    public static $product_rules = array(
        'id_brand' => 'required',
        'id_product_type' => 'required',
        'name' => 'required',
        'image' => 'required|max:2048'
    );

    public static $deal_rules = array(
        'title' => 'required',
        'description' => 'required',
        'image' => 'required',
        'price' => 'required',
        'from' => 'required',
        'to' => 'required'
    );

    public static $banner_rules = array(
        'title' => 'required',
        'image' => 'required'
    );

    public static $brand_rules = array(
        'brand' => 'required'
    );

    public static $tipoproducto_rules = array(
        'type' => 'required'
    );

        
    public static $tanquevariable = array(
        'canal' => 'required|numeric',
        'ecuacion' => 'required',
        'val_max' => 'required',
        'val_min' => 'required'
    );
    
    public static $tanquevariableedit = array(
        'canal' => 'required|numeric',
        'ecuacion' => 'required',
        'val_max' => 'required',
        'val_min' => 'required',
    ); 
        
    /**
     * 
     * @var $tank_rules: Reglas de validacion para cuando se crea un tanque por primera vez.
     */
    
    public static $tanque_rules = array(
        
        'nombre' => 'required|min:4',
        'lat' => 'required',
        'long'=> 'required' 
    );
    
    public static $tanque_update_rules = array(
        
        'nombre' => 'required|min:4',
        'lat' => 'required',
        'long'=> 'required' 
    );

    static function ProductValidation($data){
        return Validator::make($data,static::$product_rules);
    }

    static function PerfilValidation($data){
        return Validator::make($data,static::$perfil_rules);
    }

    static function BannerValidation($data){
        return Validator::make($data,static::$banner_rules);
    }

    static function ArticleValidation($data){
        return Validator::make($data,static::$article_rules);
    }

    static function DealValidation($data){
        return Validator::make($data,static::$deal_rules);
    }

    static function BrandValidation($data){
        return Validator::make($data,static::$brand_rules);
    }

    static function TipoproductoValidation($data){
        return Validator::make($data,static::$tipoproducto_rules);
    }
 
    static function tanquevariable($data){
        return Validator::make($data,static::$tanquevariable);
    }
    
    
   static function tanquevariableedit($data){
        return Validator::make($data,static::$tanquevariableedit);
    }
    

    static function tanque($data){
        return Validator::make($data,static::$tanque_rules);
    }
    
    static function tanque_update($data){
        return Validator::make($data,static::$tanque_update_rules);
    }
}
?>