<?php

namespace Mimachh\Seo\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model 
{
    //table name
    protected $table = 'seo';
    protected $seo_data = null; // Propriété temporaire pour stocker les données SEO en mémoire
    protected $fillable = ['seo_title', 'seo_description'];

    public function seoable()
    {
        return $this->morphTo();
    }
}
