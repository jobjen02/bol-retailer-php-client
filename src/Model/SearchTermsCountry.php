<?php

namespace Jobjen\BolRetailerV10\Model;

use Jobjen\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class SearchTermsCountry extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'countryCode' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'value' => [ 'model' => null, 'enum' => null, 'array' => false ],
        ];
    }

    /**
     * @var string Countries in which this offer is currently on sale in the webshop in ISO-3166-1 format.
     */
    public $countryCode;

    /**
     * @var int The number of customer visits on the search page.
     */
    public $value;
}
