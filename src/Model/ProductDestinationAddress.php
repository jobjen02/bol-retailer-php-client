<?php

namespace Jobjen\BolRetailerV10\Model;

use Jobjen\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class ProductDestinationAddress extends AbstractModel
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
            'streetName' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'houseNumber' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'zipCode' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'city' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'countryCode' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'attentionOf' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'houseNumberExtension' => [ 'model' => null, 'enum' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The street name of the bol.com warehouse address.
     */
    public $streetName;

    /**
     * @var int The house number of the bol.com warehouse address.
     */
    public $houseNumber;

    /**
     * @var string The zipcode of the bol.com warehouse address.
     */
    public $zipCode;

    /**
     * @var string The city of the bol.com warehouse address.
     */
    public $city;

    /**
     * @var string The ISO 3166-2 country code of the bol.com warehouse address.
     */
    public $countryCode;

    /**
     * @var string Name of the person responsible for this replenishment.
     */
    public $attentionOf;

    /**
     * @var string The house number extension of the bol.com warehouse address.
     */
    public $houseNumberExtension;
}
