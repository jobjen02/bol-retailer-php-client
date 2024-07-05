<?php

namespace Jobjen\BolRetailerV10\Model;

use Jobjen\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class Shipment extends AbstractModel
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
            'shipmentId' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'shipmentDateTime' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'shipmentReference' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'pickupPoint' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'order' => [ 'model' => ShipmentOrder::class, 'enum' => null, 'array' => false ],
            'shipmentDetails' => [ 'model' => ShipmentDetails::class, 'enum' => null, 'array' => false ],
            'billingDetails' => [ 'model' => BillingDetails::class, 'enum' => null, 'array' => false ],
            'shipmentItems' => [ 'model' => ShipmentItem::class, 'enum' => null, 'array' => true ],
            'transport' => [ 'model' => ShipmentTransport::class, 'enum' => null, 'array' => false ],
        ];
    }

    /**
     * @var string A unique identifier for this shipment.
     */
    public $shipmentId;

    /**
     * @var string The date and time in ISO 8601 format when the order item was shipped.
     */
    public $shipmentDateTime;

    /**
     * @var string Reference supplied by the user when this item was shipped.
     */
    public $shipmentReference;

    /**
     * @var bool Indicates whether this order is shipped to a Pick Up Point.
     */
    public $pickupPoint;

    /**
     * @var ShipmentOrder
     */
    public $order;

    /**
     * @var ShipmentDetails The address details where this order needs to be shipped to. This can be the customers' own
     * address, a (company) business address or a Pick Up Point address.
     */
    public $shipmentDetails;

    /**
     * @var BillingDetails The details of the customer that is responsible for the financial fulfillment of this order.
     */
    public $billingDetails;

    /**
     * @var ShipmentItem[]
     */
    public $shipmentItems = [];

    /**
     * @var ShipmentTransport
     */
    public $transport;

    public function getShipmentDateTime(): ?\DateTime
    {
        if (empty($this->shipmentDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->shipmentDateTime);
    }
}
