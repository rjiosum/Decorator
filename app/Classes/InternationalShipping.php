<?php declare(strict_types=1);


namespace App\Classes;


use App\Abstracts\ShippingDecorator;

class InternationalShipping extends ShippingDecorator
{
    const PRICE = 10;

    public function calculatePrice(): int
    {
        return $this->shipping->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->shipping->getDescription() . ' shipped to an international destination';
    }
}