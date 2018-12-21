<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue;

use Amadeus\Client\Struct\Fare\InformativePricing13\AdditionalSegmentDetails;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\FlightInfo\CommercialAgreements;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\FlightInfo\TravelItineraryInformation;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\FlightInfo\TravelProductInformation;

/**
 * Class representing FlightInfoAType
 */
class FlightInfo
{
    /**
     * Involved flight information
     *
     * @property TravelProductInformation $flightDetails
     */
    public $flightDetails;

    /**
     * @property TravelItineraryInformation $travelItineraryInfo
     */
    public $travelItineraryInfo;

    /**
     * Flight mileage information
     *
     * @property AdditionalSegmentDetails $additionalFlightInfo
     */
    public $additionalFlightInfo;

    /**
     * Convey codeshare Info
     *
     * @property CommercialAgreements $codeshareInfo
     */
    public $codeshareInfo;

    /**
     * FlightInfo constructor.
     * @param TravelProductInformation $flightDetails
     * @param TravelItineraryInformation $travelItineraryInfo
     * @param AdditionalSegmentDetails $additionalFlightInfo
     * @param CommercialAgreements $codeshareInfo
     */
    public function __construct(
        $flightDetails,
        $travelItineraryInfo = null,
        $additionalFlightInfo = null,
        $codeshareInfo = null
    )
    {
        $this->flightDetails = $flightDetails;
        $this->travelItineraryInfo = $travelItineraryInfo;
        $this->additionalFlightInfo = $additionalFlightInfo;
        $this->codeshareInfo = $codeshareInfo;
    }
}

