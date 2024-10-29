<?php

namespace Jobjen\BolRetailerV10\Model;

use Jobjen\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class CustomerDetails extends AbstractModel
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
            'salutation' => [ 'model' => null, 'enum' => Enum\CustomerDetailsSalutation::class, 'array' => false ],
            'firstName' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'surname' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'streetName' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'houseNumber' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'houseNumberExtension' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'extraAddressInformation' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'zipCode' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'city' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'countryCode' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'email' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'deliveryPhoneNumber' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'company' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'vatNumber' => [ 'model' => null, 'enum' => null, 'array' => false ],
        ];
    }

    /**
     * @var Enum\CustomerDetailsSalutation The salutation of the customer.
     */
    public $salutation;

    /**
     * @var string The first name of the customer.
     */
    public $firstName;

    /**
     * @var string The surname of the customer.
     */
    public $surname;

    /**
     * @var string The street name.
     */
    public $streetName;

    /**
     * @var string The house number.
     */
    public $houseNumber;

    /**
     * @var string The extension on the house number.
     */
    public $houseNumberExtension;

    /**
     * @var string Additional information related to the address that helps in delivering the package.
     */
    public $extraAddressInformation;

    /**
     * @var string The ZIP code in '1234AB' format for NL orders and '0000' format for BE orders.
     */
    public $zipCode;

    /**
     * @var string The name of the city.
     */
    public $city;

    /**
     * @var string The country code.
     */
    public $countryCode;

    /**
     * @var string A scrambled email address that can be used to contact the customer.
     */
    public $email;

    /**
     * @var string The delivery phone number of the customer. Filled in case the order requires an appointment for
     * delivering the goods.
     */
    public $deliveryPhoneNumber;

    /**
     * @var string The company name.
     */
    public $company;

    /**
     * @var string The Value Added Tax (VAT) / BTW number for business sellers situated in the Netherlands.
     */
    public $vatNumber;
}
