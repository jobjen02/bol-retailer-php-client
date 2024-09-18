<?php

namespace Picqer\BolRetailerV10\Model;

use Picqer\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class ProductCategory extends AbstractModel
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
            'categoryName' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'order' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'subcategories' => [ 'model' => ProductCategory::class, 'enum' => null, 'array' => true ],
        ];
    }

    /**
     * @var string The id of the category.
     */
    public $categoryId;

    /**
     * @var string The name of the category.
     */
    public $categoryName;

    /**
     * @var int The order of the category in the tree.
     */
    public $order;

    /**
     * @var ProductCategory[] A list of product subcategories and its children.
     */
    public $subcategories = [];
}
