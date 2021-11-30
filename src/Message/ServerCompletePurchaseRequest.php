<?php

namespace Paytic\Payments\Twispay\Message;

use Paytic\Omnipay\Twispay\Message\ServerCompletePurchaseRequest as AbstractServerCompletePurchaseRequest;

/**
 * Class ServerCompletePurchaseRequest
 * @package Paytic\Omnipay\Twispay\Message
 */
class ServerCompletePurchaseRequest extends AbstractServerCompletePurchaseRequest
{
    use Traits\CompletePurchaseTrait;
}
