<?php 

namespace Mimachh\Seo\Schemas;

class OpeninghoursSpecification extends StructuredValue
{
    public static function create(): self
    {
        return new self;
    }

    public function closes(string $closes): self
    {
        $this->setAttribute('closes', $closes);

        return $this;
    }

    public function dayOfWeek(string $dayOfWeek): self
    {
        $this->setAttribute('dayOfWeek', $dayOfWeek);

        return $this;
    }

    public function opens(string $opens): self
    {
        $this->setAttribute('opens', $opens);

        return $this;
    }

    public function validFrom(string $validFrom): self
    {
        $this->setAttribute('validFrom', $validFrom);

        return $this;
    }

    public function validThrough(string $validThrough): self
    {
        $this->setAttribute('validThrough', $validThrough);

        return $this;
    }
}
