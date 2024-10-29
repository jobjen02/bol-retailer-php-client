<?php

namespace Jobjen\BolRetailerV10\Model;

use Jobjen\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class ProductDestinationsResponse extends AbstractModel
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
            'productDestinations' => [ 'model' => ProductDestination::class, 'enum' => null, 'array' => true ],
        ];
    }

    /**
     * @var ProductDestination[]
     */
    public $productDestinations = [];
}
