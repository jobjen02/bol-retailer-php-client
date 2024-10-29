<?php

namespace Jobjen\BolRetailerV10\Model;

use Jobjen\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class Violation extends AbstractModel
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
            'name' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'reason' => [ 'model' => null, 'enum' => null, 'array' => false ],
        ];
    }

    /**
     * @var string Describes the origin of the error, for instance a field or query parameter validation error.
     */
    public $name;

    /**
     * @var string Detailed description of the validation error that caused the problem.
     */
    public $reason;
}
