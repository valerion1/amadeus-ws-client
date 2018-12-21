<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue\FlightInfo;


class CommercialAgreements
{
    /**
     * @property CompanyIdentification $codeshareDetails
     */
    private $codeshareDetails;

    /**
     * @property CompanyIdentification[]|array $otherCodeshareDetails
     */
    private $otherCodeshareDetails = [];

    /**
     * @return mixed
     */
    public function getCodeshareDetails()
    {
        return $this->codeshareDetails;
    }

    /**
     * @param mixed $codeshareDetails
     */
    public function setCodeshareDetails($codeshareDetails)
    {
        $this->codeshareDetails = $codeshareDetails;
    }

    /**
     * @return mixed
     */
    public function getOtherCodeshareDetails()
    {
        return $this->otherCodeshareDetails;
    }

    /**
     * @param mixed $otherCodeshareDetails
     */
    public function setOtherCodeshareDetails($otherCodeshareDetails)
    {
        $this->otherCodeshareDetails = $otherCodeshareDetails;
    }
}