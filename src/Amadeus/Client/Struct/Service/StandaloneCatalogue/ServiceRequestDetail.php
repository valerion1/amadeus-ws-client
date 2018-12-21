<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue;

use Amadeus\Client\Struct\Service\StandaloneCatalogue\PricingOption\ReferencingDetail;

/**
 * Class ServiceRequestDetailsType
 *
 *
 * XSD Type: ServiceRequestDetailsType
 */
class ServiceRequestDetail
{
    /**
     * identification key
     *
     * @property PricingOrTicketingSubsequent $identifier
     */
    private $identifier;

    /**
     * Service request reference info
     *
     * @property ReferencingDetail $serviceRequestReferenceInfo
     */
    private $serviceRequestReferenceInfo;

    /**
     * @return PricingOrTicketingSubsequent|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param PricingOrTicketingSubsequent $identifier
     * @return ServiceRequestDetail
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * @return ReferencingDetail|null
     */
    public function getServiceRequestReferenceInfo()
    {
        return $this->serviceRequestReferenceInfo;
    }

    /**
     * @param ReferencingDetail $serviceRequestReferenceInfo
     * @return ServiceRequestDetail
     */
    public function setServiceRequestReferenceInfo($serviceRequestReferenceInfo)
    {
        $this->serviceRequestReferenceInfo = $serviceRequestReferenceInfo;

        return $this;
    }
}

