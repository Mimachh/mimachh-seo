<?php

namespace Mimachh\Seo\Traits;


use Mimachh\Seo\Http\Models\Seo;

trait HasSeo
{
    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }

    public function updateSeo(array $data)
    {
        $this->seo()->updateOrCreate([], $data);
    }

public static function bootHasSeo()
{
    // Validation avant sauvegarde
    static::saving(function ($model) {
        if (request()->has('seo_title') || request()->has('seo_description')) {
            $data = [
                'seo_title' => request('seo_title'),
                'seo_description' => request('seo_description'),
            ];

            // Valider les données SEO, lancer une exception en cas d'échec
            self::validateSeoData($data);

            // Stocker les données SEO sur le modèle pour une utilisation après sauvegarde
            $model->seo_data = $data;
        }
    });

    // Création ou mise à jour après sauvegarde
    static::saved(function ($model) {
        if (isset($model->seo_data)) {
            // Mettre à jour ou créer l'entrée SEO
            $model->updateSeo($model->seo_data);

            // Nettoyer la propriété temporaire
            unset($model->seo_data);
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
