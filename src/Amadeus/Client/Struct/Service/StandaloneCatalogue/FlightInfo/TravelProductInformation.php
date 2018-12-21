<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue\FlightInfo;

use Amadeus\Client\Struct\Air\PointDetails;

class TravelProductInformation
{
    /**
     * Flight date
     *
     * @property ProductDateTime $flightDate
     */
    public $flightDate;

    /**
     * Board point details
     *
     * @property PointDetails $boardPointDetails
     */
    public $boardPointDetails;

    /**
     * Off point details
     *
     * @property PointDetails $offpointDetails
     */
    public $offpointDetails;

    /**
     * Company details
     *
     * @property CompanyIdentification $companyDetails
     */
    public $companyDetails;

    /**
     * Flight identification
     *
     * @property ProductIdentificationDetail $flightIdentification
     */
    public $flightIdentification;

    /**
     * Flight type details
     *
     * @property string[] $flightTypeDetails
     */
    public $flightTypeDetails = [];

    /**
     * Item number
     *
     * @property int $itemNumber
     */
    public $itemNumber;
}