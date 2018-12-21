<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue\PricingOption;

/**
 * Class TransportIdentifierType
 *
 * To specify the transport service(s) which is /are to be updated or cancelled
 */
class TransportIdentifierType
{
    /**
     * @property CompanyIdentificationTypeIType $companyIdentification
     */
    private $companyIdentification;

    /**
     * Gets as companyIdentification
     *
     * @return CompanyIdentificationTypeIType
     */
    public function getCompanyIdentification()
    {
        return $this->companyIdentification;
    }

    /**
     * Sets a new companyIdentification
     *
     * @param CompanyIdentificationTypeIType $companyIdentification
     * @return self
     */
    public function setCompanyIdentification(CompanyIdentificationTypeIType $companyIdentification)
    {
        $this->companyIdentification = $companyIdentification;

        return $this;
    }
}

