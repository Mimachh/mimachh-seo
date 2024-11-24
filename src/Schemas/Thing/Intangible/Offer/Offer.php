<?php 

namespace Mimachh\Seo\Schemas;

class Offer extends Intangible
{
    public static function create(): self
    {
        return new self;
    }

    public function acceptedPaymentMethod(PaymentMethod $acceptedPaymentMethod)
    {
        $this->setAttribute('acceptedPaymentMethod', $acceptedPaymentMethod);

        return $this;
    }

    public function addOn(Offer $addOn)
    {
        $this->setAttribute('addOn', $addOn);

        return $this;
    }

    public function additionalProperty(PropertyValue $additionalProperty)
    {
        $this->setAttribute('additionalProperty', $additionalProperty);

        return $this;
    }

    public function advanceBookingRequirement(QuantitativeValue $advanceBookingRequirement)
    {
        $this->setAttribute('advanceBookingRequirement', $advanceBookingRequirement);

        return $this;
    }

    public function aggregateRating(AggregateRating $aggregateRating)
    {
        $this->setAttribute('aggregateRating', $aggregateRating);

        return $this;
    }

    public function areaServed(AdministrativeArea $areaServed)
    {
        $this->setAttribute('areaServed', $areaServed);

        return $this;
    }

    public function availability(ItemAvailability $availability)
    {
        $this->setAttribute('availability', $availability);

        return $this;
    }

    public function availabilityEnds(\DateTime $availabilityEnds)
    {
        $this->setAttribute('availabilityEnds', $availabilityEnds);

        return $this;
    }

    public function availabilityStarts(\DateTime $availabilityStarts)
    {
        $this->setAttribute('availabilityStarts', $availabilityStarts);

        return $this;
    }

    public function availableAtOrFrom(Place $availableAtOrFrom)
    {
        $this->setAttribute('availableAtOrFrom', $availableAtOrFrom);

        return $this;
    }

    public function availableDeliveryMethod(DeliveryMethod $availableDeliveryMethod)
    {
        $this->setAttribute('availableDeliveryMethod', $availableDeliveryMethod);

        return $this;
    }

    public function businessFunction(BusinessFunction $businessFunction)
    {
        $this->setAttribute('businessFunction', $businessFunction);

        return $this;
    }

    public function category(string $category)
    {
        $this->setAttribute('category', $category);

        return $this;
    }

    public function deliveryLeadTime(QuantitativeValue $deliveryLeadTime)
    {
        $this->setAttribute('deliveryLeadTime', $deliveryLeadTime);

        return $this;
    }

    public function eligibleCustomerType(BusinessEntityType $eligibleCustomerType)
    {
        $this->setAttribute('eligibleCustomerType', $eligibleCustomerType);

        return $this;
    }

    public function eligibleDuration(QuantitativeValue $eligibleDuration)
    {
        $this->setAttribute('eligibleDuration', $eligibleDuration);

        return $this;
    }

    public function eligibleQuantity(QuantitativeValue $eligibleQuantity)
    {
        $this->setAttribute('eligibleQuantity', $eligibleQuantity);

        return $this;
    }

    public function eligibleRegion(GeoShape $eligibleRegion)
    {
        $this->setAttribute('eligibleRegion', $eligibleRegion);

        return $this;
    }

    public function eligibleTransactionVolume(PriceSpecification $eligibleTransactionVolume)
    {
        $this->setAttribute('eligibleTransactionVolume', $eligibleTransactionVolume);

        return $this;
    }

    public function gtin12(string $gtin12)
    {
        $this->setAttribute('gtin12', $gtin12);

        return $this;
    }

    public function gtin13(string $gtin13)
    {
        $this->setAttribute('gtin13', $gtin13);

        return $this;
    }

    public function gtin14(string $gtin14)
    {
        $this->setAttribute('gtin14', $gtin14);

        return $this;
    }

    public function gtin8(string $gtin8)
    {
        $this->setAttribute('gtin8', $gtin8);

        return $this;
    }

    public function includesObject(TypeAndQuantityNode $includesObject)
    {
        $this->setAttribute('includesObject', $includesObject);

        return $this;
    }

    public function inventoryLevel(QuantitativeValue $inventoryLevel)
    {
        $this->setAttribute('inventoryLevel', $inventoryLevel);

        return $this;
    }

    public function itemCondition(OfferItemCondition $itemCondition)
    {
        $this->setAttribute('itemCondition', $itemCondition);

        return $this;
    }

    public function isFamilyFriendly(bool $isFamilyFriendly)
    {
        $this->setAttribute('isFamilyFriendly', $isFamilyFriendly);

        return $this;
    }

    public function hasMeasurement(QuantitativeValue $hasMeasurement)
    {
        $this->setAttribute('hasMeasurement', $hasMeasurement);

        return $this;
    }

    public function hasMerchantReturnPolicy(MerchantReturnPolicy $hasMerchantReturnPolicy)
    {
        $this->setAttribute('hasMerchantReturnPolicy', $hasMerchantReturnPolicy);

        return $this;
    }

    public function itemOffered(mixed $itemOffered)
    {
        $this->setAttribute('itemOffered', $itemOffered);

        return $this;
    }

    public function mpn(string $mpn)
    {
        $this->setAttribute('mpn', $mpn);

        return $this;
    }

    public function price(float $price)
    {
        $this->setAttribute('price', $price);

        return $this;
    }

    public function priceCurrency(string $priceCurrency)
    {
        $this->setAttribute('priceCurrency', $priceCurrency);

        return $this;
    }

    public function priceSpecification(PriceSpecification $priceSpecification)
    {
        $this->setAttribute('priceSpecification', $priceSpecification);

        return $this;
    }

    public function priceValidUntil(\DateTime $priceValidUntil)
    {
        $this->setAttribute('priceValidUntil', $priceValidUntil);

        return $this;
    }

    public function review(Review $review)
    {
        $this->setAttribute('review', $review);

        return $this;
    }

    public function seller(Organization $seller)
    {
        $this->setAttribute('seller', $seller);

        return $this;
    }

    public function serialNumber(string $serialNumber)
    {
        $this->setAttribute('serialNumber', $serialNumber);

        return $this;
    }

    public function sku(string $sku)
    {
        $this->setAttribute('sku', $sku);

        return $this;
    }

    public function validFrom(\DateTime $validFrom)
    {
        $this->setAttribute('validFrom', $validFrom);

        return $this;
    }

    public function validThrough(\DateTime $validThrough)
    {
        $this->setAttribute('validThrough', $validThrough);

        return $this;
    }

    public function warranty(WarrantyPromise $warranty)
    {
        $this->setAttribute('warranty', $warranty);

        return $this;
    }

}
