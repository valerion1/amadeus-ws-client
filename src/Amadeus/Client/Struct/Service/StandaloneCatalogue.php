<?php

namespace Amadeus\Client\Struct\Service;

use Amadeus\Client\RequestOptions\Service\StandaloneCatalogue\SegmentInfo;
use Amadeus\Client\RequestOptions\ServiceStandaloneCatalogueOptions;
use Amadeus\Client\Struct\Air\PointDetails;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Service\IntegratedPricing\PricingOptionKey;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\FlightInfo;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\FlightInfo\CompanyIdentification;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\FlightInfo\ProductDateTime;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\FlightInfo\ProductIdentificationDetail;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\FlightInfo\TravelProductInformation;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\PassengerInfo;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\PassengerInfo\FareInformation;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\PassengerInfo\SpecificTraveller;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\PassengerInfo\SpecificTravellerDetail;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\PricingOption;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\PricingOption\AttributeInformation;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\ServiceRequestDetail;

/**
 * Class StandaloneCatalogue
 * @package Amadeus\Client\Struct\Service
 */
class StandaloneCatalogue extends BaseWsMessage
{
    /**
     * @var PassengerInfo[]|array
     */
    private $passengerInfoGroup = [];

    /**
     * @var FlightInfo[]|array
     */
    private $flightInfo = [];

    /**
     * @var ServiceRequestDetail[]|array
     */
    private $feeDetailsInfoGroup = [];

    /**
     * @var PricingOption[]|array
     */
    private $pricingOption = [];

    public function __construct(ServiceStandaloneCatalogueOptions $options)
    {
//        $travelProductInformation = new TravelProductInformation();
//        $travelProductInformation->boardPointDetails = new PointDetails($options->getBoardPointDetailsTrueLocationId());
//        $travelProductInformation->offpointDetails = new PointDetails($options->getOffPointDetailsTrueLocationId());
//        $travelProductInformation->flightDate = new ProductDateTime($options->getDepartureDate(), $options->getDepartureTime());
//        $travelProductInformation->flightIdentification = new ProductIdentificationDetail($options->getFlightNumber(), $options->getBookingClass());
//        $travelProductInformation->companyDetails = new CompanyIdentification($options->getMarketingCompany(), $options->getOperatingCompany());
//        $travelProductInformation->flightTypeDetails[] = $options->getFlightIndicator();
//        $travelProductInformation->itemNumber = 1;

        $pricingOption = new PricingOption();
        $pricingOption->pricingOptionKey = new PricingOptionKey('FAR');
        $pricingOption->optionDetail[] = new AttributeInformation($options->getAttributeType(), $options->getAttributeDescription());

//        $flightInfo = new FlightInfo($travelProductInformation);


        $passengerInfo = new PassengerInfo();
        $passengerInfo->fareInfo = new FareInformation($options->getFareInfoValueQualifier());
        $passengerInfo->specificTravellerDetails = new SpecificTraveller(new SpecificTravellerDetail('1'));


        $this->flightInfo = $this->buildFlightInfo($options);
        $this->pricingOption[] = $pricingOption;
        $this->passengerInfoGroup[] = $passengerInfo;
    }

    public function buildFlightInfo(ServiceStandaloneCatalogueOptions $options)
    {
        $flightInfo = [];

        /** @var SegmentInfo $segmentInfo */
        foreach ($options->getSegmentInfo() as $key => $segmentInfo) {
            $travelProductInformation = new TravelProductInformation();
            $travelProductInformation->boardPointDetails = new PointDetails($segmentInfo->getBoardPointDetailsTrueLocationId());
            $travelProductInformation->offpointDetails = new PointDetails($segmentInfo->getOffPointDetailsTrueLocationId());
            $travelProductInformation->flightDate = new ProductDateTime($segmentInfo->getDepartureDate(), $segmentInfo->getDepartureTime());
            $travelProductInformation->flightIdentification = new ProductIdentificationDetail($segmentInfo->getFlightNumber(), $segmentInfo->getBookingClass());
            $travelProductInformation->companyDetails = new CompanyIdentification($segmentInfo->getMarketingCompany(), $segmentInfo->getOperatingCompany());
            $travelProductInformation->flightTypeDetails[] = $segmentInfo->getFlightIndicator();
            $travelProductInformation->itemNumber = $key + 1;

            $flightInfo[] = new FlightInfo($travelProductInformation);
        }

        return $flightInfo;
    }
}