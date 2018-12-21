<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue\FlightInfo;


class TravelItineraryInformation
{
    /**
     * Cabin designator
     *
     * @property string $cabinDesignator
     */
    private $cabinDesignator;

    /**
     * Product type details
     *
     * @property string[] $productTypeDetails
     */
    private $productTypeDetails = [];

    /**
     * @return mixed
     */
    public function getCabinDesignator()
    {
        return $this->cabinDesignator;
    }

    /**
     * @param mixed $cabinDesignator
     */
    public function setCabinDesignator($cabinDesignator)
    {
        $this->cabinDesignator = $cabinDesignator;
    }

    /**
     * @return mixed
     */
    public function getProductTypeDetails()
    {
        return $this->productTypeDetails;
    }

    /**
     * @param mixed $productTypeDetails
     */
    public function setProductTypeDetails($productTypeDetails)
    {
        $this->productTypeDetails = $productTypeDetails;
    }
}