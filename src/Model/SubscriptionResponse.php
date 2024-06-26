<?php

namespace Jobjen\BolRetailerV10\Model;

use Jobjen\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class SubscriptionResponse extends AbstractModel
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
            'id' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'resources' => [ 'model' => null, 'enum' => null, 'array' => true ],
            'url' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'subscriptionType' => [ 'model' => null, 'enum' => Enum\SubscriptionResponseSubscriptionType::class, 'array' => false ],
            'enabled' => [ 'model' => null, 'enum' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The unique identifier assigned to each event notification subscription. This ID is used for tracking
     * and managing each subscription.
     */
    public $id;

    /**
     * @var array
     */
    public $resources = [];

    /**
     * @var string The destination for event notifications. For WEBHOOK subscription types, this is the URL where
     * messages are posted to. For GCP_PUBSUB, this is the topic name.
     */
    public $url;

    /**
     * @var Enum\SubscriptionResponseSubscriptionType The type of subscription. It indicates the platform where the
     * events will be subscribed to. Be aware that certain event types are only available for specific types.
     */
    public $subscriptionType;

    /**
     * @var bool Whether the subscription is enabled and will receive notifications or not. Defaults to true.
     */
    public $enabled;
}
