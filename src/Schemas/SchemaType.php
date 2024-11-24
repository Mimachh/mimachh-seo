<?php
namespace Mimachh\Seo\Schemas;

abstract class SchemaType
{
    protected $attributes = [];
    protected $htmlAttributes = [];  

  
    
    public function setAttribute(string $key, $value)
    {
        $this->attributes[$key] = $value;
        return $this;
    }

    public function getSchemaData(): array
    {
        return $this->attributes;
    }

    public function toJsonLd(): string
    {
        return json_encode(array_merge(['@context' => 'https://schema.org'], $this->getSchemaData()), JSON_UNESCAPED_SLASHES);
    }



    /**
     * Génère une balise HTML avec un attribut itemprop et supporte des attributs supplémentaires comme href
     */
    public function toHtmlElement(string $element, string $itemprop, $content, array $extraAttributes = []): string
    {
        // Si l'élément est un <Link> (Inertia), on génère un composant Link
        if ($element === 'Link') {
            return $this->toHtmlInertiaLink($itemprop, $content, $extraAttributes);
        }
    
        // Si l'élément est un <a>, on génère un lien classique
        if ($element === 'a' && !isset($extraAttributes['href'])) {
            $extraAttributes['href'] = $content;  // Si c'est une balise <a>, le contenu devient le href
        }
    
        // Générer l'élément HTML (pour <a> ou autre balise)
        return $this->generateHtml($element, $itemprop, $content, $extraAttributes);
    }
    
    protected function toHtmlInertiaLink(string $key, string $url, array $extraAttributes = []): string
    {
        // Générer un composant Link d'Inertia avec l'attribut itemprop
        // On ferme correctement la balise <Link>
        return '<Link itemprop="' . $key . '" href="' . $url . '"' . $this->generateExtraAttributes($extraAttributes) . '>' . $url . '</Link>';
    }
    
    protected function generateExtraAttributes(array $extraAttributes): string
    {
        $attributes = '';
        foreach ($extraAttributes as $key => $value) {
            $attributes .= ' ' . $key . '="' . $value . '"';
        }
        return $attributes;
    }
    
    protected function generateHtml(string $element, string $itemprop, string $content, array $extraAttributes): string
    {
        $attributes = 'itemprop="' . $itemprop . '"';
        foreach ($extraAttributes as $key => $value) {
            $attributes .= ' ' . $key . '="' . $value . '"';
        }
    
        return "<$element $attributes>$content</$element>";
    }
    
}
