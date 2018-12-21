<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue;

/**
 * Class representing PricingOrTicketingSubsequentType
 *
 * To convey additional information related to a ticket.
 * XSD Type: PricingOrTicketingSubsequentType
 */
class PricingOrTicketingSubsequent
{
    /**
     * Item number
     *
     * @property int $itemNumber
     */
    private $itemNumber;

    /**
     * Price type
     *
     * @property string $priceType
     */
    private $priceType;

    /**
     * RFIC Reason For Issuance Code
     *
     * @property string $specialCondition
     */
    private $specialCondition;

    /**
     * RFISC Reason For Issuance Sub Code
     *
     * @property string $otherSpecialCondition
     */
    private $otherSpecialCondition;

    /**
     * Additional special condition
     *
     * @property string $additionalSpecialCondition
     */
    private $additionalSpecialCondition;

    /**
     * Gets as itemNumber
     *
     * @return int
     */
    public function getItemNumber()
    {
        return $this->itemNumber;
    }

    /**
     * Sets a new itemNumber
     *
     * @param int $itemNumber
     * @return self
     */
    public function setItemNumber($itemNumber)
    {
        $this->itemNumber = $itemNumber;

        return $this;
    }

    /**
     * Gets as priceType
     *
     * @return string
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Sets a new priceType
     *
     * @param string $priceType
     * @return self
     */
    public function setPriceType($priceType)
    {
        $this->priceType = $priceType;

        return $this;
    }

    /**
     * Gets as specialCondition
     * RFIC Reason For Issuance Code
     *
     * @return string
     */
    public function getSpecialCondition()
    {
        return $this->specialCondition;
    }

    /**
     * Sets a new specialCondition
     * RFIC Reason For Issuance Code
     *
     * @param string $specialCondition
     * @return self
     */
    public function setSpecialCondition($specialCondition)
    {
        $this->specialCondition = $specialCondition;

        return $this;
    }

    /**
     * Gets as otherSpecialCondition
     * RFISC Reason For Issuance Sub Code
     *
     * @return string
     */
    public function getOtherSpecialCondition()
    {
        return $this->otherSpecialCondition;
    }

    /**
     * Sets a new otherSpecialCondition
     * RFISC Reason For Issuance Sub Code
     *
     * @param string $otherSpecialCondition
     * @return self
     */
    public function setOtherSpecialCondition($otherSpecialCondition)
    {
        $this->otherSpecialCondition = $otherSpecialCondition;

        return $this;
    }

    /**
     * Gets as additionalSpecialCondition
     *
     * Additional special condition
     *
     * @return string
     */
    public function getAdditionalSpecialCondition()
    {
        return $this->additionalSpecialCondition;
    }

    /**
     * Sets a new additionalSpecialCondition
     * Additional special condition
     *
     * @param string $additionalSpecialCondition
     * @return self
     */
    public function setAdditionalSpecialCondition($additionalSpecialCondition)
    {
        $this->additionalSpecialCondition = $additionalSpecialCondition;

        return $this;
    }


}

