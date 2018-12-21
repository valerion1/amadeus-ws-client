<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Service;

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
        $travelProductInformation = new TravelProductInformation();
        $travelProductInformation->boardPointDetails = new PointDetails($options->getBoardPointDetailsTrueLocationId());
        $travelProductInformation->offpointDetails = new PointDetails($options->getOffPointDetailsTrueLocationId());
        $travelProductInformation->flightDate = new ProductDateTime($options->getDepartureDate(), $options->getDepartureTime());
        $travelProductInformation->flightIdentification = new ProductIdentificationDetail($options->getFlightNumber(), $options->getBookingClass());
        $travelProductInformation->companyDetails = new CompanyIdentification($options->getMarketingCompany(), $options->getOperatingCompany());
        $travelProductInformation->flightTypeDetails[] = $options->getFlightIndicator();

        $pricingOption = new PricingOption();
        $pricingOption->pricingOptionKey = new PricingOptionKey(PricingOptionKey::OVERRIDE_NO_OPTION);
        $pricingOption->optionDetail[] = new AttributeInformation($options->getAttributeType());

        $flightInfo = new FlightInfo($travelProductInformation);


        $passengerInfo = new PassengerInfo();
        $passengerInfo->fareInfo = new FareInformation($options->getFareInfoValueQualifier());
        $passengerInfo->specificTravellerDetails = new SpecificTraveller([ new SpecificTravellerDetail('1', '2', '3') ]);


        $this->flightInfo[] = $flightInfo;
        $this->pricingOption[] = $pricingOption;
        $this->passengerInfoGroup[] = $passengerInfo;
    }

    /**
     * @return PassengerInfo[]|array
     */
    public function getPassengerInfoGroup()
    {
        return $this->passengerInfoGroup;
    }

    /**
     * @param PassengerInfo $passengerInfoGroup
     * @return StandaloneCatalogue
     */
    public function addPassengerInfoGroup($passengerInfoGroup)
    {
        $this->passengerInfoGroup[] = $passengerInfoGroup;

        return $this;
    }

    /**
     * @return FlightInfo[]|array
     */
    public function getFlightInfo()
    {
        return $this->flightInfo;
    }

    /**
     * @param FlightInfo $flightInfo
     * @return StandaloneCatalogue
     */
    public function addFlightInfo($flightInfo)
    {
        $this->flightInfo[] = $flightInfo;

        return $this;
    }

    /**
     * @return ServiceRequestDetail[]|array
     */
    public function getFeeDetailsInfoGroup()
    {
        return $this->feeDetailsInfoGroup;
    }

    /**
     * @param ServiceRequestDetail $feeDetailsInfoGroup
     * @return StandaloneCatalogue
     */
    public function addFeeDetailsInfoGroup($feeDetailsInfoGroup)
    {
        $this->feeDetailsInfoGroup[] = $feeDetailsInfoGroup;

        return $this;
    }

    /**
     * @return PricingOption[]|array
     */
    public function getPricingOption()
    {
        return $this->pricingOption;
    }

    /**
     * @param PricingOption $pricingOption
     * @return StandaloneCatalogue
     */
    public function setPricingOption($pricingOption)
    {
        $this->pricingOption[] = $pricingOption;

        return $this;
    }
}