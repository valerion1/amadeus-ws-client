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

use Amadeus\Client\RequestOptions\Service\StandaloneCatalogue\SegmentInfo;

/**
 * Service_StandaloneCatalogue Request Options
 *
 * @package Amadeus\Client\RequestOptions
 * @author @todo
 */
class ServiceStandaloneCatalogueOptions extends Base
{

    /**
     * @var array|SegmentInfo[]
     */
    private $segmentInfo;



    private $attributeType;
    private $attributeDescription;
    private $otherCompany;
    private $valueQualifier;
    private $carrier;
    private $fareInfoValueQualifier;

    /**
     * @param SegmentInfo $segmentInfo
     * @return ServiceStandaloneCatalogueOptions
     */
    public function addSegmentInfo(SegmentInfo $segmentInfo)
    {
        $this->segmentInfo[] = $segmentInfo;

        return $this;
    }

    /**
     * @return SegmentInfo[]|array
     */
    public function getSegmentInfo()
    {
        return $this->segmentInfo;
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

    /**
     * @return mixed
     */
    public function getAttributeDescription()
    {
        return $this->attributeDescription;
    }

    /**
     * @param mixed $attributeDescription
     * @return ServiceStandaloneCatalogueOptions
     */
    public function setAttributeDescription($attributeDescription)
    {
        $this->attributeDescription = $attributeDescription;
        return $this;
    }

}
