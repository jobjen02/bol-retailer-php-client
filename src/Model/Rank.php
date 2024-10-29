<?php

namespace Jobjen\BolRetailerV10\Model;

use Jobjen\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class Rank extends AbstractModel
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
            'categoryId' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'searchTerm' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'wasSponsored' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'rank' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'impressions' => [ 'model' => null, 'enum' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The ID of the category to which the product belongs.
     */
    public $categoryId;

    /**
     * @var string Search term related to the rank.
     */
    public $searchTerm;

    /**
     * @var bool Indicator if the product is sponsored or not.
     */
    public $wasSponsored;

    /**
     * @var int The rank of the product in the category or search page.
     */
    public $rank;

    /**
     * @var int Number of impressions of the product.
     */
    public $impressions;
}
