<?php
namespace Mimachh\Seo;

use Illuminate\Support\Facades\Facade;
use Mimachh\Seo\Schemas\AdministrativeArea;
use Mimachh\Seo\Schemas\AggregateRating;
use Mimachh\Seo\Schemas\Audience;
use Mimachh\Seo\Schemas\ContactPoint;
use Mimachh\Seo\Schemas\CreativeWork;
use Mimachh\Seo\Schemas\EducationalOrganization;
use Mimachh\Seo\Schemas\Event;
use Mimachh\Seo\Schemas\GeoCoordinates;
use Mimachh\Seo\Schemas\Intangible;
use Mimachh\Seo\Schemas\LocationFeatureSpecification;
use Mimachh\Seo\Schemas\Offer;
use Mimachh\Seo\Schemas\OpeninghoursSpecification;
use Mimachh\Seo\Schemas\Organization;
use Mimachh\Seo\Schemas\Person;
use Mimachh\Seo\Schemas\PriceSpecification;
use Mimachh\Seo\Schemas\PropertyValue;
use Mimachh\Seo\Schemas\Rating;
use Mimachh\Seo\Schemas\Review;
use Mimachh\Seo\Schemas\StructuredValue;
use Mimachh\Seo\Schemas\Thing;

class SchemaOrg extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Seo';
    }

    public static function person(): Person
    {
        return Person::create();
    }

    public static function organization(): Organization
    {
        return Organization::create();
    }

    public static function educationalOrganization(): EducationalOrganization
    {
        return EducationalOrganization::create();
    }

    public static function contactPoint(): ContactPoint
    {
        return ContactPoint::create();
    }

    public static function thing(): Thing
    {
        return Thing::create();
    }

    public static function event(): Event
    {
        return Event::create();
    }

    public static function creativeWork(): CreativeWork
    {
        return CreativeWork::create();
    }

    public static function review(): Review
    {
        return Review::create();
    }

    public static function rating(): Rating
    {
        return Rating::create();
    }

    public static function intangible(): Intangible
    {
        return Intangible::create();
    }

    public static function structuredValue(): StructuredValue
    {
        return StructuredValue::create();
    }

    public static function geoCoordinates(): GeoCoordinates
    {
        return GeoCoordinates::create();
    }

    public static function propertyValue(): PropertyValue
    {
        return PropertyValue::create();
    }

    public static function openingHoursSpecification(): OpeninghoursSpecification
    {
        return OpeningHoursSpecification::create();
    }

    public static function locationFeatureSpecification(): LocationFeatureSpecification
    {
        return LocationFeatureSpecification::create();
    }

    public static function aggregateRating(): AggregateRating
    {
        return AggregateRating::create();
    }

    public static function administativeArea(): AdministrativeArea
    {
        return AdministrativeArea::create();
    }

    public static function audience(): Audience
    {
        return Audience::create();
    }

    public static function priceSpecification(): PriceSpecification
    {
        return PriceSpecification::create();
    }

    public static function offer(): Offer
    {
        return Offer::create();
    }
    
}
