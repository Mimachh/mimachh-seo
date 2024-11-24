<?php 

namespace Mimachh\Seo\Schemas;

class Event extends Thing
{
    public static function create(): self
    {
        return new self;
    }

    public function about(string $about)
    {
        $this->setAttribute('about', $about);
        return $this;
    }

    public function actor(Person $actor)
    {
        $this->setAttribute('actor', $actor->getSchemaData());
        return $this;
    }

    public function aggregateRating(AggregateRating $aggregateRating)
    {
        $this->setAttribute('aggregateRating', $aggregateRating->getSchemaData());
        return $this;
    }

    public function attendee(Person $attendee)
    {
        $this->setAttribute('attendee', $attendee->getSchemaData());
        return $this;
    }

    public function audience(Audience $audience)
    {
        $this->setAttribute('audience', $audience->getSchemaData());
        return $this;
    }

    public function composer(Person $composer)
    {
        $this->setAttribute('composer', $composer->getSchemaData());
        return $this;
    }

    public function contributor(Person $contributor)
    {
        $this->setAttribute('contributor', $contributor->getSchemaData());
        return $this;
    }

    public function director(Person $director)
    {
        $this->setAttribute('director', $director->getSchemaData());
        return $this;
    }

    public function doorTime(string $doorTime)
    {
        $this->setAttribute('doorTime', $doorTime);
        return $this;
    }

    public function duration(string $duration)
    {
        $this->setAttribute('duration', $duration);
        return $this;
    }

    public function endDate(string $endDate)
    {
        $this->setAttribute('endDate', $endDate);
        return $this;
    }

    public function eventStatus(string $eventStatus)
    {
        $this->setAttribute('eventStatus', $eventStatus);
        return $this;
    }

    public function funder(Organization $funder)
    {
        $this->setAttribute('funder', $funder->getSchemaData());
        return $this;
    }

    public function inLanguage(string $inLanguage)
    {
        $this->setAttribute('inLanguage', $inLanguage);
        return $this;
    }

    public function isAccessibleForFree(bool $isAccessibleForFree)
    {
        $this->setAttribute('isAccessibleForFree', $isAccessibleForFree);
        return $this;
    }

    public function keywords(string $keywords)
    {
        $this->setAttribute('keywords', $keywords);
        return $this;
    }

    public function location(Place $location)
    {
        $this->setAttribute('location', $location->getSchemaData());
        return $this;
    }

    public function maximumAttendeeCapacity(int $maximumAttendeeCapacity)
    {
        $this->setAttribute('maximumAttendeeCapacity', $maximumAttendeeCapacity);
        return $this;
    }

    public function offers(Offer $offer)
    {
        $this->setAttribute('offers', $offer->getSchemaData());
        return $this;
    }

    public function organizer(Organization $organization)
    {
        $this->setAttribute('organizer', $organization->getSchemaData());
        return $this;
    }

    public function performer(Person $person)
    {
        $this->setAttribute('performer', $person->getSchemaData());
        return $this;
    }


    public function previousStartDate(string $previousStartDate)
    {
        $this->setAttribute('previousStartDate', $previousStartDate);
        return $this;
    }

    public function recordedIn(CreativeWork $creativeWork)
    {
        $this->setAttribute('recordedIn', $creativeWork->getSchemaData());
        return $this;
    }

    public function remainingAttendeeCapacity(int $remainingAttendeeCapacity)
    {
        $this->setAttribute('remainingAttendeeCapacity', $remainingAttendeeCapacity);
        return $this;
    }

    public function review(Review $review)
    {
        $this->setAttribute('review', $review->getSchemaData());
        return $this;
    }

    public function sponsor(Organization $organization)
    {
        $this->setAttribute('sponsor', $organization->getSchemaData());
        return $this;
    }

    public function startDate(string $startDate)
    {
        $this->setAttribute('startDate', $startDate);
        return $this;
    }

    public function subEvent(Event $event)
    {
        $this->setAttribute('subEvent', $event->getSchemaData());
        return $this;
    }

    public function superEvent(Event $event)
    {
        $this->setAttribute('superEvent', $event->getSchemaData());
        return $this;
    }

    public function translator(Person $person)
    {
        $this->setAttribute('translator', $person->getSchemaData());
        return $this;
    }

    public function typicalAgeRange(string $typicalAgeRange)
    {
        $this->setAttribute('typicalAgeRange', $typicalAgeRange);
        return $this;
    }

    public function workFeatured(CreativeWork $creativeWork)
    {
        $this->setAttribute('workFeatured', $creativeWork->getSchemaData());
        return $this;
    }

    public function workPerformed(CreativeWork $creativeWork)
    {
        $this->setAttribute('workPerformed', $creativeWork->getSchemaData());
        return $this;
    }

}
