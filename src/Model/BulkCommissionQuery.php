<?php

namespace Jobjen\BolRetailerV10\Model;

use Jobjen\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class BulkCommissionQuery extends AbstractModel
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
            'ean' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'condition' => [ 'model' => null, 'enum' => Enum\BulkCommissionQueryCondition::class, 'array' => false ],
            'unitPrice' => [ 'model' => null, 'enum' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The EAN number associated with this product.
     */
    public $ean;

    /**
     * @var Enum\BulkCommissionQueryCondition The condition of the offer.
     */
    public $condition;

    /**
     * @var float The price of the product with a period as a decimal separator. The price should always have two
     * decimals precision.
     */
    public $unitPrice;
}
