<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue;

use Amadeus\Client\Struct\Fare\PricePnr13\Currency;
use Amadeus\Client\Struct\Fare\PricePnr13\LocationInformation;
use Amadeus\Client\Struct\Fare\PricePnr13\FormOfPaymentInformation;
use Amadeus\Client\Struct\Fare\PricePnr13\FrequentTravellerDetails;
use Amadeus\Client\Struct\Service\IntegratedPricing\PricingOptionKey;
use Amadeus\Client\Struct\DocRefund\UpdateRefund\DateTimeInformation;
use Amadeus\Client\Struct\Service\IntegratedPricing\TicketInformation;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\PricingOption\ReferencingDetail;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\PricingOption\AttributeInformation;
use Amadeus\Client\Struct\Service\StandaloneCatalogue\PricingOption\TransportIdentifierType;

/**
 * Class PricingOptionAType
 */
class PricingOption
{
    /**
     * the smart name of the option
     *
     * @property PricingOptionKey $pricingOptionKey
     */
    public $pricingOptionKey;

    /**
     * in case the option value takes a free text
     *
     * @property AttributeInformation[]|array $optionDetail
     */
    public $optionDetail = [];

    /**
     * in case the option value takes a carrier code
     *
     * @property TransportIdentifierType $carrierInformation
     */
    public $carrierInformation;

    /**
     * in case the option value takes a currency code
     *
     * @property Currency $currency
     */
    public $currency;

    /**
     * in case the option value takes a date
     *
     * @property DateTimeInformation[]|array $dateInformation
     */
    public $dateInformation = [];

    /**
     * in case the option deals with Frequent Flyer Information
     *
     * @property FrequentTravellerDetails[]|array $frequentFlyerInformation
     */
    public $frequentFlyerInformation = null;

    /**
     * in case the option deals with Form Of Payment
     *
     * @property FormOfPaymentInformation $formOfPaymentInformation
     */
    public $formOfPaymentInformation;

    /**
     * in case the option value takes location code.
     *
     * @property LocationInformation $locationInformation
     */
    public $locationInformation;

    /**
     * in case the option value takes a ticket number.
     *
     * @property TicketInformation $ticketInformation
     */
    public $ticketInformation;

    /**
     * to associate the option to a passenger or a segment.
     *
     * @property ReferencingDetail[]|array $paxSegTstReference
     */
    public $paxSegTstReference;
}

