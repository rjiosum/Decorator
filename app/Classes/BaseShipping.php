<?php declare(strict_types=1);


namespace App\Classes;


use App\Interfaces\Shipping;

class BaseShipping implements Shipping
{
    private $price;
    private $description;

    public function __construct(int $price, string $description)
    {
        $this->price = $price;
        $this->description = $description;
    }

    public function calculatePrice(): int
    {
        return $this->price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}