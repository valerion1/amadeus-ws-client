<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue\FlightInfo;

/**
 * Class ProductDateTimeType
 *
 * To specify the dates and times associated with a product.
 */
class ProductDateTime
{
    /**
     * Departure date
     *
     * @property string $departureDate
     */
    public $departureDate;

    /**
     * Departure time
     *
     * @property string $departureTime
     */
    public $departureTime;

    /**
     * Arrival date
     *
     * @property string $arrivalDate
     */
    public $arrivalDate;

    /**
     * Arrival time
     *
     * @property string $arrivalTime
     */
    public $arrivalTime;

    /**
     * ProductDateTime constructor.
     * @param $departureDate
     * @param $departureTime
     * @param $arrivalDate
     * @param $arrivalTime
     */
    public function __construct($departureDate, $departureTime, $arrivalDate = null, $arrivalTime = null)
    {
        $this->departureDate = $departureDate;
        $this->departureTime = $departureTime;
        $this->arrivalDate = $arrivalDate;
        $this->arrivalTime = $arrivalTime;
    }

}

