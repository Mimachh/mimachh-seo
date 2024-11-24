<?php 

namespace Mimachh\Seo\Schemas;

class AggregateRating extends Rating
{
    public static function create(): self
    {
        return new self;
    }

    public function itemReviewed(Thing $itemReviewed)
    {
        return $this->setAttribute('itemReviewed', $itemReviewed);
    }

    public function ratingCount(int $ratingCount)
    {
        return $this->setAttribute('ratingCount', $ratingCount);
    }

    public function reviewCount(int $reviewCount)
    {
        return $this->setAttribute('reviewCount', $reviewCount);
    }

}