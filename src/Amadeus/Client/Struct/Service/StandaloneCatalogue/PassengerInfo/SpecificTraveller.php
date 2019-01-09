<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue\PassengerInfo;


class SpecificTraveller
{
    /**
     * Traveller details
     *
     * @property SpecificTravellerDetail $travellerDetails
     */
    public $travellerDetails;

    /**
     * SpecificTraveller constructor.
     * @param SpecificTravellerDetail $travellerDetails
     */
    public function __construct($travellerDetails)
    {
        $this->travellerDetails = $travellerDetails;
    }
}