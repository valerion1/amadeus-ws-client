<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue\PassengerInfo;


class SpecificTraveller
{
    /**
     * Traveller details
     *
     * @property SpecificTravellerDetail|array $travellerDetails
     */
    public $travellerDetails;

    /**
     * SpecificTraveller constructor.
     * @param $travellerDetails
     */
    public function __construct($travellerDetails)
    {
        $this->travellerDetails = $travellerDetails;
    }
}