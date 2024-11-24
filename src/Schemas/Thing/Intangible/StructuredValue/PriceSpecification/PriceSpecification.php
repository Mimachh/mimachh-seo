<?php 

namespace Mimachh\Seo\Schemas;

class PriceSpecification extends StructuredValue
{
    public static function create(): self
    {
        return new self;
    }

    public function eligibleQuantity(QuantitativeValue $eligibleQuantity)
    {
        $this->setAttribute('eligibleQuantity', $eligibleQuantity);

        return $this;
    }

    public function eligibleTransactionVolume(PriceSpecification $eligibleTransactionVolume)
    {
        $this->setAttribute('eligibleTransactionVolume', $eligibleTransactionVolume);

        return $this;
    }

    public function maxPrice(float $maxPrice)
    {
        $this->setAttribute('maxPrice', $maxPrice);

        return $this;
    }

    public function minPrice(float $minPrice)
    {
        $this->setAttribute('minPrice', $minPrice);

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

    public function validFrom(string $validFrom)
    {
        $this->setAttribute('validFrom', $validFrom);

        return $this;
    }

    public function validThrough(string $validThrough)
    {
        $this->setAttribute('validThrough', $validThrough);

        return $this;
    }
    
    public function valueAddedTaxIncluded(bool $valueAddedTaxIncluded)
    {
        $this->setAttribute('valueAddedTaxIncluded', $valueAddedTaxIncluded);

        return $this;
    }
    
}