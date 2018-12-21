<?php

namespace Amadeus\Client\Struct\Service\StandaloneCatalogue\PricingOption;

/**
 * Class AttributeInformationTypeUType
 *
 * To identify the type of attribute and the attribute
 */
class AttributeInformation
{
    /**
     * Used for attribute value rather than attributeType
     *
     * @property string $attributeType
     */
    public $attributeType;

    /**
     * @property string|null $attributeDescription
     */
    public $attributeDescription;

    /**
     * AttributeInformationTypeUType constructor.
     * @param $attributeType
     * @param $attributeDescription
     */
    public function __construct($attributeType, $attributeDescription = null)
    {
        $this->attributeType = $attributeType;
        $this->attributeDescription = $attributeDescription;
    }
}

