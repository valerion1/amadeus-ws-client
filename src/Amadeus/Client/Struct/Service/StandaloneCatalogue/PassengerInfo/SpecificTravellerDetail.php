<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue\PassengerInfo;


class SpecificTravellerDetail
{
    /**
     * Reference number
     *
     * @property string $referenceNumber
     */
    public $referenceNumber;

    /**
     * Surname
     *
     * @property string $surname
     */
    public $surname;

    /**
     * First name
     *
     * @property string $firstName
     */
    public $firstName;

    /**
     * SpecificTravellerDetail constructor.
     * @param string $referenceNumber
     * @param string $surname
     * @param string $firstName
     */
    public function __construct($referenceNumber, $surname, $firstName)
    {
        $this->referenceNumber = $referenceNumber;
        $this->surname = $surname;
        $this->firstName = $firstName;
    }
}