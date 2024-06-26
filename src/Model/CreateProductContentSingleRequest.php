<?php

namespace Jobjen\BolRetailerV10\Model;

use Jobjen\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class CreateProductContentSingleRequest extends AbstractModel
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
            'language' => [ 'model' => null, 'enum' => Enum\CreateProductContentSingleRequestLanguage::class, 'array' => false ],
            'attributes' => [ 'model' => Attribute::class, 'enum' => null, 'array' => true ],
            'assets' => [ 'model' => Asset::class, 'enum' => null, 'array' => true ],
        ];
    }

    /**
     * @var Enum\CreateProductContentSingleRequestLanguage The language in which content is submitted.
     */
    public $language;

    /**
     * @var Attribute[] A list of attributes. Every content update request should have one "EAN" attribute to link
     * changes to a proper product.
     */
    public $attributes = [];

    /**
     * @var Asset[]
     */
    public $assets = [];
}
