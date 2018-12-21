<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue\FlightInfo;


class CompanyIdentification
{
    /**
     * Marketing company
     *
     * @property string $marketingCompany
     */
    public $marketingCompany;

    /**
     * Operating company
     *
     * @property string $operatingCompany
     */
    public $operatingCompany;

    /**
     * Other company
     *
     * @property string|null $otherCompany
     */
    public $otherCompany;

    /**
     * CompanyIdentification constructor.
     * @param $marketingCompany
     * @param $operatingCompany
     * @param $otherCompany
     */
    public function __construct($marketingCompany, $operatingCompany, $otherCompany = null)
    {
        $this->marketingCompany = $marketingCompany;
        $this->operatingCompany = $operatingCompany;
        $this->otherCompany = $otherCompany;
    }
}