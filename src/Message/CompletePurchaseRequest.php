<?php

namespace Paytic\Payments\Twispay\Message;

use Paytic\Omnipay\Twispay\Message\CompletePurchaseRequest as AbstractCompletePurchaseRequest;

/**
 * Class PurchaseResponse
 * @package Paytic\Omnipay\Twispay\Message
 */
class CompletePurchaseRequest extends AbstractCompletePurchaseRequest
{
    use Traits\CompletePurchaseTrait;
}
