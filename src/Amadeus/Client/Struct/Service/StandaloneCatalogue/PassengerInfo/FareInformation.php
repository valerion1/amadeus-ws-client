<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue\PassengerInfo;


class FareInformation
{
    /**
     * Passenger Type Code
     *
     * @property string $valueQualifier
     */
    public $valueQualifier;

    /**
     * FareInformation constructor.
     * @param string $valueQualifier
     */
    public function __construct($valueQualifier)
    {
        $this->valueQualifier = $valueQualifier;
    }
}