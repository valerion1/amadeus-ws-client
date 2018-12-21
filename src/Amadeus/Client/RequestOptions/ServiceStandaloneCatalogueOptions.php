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

namespace Amadeus\Client\RequestOptions;

/**
 * Service_StandaloneCatalogue Request Options
 *
 * @package Amadeus\Client\RequestOptions
 * @author @todo
 */
class ServiceStandaloneCatalogueOptions extends Base
{
    private $boardPointDetailsTrueLocationId;
    private $offPointDetailsTrueLocationId;
    private $departureDate;
    private $departureTime;
    private $flightNumber;
    private $bookingClass;
    private $marketingCompany;
    private $operatingCompany;
    private $flightIndicator;
    private $attributeType;
    private $otherCompany;
    private $valueQualifier;
    private $carrier;
    private $fareInfoValueQualifier;

    /**
     * @return mixed
     */
    public function getBoardPointDetailsTrueLocationId()
    {
        return $this->boardPointDetailsTrueLocationId;
    }

    /**
     * @param mixed $boardPointDetailsTrueLocationId
     * @return ServiceStandaloneCatalogueOptions
     */
    public function setBoardPointDetailsTrueLocationId($boardPointDetailsTrueLocationId)
    {
        $this->boardPointDetailsTrueLocationId = $boardPointDetailsTrueLocationId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOffPointDetailsTrueLocationId()
    {
        return $this->offPointDetailsTrueLocationId;
    }

    /**
     * @param mixed $offPointDetailsTrueLocationId
     * @return ServiceStandaloneCatalogueOptions
     */
    public function setOffPointDetailsTrueLocationId($offPointDetailsTrueLocationId)
    {
        $this->offPointDetailsTrueLocationId = $offPointDetailsTrueLocationId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @param mixed $departureDate
     * @return ServiceStandaloneCatalogueOptions
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    /**
     * @param mixed $departureTime
     * @return ServiceStandaloneCatalogueOptions
     */
    public function setDepartureTime($departureTime)
    {
        $this->departureTime = $departureTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * @param mixed $flightNumber
     * @return ServiceStandaloneCatalogueOptions
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBookingClass()
    {
        return $this->bookingClass;
    }

    /**
     * @param mixed $bookingClass
     * @return ServiceStandaloneCatalogueOptions
     */
    public function setBookingClass($bookingClass)
    {
        $this->bookingClass = $bookingClass;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMarketingCompany()
    {
        return $this->marketingCompany;
    }

    /**
     * @param mixed $marketingCompany
     * @return ServiceStandaloneCatalogueOptions
     */
    public function setMarketingCompany($marketingCompany)
    {
        $this->marketingCompany = $marketingCompany;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOperatingCompany()
    {
        return $this->operatingCompany;
    }

    /**
     * @param mixed $operatingCompany
     * @return ServiceStandaloneCatalogueOptions
     */
    public function setOperatingCompany($operatingCompany)
    {
        $this->operatingCompany = $operatingCompany;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFlightIndicator()
    {
        return $this->flightIndicator;
    }

    /**
     * @param mixed $flightIndicator
     * @return ServiceStandaloneCatalogueOptions
     */
    public function setFlightIndicator($flightIndicator)
    {
        $this->flightIndicator = $flightIndicator;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttributeType()
    {
        return $this->attributeType;
    }

    /**
     * @param mixed $attributeType
     * @return ServiceStandaloneCatalogueOptions
     */
    public function setAttributeType($attributeType)
    {
        $this->attributeType = $attributeType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOtherCompany()
    {
        return $this->otherCompany;
    }

    /**
     * @param mixed $otherCompany
     * @return ServiceStandaloneCatalogueOptions
     */
    public function setOtherCompany($otherCompany)
    {
        $this->otherCompany = $otherCompany;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValueQualifier()
    {
        return $this->valueQualifier;
    }

    /**
     * @param mixed $valueQualifier
     * @return ServiceStandaloneCatalogueOptions
     */
    public function setValueQualifier($valueQualifier)
    {
        $this->valueQualifier = $valueQualifier;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param mixed $carrier
     * @return ServiceStandaloneCatalogueOptions
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFareInfoValueQualifier()
    {
        return $this->fareInfoValueQualifier;
    }

    /**
     * @param mixed $fareInfoValueQualifier
     * @return ServiceStandaloneCatalogueOptions
     */
    public function setFareInfoValueQualifier($fareInfoValueQualifier)
    {
        $this->fareInfoValueQualifier = $fareInfoValueQualifier;
        return $this;
    }

}
