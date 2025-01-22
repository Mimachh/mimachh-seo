<?php

namespace Mimachh\Seo\Traits;


use Mimachh\Seo\Http\Models\Seo;


trait HasSeo
{
    private array $seoTempData = [];
    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }

    public function updateSeo(array $data)
    {
        $this->seo()->updateOrCreate(
            ['seoable_id' => $this->id, 'seoable_type' => get_class($this)],
            $data
        );
    }

    public static function bootHasSeo()
    {
        static::saving(function ($model) {
            if (request()->has('seo_title') || request()->has('seo_description')) {
                $data = [
                    'seo_title' => request('seo_title'),
                    'seo_description' => request('seo_description'),
                ];
                self::validateSeoData($data);
                $model->seoTempData = $data;
            }
        });

        static::saved(function ($model) {
            if (isset($model->seoTempData)) {
                $model->updateSeo($model->seoTempData);
                $model->seoTempData = [];
            }
        });
    }

    public static function validateSeoData($data)
    {

        $messages = [
            'seo_title.max' => 'Le titre SEO ne doit pas dépasser 60 caractères.',
            'seo_title.min' => 'Le titre SEO doit contenir au moins 50 caractères.',
            'seo_description.max' => 'La description SEO ne doit pas dépasser 160 caractères.',
            'seo_description.min' => 'La description SEO doit contenir au moins 50 caractères.',
        ];

        return validator($data, [
            'seo_title' => 'nullable|string|max:60|min:50',
            'seo_description' => 'nullable|string|min:50|max:160',
        ], $messages)->validate();
    }
}
