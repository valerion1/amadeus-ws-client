<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue;

use Amadeus\Client\Struct\Pnr\AddMultiElements\DateAndTimeDetails;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\PassengerInfo\FareInformation;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\PassengerInfo\SpecificTraveller;

/**
 * Class PassengerInfoType
 */
class PassengerInfo
{
    /**
     * traveller index
     *
     * @property SpecificTraveller $specificTravellerDetails
     */
    public $specificTravellerDetails;

    /**
     * Passenger Type Code. By default it is ADT (Adult).
     *
     * @property FareInformation $fareInfo
     */
    public $fareInfo;

    /**
     * Usage date/time
     *
     * @property DateAndTimeDetails[] $serviceRequestDateAndTimeInfo
     */
    public $serviceRequestDateAndTimeInfo = [];
}

