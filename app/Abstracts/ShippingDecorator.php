<?php declare(strict_types=1);


namespace App\Abstracts;


use App\Interfaces\Shipping;

abstract class ShippingDecorator implements Shipping
{
    protected $shipping;

    public function __construct(Shipping $shipping)
    {
        $this->shipping = $shipping;
    }
}