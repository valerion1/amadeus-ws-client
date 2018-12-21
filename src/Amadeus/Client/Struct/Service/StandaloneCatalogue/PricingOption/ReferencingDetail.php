<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue\PricingOption;

/**
 * Class ReferencingDetailsType
 *
 * To provide reference identification.
 */
class ReferencingDetail
{
    /**
     * @property string $type
     */
    private $type;

    /**
     * @property string $value
     */
    private $value;

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}

