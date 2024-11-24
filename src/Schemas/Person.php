<?php
namespace Mimachh\Seo\Schemas;

class Person extends SchemaType
{
    public static function create(): self
    {
        return new self;
    }


    public function name(string $name)
    {
        $this->setAttribute('name', $name);
        return $this;
    }

    public function url(string $url)
    {
        $this->setAttribute('url', $url);
        return $this;
    }

    public function sameAs(array $urls)
    {
        $this->setAttribute('sameAs', $urls);
        return $this;
    }

    public function additionalName(string $additionalName)
    {
        $this->setAttribute('additionalName', $additionalName);
        return $this;
    }

    public function address(string $address)
    {
        $this->setAttribute('address', $address);
        return $this;
    }

    public function affiliation(Organization $organization)
    {
        $this->setAttribute('affiliation', $organization->getSchemaData());
        return $this;
    }

    public function alumniOf(EducationalOrganization $organization)
    {
        $this->setAttribute('alumniOf', $organization->getSchemaData());
        return $this;
    }

    public function award(string $award)
    {
        $this->setAttribute('award', $award);
        return $this;
    }

    public function birthDate(string $birthDate)
    {
        $this->setAttribute('birthDate', $birthDate);
        return $this;
    }

    public function birthPlace(Place $place)
    {
        $this->setAttribute('birthPlace', $place->getSchemaData());
        return $this;
    }

    public function brand(Brand $brand)
    {
        $this->setAttribute('brand', $brand->getSchemaData());
        return $this;
    }

    public function children(Person $person)
    {
        $this->setAttribute('children', $person->getSchemaData());
        return $this;
    }

    public function colleague(Person $person)
    {
        $this->setAttribute('colleague', $person->getSchemaData());
        return $this;
    }

    public function contactPoint(ContactPoint $contactPoint)
    {
        $this->setAttribute('contactPoint', $contactPoint->getSchemaData());
        return $this;
    }

    public function deathDate(string $deathDate)
    {
        $this->setAttribute('deathDate', $deathDate);
        return $this;
    }

    public function deathPlace(Place $place)
    {
        $this->setAttribute('deathPlace', $place->getSchemaData());
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

    public function familyName(string $familyName)
    {
        $this->setAttribute('familyName', $familyName);
        return $this;
    }

    public function faxNumber(string $faxNumber)
    {
        $this->setAttribute('faxNumber', $faxNumber);
        return $this;
    }

    public function follows(Person $person)
    {
        $this->setAttribute('follows', $person->getSchemaData());
        return $this;
    }

    public function funder(Organization $organization)
    {
        $this->setAttribute('funder', $organization->getSchemaData());
        return $this;
    }

    public function gender(string $gender)
    {
        $this->setAttribute('gender', $gender);
        return $this;
    }

    public function givenName(string $givenName)
    {
        $this->setAttribute('givenName', $givenName);
        return $this;
    }

    public function globalLocationNumber(string $globalLocationNumber)
    {
        $this->setAttribute('globalLocationNumber', $globalLocationNumber);
        return $this;
    }

    public function hasOccupation(string $hasOccupation)
    {
        $this->setAttribute('hasOccupation', $hasOccupation);
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

    public function height(QuantitativeValue $quantitativeValue)
    {
        $this->setAttribute('height', $quantitativeValue->getSchemaData());
        return $this;
    }

    public function homeLocation(ContactPoint $contactPoint)
    {
        $this->setAttribute('homeLocation', $contactPoint->getSchemaData());
        return $this;
    }

    public function honorificPrefix(string $honorificPrefix)
    {
        $this->setAttribute('honorificPrefix', $honorificPrefix);
        return $this;
    }

    public function honorificSuffix(string $honorificSuffix)
    {
        $this->setAttribute('honorificSuffix', $honorificSuffix);
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

    public function jobTitle(string $jobTitle)
    {
        $this->setAttribute('jobTitle', $jobTitle);
        return $this;
    }

    public function knows(Person $person)
    {
        $this->setAttribute('knows', $person->getSchemaData());
        return $this;
    }

    public function makesOffer(Offer $offer)
    {
        $this->setAttribute('makesOffer', $offer->getSchemaData());
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

    public function nationality(Country $country)
    {
        $this->setAttribute('nationality', $country->getSchemaData());
        return $this;
    }

    public function netWorth(PriceSpecification $priceSpecification)
    {
        $this->setAttribute('netWorth', $priceSpecification->getSchemaData());
        return $this;
    }

    public function owns(OwnershipInfo $ownershipInfo)
    {
        $this->setAttribute('owns', $ownershipInfo->getSchemaData());
        return $this;
    }

    public function parent(Person $person)
    {
        $this->setAttribute('parent', $person->getSchemaData());
        return $this;
    }

    public function performerIn(Event $event)
    {
        $this->setAttribute('performerIn', $event->getSchemaData());
        return $this;
    }

    public function publishingPrinciples(string $publishingPrinciples)
    {
        $this->setAttribute('publishingPrinciples', $publishingPrinciples);
        return $this;
    }

    public function relatedTo(Person $person)
    {
        $this->setAttribute('relatedTo', $person->getSchemaData());
        return $this;
    }

    public function seeks(Demand $demand)
    {
        $this->setAttribute('seeks', $demand->getSchemaData());
        return $this;
    }

    public function sibling(Person $person)
    {
        $this->setAttribute('sibling', $person->getSchemaData());
        return $this;
    }

    public function sponsor(Organization $organization)
    {
        $this->setAttribute('sponsor', $organization->getSchemaData());
        return $this;
    }

    public function spouse(Person $person)
    {
        $this->setAttribute('spouse', $person->getSchemaData());
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

    public function weight(QuantitativeValue $quantitativeValue)
    {
        $this->setAttribute('weight', $quantitativeValue->getSchemaData());
        return $this;
    }

    public function workLocation(ContactPoint $contactPoint)
    {
        $this->setAttribute('workLocation', $contactPoint->getSchemaData());
        return $this;
    }

    public function worksFor(Organization $organization)
    {
        $this->setAttribute('worksFor', $organization->getSchemaData());
        return $this;
    }
}
