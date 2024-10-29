<?php

namespace Jobjen\BolRetailerV10\Model;

use Jobjen\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class ReplenishmentResponse extends AbstractModel
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
            'replenishmentId' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'creationDateTime' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'reference' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'labelingByBol' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'state' => [ 'model' => null, 'enum' => Enum\ReplenishmentResponseState::class, 'array' => false ],
            'deliveryInformation' => [ 'model' => DeliveryInformation::class, 'enum' => null, 'array' => false ],
            'pickupAppointment' => [ 'model' => PickupAppointment::class, 'enum' => null, 'array' => false ],
            'numberOfLoadCarriers' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'loadCarriers' => [ 'model' => LoadCarrier::class, 'enum' => null, 'array' => true ],
            'lines' => [ 'model' => ReplenishmentLine::class, 'enum' => null, 'array' => true ],
            'invalidLines' => [ 'model' => InvalidReplenishmentLine::class, 'enum' => null, 'array' => true ],
            'stateTransitions' => [ 'model' => StateTransition::class, 'enum' => null, 'array' => true ],
        ];
    }

    /**
     * @var string The unique identifier of the replenishment.
     */
    public $replenishmentId;

    /**
     * @var string The date and time when this replenishment was created. In ISO 8601 format.
     */
    public $creationDateTime;

    /**
     * @var string Custom user defined reference to identify the replenishment.
     */
    public $reference;

    /**
     * @var bool Indicates whether the replenishment will be labeled by bol.com or not.
     */
    public $labelingByBol;

    /**
     * @var Enum\ReplenishmentResponseState Indicates the state of this replenishment order.
     */
    public $state;

    /**
     * @var DeliveryInformation
     */
    public $deliveryInformation;

    /**
     * @var PickupAppointment
     */
    public $pickupAppointment;

    /**
     * @var int The number of load carriers in this shipment.
     */
    public $numberOfLoadCarriers;

    /**
     * @var LoadCarrier[]
     */
    public $loadCarriers = [];

    /**
     * @var ReplenishmentLine[]
     */
    public $lines = [];

    /**
     * @var InvalidReplenishmentLine[]
     */
    public $invalidLines = [];

    /**
     * @var StateTransition[]
     */
    public $stateTransitions = [];

    public function getCreationDateTime(): ?\DateTime
    {
        if (empty($this->creationDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->creationDateTime);
    }
}
