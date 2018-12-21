<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue\FlightInfo;


class ProductIdentificationDetail
{
    /**
     * Flight number
     *
     * @property string $flightNumber
     */
    public $flightNumber;

    /**
     * Booking class
     *
     * @property string $bookingClass
     */
    public $bookingClass;

    /**
     * ProductIdentificationDetail constructor.
     * @param $flightNumber
     * @param $bookingClass
     */
    public function __construct($flightNumber, $bookingClass)
    {
        $this->flightNumber = $flightNumber;
        $this->bookingClass = $bookingClass;
    }

}