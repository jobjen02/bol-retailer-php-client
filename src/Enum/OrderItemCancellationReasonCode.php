<?php

namespace Jobjen\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
enum OrderItemCancellationReasonCode: string
{
    case OUT_OF_STOCK = 'OUT_OF_STOCK';
    case REQUESTED_BY_CUSTOMER = 'REQUESTED_BY_CUSTOMER';
    case BAD_CONDITION = 'BAD_CONDITION';
    case HIGHER_SHIPCOST = 'HIGHER_SHIPCOST';
    case INCORRECT_PRICE = 'INCORRECT_PRICE';
    case NOT_AVAIL_IN_TIME = 'NOT_AVAIL_IN_TIME';
    case NO_BOL_GUARANTEE = 'NO_BOL_GUARANTEE';
    case ORDERED_TWICE = 'ORDERED_TWICE';
    case RETAIN_ITEM = 'RETAIN_ITEM';
    case TECH_ISSUE = 'TECH_ISSUE';
    case UNFINDABLE_ITEM = 'UNFINDABLE_ITEM';
    case OTHER = 'OTHER';
}
