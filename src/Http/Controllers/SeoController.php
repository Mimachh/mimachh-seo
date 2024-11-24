<?php


namespace Mimachh\Seo\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; 

class SeoController extends Controller
{
    public function store(Request $request, $seoable)
    {
        $data = $request->validate([
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
        ]);

        $seoable->updateSeo($data);

        return response()->json(['message' => 'SEO data saved successfully.']);
    }
}
