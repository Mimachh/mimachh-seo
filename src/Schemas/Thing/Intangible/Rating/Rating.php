<?php 

namespace Mimachh\Seo\Schemas;

class Rating extends Intangible
{
    public static function create(): self
    {
        return new self;
    }

    public function author(Person $author)
    {
        $this->setAttribute('author', $author);
        return $this;
    }

    public function bestRating(int $bestRating)
    {
        $this->setAttribute('bestRating', $bestRating);
        return $this;
    }

    public function ratingExplanation(string $ratingExplanation)
    {
        $this->setAttribute('ratingExplanation', $ratingExplanation);
        return $this;
    }

    public function ratingValue(int $ratingValue)
    {
        $this->setAttribute('ratingValue', $ratingValue);
        return $this;
    }

    public function reviewAspect(string $reviewAspect)
    {
        $this->setAttribute('reviewAspect', $reviewAspect);
        return $this;
    }

    public function worstRating(int $worstRating)
    {
        $this->setAttribute('worstRating', $worstRating);
        return $this;
    }
}
