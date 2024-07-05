<?php

namespace Jobjen\BolRetailerV10\Model;

use Jobjen\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class ProductListFiltersResponse extends AbstractModel
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
            'categoryData' => [ 'model' => Categories::class, 'enum' => null, 'array' => false ],
            'filterRanges' => [ 'model' => FilterRanges::class, 'enum' => null, 'array' => true ],
            'filters' => [ 'model' => Filters::class, 'enum' => null, 'array' => true ],
        ];
    }

    /**
     * @var Categories The list of categories that are available to further narrow down search results, for the given
     * search term and category.
     */
    public $categoryData;

    /**
     * @var FilterRanges[] The list of range filters that is associated with the given search term or category.
     */
    public $filterRanges = [];

    /**
     * @var Filters[] The list of filters that is associated with the given search term or category.
     */
    public $filters = [];
}
