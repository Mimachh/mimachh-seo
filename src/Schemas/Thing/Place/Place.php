<?php 

namespace Mimachh\Seo\Schemas;

class Place extends Thing
{
    public static function create(): self
    {
        return new self;
    }

    // public function additionalProperty(PropertyValue $additionalProperty)
    // {
    //     $this->setAttribute('additionalProperty', $additionalProperty);

    //     return $this;
    // }

    public function address(string $address)
    {
        $this->setAttribute('address', $address);

        return $this;
    }

    public function aggregateRating(AggregateRating $aggregateRating)
    {
        $this->setAttribute('aggregateRating', $aggregateRating);

        return $this;
    }

    public function amenityFeature(LocationFeatureSpecification $amenityFeature)
    {
        $this->setAttribute('amenityFeature', $amenityFeature);

        return $this;
    }

    public function branchCode(string $branchCode)
    {
        $this->setAttribute('branchCode', $branchCode);

        return $this;
    }

    public function containedInPlace(Place $containedIn)
    {
        $this->setAttribute('containedIn', $containedIn);

        return $this;
    }

    public function containsPlace(Place $contains)
    {
        $this->setAttribute('contains', $contains);

        return $this;
    }

    public function event(Event $event)
    {
        $this->setAttribute('event', $event);

        return $this;
    }

    public function faxNumber(string $faxNumber)
    {
        $this->setAttribute('faxNumber', $faxNumber);

        return $this;
    }

    public function geo(GeoCoordinates $geo)
    {
        $this->setAttribute('geo', $geo);

        return $this;
    }

    public function geoContains(Place $geoContains)
    {
        $this->setAttribute('geoContains', $geoContains);

        return $this;
    }

    public function geoCoveredBy(Place $geoCoveredBy)
    {
        $this->setAttribute('geoCoveredBy', $geoCoveredBy);

        return $this;
    }

    public function geoCovers(Place $geoCovers)
    {
        $this->setAttribute('geoCovers', $geoCovers);

        return $this;
    }

    public function geoCrosses(Place $geoCrosses)
    {
        $this->setAttribute('geoCrosses', $geoCrosses);

        return $this;
    }

    public function geoDisjoint(Place $geoDisjoint)
    {
        $this->setAttribute('geoDisjoint', $geoDisjoint);

        return $this;
    }

    public function geoEquals(Place $geoEquals)
    {
        $this->setAttribute('geoEquals', $geoEquals);

        return $this;
    }

    public function geoIntersects(Place $geoIntersects)
    {
        $this->setAttribute('geoIntersects', $geoIntersects);

        return $this;
    }

    public function geoOverlaps(Place $geoOverlaps)
    {
        $this->setAttribute('geoOverlaps', $geoOverlaps);

        return $this;
    }

    public function geoTouches(Place $geoTouches)
    {
        $this->setAttribute('geoTouches', $geoTouches);

        return $this;
    }

    public function geoWithin(Place $geoWithin)
    {
        $this->setAttribute('geoWithin', $geoWithin);

        return $this;
    }

    public function globalLocationNumber(string $globalLocationNumber)
    {
        $this->setAttribute('globalLocationNumber', $globalLocationNumber);

        return $this;
    }

    public function hasMap(string $hasMap)
    {
        $this->setAttribute('hasMap', $hasMap);

        return $this;
    }

    public function isAccessibleForFree(bool $isAccessibleForFree)
    {
        $this->setAttribute('isAccessibleForFree', $isAccessibleForFree);

        return $this;
    }

    public function isicV4(string $isicV4)
    {
        $this->setAttribute('isicV4', $isicV4);

        return $this;
    }

    public function keywords(string $keywords)
    {
        $this->setAttribute('keywords', $keywords);

        return $this;
    }

    public function latitude(float $latitude)
    {
        $this->setAttribute('latitude', $latitude);

        return $this;
    }

    public function logo(string $logo)
    {
        $this->setAttribute('logo', $logo);

        return $this;
    }

    public function longitude(float $longitude)
    {
        $this->setAttribute('longitude', $longitude);

        return $this;
    }


    public function maximumAttendeeCapacity(int $maximumAttendeeCapacity)
    {
        $this->setAttribute('maximumAttendeeCapacity', $maximumAttendeeCapacity);

        return $this;
    }

    public function openingHours(string $openingHours)
    {
        $this->setAttribute('openingHours', $openingHours);

        return $this;
    }

    public function photo(string $photo)
    {
        $this->setAttribute('photo', $photo);

        return $this;
    }

    public function publicAccess(bool $publicAccess)
    {
        $this->setAttribute('publicAccess', $publicAccess);

        return $this;
    }

    public function review(Review $review)
    {
        $this->setAttribute('review', $review);

        return $this;
    }

    public function slogan(string $slogan)
    {
        $this->setAttribute('slogan', $slogan);

        return $this;
    }

    public function smokingAllowed(bool $smokingAllowed)
    {
        $this->setAttribute('smokingAllowed', $smokingAllowed);

        return $this;
    }

    // public function specialOpeningHoursSpecification(OpeningHoursSpecification $specialOpeningHoursSpecification)
    // {
    //     $this->setAttribute('specialOpeningHoursSpecification', $specialOpeningHoursSpecification);

    //     return $this;
    // }

    public function telephone(string $telephone)
    {
        $this->setAttribute('telephone', $telephone);

        return $this;
    }

    public function tourBookingPage(string $tourBookingPage)
    {
        $this->setAttribute('tourBookingPage', $tourBookingPage);

        return $this;
    }
}
