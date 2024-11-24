<?php 

namespace Mimachh\Seo\Schemas;

class Review extends Thing
{
    public static function create(): self
    {
        return new self;
    }

    public function associatedClaimReview(Review $associatedClaimReview)
    {
        $this->setAttribute('associatedClaimReview', $associatedClaimReview);

        return $this;
    }

    public function associatedMediaReview(Review $associatedMediaReview)
    {
        $this->setAttribute('associatedMediaReview', $associatedMediaReview);

        return $this;
    }

    public function associatedReview(Review $associatedReview)
    {
        $this->setAttribute('associatedReview', $associatedReview);

        return $this;
    }

    public function itemReviewed(Thing $itemReviewed)
    {
        $this->setAttribute('itemReviewed', $itemReviewed);

        return $this;
    }

    public function reviewAspect(string $reviewAspect)
    {
        $this->setAttribute('reviewAspect', $reviewAspect);

        return $this;
    }

    public function reviewBody(string $reviewBody)
    {
        $this->setAttribute('reviewBody', $reviewBody);

        return $this;
    }

    public function reviewRating(Rating $reviewRating)
    {
        $this->setAttribute('reviewRating', $reviewRating);

        return $this;
    }

    public function reviewType(string $reviewType)
    {
        $this->setAttribute('reviewType', $reviewType);

        return $this;
    }

    public function negativeNotes(string $negativeNotes)
    {
        $this->setAttribute('negativeNotes', $negativeNotes);

        return $this;
    }

    public function positiveNotes(string $positiveNotes)
    {
        $this->setAttribute('positiveNotes', $positiveNotes);

        return $this;
    }
}