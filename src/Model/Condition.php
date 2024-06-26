<?php

namespace Jobjen\BolRetailerV10\Model;

use Jobjen\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class Condition extends AbstractModel
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
            'name' => [ 'model' => null, 'enum' => Enum\ConditionName::class, 'array' => false ],
            'category' => [ 'model' => null, 'enum' => Enum\ConditionCategory::class, 'array' => false ],
            'comment' => [ 'model' => null, 'enum' => null, 'array' => false ],
        ];
    }

    /**
     * @var Enum\ConditionName The condition of the offered product.
     */
    public $name;

    /**
     * @var Enum\ConditionCategory The category of the condition. If not given NEW or SECONDHAND is derived from NAME.
     */
    public $category;

    /**
     * @var string The description of the condition of the product. Only allowed if name is not NEW and may not contain
     * e-mail addresses.
     */
    public $comment;
}
