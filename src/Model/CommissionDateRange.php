<?php

namespace Jobjen\BolRetailerV10\Model;

use Jobjen\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class CommissionDateRange extends AbstractModel
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
            'startDate' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'endDate' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'rates' => [ 'model' => CommissionDateRate::class, 'enum' => null, 'array' => true ],
        ];
    }

    /**
     * @var string The inclusive start date (in ISO 8601 format) from which the commission applies
     */
    public $startDate;

    /**
     * @var string The exclusive end date (in ISO 8601 format) after which the commission no longer applies.
     */
    public $endDate;

    /**
     * @var CommissionDateRate[] An array of objects, each describing commission rates for a specific condition.
     */
    public $rates = [];
}
