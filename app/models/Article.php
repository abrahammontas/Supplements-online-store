<?php

class Article extends Eloquent {

    protected $table = 'article';
    protected $guarded = 'id';

    public function profile() {
        return $this->belongsTo('Profile', 'id_profile', 'id');
    }

}