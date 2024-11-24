<?php
namespace Mimachh\Seo\Schemas;

class Organization extends SchemaType {
    public static function create(): self
    {
        return new self;
    }

    public function acceptedPaymentMethod($acceptedPaymentMethod)
    {
        $this->setAttribute('acceptedPaymentMethod', $acceptedPaymentMethod);
        return $this;
    }

    public function address (string $address)
    {
        $this->setAttribute('address', $address);
        return $this;
    }

    public function aggregateRating(int $aggregateRating)
    {
        $this->setAttribute('aggregateRating', $aggregateRating);
        return $this;
    }

    public function alumni(EducationalOrganization $alumni)
    {
        $this->setAttribute('alumni', $alumni->getSchemaData());
        return $this;
    }

    public function areaServed($areaServed)
    {
        $this->setAttribute('areaServed', $areaServed);
        return $this;
    }

    public function award(string $award)
    {
        $this->setAttribute('award', $award);
        return $this;
    }

    public function brand(string $brand)
    {
        $this->setAttribute('brand', $brand);
        return $this;
    }

    public function contactPoint(ContactPoint $contactPoint)
    {
        $this->setAttribute('contactPoint', $contactPoint->getSchemaData());
        return $this;
    }

    public function department(Organization $department)
    {
        $this->setAttribute('department', $department->getSchemaData());
        return $this;
    }

    public function dissolutionDate(string $dissolutionDate)
    {
        $this->setAttribute('dissolutionDate', $dissolutionDate);
        return $this;
    }

    public function duns(string $duns)
    {
        $this->setAttribute('duns', $duns);
        return $this;
    }

    public function email(string $email)
    {
        $this->setAttribute('email', $email);
        return $this;
    }

    public function employee(Person $person)
    {
        $this->setAttribute('employee', $person->getSchemaData());
        return $this;
    }

    public function event(Event $event)
    {
        $this->setAttribute('event', $event->getSchemaData());
        return $this;
    }

    public function faxNumber(string $faxNumber)
    {
        $this->setAttribute('faxNumber', $faxNumber);
        return $this;
    }

    public function founder(Person $person)
    {
        $this->setAttribute('founder', $person->getSchemaData());
        return $this;
    }

    public function foundingDate(string $foundingDate)
    {
        $this->setAttribute('foundingDate', $foundingDate);
        return $this;
    }

    public function foundingLocation(Place $place)
    {
        $this->setAttribute('foundingLocation', $place->getSchemaData());
        return $this;
    }

    public function funder(Organization $organization)
    {
        $this->setAttribute('funder', $organization->getSchemaData());
        return $this;
    }

    public function globalLocationNumber(string $globalLocationNumber)
    {
        $this->setAttribute('globalLocationNumber', $globalLocationNumber);
        return $this;
    }

    public function hasCertification(Certification $certification)
    {
        $this->setAttribute('hasCertification', $certification->getSchemaData());
        return $this;
    }

    public function hasOfferCatalog(OfferCatalog $offerCatalog)
    {
        $this->setAttribute('hasOfferCatalog', $offerCatalog->getSchemaData());
        return $this;
    }

    public function hasPOS(Place $place)
    {
        $this->setAttribute('hasPOS', $place->getSchemaData());
        return $this;
    }

    public function interactionStatistic(InteractionCounter $interactionCounter)
    {
        $this->setAttribute('interactionStatistic', $interactionCounter->getSchemaData());
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

    public function knownsLanguage(string $knownsLanguage)
    {
        $this->setAttribute('knownsLanguage', $knownsLanguage);
        return $this;
    }

    public function legalName(string $legalName)
    {
        $this->setAttribute('legalName', $legalName);
        return $this;
    }

    public function location(Place $place)
    {
        $this->setAttribute('location', $place->getSchemaData());
        return $this;
    }

    public function logo(ImageObject $imageObject)
    {
        $this->setAttribute('logo', $imageObject->getSchemaData());
        return $this;
    }

    public function makesOffer(Offer $offer)
    {
        $this->setAttribute('makesOffer', $offer->getSchemaData());
        return $this;
    }

    public function member(Person $person)
    {
        $this->setAttribute('member', $person->getSchemaData());
        return $this;
    }

    public function memberOf(Organization $organization)
    {
        $this->setAttribute('memberOf', $organization->getSchemaData());
        return $this;
    }

    public function naics(string $naics)
    {
        $this->setAttribute('naics', $naics);
        return $this;
    }

    public function numberOfEmployees(int $numberOfEmployees)
    {
        $this->setAttribute('numberOfEmployees', $numberOfEmployees);
        return $this;
    }

    public function owns(OwnershipInfo $ownershipInfo)
    {
        $this->setAttribute('owns', $ownershipInfo->getSchemaData());
        return $this;
    }

    public function parentOrganization(Organization $organization)
    {
        $this->setAttribute('parentOrganization', $organization->getSchemaData());
        return $this;
    }

    public function publishingPrinciples(string $publishingPrinciples)
    {
        $this->setAttribute('publishingPrinciples', $publishingPrinciples);
        return $this;
    }

    public function review(Review $review)
    {
        $this->setAttribute('review', $review->getSchemaData());
        return $this;
    }

    public function seeks(Demand $demand)
    {
        $this->setAttribute('seeks', $demand->getSchemaData());
        return $this;
    }

    public function slogan(string $slogan)
    {
        $this->setAttribute('slogan', $slogan);
        return $this;
    }

    public function sponsor(Organization $organization)
    {
        $this->setAttribute('sponsor', $organization->getSchemaData());
        return $this;
    }

    public function subOrganization(Organization $organization)
    {
        $this->setAttribute('subOrganization', $organization->getSchemaData());
        return $this;
    }

    public function taxID(string $taxID)
    {
        $this->setAttribute('taxID', $taxID);
        return $this;
    }

    public function telephone(string $telephone)
    {
        $this->setAttribute('telephone', $telephone);
        return $this;
    }

    public function vatID(string $vatID)
    {
        $this->setAttribute('vatID', $vatID);
        return $this;
    }
}