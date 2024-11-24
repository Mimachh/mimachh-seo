<?php

namespace Mimachh\Seo\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model 
{
    //table name
    protected $table = 'seo';

    protected $fillable = ['seo_title', 'seo_description'];

    public function seoable()
    {
        return $this->morphTo();
    }
}