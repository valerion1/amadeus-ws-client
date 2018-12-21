<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue\PricingOption;

/**
 * Class representing CompanyIdentificationTypeIType
 *
 * Code or name to identify a company and any associated companies.
 */
class CompanyIdentificationTypeIType
{
    /**
     * @property string $otherCompany
     */
    private $otherCompany;

    /**
     * Gets as otherCompany
     *
     * @return string
     */
    public function getOtherCompany()
    {
        return $this->otherCompany;
    }

    /**
     * Sets a new otherCompany
     *
     * @param string $otherCompany
     * @return self
     */
    public function setOtherCompany($otherCompany)
    {
        $this->otherCompany = $otherCompany;

        return $this;
    }
}

